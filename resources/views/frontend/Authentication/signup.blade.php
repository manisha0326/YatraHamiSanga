@section('title', 'Sign Up')

@extends('frontend.layouts.app')

@section('content')
    <section style="padding: 40px 0px 0px 0px">
        <div class="container" style="margin-top:94px;">
            <div class="row g-2">
                <div class="col-md-6 mb-4">
                    <div>
                        <img src="../image/signup.png" alt="Signup" style="width: 100%; height: auto; margin-top: 40px;" />
                    </div>

                </div>


                <div class="col-md-6">
                    <h2 style="
          text-align: center; color: #262586;  font-family: Roboto; ">"Registration Form"
                    </h2>
                    <form action="{{ route('signup') }}" method="post"
                        style="
          padding: 40px;
          border: 1.5px solid #d0d5dd;
          width: 700px;
          margin: 40px auto;
          border-radius: 4px;
          font-family: Roboto;
          background-color: #fff;
        ">
                        @csrf
                        <div class="mb-3">
                            <label for="Full Name" class="form-label">Full Name</label>
                            <input type="text" value="{{ old('fullname') }}"
                                class="form-control @error('fullname') is-invalid @enderror" id="fullname"
                                name="fullname" />
                            @error('fullname')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Email" class="form-label">Email</label>
                            <input type="text" value="{{ old('email') }}"
                                class="form-control @error('email') is-invalid @enderror" id="email" name="email" />
                            @error('email')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Address" class="form-label">Address</label>
                            <input type="text" value="{{ old('address') }}"
                                class="form-control @error('address') is-invalid @enderror" id="address" name="address" />
                            @error('address')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Date Of Birth" class="form-label">Date Of Birth</label>
                            <input type="date" value="{{ old('dob') }}"
                                class="form-control @error('dob') is-invalid @enderror" id="dob" name="dob" />
                            @error('dob')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3"
                            style="
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
          ">
                            <label for="gender" class="form-label">Gender</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="male"
                                    value="male" />Male
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="female"
                                    value="female" />Female
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="other"
                                    value="other" />Other
                            </div>
                            @error('gender')
                                <br>
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Contact" class="form-label">Contact Number</label>
                            <input type="text" value="{{ old('contact') }}"
                                class="form-control @error('dob') is-invalid @enderror" id="contact" name="contact" />
                            @error('contact')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Password" class="form-label">Password </label>
                            <input type="password" class="form-control @error('dob') is-invalid @enderror" id="password"
                                name="password" />
                            @error('password')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input @error('') is-invalid @enderror" id="terms"
                                name="terms" />
                            <label class="form-check-label" for="exampleCheck1"><a href="terms.html"
                                    style="text-decoration: none; color: #262338">I agree all the
                                    <span style="color: #262586; font-weight: 600">terms and conditions</span></a></label>
                            @error('terms')
                                <br>
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="btn"
                            style="
            background-color: #262586;
            color: white;
            font-family: poppins;
            width: 140px;
            height: 40px;
            font-size: 16px;
          ">
                            Submit
                        </button>
                        <div class="text-center">
                            <p style="margin-top: 30px; font-family: poppins; color: #262338">
                                Already have an Account?
                                <a style="text-decoration: none; font-family: poppins" href="{{ route('login') }}"><span
                                        style="color: #262586; font-weight: 600">Login</span></a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>


    </section>
@endsection
