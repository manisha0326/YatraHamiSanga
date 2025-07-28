@section('title', 'payment')
@extends('frontend.layouts.app')

@section('content')
    <section style="padding: 40px 0px 0px 0px;color:#ECECEC;margin-top:94px;">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 left-column" style="height: 850px;">
                    <img src="image/pay.png" alt=""
                        style="width: 612px; position: absolute; top: 180px; height: 550px;" />
                    <h2 style="margin-top: 500px;">“Every great journey begins with the right ride.”</h2>
                    <p>Book your ride hassle-free. Fast, easy, and secure booking platform for your convenience.</p>
                </div>


                <div class="col-md-6">
                    @if(session('success'))
                        <div id="alert-message" class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if(session('error'))
                        <div id="alert-message" class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                    <form
                        action="{{ route('booking.store') }}" method="post"
                        style="padding: 40px; border: 1.5px solid #d0d5dd; border-radius: 4px; background-color: #fff; color: #262338; font-family: Roboto; font-size: 16px; margin-bottom: 50px;">
                        @csrf
                        <div class="mb-4">
                            <label for="fullname" class="form-label">Fullname</label>
                            <input type="text" class="form-control @error('fullname') is-invalid @enderror" id="fullname" name="fullname"/>
                            @error('fullname')
                            <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" />
                            @error('email')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                        </div>

                        <div class="mb-4">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="number" class="form-control @error('phoneNumber') is-invalid @enderror" id="phoneNumber" name="phoneNumber" />
                            @error('phoneNumber')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                        </div>

                        <div class="mb-4">
                            <label for="vehicleType" class="form-label" style="color: #262338">Select Vehicle Type</label>
                            <select id="vehicleType" class="form-select @error('vehicleType') is-invalid @enderror" onchange="loadModels(this.value)" name="vehicleType" >
                                <option selected disabled>Select Vehicle Type</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                            @error('vehicleType')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror

                            <div id="dynamicModelsContainer" style="margin-top: 15px; display: none">
                                <label for="dynamicModels" class="form-label" style="color: #262338">Select Vehicle Model</label>
                                <select id="dynamicModels" class="form-select @error('vehicleModel') is-invalid @enderror" name="vehicleModel" >
                                    <option selected disabled>Select a model</option>
                                    @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                                    @endforeach
                                    {{-- All models will be added via JavaScript --}}
                                </select>
                                @error('vehicleModel')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <!-- Bike  -->
                            {{-- <div id="bikeModelsContainer" style="margin-top: 15px; display: none">
                                <label for="bikeModels" class="form-label" style="color: #262338">Select Bike Model</label>
                                <select id="bikeModels" class="form-select">
                                    <option selected disabled>Select bike model</option>
                                    @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                                    @endforeach
                                    <option value="TVS Apache RTR 160 4V">TVS Apache RTR 160 4V</option>
                                    <option value="Hero Glamour HE">Hero Glamour HE</option>
                                    <option value="Royal Enfield Classic 350">Royal Enfield Classic 350</option>
                                </select>
                            </div> --}}


                        </div>

                        <!-- Booking Type -->
                        
                        <div class="mb-4">
                            <div>
                                <label for="bookingType" class="form-label">Booking Type</label>
                                <select name="bookingType" id="bookingType" class="form-select" onchange="handleBookingTypeChange(this)">
                                    <option value="perDay" selected>Per Day</option>
                                    <option value="perHour">Per Hour</option>
                                </select>
                                @error('bookingType')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Per Day Block -->
                        <div id="perDayBlock" class=" mb-4">
                            <div class=" mb-4" >
                                <label for="pickupDate" class="form-label">Pickup Date</label>
                                <input type="date" class="form-control @error('pickupDate') is-invalid @enderror" name="pickupDate" id="pickupDate" />
                                @error('pickupDate')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div >
                                <label for="returnDate" class="form-label">Return Date</label>
                                <input type="date" class="form-control @error('returnDate') is-invalid @enderror" name="returnDate" id="returnDate" />
                                @error('returnDate')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Per Hour Block -->
                        <div id="perHourBlock" class=" mb-4 d-none">
                            <div >
                                <label for="hour" class="form-label">Booking Hour</label>
                                <input type="number" min="1" max="12" name="hour" id="hour" class="form-control @error('hour') is-invalid @enderror" />
                                @error('hour')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Amount Field -->
                        <div class=" mb-4">
                            <div >
                                <label for="amount" class="form-label">Amount</label>
                                <input type="text" name="amount" id="amount" readonly class="form-control @error('amount') is-invalid @enderror" />
                                @error('amount')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>



                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input @error('exampleCheck1') is-invalid @enderror" id="exampleCheck1" name="exampleCheck1" />
                            <label class="form-check-label" for="exampleCheck1">
                                <a href="terms.html" style="text-decoration: none">
                                    <span style="color: #262338">I agree all the </span>
                                    <span style="color: #262586; font-weight: 500">terms and conditions</span>
                                </a>
                            </label>
                            @error('exampleCheck1')
                            <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>

                        {{--  --}}
                        <button type="button" class="btn btn-primary" onclick="showPaymentModal()"
                            style="background-color: #262586; color: white; font-family: Poppins; width: 140px; height: 40px; font-size: 16px; margin-top: 20px;">
                            Submit
                        </button>
                         {{-- <button type="submit" style="border: none; background: none;">
                                            <img src="{{ asset('image/paymentsTypeimg/khaltiii.png') }}" class="img-fluid payment-logo" alt="Khalti" />
                                        </button> --}}

                        <!-- Payment Modal -->
                        <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content" style="background: transparent; border: none">
                                    <div class="modal-body">
                                        <div style="height: 100vh; display: flex; justify-content: center; align-items: center;">
                                            <div class="container"
                                                style="padding: 20px; border: 1.5px solid #d0d5dd; max-width: 450px; border-radius: 15px; background-color: #fff;">
                                                <div class="row g-3 text-center">

                                                    <div class="col-6">
                                                        <a href="#"><img src="./image/paymentsTypeimg/esewa.png"
                                                                class="img-fluid payment-logo" alt="eSewa" /></a>
                                                    </div>
                                                    <div class="col-6"><img src="./image/paymentsTypeimg/paypal.jpg"
                                                            class="img-fluid payment-logo" alt="PayPal" /></div>
                                                    <div class="col-6"><img src="./image/paymentsTypeimg/connect ips.png"
                                                            class="img-fluid payment-logo" alt="Connect IPS" /></div>
                                                    <div class="col-6"><img src="./image/paymentsTypeimg/ime pay.png"
                                                            class="img-fluid payment-logo" alt="IME Pay" /></div>
                                                    <div class="col-6"><img src="./image/paymentsTypeimg/phone pay.png"
                                                            class="img-fluid payment-logo" alt="FonePay" /></div>
                                                    {{-- <div class="col-6">
                                                        <a href="https://test-pay.khalti.com/?pidx=KJgxYAoWQSxexUxMJZDdci"><img src="./image/paymentsTypeimg/khaltiii.png"
                                                                class="img-fluid payment-logo" alt="eSewa" /></a>
                                                    </div>       --}}
                                                    <!--  Khalti Integration -->
                                                    <div class="col-6">
                                                        {{-- <a href="https://test-pay.khalti.com/?pidx=KJgxYAoWQSxexUxMJZDdci"> --}}
                                                        {{-- <form method="POST" action="{{ route('initiate.payment') }}">
                                                            @csrf --}}
                                                            <button type="submit" style="border: none; background: none;">
                                                                <img src="{{ asset('image/paymentsTypeimg/khaltiii.png') }}" class="img-fluid payment-logo" alt="Khalti" />
                                                            </button>
                                                        {{-- </form> --}}
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    
@endsection
@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function () {
    const perDayRate = {{ $brand->price }};
    const perHourRate = perDayRate / 12;

    const pickupDateInput = document.querySelector('[name="pickupDate"]');
    const returnDateInput = document.querySelector('[name="returnDate"]');
    const hourInput = document.getElementById('hour');
    const amountInput = document.getElementById('amount');
    const bookingTypeSelect = document.getElementById("bookingType");
    const perDayBlock = document.getElementById('perDayBlock');
    const perHourBlock = document.getElementById('perHourBlock');

    if (pickupDateInput) pickupDateInput.addEventListener('change', calculatePerDayAmount);
    if (returnDateInput) returnDateInput.addEventListener('change', calculatePerDayAmount);

    function calculatePerDayAmount() {
        const pickup = new Date(pickupDateInput.value);
        const ret = new Date(returnDateInput.value);

        if (pickup && ret && ret >= pickup) {
            const diffTime = ret.getTime() - pickup.getTime();
            const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)) || 1;
            const total = diffDays * perDayRate;
            amountInput.value = total.toFixed(2);
        } else {
            amountInput.value = '';
        }
    }

    if (hourInput) {
        hourInput.addEventListener('input', function () {
            const hours = parseInt(this.value);
            if (hours >= 1 && hours <= 12) {
                const total = hours * perHourRate;
                amountInput.value = total.toFixed(2);
            } else {
                amountInput.value = '';
            }
        });
    }

    function handleBookingTypeChange(select) {
        const value = select.value;
        if (value === 'perDay') {
            showPerDay();
        } else {
            showPerHour();
        }
    }

    function showPerDay() {
        if (perDayBlock && perHourBlock) {
            perDayBlock.classList.remove('d-none');
            perHourBlock.classList.add('d-none');
        }
    }

    function showPerHour() {
        if (perDayBlock && perHourBlock) {
            perHourBlock.classList.remove('d-none');
            perDayBlock.classList.add('d-none');
        }
    }

    if (bookingTypeSelect) {
        bookingTypeSelect.addEventListener('change', function () {
            handleBookingTypeChange(this);
        });

        // Restore saved data from localStorage
        const data = JSON.parse(localStorage.getItem("bookingData"));
        if (data) {
            bookingTypeSelect.value = data.bookingType;
            handleBookingTypeChange(bookingTypeSelect);

            if (data.bookingType === "perDay") {
                pickupDateInput.value = data.pickupDate;
                returnDateInput.value = data.returnDate;
            } else {
                hourInput.value = data.hour;
            }

            amountInput.value = data.amount;

            localStorage.removeItem("bookingData");
        }
    }
});
</script>
@endpush




