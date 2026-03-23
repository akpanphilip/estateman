<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Developer;
use App\Models\Estate;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    // List all developers
    public function developerIndex()
    {
        $developers = Developer::latest()->paginate(10);
        return view('admin.developers.index', compact('developers'));
    }

    // Show create form
    public function developerCreate()
    {
        return view('admin.developers.create');
    }

    // Store new developer
    public function developerStore(Request $request)
    {
        $validated = $request->validate([
            'name'        => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'logo'        => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
            'is_active'   => ['nullable', 'boolean'],
        ]);

        // Handle logo upload
        if ($request->hasFile('logo')) {
            $validated['logo'] = $request->file('logo')->store('developers', 'public');
        }

        // Generate slug from name
        $validated['slug'] = Str::slug($request->name);

        // is_active defaults to true if checkbox not checked
        $validated['is_active'] = $request->boolean('is_active', true);

        Developer::create($validated);

        return redirect()->route('admin.developers.index')
            ->with('success', 'Developer created successfully!');
    }

    // Show edit form
    public function developerEdit(Developer $developer)
    {
        return view('admin.developers.edit', compact('developer'));
    }

    // Update developer
    public function developerUpdate(Request $request, Developer $developer)
    {
        $validated = $request->validate([
            'name'        => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'logo'        => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
            'is_active'   => ['nullable', 'boolean'],
        ]);

        // Handle logo upload — delete old one first
        if ($request->hasFile('logo')) {
            if ($developer->logo) {
                Storage::disk('public')->delete($developer->logo);
            }
            $validated['logo'] = $request->file('logo')->store('developers', 'public');
        }

        $validated['slug'] = Str::slug($request->name);
        $validated['is_active'] = $request->boolean('is_active', true);

        $developer->update($validated);

        return redirect()->route('admin.developers.index')
            ->with('success', 'Developer updated successfully!');
    }

    // Delete developer
    public function developerDelete(Developer $developer)
    {
        // Delete logo from storage
        if ($developer->logo) {
            Storage::disk('public')->delete($developer->logo);
        }

        $developer->delete();

        return redirect()->route('admin.developers.index')
            ->with('success', 'Developer deleted successfully!');
    }

    // ==================
    // ESTATE SECTION
    // ==================

    public function estateIndex()
    {
        $estates = Estate::with('developer')->latest()->paginate(10);
        $developers = Developer::where('is_active', true)->get();
        return view('admin.estates.index', compact('estates', 'developers'));
    }
    public function estateCreate()
    {
        $developers = Developer::where('is_active', true)->get();
        return view('admin.estates.create', compact('developers'));
    }

    public function estateStore(Request $request)
    {
        $validated = $request->validate([
            'developer_id' => ['required', 'exists:developers,id'],
            'name'         => ['required', 'string', 'max:255'],
            'location'     => ['nullable', 'string', 'max:255'],
            'description'  => ['nullable', 'string'],
            'image'        => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
            'is_active'    => ['nullable', 'boolean'],
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('estates', 'public');
        }

        $validated['slug'] = Str::slug($request->name);
        $validated['is_active'] = $request->boolean('is_active', true);

        Estate::create($validated);

        return redirect()->route('admin.estates.index')
            ->with('success', 'Estate created successfully!');
    }

    public function estateUpdate(Request $request, Estate $estate)
    {
        $validated = $request->validate([
            'developer_id' => ['required', 'exists:developers,id'],
            'name'         => ['required', 'string', 'max:255'],
            'location'     => ['nullable', 'string', 'max:255'],
            'description'  => ['nullable', 'string'],
            'image'        => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
            'is_active'    => ['nullable', 'boolean'],
        ]);

        if ($request->hasFile('image')) {
            if ($estate->image) {
                Storage::disk('public')->delete($estate->image);
            }
            $validated['image'] = $request->file('image')->store('estates', 'public');
        }

        $validated['slug'] = Str::slug($request->name);
        $validated['is_active'] = $request->boolean('is_active', true);

        $estate->update($validated);

        return redirect()->route('admin.estates.index')
            ->with('success', 'Estate updated successfully!');
    }

    public function estateDelete(Estate $estate)
    {
        if ($estate->image) {
            Storage::disk('public')->delete($estate->image);
        }

        $estate->delete();

        return redirect()->route('admin.estates.index')
            ->with('success', 'Estate deleted successfully!');
    }
}
