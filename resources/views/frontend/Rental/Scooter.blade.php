

@section('title','Scooter')

@extends('frontend.layouts.app')

@section('content')

<section style="margin-top:94px;">
      <div class="container-fluid p-4">
        <h2
          class="mb-4"
          style="
            margin-left: 60px;
            margin-top: 30px;
            margin-bottom: 20px;
            color: #262338;
          "
        >
          Find Your Perfect
          <span style="color: #262586; font-weight: bold">Ride </span> & Enjoy
          Unbeatable
          <span style="color: #262586; font-weight: bold">Rentals</span>
        </h2>
        <div class="row" style="margin-top: 50px">
          <div class="col-md-3">
            <div class="filters">
  <div class="mb-3">
    <h3 class="filter-label">Vehicle Type</h3>

    <div>
      <input
        type="checkbox"
        name="option"
        id="bike"
        onclick="checkOnlyOne(this); window.location.href='{{ route('Rental.Bike') }}';"
        
      />
      <label for="bike" style="cursor: pointer; color: #262338; text-decoration: none;">
        Bike
      </label>
    </div>

    <div>
      <input
        type="checkbox"
        name="option"
        id="scooter"
        onclick="checkOnlyOne(this); window.location.href='{{ route('Rental.Scooter') }}';"
        checked
      />
      <label for="scooter" style="cursor: pointer; color: #262338; text-decoration: none;">
        Scooter
      </label>
    </div>

    <div>
      <input
        type="checkbox"
        name="option"
        id="car"
        onclick="checkOnlyOne(this); window.location.href='{{ route('Rental.Car') }}';"
      />
      <label for="car" style="cursor: pointer; color: #262338; text-decoration: none;">
        Car
      </label>
    </div>

    <div>
      <input
        type="checkbox"
        name="option"
        id="scropio"
        onclick="checkOnlyOne(this); window.location.href='{{ route('Rental.Scropio') }}';"
      />
      <label for="scorpio" style="cursor: pointer; color: #262338; text-decoration: none;">
        Scorpio
      </label>
    </div>

    <div>
      <input
        type="checkbox"
        name="option"
        id="hiace"
        onclick="checkOnlyOne(this); window.location.href='{{ route('Rental.Hiace') }}';"
      />
      <label for="hiace" style="cursor: pointer; color: #262338; text-decoration: none;">
        Hiace
      </label>
    </div>
  </div>
</div>
          </div>
          

          <div class="col-md-9">
            <div class="row">
              <div class="col-md-6">
                <a
                  href="../Scooter/Vespa/Scooter1.html"
                  class="text-decoration-none text-dark"
                >
                  <div class="vehicle-card">
                    <img src=".././image/Scooter/scooter1.png" alt="" style="object-fit: contain;"/>
                    <div class="content">
                      <h5>
                        Vespa Scooters
                        <span class="badge bg-light text-dark">Scooter</span>
                      </h5>
                      <div class="text-success">✔ Free Cancellation</div>
                      <div class="text-success">✔ Instant Booking</div>
                      <div class="text-success">✔ Insurance</div>
                      <div class="price mt-2">
                        NRS 2000 <span class="text-muted fs-6">/ day</span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-md-6">
                <a
                  href="../Scooter/yamaha/Scooter1.html"
                  class="text-decoration-none text-dark"
                >
                  <div class="vehicle-card">
                    <img src=".././image/Scooters/yahama1.jpg" alt="" style="object-fit: contain;" />
                    <div class="content">
                      <h5>
                        Yamaha Scooter
                        <span class="badge bg-light text-dark">Scooter</span>
                      </h5>
                      <div class="text-success">✔ Free Cancellation</div>
                      <div class="text-success">✔ Instant Booking</div>
                      <div class="text-success">✔ Insurance</div>
                      <div class="price mt-2">
                        NRS 2000 <span class="text-muted fs-6">/ day</span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-md-6">
                <a
                  href="../Scooter/Tvs/Scooter1.html"
                  class="text-decoration-none text-dark"
                >
                  <div class="vehicle-card">
                    <img src=".././image/Scooter/scooter3.png" alt="" style="object-fit: contain;" />
                    <div class="content">
                      <h5>
                        TVS Scooters
                        <span class="badge bg-light text-dark">Scooter</span>
                      </h5>
                      <div class="text-success">✔ Free Cancellation</div>
                      <div class="text-success">✔ Instant Booking</div>
                      <div class="text-success">✔ Insurance</div>
                      <div class="price mt-2">
                        NRS 1000 <span class="text-muted fs-6">/ day</span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection




