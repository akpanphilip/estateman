<?php

namespace App\Http\Controllers;

use App\Models\Developer;
use App\Models\Estate;
use App\Models\Prototype;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // $prototypes = Prototype::with('estate.developer')->latest()->paginate(10);
        $featuredPrototypes = Prototype::with('estate.developer')->where('category', 'featured')->latest()->take(5)->get();
        $prototypes = Prototype::with('estate.developer')->where('category', '!=', 'featured')->latest()->take(5)->get();
        $developers = Developer::withCount('prototypes')
            ->has('prototypes')
            ->get();
        return view('index', compact('prototypes', 'featuredPrototypes', 'developers'));
    }

    public function about()
    {
        return view('about');
    }

    public function propertyDetail($slug)
    {
        $prototype = Prototype::with(['estate.developer', 'images'])->where('slug', $slug)->firstOrFail();
        return view('property', compact('prototype'));
    }

    public function allProperties(Request $request)
    {
        $prototypes = Prototype::with(['estate.developer', 'images'])
            ->where('is_active', true)
            ->when(
                $request->search,
                fn($q) =>
                $q->where('name', 'like', "%{$request->search}%")
                    ->orWhere('location', 'like', "%{$request->search}%")
                    ->orWhereHas(
                        'estate',
                        fn($q) =>
                        $q->where('name', 'like', "%{$request->search}%")
                    )
                    ->orWhereHas(
                        'estate.developer',
                        fn($q) =>
                        $q->where('name', 'like', "%{$request->search}%")
                    )
            )
            ->when(
                $request->category,
                fn($q) =>
                $q->whereIn('category', $request->category)
            )
            ->when(
                $request->min_price,
                fn($q) =>
                $q->where('price', '>=', $request->min_price)
            )
            ->when(
                $request->max_price,
                fn($q) =>
                $q->where('price', '<=', $request->max_price)
            )->when(
                $request->estate_id,
                fn($q) =>
                $q->where('estate_id', $request->estate_id)
            )
            ->when(
                $request->developer_id,
                fn($q) =>
                $q->whereHas(
                    'estate',
                    fn($q) =>
                    $q->where('developer_id', $request->developer_id)
                )
            )
            ->latest()
            ->paginate(20)
            ->withQueryString();

        $minPrice = Prototype::where('is_active', true)->min('price') ?? 0;
        $maxPrice = Prototype::where('is_active', true)->max('price') ?? 10000000;

        return view('properties', compact('prototypes', 'minPrice', 'maxPrice'));
    }
    public function properties($slug)
    {
        // Find the estate by slug
        $estate = Estate::where('slug', $slug)->firstOrFail();

        // Get prototypes only for this estate, with related developer
        $prototypes = Prototype::with('estate.developer')
            ->where('estate_id', $estate->id)
            ->latest()
            ->paginate(20);

        return view('properties', compact('prototypes', 'estate'));
    }
    // public function developerDetail($slug)
    // {
    //     $developer = Developer::with('prototypes.estate')->where('slug', $slug)->firstOrFail();
    //     $developerEstates = $developer->prototypes->pluck('estate')->unique('id');
    //     return view('developer', compact('developer', 'developerEstates'));
    // }
    public function developerDetail($slug)
    {
        $developer = Developer::with(['estates.prototypes.images'])
            ->where('slug', $slug)
            ->firstOrFail();

        $estates = $developer->estates;

        return view('developer', compact('developer', 'estates'));
    }

    public function estateDetail($slug)
    {
        $estate = Estate::with(['developer', 'prototypes' => function ($query) {
            $query->where('is_active', true)->with('images');
        }])->where('slug', $slug)->firstOrFail();

        $prototypes = $estate->prototypes;

        return view('estate', compact('estate', 'prototypes'));
    }
}
