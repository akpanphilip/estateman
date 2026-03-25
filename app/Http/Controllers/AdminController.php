<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Models\Developer;
use App\Models\Estate;
use App\Models\Prototype;
use App\Models\PrototypeImage;
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

    // ==================
    // PROTOTYPE SECTION
    // ==================

    public function prototypeIndex()
    {
        $prototypes = Prototype::with('estate.developer')->latest()->paginate(10);
        return view('admin.prototypes.index', compact('prototypes'));
    }

    public function prototypeCreate()
    {
        $estates = Estate::where('is_active', true)->get();
        return view('admin.prototypes.create', compact('estates'));
    }

    public function prototypeStore(Request $request)
    {
        $validated = $request->validate([
            'estate_id'        => ['required', 'exists:estates,id'],
            'name'             => ['required', 'string', 'max:255'],
            'description'      => ['nullable', 'string'],
            'price'            => ['nullable', 'numeric'],
            'plot_size'        => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'location' => ['nullable', 'string', 'max:255'],
            'category'         => ['required', 'in:regular,featured,new_listing'],
            'phone_number'     => ['nullable', 'string', 'max:20'],
            'whatsapp_number'  => ['nullable', 'string', 'max:20'],
            'facebook_link'    => ['nullable', 'url'],
            'instagram_link'   => ['nullable', 'url'],
            'is_active'        => ['nullable', 'boolean'],
        ]);

        $validated['slug']      = Str::slug($request->name);
        $validated['is_active'] = $request->boolean('is_active', true);

        $prototype = Prototype::create($validated);

        // Redirect to image upload step
        return redirect()->route('admin.prototypes.images', $prototype->id)
            ->with('success', 'Prototype created! Now add images.');
    }

    public function prototypeImages(Prototype $prototype)
    {
        $images = $prototype->images;
        return view('admin.prototypes.images', compact('prototype', 'images'));
    }

    public function prototypeImagesStore(Request $request, Prototype $prototype)
    {
        $request->validate([
            'images'   => ['required', 'array', 'max:5'],
            'images.*' => ['image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
        ]);

        $existingCount = $prototype->images()->count();

        if ($existingCount >= 5) {
            return back()->withErrors(['images' => 'Maximum of 5 images allowed per prototype.']);
        }

        foreach ($request->file('images') as $index => $image) {
            // Stop if we already have 5
            if ($existingCount + $index >= 5) break;

            $path = $image->store('prototypes', 'public');

            $prototype->images()->create([
                'image' => $path,
                'order' => $existingCount + $index + 1,
            ]);
        }

        return redirect()->route('admin.prototypes.index')
            ->with('success', 'Prototype and images saved successfully!');
    }

    public function prototypeImageDelete(PrototypeImage $image)
    {
        Storage::disk('public')->delete($image->image);
        $image->delete();

        return back()->with('success', 'Image deleted successfully!');
    }

    public function prototypeUpdate(Request $request, Prototype $prototype)
    {
        $validated = $request->validate([
            'estate_id'        => ['required', 'exists:estates,id'],
            'name'             => ['required', 'string', 'max:255'],
            'description'      => ['nullable', 'string'],
            'price'            => ['nullable', 'numeric'],
            'plot_size'        => ['nullable', 'string', 'max:255'],
            // 'description' => ['nullable', 'string'],
            'location' => ['nullable', 'string', 'max:255'],
            'category'         => ['required', 'in:regular,featured,new_listing'],
            'phone_number'     => ['nullable', 'string', 'max:20'],
            'whatsapp_number'  => ['nullable', 'string', 'max:20'],
            'facebook_link'    => ['nullable', 'url'],
            'instagram_link'   => ['nullable', 'url'],
            'is_active'        => ['nullable', 'boolean'],
        ]);

        $validated['slug']      = Str::slug($request->name);
        $validated['is_active'] = $request->boolean('is_active', true);

        $prototype->update($validated);

        return redirect()->route('admin.prototypes.index')
            ->with('success', 'Prototype updated successfully!');
    }

    public function prototypeDelete(Prototype $prototype)
    {
        // Delete all images from storage
        foreach ($prototype->images as $image) {
            Storage::disk('public')->delete($image->image);
        }

        $prototype->delete();

        return redirect()->route('admin.prototypes.index')
            ->with('success', 'Prototype deleted successfully!');
    }

    public function prototypeEdit(Prototype $prototype)
    {
        $estates = Estate::where('is_active', true)->get();
        return view('admin.prototypes.edit', compact('prototype', 'estates'));
    }


    // ==================
    // BANNER SECTION
    // ==================

    public function bannerIndex()
    {
        $banners = Banner::orderBy('order')->paginate(10);
        return view('admin.banners.index', compact('banners'));
    }

    public function bannerCreate()
    {
        return view('admin.banners.create');
    }

    public function bannerStore(Request $request)
    {
        $validated = $request->validate([
            'title'     => ['required', 'string', 'max:255'],
            'image'     => ['required', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
            'link'      => ['nullable', 'url'],
            'order'     => ['nullable', 'integer'],
            'is_active' => ['nullable', 'boolean'],
        ]);

        $validated['image']     = $request->file('image')->store('banners', 'public');
        $validated['is_active'] = $request->boolean('is_active', true);
        $validated['order']     = $request->input('order', 0);

        Banner::create($validated);

        return redirect()->route('admin.banners.index')
            ->with('success', 'Banner created successfully!');
    }

    public function bannerDelete(Banner $banner)
    {
        Storage::disk('public')->delete($banner->image);
        $banner->delete();

        return redirect()->route('admin.banners.index')
            ->with('success', 'Banner deleted successfully!');
    }
}
