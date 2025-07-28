@extends('admin.layouts.app')

@section('adminContent')
   <div class="container">
        <div class="row">
            <div class="col-lg-9" style="width: 98%">
                <div class="d-flex justify-content-between align-items-end">
                    <h2 style="margin-top:40px ">Edit Vehicle</h2>
                    <div style="display:flex;gap:20px">
                        <a href="{{ route('vehicle.create') }}" class="btn btn-success">
                            <i class="bi bi-plus"></i> Add New
                        </a>
                        <a href="{{ route('vehicle.view') }}" class="btn " style="background-color: #262586; color: white; width: 140px; height: 40px;">
                            <i class="bi bi-arrow-left"></i> All Vehicle
                        </a>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="card">
                        <div class="card-body" style="padding: 40px">
                            <form action="">
                                <div class="form-group">
                                    <label class="form-label">Vehicle Name 
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="name" >
                                </div>

                                <div class="form-group mt-3">
                                        <label class="form-label"> Category 
                                            <span class="text-danger">*</span>
                                        </label>
                                        <br>
                                        <select class="form-control" name="category_id" id="category_id" required>
                                            <option value="">-- Select Category --</option>
                                            {{-- @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach --}}
                                        </select>
                                        
                                </div>

                                <div class="form-group mt-3">
                                        <label class="form-label"> Brand 
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-control" name="brand_id" id="brand_id" required>
                                            <option value="">-- Select Brand --</option>
                                            {{-- @foreach($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>
                                
                                    {{-- <div class="form-group mt-3">
                                        <label class="form-label"> Image 
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="file" class="form-control" name="image" >
                                    </div> --}}

                                    <div class="form-group mt-3">
                                    <label class="form-label">Price
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="price" >
                                </div>
                                    
                                <div class="form-group mt-3">
                                    <label class="form-label">Vehicle Details 
                                        <span class="text-danger">*</span>
                                    </label>
                                    <textarea class="form-control" name="description" id="" rows="10" ></textarea>
                                </div>
                                
                                <div class="mt-3">
                                    <button type="submit" class="btn" style="background-color: #262586; color: white; width: 140px; height: 40px; " >Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

@endsection

