<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Brand;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    // Default rental page (e.g., Bike)
//     public function index()
// {
//     $categories = Category::all();
//     $defaultCategory = $categories->first();

//     $brands = Brand::with('category')
//         ->where('category_id', $defaultCategory->id)
//         ->get();

//     return view('frontend.Rental.index', [
//         'categories' => $categories,
//         'brands' => $brands,
//         'selectedCategorySlug' => $defaultCategory->slug,
//     ]);
// }
    public function index($slug = null)
    {
        // dd("here");
    
        $categories = Category::all();

        if ($slug === 'all' || $slug === null) {
            $brands = Brand::with('category')->get();
            $selectedCategorySlug = 'all';
        } else {
            $category = Category::where('slug', $slug)->firstOrFail();
            $brands = Brand::with('category')->where('category_id', $category->id)->get();
            $selectedCategorySlug = $slug;
        }

        return view('frontend.Rental.index', compact('categories', 'brands', 'selectedCategorySlug'));
    }


    public function ajaxFilter(Request $request)
    {
        $slug = $request->slug;

        if ($slug === 'all') {
            $brands = Brand::with('category')->get();
        } else {
            $category = Category::where('slug', $slug)->first();
            if (!$category) {
                return response()->json(['html' => '<div class="col-12 text-center"><h5>No vehicles available.</h5></div>']);
            }

            $brands = Brand::where('category_id', $category->id)
                ->with('category')
                ->get();
        }

        $html = view('frontend.Rental.partials.vehicle_cards', compact('brands'))->render();
        return response()->json(['html' => $html]);
    }

    public function showDescription($slug)
    {
        $brand = Brand::where('slug', $slug)->firstOrFail();

        // You can pass brand details to your description view
        return view('frontend.Rental.description', compact('brand'));
    }


}
