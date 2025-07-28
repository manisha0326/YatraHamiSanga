@extends('admin.layouts.app')


@section('adminContent')
    <div class="container">
        <div class="row">
            <div class="col-lg-9" style="width:98%">
                <div class="table-responsive mt-4" >
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h2>Vehicle</h2>
                    <a href="{{ route('vehicle.create') }}" class="btn " style="background-color: #262586; color: white; width: 140px; height: 40px;">
                        <i class="bi bi-plus"></i> Add New
                    </a>
                    </div>
                    
                    <table class="table table-bordered text-center" style="table-layout: fixed; width: 100%;">
                      <thead>
                        <tr>
                          <th style="width: 5%;">S.N</th>
                          <th style="width: 15%;">Image</th>
                          <th style="width: 15%;">price</th>
                          <th style="width: 20%;">Category</th>
                          <th style="width: 20%;">Vehicle</th>
                          <th style="width: 50%;">Description</th>
                          <th style="width: 10%;">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td><img src="" alt=""></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>
                            <a href="{{ route('vehicle.update') }}" class="btn btn-sm d-inline-flex justify-content-center align-items-center"
                              style="background-color: #262586; color: white; width: 24px; height: 24px; padding: 0;">
                              <i class="bi bi-pencil"></i>
                            </a>


                            <a href="{{ route('vehicle.delete') }}" class="btn btn-danger btn-sm d-inline-flex justify-content-center align-items-center"
                              style="width: 24px; height: 24px; padding: 0;">
                              <i class="bi bi-trash"></i>
                            </a>
                          </td>
                        </tr>
                      </tbody>
                    </div>
                </div>
            </div>
@endsection 
 
