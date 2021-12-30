<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Ads;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::with('ads')->get();
        $featured_ads = Ads::with('category')->inRandomOrder()->limit(6)->get();
        return view('layouts.home', ['categories' => $categories, 'featured_ads' => $featured_ads]);
    }

    public function search(Request $request)
    {
        $categories = Category::with('ads')->get();
        $allAds = Ads::get();
        $category = $request->cat;
        $location = $request->location;
        $keyword = $request->keyword;


        $start = 0;
        $end = count($allAds);

        function binarySearch($allAds, $start, $end, $x)
        {
            if ($end < $start)
                return false;

            $mid = floor(($start + $end) / 2);
            $ads = $allAds->where('id', $mid)->first();

            if ($allAds->where('id', $mid) == $allAds->where('name', $x)) {
                return true;
            } elseif ($allAds->where('id', $mid) > $allAds->where('name', $x)) {
                return binarySearch($allAds, $start, $mid - 1, $x);
            } else {
                return binarySearch($allAds, $end, $mid + 1, $x);
            }
        }

        if (binarySearch($allAds, $start, $end, $keyword) == true) {
            return view('layouts.search-results', ['keyword' => $keyword, 'categories' => $categories]);
        } else {
            return view('layouts.search-not-found', ['keyword' => $keyword]);
        }
    }
}
