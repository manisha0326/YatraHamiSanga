@extends('admin.layouts.app')

@section('adminContent')

    <div class="container">
        <div class="row">
            <div class="col-lg-9" style="width: 98%">
                <div class="d-flex justify-content-between align-items-end">
                    <h2 style="margin-top:40px ">Create Category</h2>
                    <a href="{{ route('admin.category.view') }}" class="btn" style="background-color: #262586; color: white; width: 140px; height: 40px;">
                        <i class="bi bi-arrow-left" ></i> All Categroy
                    </a>
                </div>
                <div class="mt-4">
                    <div class="card">
                        <div class="card-body" style="padding: 40px">
                            <form action="{{ route('admin.category.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label">Category Name 
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" value="{{ old('category_name') }} " class="form-control @error('category_name') is-invalid @enderror" name="category_name">
                                    @error ('category_name')
                                        <p class="invalid-feedback">{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Short Description 
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" value="{{ old('description') }} " class="form-control @error('description') is-invalid @enderror" name="description">
                                    @error ('description')
                                        <p class="invalid-feedback">{{ $message }} </p>
                                    @enderror
                                </div>
                                
        
                                <div class="mt-3">
                                    <button type="submit" class="btn" style="background-color: #262586; color: white; width: 140px; height: 40px;">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection