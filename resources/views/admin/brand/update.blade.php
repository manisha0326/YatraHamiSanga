@extends('admin.layouts.app')

@section('adminContent')
   <div class="container">
        <div class="row">
            <div class="col-lg-9" style="width: 98%">
                <div class="d-flex justify-content-between align-items-end">
                    <h2 style="margin-top:40px ">Edit Brand</h2>
                    <div style="display:flex;gap:20px">
                        <a href="{{ route('admin.brand.create') }}" class="btn btn-success">
                            <i class="bi bi-plus"></i> Add New
                        </a>
                        <a href="{{ route('admin.brand.view') }}" class="btn " style="background-color: #262586; color: white; width: 140px; height: 40px;">
                            <i class="bi bi-arrow-left"></i> All Brand
                        </a>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="card">
                        <div class="card-body" style="padding: 40px">
                            <form action="{{ route('admin.brand.update', $brand->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                {{-- @method('PUT') --}}
                                <div class="form-group">
                                    <label class="form-label">Category <span class="text-danger">*</span></label>
                                    <select name="category_id" class="form-control @error('category_id') is-invalid @enderror">
                                        <option value="">-- Select Category --</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{ $brand->category_id == $category->id ? 'selected' : '' }}>
                                                {{ $category->category_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('category_id') <p class="invalid-feedback">{{ $message }}</p> @enderror
                                </div>

                                <div class="form-group mt-3">
                                    <label class="form-label">Brand Name <span class="text-danger">*</span></label>
                                    <input type="text" name="brand_name" value="{{ old('brand_name', $brand->brand_name) }}"
                                        class="form-control @error('brand_name') is-invalid @enderror">
                                    @error('brand_name') <p class="invalid-feedback">{{ $message }}</p> @enderror
                                </div>
                                
                                <div class="form-group mt-3">
                                    <label class="form-label">Image</label>
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                                    @if($brand->image)
                                        <img src="{{ asset('uploads/brands/' . $brand->image) }}" width="100" class="mt-2">
                                    @endif
                                    @error('image') <p class="invalid-feedback">{{ $message }}</p> @enderror
                                </div>

                                <div class="form-group mt-3">
                                    <label class="form-label">Price (NRS)
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="number" name="price" min="0" step="0.01"
                                        value="{{ old('price', $brand->price) }}"
                                        class="form-control @error('price') is-invalid @enderror">
                                    @error('price')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group mt-3">
                                    <label class="form-label">Description
                                        <span class="text-danger">*</span>
                                    </label>
                                    <textarea class="form-control tinymce-editor" name="description" id="description" rows="30" >{!! $brand->description !!}</textarea>
                                    @error('description')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
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
            min-height: 300px !important; /* Change 300px to desired height */
        }
    </style>
@endpush
