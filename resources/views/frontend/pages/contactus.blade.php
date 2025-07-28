@extends('frontend.layouts.app')

@section('content')

<section style="padding: 40px 0px 0px 0px">
  <div class="container" style="margin-top:94px;">
    <div class="row g-5 align-items-start">
      
      <!-- Left Column -->
      <div class="col-md-6 mb-4">
        <div>
          <img src="./image/contact.png" alt="Contact" style="width: 100%; height: auto;" />
        </div>

        <div style="margin-top: 20px;">
          <div style="display: flex; gap: 10px; align-items: center; margin-bottom: 10px;">
            <img src="./image/call_24dp_1F1F1F_FILL0_wght400_GRAD0_opsz24.svg" alt="Call" />
            <p style="color: #262338; margin: 0;">9863482905, 9862090518</p>
          </div>

          <div style="display: flex; gap: 10px; align-items: center; margin-bottom: 10px;">
            <img src="./image/mail_24dp_1F1F1F_FILL0_wght400_GRAD0_opsz24.svg" alt="Email" />
            <p style="color: #262338; margin: 0;">yatra9980@gmail.com</p>
          </div>

          <div style="display: flex; gap: 10px; align-items: center;">
            <img src="./image/location_on_24dp_1F1F1F_FILL0_wght400_GRAD0_opsz24.svg" alt="Location" />
            <p style="color: #262338; margin: 0;">Kathmandu, Nepal</p>
          </div>
        </div>
      </div>

      <!-- Right Column -->
      <div class="col-md-6">
        <h4 style="color: #262586; font-family: Roboto; text-align: center;">
          "Don't hesitate to drop your queries"
        </h4>
        
        <form
          style="padding: 30px; margin-top: 30px; border: 1.5px solid #d0d5dd; border-radius: 4px; background-color: #fff;">
          <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="name" />
          </div>
          <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" class="form-control" id="Email" />
          </div>
          <div class="mb-3">
            <label for="contact" class="form-label">Contact Number</label>
            <input type="number" class="form-control" id="contact" />
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Write a message</label>
            <textarea class="form-control" id="message" rows="3"></textarea>
          </div>
          {{-- <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" />
            <label class="form-check-label" for="exampleCheck1">
              I agree to all terms and conditions
            </label>
          </div> --}}
          <button type="submit" class="btn" style="
            background-color: #262586;
            color: white;
            width: 140px;
            height: 40px;
            font-family: poppins;
            font-size: 16px;">
            Submit
          </button>
        </form>
      </div>
    </div>
  </div>

  <!-- Map -->
  <div class="image">
    <a href="https://www.google.com/maps/place/New+Baneshwor,+Kathmandu+44600/@27.6947545,85.2986184,13z/data=!4m6!3m5!1s0x39eb199a06c2eaf9:0xc5670a9173e161de!8m2!3d27.6915196!4d85.3420486!16s%2Fg%2F1v3dqjnc?entry=ttu">
      <img src="../image/map.svg" alt="Map" style="margin-top:20px; "/>
    </a>
  </div>
</section>

@endsection
