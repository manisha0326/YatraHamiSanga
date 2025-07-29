@section('title', 'Verify OTP')

@extends('frontend.layouts.app')

@section('content')

    <section style="padding: 40px 0px 0px 0px">
        <div class="container" style="margin-top:94px;">
            <div class="row g-5">
                <!-- Left Column: Info & Image -->
                <div class="col-md-6 mb-4">
                    <div>
                        <img src="../image/verifypassword.png" alt="" style="width: 600px; height: 600px;" />
                    </div>

                </div>

                <!-- Right Column: Form -->
                <div class="col-md-6">
                    @if (session('success'))
                        <div id="alert-message" class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if (session('error'))
                        <div id="alert-message" class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                    <h2 style="text-align: center; color: #262586; font-family: Roboto; margin: 10px;">"Check your email for
                        the OTP"</h2>

                    <form method="POST" action="{{ route('verifyOTP') }} "
                        style=" padding: 40px; border: 1.5px solid #d0d5dd; width: 700px; margin: 40px auto; border-radius: 4px; font-family: Roboto; background-color: #fff;">
                        @csrf
                        <div class="mb-3">
                            <label for="verifyOTP" class="form-label">Please enter the OTP sent to your registered email.
                            </label>
                            <div class="otp-box">
                                @for ($i = 0; $i < 6; $i++)
                                    <input type="text" class="form-control" name="otp[]" maxlength="1" required>
                                @endfor
                            </div>

                        </div>

                        <button type="submit" class="btn" name="sendOtp"
                            style="
            background-color: #262586;
            color: white;
            font-family: poppins;
            width: 140px;
            height: 40px;
            font-size: 16px;
            margin-top: 20px;
          ">
                            Verify OTP
                        </button>
                        <p style="text-align: center;margin: 30px 0px 20px 0px;">Didn't receive the OTP? <a
                                href="{{ route('resendOTP') }} "
                                style="text-decoration: none; color: #262586; font-family: poppins;">Resend</a></p>

                    </form>

                </div>
            </div>


    </section>

@endsection
