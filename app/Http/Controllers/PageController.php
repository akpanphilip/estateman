<?php

namespace App\Http\Controllers;

use App\Models\Prototype;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // $prototypes = Prototype::with('estate.developer')->latest()->paginate(10);
        $featuredPrototypes = Prototype::with('estate.developer')->where('category', 'featured')->latest()->take(5)->get();
        $prototypes = Prototype::with('estate.developer')->where('category', '!=', 'featured')->latest()->take(5)->get();
        return view('index', compact('prototypes', 'featuredPrototypes'));
    }

    public function about()
    {
        return view('about');
    }

    public function propertyDetail($slug)
    {
        $prototype = Prototype::with('estate.developer')->where('slug', $slug)->firstOrFail();
        return view('property', compact('prototype'));
    }
}
