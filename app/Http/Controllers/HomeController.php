<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;

class HomeController extends Controller
{
    public function rentalPage($slug = null)
    {
        $categories = Category::with('brands')->get();

        if ($slug) {
            $category = Category::where('slug', $slug)->firstOrFail();
            $brands = Brand::where('category_id', $category->id)->get();
        } else {
            $brands = Brand::all();
        }

        return view('frontend.pages.home', compact('categories', 'brands', 'slug'));
    }

}

