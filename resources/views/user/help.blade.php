@extends('user.layouts.app')

@section('userContent')
    <section style="padding: 40px 0px 0px 0px">
      <div class="container">
        <div class="row g-5">
          <!-- Left Column: Info & Image -->
          <div class="col-md-6 mb-4">
            <div>
              <img
                src="./image/contact.png"
                alt=""
                style="width: 600px; height: 500px"
              />
            </div>
            {{-- <div>
              <div style="display: flex; gap: 20px; align-items: center">
                <img
                  src="./image/call_24dp_1F1F1F_FILL0_wght400_GRAD0_opsz24.svg"
                  alt=""
                />
                <p style="color: #262338; margin-top: 10px">
                  9863482905,9862090518
                </p>
              </div>
              <div style="display: flex; gap: 20px; align-items: center">
                <img
                  src="./image/mail_24dp_1F1F1F_FILL0_wght400_GRAD0_opsz24.svg"
                  alt=""
                />
                <p style="color: #262338; margin-top: 10px">
                  yatra9980@gmail.com
                </p>
              </div>
              <div style="display: flex; gap: 20px; align-items: center">
                <img
                  src="./image/location_on_24dp_1F1F1F_FILL0_wght400_GRAD0_opsz24.svg"
                  alt=""
                />
                <p style="color: #262338; margin-top: 10px">kathmandu,Nepal</p>
              </div>
            </div> --}}
          </div>

          <!-- Right Column: Form -->
          <div class="col-md-6">
            <h4 style="color: #262586; font-family: Roboto; text-align: center">
              "Don't hesitate to drop your queries"
            </h4>
            <form
              style="
                padding: 30px;
                margin-top: 30px;
                border: 1.5px solid #d0d5dd;
                border-radius: 4px;
                background-color: #fff;
              "
            >
              <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" />
              </div>
              <div class="mb-3">
                <label for="Email" class="form-label">Email</label>
                <input type="email" class="form-control" id="Email" />
              </div>
              <div class="mb-3">
                <label for="conatct" class="form-label">Contact Number</label>
                <input type="number" class="form-control" id="conatct" />
              </div>
              <div class="mb-3">
                <label for="message" class="form-label">Write a message</label>
                <textarea class="form-control" id="message" rows="3"></textarea>
              </div>
              <div class="mb-3 form-check">
                <input
                  type="checkbox"
                  class="form-check-input"
                  id="exampleCheck1"
                />
                <label class="form-check-label" for="exampleCheck1"
                  >I agree to all terms and conditions</label
                >
              </div>
              <button
                type="submit"
                class="btn"
                style="
                  background-color: #262586;
                  color: white;
                  width: 140px;
                  height: 40px;
                  font-family: poppins;
                  font-size: 16px;
                "
              >
                Submit
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>
@endsection