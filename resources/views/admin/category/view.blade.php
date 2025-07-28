@extends('admin.layouts.app')


@section('adminContent')
@if (session('success'))
    <div id="alert-message" class="alert alert-success alert-dismissible fade show mt-3" role="alert">
{{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
    
        <div class="row">
            <div class="col-lg-9" style="width:98%">
                <div class="table-responsive mt-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h2>Category</h2>
                    <a href="{{ route('admin.category.create') }}" class="btn " style="background-color: #262586; color: white; width: 140px; height: 40px;">
                        <i class="bi bi-plus"></i> Add New
                    </a>
                    </div>
                    
                    <table class="table table-bordered text-center" style="table-layout: fixed; width: 100%;">
                      <thead>
                        <tr>
                          <th style="width: 5%;">S.N</th>
                        
                          <th style="width: 20%;">Category</th>
                          
                          <th style="width: 10%;">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($categories as $index => $category)
                          <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $category->category_name }}</td>
                            <td>
                              <a href="{{ route('admin.category.edit',$category->id) }}" class="btn btn-sm d-inline-flex justify-content-center align-items-center"
                                style="background-color: #262586; color: white; width: 24px; height: 24px; padding: 0;">
                                <i class="bi bi-pencil"></i>
                              </a>


                              <a href="{{ route('admin.category.delete',$category->id) }}" class="btn btn-danger btn-sm d-inline-flex justify-content-center align-items-center"
                                style="width: 24px; height: 24px; padding: 0;">
                                <i class="bi bi-trash"></i>
                              </a>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>

            </div>
        </div>
    </div>
@endsection 
 
 
 
 {{-- @extends('admin.layouts.app')

@section('adminContent')
   <div class="container mt-5">
        <div class="row">
            <div class="col-lg-9">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Category</h2>
                    <a href="{{ route('category.create') }}" class="btn " style="background-color: #262586; color: white; width: 140px; height: 40px; font-family: poppins; font-size: 16px;">
                        <i class="bi bi-plus"></i> Add New
                    </a>
                </div>
                <div class="table-responsive mt-4">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">S.N</th>
                            <th scope="col">Category Title</th>
                            <th scope="col">Image</th>
                          
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td scope="row">1</td>
                            <td>Category title</td>
                            <td>
                                <img src="" alt="">
                            </td>
                            
                            <td>
                                <a href="{{ route('category.update') }}" class="btn btn-sm" style="background-color: #262586; color: white; width: 140px; height: 40px; font-family: poppins; font-size: 16px;">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <a href="{{ route('category.delete') }}" class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
            </div>
        </div>
    </div>

@endsection
 
 
  --}}