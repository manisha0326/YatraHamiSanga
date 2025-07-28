 @section('title','payment')
@extends('frontend.layouts.app')

@section('content')
      <section style="padding: 40px 0px 0px 0px;color:#ECECEC;">
      <div class="container">
        <div class="row g-5">
          <div class="col-md-6 left-column">
            <img
              src="image/pay.png"
              alt=""
              style="
                width: 612px;
                position: absolute;
                top: 100px;
                top: 180px;
                height: 600px;
              "
            />
            <h2>“Every great journey begins with the right ride.”</h2>
            <p>
              Book your ride hassle-free. Fast, easy, and secure booking
              platform for your convenience.
            </p>
          </div>

          <!-- Right Column: Form -->
          <div class="col-md-6">
            <!-- <h2 style="text-align: center; margin-top: 0px; color: #262586; font-family: Roboto;margin-top: 20px;">
          "Every great journey begins with the right ride."
        </h2> -->
            <form
              style="
                padding: 40px;
                border: 1.5px solid #d0d5dd;
                border-radius: 4px;
                background-color: #fff;
                color: #262338;
                font-family: Roboto;
                font-size: 16px;
                margin-top: 0px;
                margin-bottom: 50px;
              "
            >
              <div class="mb-4">
                <label for="fullname" class="form-label">Fullname</label>
                <input type="text" class="form-control" id="fullname" />
              </div>

              <div class="mb-4">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" />
              </div>
              <div class="mb-4">
                <label for="phone" class="form-label">Phone</label>
                <input type="number" class="form-control" id="phone" />
              </div>
              <div class="mb-4">
                <label
                  for="vehicleType"
                  class="form-label"
                  style="color: #262338"
                  >Select Vehicle Type</label
                >
                <select
                  id="vehicleType"
                  class="form-select"
                  onchange="showModelDropdown()"
                >
                  <option selected disabled>Select vehicle type</option>
                  <option value="bike">Bike</option>
                  <option value="scooter">Scooter</option>
                  <option value="car">Car</option>
                  <option value="scorpio">Scorpio</option>
                  <option value="hiace">Hiace</option>
                </select>

                <!-- Bike Models Dropdown (initially hidden untilll click nabhaya saamaaa) -->
                <div
                  id="bikeModelsContainer"
                  style="margin-top: 15px; display: none"
                >
                  <label
                    for="bikeModels"
                    class="form-label"
                    style="color: #262338"
                    >Select Bike Model</label
                  >
                  <select id="bikeModels" class="form-select">
                    <option selected disabled>Select bike model</option>
                    <option value="TVS Apache RTR 160 4V">
                      TVS Apache RTR 160 4V
                    </option>
                    <option value="Hero Glamour HE">Hero Glamour HE</option>
                    <option value="Royal Enfield Classic 350">
                      Royal Enfield Classic 350
                    </option>
                  </select>
                </div>
                <!-- Scooter Models -->
                <div
                  id="scooterModelsContainer"
                  style="margin-top: 15px; display: none"
                >
                  <label
                    for="scooterModels"
                    class="form-label"
                    style="color: #262338"
                    >Select Scooter Model</label
                  >
                  <select id="scooterModels" class="form-select">
                    <option selected disabled>Select scooter model</option>
                    <option value="Honda Activa 6G">Vespa Scooter</option>
                    <option value="TVS Jupiter">TVS Scooter</option>
                    <option value="Suzuki Access 125">Yamaha Scooter</option>
                  </select>
                </div>

                <!-- Car Models -->
                <div
                  id="carModelsContainer"
                  style="margin-top: 15px; display: none"
                >
                  <label
                    for="carModels"
                    class="form-label"
                    style="color: #262338"
                    >Select Car Model</label
                  >
                  <select id="carModels" class="form-select">
                    <option selected disabled>Select car model</option>
                    <option value="Maruti Suzuki Swift">Toyota Glanza</option>
                    <option value="Hyundai i20">
                      Maruti Suzuki Grand Vitara
                    </option>
                    <option value="Tata Nexon">Honda Amaze</option>
                    <option value="Tata Nexon">Hyundai VERNA</option>
                  </select>
                </div>

                <!-- Scorpio Models -->
                <div
                  id="scorpioModelsContainer"
                  style="margin-top: 15px; display: none"
                >
                  <label
                    for="scorpioModels"
                    class="form-label"
                    style="color: #262338"
                    >Select Scorpio Model</label
                  >
                  <select id="scorpioModels" class="form-select">
                    <option selected disabled>Select Scorpio model</option>
                    <option value="Mahindra Scorpio S3">
                      MAHINDRA Scorpio-N
                    </option>
                    <option value="Mahindra Scorpio S5">
                      Mahindra Scorpio Classic
                    </option>
                    <option value="Mahindra Scorpio S5">Tata Safari SUV</option>
                    <option value="Mahindra Scorpio S5">
                      MAHINDRA Thar ROXX
                    </option>
                  </select>
                </div>

                <!-- Hiace Models -->
                <div
                  id="hiaceModelsContainer"
                  style="margin-top: 15px; display: none"
                >
                  <label
                    for="hiaceModels"
                    class="form-label"
                    style="color: #262338"
                    >Select Hiace Model</label
                  >
                  <select id="hiaceModels" class="form-select">
                    <option selected disabled>Select Hiace model</option>
                    <option value="Toyota Hiace Commuter">
                      Toyota Hiace Van
                    </option>
                    <option value="Toyota Hiace GL">
                      Toyota Hiace 14 Seats Mini Bus
                    </option>
                    <option value="Toyota Hiace GL">
                      Toyota Hiace Standard Roof
                    </option>
                  </select>
                </div>
              </div>
              <div class="mb-4">
                <label for="pdate" class="form-label">Pick Date</label>
                <input type="date" class="form-control" name="pdate" />
              </div>
              <div class="mb-4">
                <label for="rdate" class="form-label">Return Date</label>
                <input type="date" class="form-control" name="rdate" />
              </div>
              <div class="mb-4">
                <label for="payment" class="form-label">Payment</label>
                <input type="text" class="form-control" name="payment" />
              </div>
              <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" />
              </div>
              <div class="mb-3 form-check">
                <input
                  type="checkbox"
                  class="form-check-input"
                  id="exampleCheck1"
                />
                <label class="form-check-label" for="exampleCheck1"
                  ><a href="terms.html" style="text-decoration: none"
                    ><span style="color: #262338">I agree all the </span
                    ><span style="color: #262586; font-weight: 500"
                      >terms and conditions</span
                    ></a
                  ></label
                >
              </div>
              <button
                type="button"
                class="btn btn-primary"
                onclick="showPaymentModal()"
                style="
                  background-color: #262586;
                  color: white;
                  font-family: Poppins;
                  width: 140px;
                  height: 40px;
                  font-size: 16px;
                  margin-top: 20px;
                "
              >
                Submit
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>
@include('frontend.layouts.footer')

