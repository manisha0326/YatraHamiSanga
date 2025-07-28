@extends('admin.layouts.app')

@section('adminContent')
    <div class="row" style="margin-top: 50px">
        <!-- col-lg-4 = 3 columns per row -->
        
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="small-box bg-primary" style="height:162px">
                <div class="inner">
                    <h3 style="color: white;text-align:center;margin-top:40px">Number of Vehicles</h3>
                    {{-- <p>Bounce Rate</p> --}}
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{ route('admin.brand.view') }} " class="small-box-footer"
                    style="text-decoration:none;margin-top: 20px;color:white;">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="small-box bg-success" style="height:162px">
                <div class="inner">
                    <h3 style="color: white;text-align:center;margin-top:40px">Number of User</h3>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="{{ route('admin.UserDetails') }}" class="small-box-footer"
                    style="text-decoration:none;margin-top: 20px;color:white;">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        {{-- <div class="col-lg-4 col-md-6 mb-4">
            <div class="small-box bg-warning" style="height:162px">
                <div class="inner">
                    <h3 style="color: white;text-align:center;margin-top:40px">Vehicle Status</h3>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="{{ route('admin.Vehiclestatus') }} " class="small-box-footer"
                    style="text-decoration:none;margin-top: 20px;color:white;">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div> --}}
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="small-box bg-warning" style="height:162px">
                <div class="inner">
                    <h3 style="color: white;text-align:center;margin-top:40px">Customer's Query</h3>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="{{ route('admin.customerQuery') }} " class="small-box-footer"
                    style="text-decoration:none;margin-top: 20px;color:white;">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
@endsection
