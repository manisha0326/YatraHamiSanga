
@section('title','Forget Password')

@extends('frontend.layouts.app')

@section('content')
<section style="padding: 40px 0px 0px 0px">
      <div class="container" style="margin-top:94px;">
        <div class="row g-5">
          <!-- Left Column: Info & Image -->
          <div class="col-md-6 mb-4">
            <div>
              <img
                src="../image/forgetPassword.png" alt="" style="width: 600px; height: 600px;"/>
            </div>
           
          </div>

          <!-- Right Column: Form -->
          <div class="col-md-6">
             @if(session('success'))
                <div id="alert-message" class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div id="alert-message" class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <h2 style="text-align: center; color: #262586; font-family: Roboto; margin: 10px;">"Forgot Your Password?"</h2>
            <p style="text-align: center; font-family: Roboto; font-size: 20px; margin-top: 20px;">Don’t worry, we’ll send you an OTP to recover your password.</p>
      <form action="{{ route('forgetPassword') }}" method="post" style=" padding: 40px; border: 1.5px solid #d0d5dd; width: 700px; margin: 40px auto; border-radius: 4px; font-family: Roboto; background-color: #fff;" >
        @csrf
        <div class="mb-3">
          <label for="Email" class="form-label">Please enter your registered email address </label>
          <input type="text" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" id="email" name="email" style="margin-top: 10px;"/>
          @error('email')
            <p class="invalid-feedback">{{ $message}}</p>
          @enderror
        </div>
        <button
          type="submit"
          class="btn"
          name="sendOtp"
          style="
            background-color: #262586;
            color: white;
            font-family: poppins;
            width: 140px;
            height: 40px;
            font-size: 16px;
            margin-top: 10px;
          "
        >
          Send OTP
        </button>
        
      </form>
          </div>
        </div>
     

    </section>

@endsection









