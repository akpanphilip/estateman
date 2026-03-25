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

    public function allProperties()
    {
        $query = Prototype::with('estate.developer')->latest();

        // Price filter
        if ($price = request('price')) {
            // Assuming price format is "min-max", e.g., "1000-5000"
            [$min, $max] = explode('-', $price) + [0, PHP_INT_MAX];
            $query->whereBetween('price', [(float)$min, (float)$max]);
        }

        // Category filter
        if ($categories = request('category')) {
            $query->whereIn('category', $categories);
        }

        $prototypes = $query->paginate(20)->withQueryString();

        return view('properties', compact('prototypes'));
    }
    public function properties($slug)
    {
        $estate = Estate::where('slug', $slug)->firstOrFail();

        $query = Prototype::with('estate.developer')
            ->where('estate_id', $estate->id)
            ->latest();

        // Price filter
        if ($price = request('price')) {
            [$min, $max] = explode('-', $price) + [0, PHP_INT_MAX];
            $query->whereBetween('price', [(float)$min, (float)$max]);
        }

        // Category filter
        if ($categories = request('category')) {
            $query->whereIn('category', $categories);
        }

        $prototypes = $query->paginate(20)->withQueryString();

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
