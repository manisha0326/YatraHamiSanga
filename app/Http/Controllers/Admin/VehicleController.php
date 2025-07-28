<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Vehicle;
use App\Models\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class VehicleController extends Controller
{
    //
    public function create()
{
    $categories = Category::all();
    $brands = Brand::all();

    return view('admin.vehicle.create', compact('categories', 'brands'));
}

    public function store(Request $request)
{
    $validated = $request->validate([
        'vehicle_name' => 'required|string|max:255',
        'category_id'  => 'required|exists:categories,id',
        'brand_id'     => 'required|exists:brands,id',
        'image'        => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'price'        => 'required|numeric|min:0',
        'description'      => 'required|longtext',
    ]);

    // Handle Image Upload
    $imageName = time() . '.' . $request->image->extension();
    $request->image->move(public_path('storage/vehicles'), $imageName);


     // Create brand
        // $brand = new Brand();
        // $brand->category_id = $request->category_id;
        // $brand->brand_name = $request->brand_name;
        // $brand->slug = Str::slug($request->brand_name);
        // $brand->image = $imagePath;
        // $brand->price = $request->price;
         
        // $brand->save();

        //     return redirect()->route('admin.brand.view')->with('success', 'Brand created successfully.');
        // } else {
        //     return redirect()->back()->withInput()->withErrors($validator);
        // }
    //create vehicle store in DB

    // Store in DB
    Vehicle::create([
        'vehicleName' => $validated['vehicleName'],
        'category_id'  => $validated['category_id'],
        'brand_id'     => $validated['brand_id'],
        'image'        => $imageName,
        'price'        => $validated['price'],
        'description'      => $validated['description'],
    ]);
     if ($validator->passes()){

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('storage/vehicles'), $imageName);
        
        $vehicle = new vehicle();
        $vehicle->category_id = $request->category_id;
        $vehicle->brand_id = $request->brand_id;
        $vehicle->description = $request->description;
        $vehicle->save();

        return redirect()->route('admin.vehicle.view')->with('success', 'Vehicle added successfully.');

    }else{
        return redirect()->route('vehicle.create')->withInput()->withErrors($validator);
    }
    // return redirect()->route('vehicle.create')->with('success', 'Vehicle added successfully.');
}

}
