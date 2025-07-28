<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    
    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request){
        
        $validator = Validator::make($request->all(), [
            'category_name' => 'required|string|regex:/^[A-Za-z\s]+$/',
            'description' => 'required|string'
            
        ]);
        if ($validator->passes()) {
        // Create category
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->slug = Str::slug($request->category_name);
        $category->description = $request->description;
        $category->save();

        
            return redirect()->route('admin.category.view')->with('success', 'Category created successfully.');
        } else {
            return redirect()->back()->withInput()->withErrors($validator);
        }
            
    }
    //view category ko lagi
    public function viewCategory()
    {
        $categories = Category::all();
        return view('admin.category.view',compact('categories'));
    }

    //Upate category ko lagi
    public function edit($id) {
        // $categories = Category:: all();
        $category = Category::findOrFail($id);
        return view('admin.category.update', compact('category'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'category_name' => 'required|string|max:255',
            'description' => 'required|string'
        ]);
        
        $category = Category::findOrFail($id);
        $category->category_name = $request->category_name;
        $category->description = $request->description;
        $category->save();

        return redirect()->route('admin.category.view')->with('success', 'Category updated successfully.');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.category.view')->with('success', 'Category deleted successfully.');
    }

    // public function showVehicles($slug)
    // {
    //     $category = Category::where('slug', $slug)->firstOrFail();
    //     $vehicles = Vehicle::where('category_id', $category->id)->get();

    //     return view('vehicles.category', compact('category', 'vehicles'));
    // }
    
}
