@section('title', 'Contactus')
@extends('user.layouts.app')

@section('userContent')
    <section style="padding: 0px 0px 0px 0px;">
        <div class="container" style="margin-top:70px;">
            <div class="row g-5 align-items-start">
                <!-- Left Column: Info & Image -->
                <div class="col-md-6 mb-4">
                    <div>
                        <img src="./image/contact.png" alt="Contact" style="width: 100%; height: auto;" />
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

                    <h4 style="color: #262586; font-family: Roboto; text-align: center">
                        "Don't hesitate to drop your queries"
                    </h4>
                    <form action="{{ route('contactus') }}" method="post"
                        style="
                padding: 30px;
                margin-top: 30px;
                width: 550px;
                border: 1.5px solid #d0d5dd;
                border-radius: 4px;
                background-color: #fff;
              ">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control @error('fullname') is-invalid @enderror"
                                id="fullname" name="fullname" />
                            @error('fullname')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Email" class="form-label">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" />
                            @error('email')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="contact" class="form-label">Contact Number</label>
                            <input type="number" class="form-control @error('contactNumber') is-invalid @enderror"
                                id="contactNumber" name="contactNumber" />
                            @error('contactNumber')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Write a message</label>
                            <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="3"></textarea>
                            @error('message')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>


                        <button type="submit" class="btn"
                            style="
                  background-color: #262586;
                  color: white;
                  width: 140px;
                  height: 40px;
                  font-family: poppins;
                  font-size: 16px;
                ">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
       
    </section>
@endsection
