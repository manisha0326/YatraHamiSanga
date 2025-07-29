@extends('admin.layouts.app')

@section('adminContent')
    <div class="container">
        <div class="row">
            <div class="col-lg-9" style="width: 98%">
                <div class="d-flex justify-content-between align-items-end">
                    <h2 style="margin-top:40px">Edit Category</h2>
                    <div style="display:flex; gap:20px">
                        <a href="{{ route('admin.category.create') }}" class="btn btn-success">
                            <i class="bi bi-plus"></i> Add New
                        </a>
                        <a href="{{ route('admin.category.view') }}" class="btn"
                            style="background-color: #262586; color: white; width: 140px; height: 40px;">
                            <i class="bi bi-arrow-left"></i> All Category
                        </a>
                    </div>
                </div>

                <div class="mt-4">
                    <div class="card">
                        <div class="card-body" style="padding: 40px">

                            <form action="{{ route('admin.category.update', $category->id) }}" method="POST">
                                @csrf


                                <div class="form-group">
                                    <label class="form-label">Category Name
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" name="category_name"
                                        class="form-control @error('category_name') is-invalid @enderror"
                                        value="{{ old('category_name', $category->category_name) }}">
                                    @error('category_name')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Short Description
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" name="description"
                                        class="form-control @error('description') is-invalid @enderror"
                                        value="{{ old('description', $category->description) }}">
                                    @error('description')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mt-3">
                                    <button type="submit" class="btn"
                                        style="background-color: #262586; color: white; width: 140px; height: 40px;">
                                        Submit
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
