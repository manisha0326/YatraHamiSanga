@extends('user.layouts.app')

@section('userContent')
    <div class="row">
        <!-- col-lg-4 = 3 columns per row -->
        @auth
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="small-box bg-primary" style="height:162px">
                    <div class="inner">
                        <h3 style="color: white;text-align:center;margin-top:40px">Booked Vehicles</h3>
                        {{-- <p>Bounce Rate</p> --}}
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{ route('user.bookingHistory') }}" class="small-box-footer"
                        style="text-decoration:none;margin-top: 20px;color:white;">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="small-box bg-success" style="height:162px">
                    <div class="inner">
                        <h3 style="color: white;text-align:center;margin-top:40px">Avaliable Vehicles</h3>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{ route('user.AvailableVehicles') }}" class="small-box-footer"
                        style="text-decoration:none;margin-top: 20px;color:white;">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="small-box bg-danger" style="height:162px">
                    <div class="inner">
                        <h3 style="color: white;text-align:center;margin-top:40px">Cancel Vehicles</h3>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="{{ route('user.Cancelvehicle') }}" class="small-box-footer"
                        style="text-decoration:none;margin-top: 20px;color:white;">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        @else
            <div class="container mt-4">
                <div class="p-5 mb-4 neumorphic-banner shadow-sm">
                    <div
                        class="container-fluid d-flex flex-column flex-md-row align-items-stretch justify-content-between banner-content">
                        <div class="text-side d-flex flex-column justify-content-center">
                            <h1 class="display-6 fw-bold">Ready to Book Your Vehicle?</h1>
                            <p class="col-md-10 fs-5 text-muted">
                                Browse available vehicles and make your reservation in just a few clicks.
                            </p>
                            <a href="{{ route('payment') }}" class="btn btn-lg mt-2 btn-neumorphic fixed-width-btn">Book Now</a>

                        </div>

                        <div class="image-side">
                            <img src="{{ asset('image/dashboardimage.jpg') }}" alt="Booking Image">
                        </div>
                    </div>
                </div>
            </div>
        @endauth
    </div>
@endsection
