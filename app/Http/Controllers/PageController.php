<?php

namespace App\Http\Controllers;

use App\Models\Prototype;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $prototypes = Prototype::with('estate.developer')->latest()->paginate(10);
        return view('index', compact('prototypes'));
    }

    public function about()
    {
        return view('about');
    }

    public function propertyDetail($slug)
    {
        $prototype = Prototype::with('estate.developer')->where('slug', $slug)->firstOrFail();
        return view('property-detail', compact('prototype'));
    }
}
