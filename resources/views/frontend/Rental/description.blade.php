@section('title','Rental')

@extends('frontend.layouts.app')

@section('content')

<section style="margin-top: 50px;margin-bottom: 50px;">
        <div class="container_apache" style="margin-top:150px;">
          <div class="main-section">
            <div class="image-section">
              <img src="{{ asset('storage/' . $brand->image) }}" alt="{{ $brand->brand_name }}" style="height: 500px; object-fit:contain">
            </div>
            <div class="details-section">
              <h2 style="color: #262586">{{$brand->category->category_name ?? 'Unknown' }} Details</h2>
              <p><span style="font-size: 22px; font-weight:bolder;color:#212529 ">Price: </span>NRS {{ $brand->price}} / day</p>

              <div>
                {!! $brand->description !!}
              </div>
              
            </div>
          </div>
        

<div class="image-form-wrapper">
  <img src="/image/travel.jpeg" alt="travel" class="background-image" />

  <!-- Per Day Booking Block -->
  <div id="perDayBlock" class="form-overlay visible" >
    <div class="row g-3 align-items-end" >
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
          <button type="submit" class="btn btn-primary" onclick="storeBookingData()">Submit</button>
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
          <button type="submit" class="btn btn-primary" onclick="storeBookingData()">Submit</button>
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
<script>
  const perDayRate = {{ $brand->price }};
  const perHourRate = perDayRate / 12;

  console.log('perDayRate:', perDayRate, 'perHourRate:', perHourRate);

  function calculatePerDayAmount() {
    const pickup = new Date(document.getElementById("pickupDate").value);
    const drop = new Date(document.getElementById("returnDate").value);
    const amountField = document.getElementById("amountDay");

    if (!isNaN(pickup.getTime()) && !isNaN(drop.getTime()) && pickup <= drop) {
      const msPerDay = 1000 * 60 * 60 * 24;
      const diffDays = Math.ceil((drop - pickup) / msPerDay) || 1;

      amountField.value = (diffDays * perDayRate).toFixed(2);
    } else {
      amountField.value = '';
    }
  }

  function calculatePerHourAmount() {
    const hourInput = document.getElementById("bookingHour");
    const amountField = document.getElementById("amountHour");
    const hours = parseInt(hourInput.value);

    if (!isNaN(hours) && hours > 0 && hours <= 12) {
      amountField.value = (hours * perHourRate).toFixed(2);
    } else {
      amountField.value = '';
    }
  }

  document.getElementById("pickupDate").addEventListener("change", calculatePerDayAmount);
  document.getElementById("returnDate").addEventListener("change", calculatePerDayAmount);
  document.getElementById("bookingHour").addEventListener("input", calculatePerHourAmount);
</script>
<script>
  function storeBookingData() {
    const pickupDate = document.getElementById("pickupDate")?.value || '';
    const returnDate = document.getElementById("returnDate")?.value || '';
    const hour = document.getElementById("bookingHour")?.value || '';
    const amountDay = document.getElementById("amountDay")?.value || '';
    const amountHour = document.getElementById("amountHour")?.value || '';

    const bookingType = pickupDate && returnDate ? 'perDay' : 'perHour';
    const amount = bookingType === 'perDay' ? amountDay : amountHour;

    localStorage.setItem("bookingData", JSON.stringify({
      bookingType,
      pickupDate,
      returnDate,
      hour,
      amount
    }));

    // Redirect to payment page
    window.location.href = "{{ url('/payment') }}";
  }
</script>


