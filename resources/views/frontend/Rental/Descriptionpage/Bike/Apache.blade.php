@section('title','Apache')

@extends('frontend.layouts.app')

@section('content')

<section style="margin-top: 50px;margin-bottom: 50px;">
        <div class="container_apache">
          <div class="main-section">
            <div class="image-section">
              <img src="/image/BikeImg/Apache-1.png" alt="bike" style="height: 500px;">
            </div>
            <div class="details-section">
              <h2 style="color: #262586">Bike Detail</h2>

              <div class="ones">
                <h3>Description:</h3>
                <p style="text-align: justify;margin-right: 20px;font-family: poppins;letter-spacing: 0.5px;line-height: 24px;word-spacing: 0.5px;color: #262338;"> TVS Apache is a sporty bike series known for speed, style, and control. It features powerful engines and race-inspired tech like GTT, RT-Fi, and SmartXonnect. Ideal for young riders seeking performance and value.</p>
              </div>

              <div class="features">
                <h3 style="color: #262338;">Features:</h3>
                <ul style="color: #262338;font-family: poppins;letter-spacing: 0.5px;line-height: 24px;word-spacing: 0.5px;">
                    <li>Engine Capacity (cc): 159.7cc</li>
                    <li>Mileage: 45-50 km/l </li>
                    <li>Fuel Consumption: ~0.020-0.022 liters/km (approximately)</li>
                </ul>
              </div>
              
              <div class="condition">
                <h3 style="color: #262338;">Condition:</h3>
                <ul style="color: #262338;font-family: poppins;letter-spacing: 0.5px;line-height: 24px;word-spacing: 0.5px;">
                    <li>You must be atleast 18 years old to rent a vehicle and must have a driving license. </li>
                    <li>Renter is responsible for the vehicle during the rental period</li>
                    <li>Basic insurance is only provided whereas injuries like major accident insurance is not provided.</li>
                </ul>
              </div>
            </div>
          </div>
          


<div class="image-form-wrapper">
  <img src="/image/travel.jpeg" alt="travel" class="background-image" />

  <!-- Per Day Booking Block -->
  <div id="perDayBlock" class="form-overlay visible">
    <div class="row g-3 align-items-end">
      <div class="col-md-3" style="margin-bottom:55px;">
        <label>Booking Type</label>
        <div class="d-flex mt-2">
          <button class="btn btn-success me-2 active" onclick="showPerDay()">Per Day</button>
          <button class="btn btn-outline-secondary" onclick="showPerHour()">Per Hour</button>
        </div>
      </div>
      <div class="col-md-3"  style="margin-bottom:55px;">
        <label>Pickup Date</label>
        <input type="date" class="form-control" id="pickupDate" />
      </div>
      <div class="col-md-3" style="margin-bottom:55px;">
        <label>Return Date</label>
        <input type="date" class="form-control" id="returnDate" />
      </div>
      <div class="col-md-3">
        <label>Amount</label>
        <input type="text" class="form-control" id="amountDay" readonly />
        <div class="d-flex justify-content-end mt-3">
          <button class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Per Hour Booking Block -->
  <div id="perHourBlock" class="form-overlay d-none">
    <div class="row g-3 align-items-end">
      <div class="col-md-3" style="margin-bottom:55px;">
        <label>Booking Type</label>
        <div class="d-flex mt-2">
          <button class="btn btn-outline-secondary me-2" onclick="showPerDay()">Per Day</button>
          <button class="btn btn-success active" onclick="showPerHour()">Per Hour</button>
        </div>
      </div>
      <div class="col-md-3" style="margin-bottom:55px;">
        <label for="hour">Booking Hour</label>
        <input type="number" class="form-control" min="1" max="12" id="bookingHour" />
      </div>
      <div class="col-md-3">
        <label>Amount</label>
        <input type="text" class="form-control" id="amountHour" readonly />
        <div class="d-flex justify-content-end mt-3">
          <button class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>
</div>


        
        
      <h2 style="margin-top: 40px; margin-bottom: 40px; color: #161616; font-family: roboto;"><span style="color:#262586 ;">Rating</span> by our previous <span style="color:#262586 ;">customers</span></h2>
      <div>
        <div class="carousel">
  <div class="reviews">
    <div class="review active">
      <div class="stars">⭐⭐⭐⭐⭐</div>
      <div class="review-title">Excellent Experience!</div>
      <div class="review-text">
        I had a fantastic experience with Yatra Hami Sanga. The booking process was easy and the car was in great condition. Highly recommended!
      </div>
    </div>

    <div class="review">
      <div class="stars">⭐⭐⭐⭐</div>
      <div class="review-title">Great Service </div>
      <div class="review-text">
        Yatra Hami Sanga made it easy to rent a car for my weekend trip. The driver was professional and the ride was comfortable. 
      </div>
    </div>

    <div class="review">
      <div class="stars">⭐⭐⭐</div>
      <div class="review-title">Needs Improvement</div>
      <div class="review-text">
        Yatra Hami Sanga has potential, but my experience wasn't great. The driver was late and the car's AC wasn't working. Customer care took too long to respond.
      </div>
    </div>
  </div>
</div>

      </div>
         
</section>
      
      @endsection
