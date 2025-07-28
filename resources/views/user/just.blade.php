@extends('user.layouts.app')

@section('userContent')
<style>
  .neumorphic-banner {
    background: #f2f2f2;
    border-radius: 15px;
    box-shadow:
      6px 6px 10px #c8d0e7,
      -6px -6px 10px #ffffff;
    transition: box-shadow 0.3s ease;
  }

  .neumorphic-banner:hover {
    box-shadow:
      3px 3px 6px #c8d0e7,
      -3px -3px 6px #ffffff;
  }

  .btn-neumorphic {
    background: #f5f7fa;
    border: none;
    border-radius: 12px;
    box-shadow:
      3px 3px 6px #c8d0e7,
      -3px -3px 6px #ffffff;
    color: #555;
    font-weight: 600;
    transition: box-shadow 0.3s ease;
  }

  .btn-neumorphic:hover {
    box-shadow:
      inset 3px 3px 6px #c8d0e7,
      inset -3px -3px 6px #ffffff;
    color: #222;
  }

  .banner-content {
    min-height: 300px; /* or set your desired height */
    height: 100%;
  }

  .text-side {
    width: 50%;
  }

  .image-side {
    width: 50%;
    height: 100%;
    display: flex;
    align-items: stretch;
  }

  .image-side img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 12px;
  }
  .fixed-width-btn {
  width: 200px;
  text-align: center;
}

</style>

<div class="container mt-4">
  <div class="p-5 mb-4 neumorphic-banner shadow-sm">
    <div class="container-fluid d-flex flex-column flex-md-row align-items-stretch justify-content-between banner-content">
      <div class="text-side d-flex flex-column justify-content-center">
  <h1 class="display-6 fw-bold">Ready to Book Your Vehicle?</h1>
  <p class="col-md-10 fs-5 text-muted">
    Browse available vehicles and make your reservation in just a few clicks.
  </p>
  <a href="#" class="btn btn-lg mt-2 btn-neumorphic fixed-width-btn">Book Now</a>

</div>

      <div class="image-side">
        <img src="{{ asset('image/dashboardimage.jpg') }}" alt="Booking Image">
      </div>
    </div>
  </div>
</div>

@endsection