<!-- popout kolagi -->
    <div
      class="modal fade"
      id="paymentModal"
      tabindex="-1"
      aria-labelledby="paymentModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div
          class="modal-content"
          style="background: transparent; border: none"
        >
          <div class="modal-body">
            <div
              style="
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
              "
            >
              <div
                class="container"
                style="
                  padding: 20px;
                  border: 1.5px solid #d0d5dd;
                  max-width: 450px;
                  border-radius: 15px;
                  background-color: #fff;
                "
              >
                <div class="row g-3 text-center">
                  <div class="col-6">
                    <img
                      src="./image/paymentsTypeimg/esewa.png"
                      class="img-fluid payment-logo"
                      alt="eSewa"
                    />
                  </div>
                  <div class="col-6">
                    <img
                      src="./image/paymentsTypeimg/paypal.jpg"
                      class="img-fluid payment-logo"
                      alt="PayPal"
                    />
                  </div>
                  <div class="col-6">
                    <img
                      src="./image/paymentsTypeimg/connect ips.png"
                      class="img-fluid payment-logo"
                      alt="Connect IPS"
                    />
                  </div>
                  <div class="col-6">
                    <img
                      src="./image/paymentsTypeimg/ime pay.png"
                      class="img-fluid payment-logo"
                      alt="IME Pay"
                    />
                  </div>
                  <div class="col-6">
                    <img
                      src="./image/paymentsTypeimg/phone pay.png"
                      class="img-fluid payment-logo"
                      alt="FonePay"
                    />
                  </div>
                  <div class="col-6">
                    <img
                      src="./image/paymentsTypeimg/khaltiii.png"
                      class="img-fluid payment-logo"
                      alt="Khalti"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection