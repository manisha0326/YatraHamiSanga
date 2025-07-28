
@section('title','Login')

@extends('frontend.layouts.app')

@section('content')
    <section style="padding: 40px 0px 0px 0px">
      <div class="container" style="margin-top:94px;">
        <div class="row g-5">
          <!-- Left Column: Info & Image -->
          <div class="col-md-6 mb-4">
            <div>
              <img
                src="../image/login.png" alt="" style="width: 600px; height: 600px;"/>
            </div>
           
          </div>

          <!-- Right Column: Form -->
          <div class="col-md-6">
            @if (Session::has('success'))
              <div id="alert-message" class="alert alert-success">{{ Session::get('success') }} </div>
            @endif
            @if (Session::has('error'))
              <div id="alert-message" class="alert alert-danger">{{ Session::get('error') }} </div>
            @endif
            <h2 style="text-align: center; color: #262586; font-family: Roboto;">"Welcome Back!"</h2>
      <form action="{{ route('login') }}" method="post" style=" padding: 40px; border: 1.5px solid #d0d5dd; width: 700px; margin: 40px auto; border-radius: 4px; font-family: Roboto; background-color: #fff;" >
        @csrf
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="text" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror"  id="email" name="email" />
          @error('email')
            <p class="invalid-feedback">{{ $message}}</p>
          @enderror
        </div>
        <div class="mb-3">
          <label for="Password" class="form-label">Password</label>
          <input type="password" class="form-control @error('password') is-invalid @enderror"  id="password" name="password" />
          @error('password')
            <p class="invalid-feedback">{{ $message}}</p>
          @enderror
        </div>
        <div class="mb-3 form-check" style="display: flex; justify-content: space-between; margin-top: 20px;">
          <div>
          <input type="checkbox" class="form-check-input" id="exampleCheck1" />
          <label class="form-check-label" for="exampleCheck1">Remember me
            
          </label>
          </div>
          <div > 
            <a href="{{ route('forgetPassword') }}" style="text-decoration: none; color: #262586; font-family: poppins;">Forgot Password?</a>
          </div>
        </div>
        <button
          type="submit"
          class="btn"
          style="
            background-color: #262586;
            color: white;
            font-family: poppins;
            width: 140px;
            height: 40px;
            font-size: 16px;
          "
        >
          Submit
        </button>
        <div class="text-center" style="margin-top: 50px;">
          <p style="margin-top: 50px; font-family: poppins; color: #262338">
            Don't have an Account?
            <a
              style="text-decoration: none; font-family: poppins;"
              href="{{ route('signup') }}"
              ><span style="color: #262586; font-weight: 600">SignUp</span></a
            >
          </p>
        </div>
      </form>
          </div>
        </div>
     

    </section>
@endsection






