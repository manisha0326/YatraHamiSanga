@extends('admin.layouts.app')

@section('adminContent')
    <div class="container">
        <section style="height: 1px;">
            <div class="row">
                <div class="col-lg-9" style="width: 98%">
                    <div class="d-flex justify-content-between align-items-end">
                        <h2>Create Brand</h2>
                        <a href="{{ route('admin.brand.view') }}" class="btn"
                            style="background-color: #262586; color: white; width: 140px; height: 40px;">
                            <i class="bi bi-arrow-left"></i> All Brand
                        </a>
                    </div>
                    <div class="mt-4">
                        <div class="card">
                            <div class="card-body" style="padding: 40px">
                                <form action="{{ route('admin.brand.store') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-label"> Category
                                            <span class="text-danger">*</span>
                                        </label>
                                        <br>
                                        <select class="form-control @error('category_id') is-invalid @enderror"
                                            name="category_id" id="category_id">
                                            <option value="">-- Select Category --</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <p class="invalid-feedback">{{ $message }}</p>
                                        @enderror

                                    </div>
                                    <div class="form-group mt-3">
                                        <label class="form-label">Brand Name
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control @error('brand_name') is-invalid @enderror"
                                            name="brand_name">
                                        @error('brand_name')
                                            <p class="invalid-feedback">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group mt-3">
                                        <label class="form-label"> Image
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="file" class="form-control @error('image') is-invalid @enderror"
                                            name="image">
                                        @error('image')
                                            <p class="invalid-feedback">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group mt-3">
                                        <label class="form-label">Price
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control @error('price') is-invalid @enderror"
                                            name="price">
                                        @error('price')
                                            <p class="invalid-feedback">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group mt-3">
                                        <label class="form-label">Description
                                            <span class="text-danger">*</span>
                                        </label>
                                        <textarea class="form-control tinymce-editor" name="description" id="description" rows="30"></textarea>
                                    </div>
                                    <div class="mt-3">
                                        <button type="submit" class="btn"
                                            style="background-color: #262586; color: white; width: 140px; height: 40px;">Submit</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection

@push('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .then(editor => {
                editor.ui.view.editable.element.style.minHeight = '300px';
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush

@push('styles')
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
    <style>
        .ck-editor__editable {
            min-height: 300px !important;
            
        }
    </style>
@endpush
