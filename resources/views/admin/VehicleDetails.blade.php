@extends('admin.layouts.app')


@section('adminContent')
    <div class="container">
      @if(session('success'))
          <div id="alert-message" class="alert alert-success mt-3">
              {{ session('success') }}
          </div>
      @endif

        <div class="row">
            <div class="col-lg-9" style="width:98%">
                <div class="table-responsive mt-4" >
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h2>Brand</h2>
                    <a href="{{ route('admin.brand.create') }}" class="btn " style="background-color: #262586; color: white; width: 140px; height: 40px;">
                        <i class="bi bi-plus"></i> Add New
                    </a>
                    </div>
                    
                    <table class="table table-bordered text-center" style="table-layout: fixed; width: 100%;">
                      <thead>
                        <tr>
                          <th style="width: 5%;">S.N</th>
                          {{-- <th style="width: 15%;">category</th> --}}
                          <th style="width: 20%;">Brand</th>
                          <th style="width: 20%;">Image</th>
                          <th style="width: 15%;">price</th>
                          {{-- <th style="width: 50%;">Description</th> --}}
                          {{-- <th style="width: 10%;">Action</th> --}}
                        </tr>
                      </thead>
                      
                    </table>

            </div>
        </div>
    </div>
@endsection 
 
