@extends('admin.layouts.app')

@section('adminContent')
    <div class="container">
        <section style="height: 1px;">
            <div class="row">
                <div class="col-lg-9" style="width: 98%">
                    <div class="d-flex justify-content-between align-items-end">
                        <h2>Create Vehicle</h2>
                        <a href="{{ route('vehicle.view') }}" class="btn"
                            style="background-color: #262586; color: white; width: 140px; height: 40px;">
                            <i class="bi bi-arrow-left"></i> All Vehicle
                        </a>
                    </div>
                    <div class="mt-4">
                        <div class="card">
                            <div class="card-body" style="padding: 40px">

                                <form action="{{ route('admin.vehicle.store') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-label">Vehicle Name
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text"
                                            class="form-control @error('vehicle_name') is-invalid @enderror"
                                            name="vehicle_name">
                                        @error('vehicle_name')
                                            <p class="invalid-feedback">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group mt-3">
                                        <label class="form-label"> Category
                                            <span class="text-danger">*</span>
                                        </label>
                                        <br>
                                        <select class="form-control @error('category_id') is-invalid @enderror"
                                            name="category_id" id="category_id">
                                            <option value="">-- Select Category --</option>
                                            {{-- @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach --}}
                                        </select>
                                        @error('category_id')
                                            <p class="invalid-feedback">{{ $message }}</p>
                                        @enderror

                                    </div>

                                    <div class="form-group mt-3">
                                        <label class="form-label"> Brand
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-control @error('brand_id') is-invalid @enderror" name="brand_id"
                                            id="brand_id">
                                            <option value="">-- Select Brand --</option>
                                            {{-- @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                            @endforeach --}}
                                        </select>
                                        @error('brand_id')
                                            <p class="invalid-feedback">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    {{-- <div class="form-group mt-3">
                                        <label class="form-label"> Image
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="file" class="form-control @error('image') is-invalid @enderror"
                                            name="image">
                                        @error('image')
                                            <p class="invalid-feedback">{{ $message }}</p>
                                        @enderror
                                    </div> --}}

                                    {{-- <div class="form-group mt-3">
                                        <label class="form-label">Price
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control @error('price') is-invalid @enderror"
                                            name="price">
                                        @error('price')
                                            <p class="invalid-feedback">{{ $message }}</p>
                                        @enderror
                                    </div> --}}


                                    <div class="form-group mt-3">
                                        <label class="form-label">Description
                                            <span class="text-danger">*</span>
                                        </label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                                            rows="10">{{ old('description') }}</textarea>
                                        @error('description')
                                            <p class="invalid-feedback">{{ $message }}</p>
                                        @enderror
                                    </div>                               

                                    <div class="mt-3">
                                        <button type="submit" class="btn"
                                            style="background-color: #262586; color: white; width: 140px; height: 40px;">Submit</button>
                                    </div>
                                </form>
                                {{-- @push('scripts')
                                <script src="/ckeditor/ckeditor.js"></script>
                                @endpush --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
@push('scripts')
    <script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            if (typeof CKEDITOR !== 'undefined' && document.getElementById("description")) {
                CKEDITOR.replace("description");
            }
        });
    </script>
@endpush
