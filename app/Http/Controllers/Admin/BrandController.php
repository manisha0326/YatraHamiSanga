<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class BrandController extends Controller
{
   
     public function create()
    {
        $categories = Category::all();
        
        return view('admin.brand.create', compact('categories'));
    }

    public function store(Request $request){
        
        $validator = Validator::make($request->all(), [
            'category_id'  => 'required|exists:categories,id',
            'brand_name' => 'required|string|max:255|regex:/^[A-Za-z0-9\s.,!@#\$%\^&\*\-_\(\)\[\]\{\}]+$/',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp,avif|max:2048',
            'price' => 'required|numeric|min:0.01',
            'description' => 'required|string|max:65535',
        ]);
        if ($validator->passes()) {

        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('brands', 'public');
        }

        // Create brand
        $brand = new Brand();
        $brand->category_id = $request->category_id;
        $brand->brand_name = $request->brand_name;
        $brand->slug = Str::slug($request->brand_name);
        $brand->image = $imagePath;
        $brand->price = $request->price;
        $brand->description = $request->description;
         
        $brand->save();

            return redirect()->route('admin.brand.view')->with('success', 'Brand created successfully.');
        } else {
            return redirect()->back()->withInput()->withErrors($validator);
        }
    }
    //view brand page ko lagi
     public function viewBrand(){
        $brands = Brand::all();
        $categories = Category::all();
        return view('admin.brand.view', compact('categories', 'brands'));
    }

    //Update page ko lagi
    public function edit($id)
    {
        $brand = Brand::findOrFail($id);
        $categories = Category::all();
        return view('admin.brand.update', compact('brand', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'brand_name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp,avif|max:2048',
            'price' => 'required|numeric|min:0.01',
            'description' => 'required|string|max:65535',
        ]);
        
        $brand = Brand::findOrFail($id);
        $brand->brand_name = $request->brand_name;
        $brand->slug = Str::slug($request->brand_name);
        $brand->category_id = $request->category_id;
        // $brand->image = $imageName;
        $brand->price = $request->price;
        $brand->description = $request->description;

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('brands', 'public');
        } 
        // Image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('storage/brands'), $imageName);
            $brand->image = $imageName;
        }

        
        $brand->save();

        return redirect()->route('admin.brand.view')->with('success', 'Brand updated successfully.');
    }

    //delete ko lagi
    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);

        // Optionally delete image from storage
        if ($brand->image && file_exists(public_path('storage/' . $brand->image))) {
            unlink(public_path('storage/' . $brand->image));
        }

        $brand->delete();

        return redirect()->back()->with('success', 'Brand deleted successfully.');
    }

    
}










