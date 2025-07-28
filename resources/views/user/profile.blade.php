@extends('user.layouts.app')

@section('userContent')
    <div class="container mt-5">
        <div class="row justify-content-center">

            <div class="col-md-10">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="row g-0">

                        <div class="col-md-4 p-0 d-flex flex-column align-items-center justify-content-start bg-light">
                            
                           <img src="{{ asset('image/boy.jpg') }}" alt="Profile Image"
                                style="width: 200px; height: 200px; object-fit: cover; border-radius: 50%;margin-top:80px;">


                            
                            <div class="my-3">
                                
                                <input type="file" id="uploadImage" class="d-none" accept="image/*">

                                
                                <a href="#" onclick="document.getElementById('uploadImage').click();"
                                    class="btn btn-outline-primary">
                                    Upload Image
                                </a>
                            </div>
                        </div>

                        {{-- text place --}}
                        <div class="col-md-8 p-4">
                            <h4 class="mb-4 border-bottom pb-2" style="color:#262586;">Profile Information</h4>

                            {{-- full name --}}
                            <div class="row mb-4">
                                <div class="col-sm-4 text-muted fw-semibold">Full Name:</div>
                                <div class="col-sm-8">Ram</div>
                            </div>

                            {{-- address --}}
                            <div class="row mb-4">
                                <div class="col-sm-4 text-muted fw-semibold">Address:</div>
                                <div class="col-sm-8">ktm, City</div>
                            </div>

                            {{-- dob --}}
                            <div class="row mb-4">
                                <div class="col-sm-4 text-muted fw-semibold">Date of Birth:</div>
                                <div class="col-sm-8">1999-06-15</div>
                            </div>

                            {{-- email --}}
                            <div class="row mb-4">
                                <div class="col-sm-4 text-muted fw-semibold">Email:</div>
                                <div class="col-sm-8">ram@example.com</div>
                            </div>

                            {{-- contact --}}
                            <div class="row mb-4">
                                <div class="col-sm-4 text-muted fw-semibold">Contact Number:</div>
                                <div class="col-sm-8">+977-9800000000</div>
                            </div>

                            {{-- register date --}}
                            <div class="row mb-4">
                                <div class="col-sm-4 text-muted fw-semibold">Registered Date:</div>
                                <div class="col-sm-8">2024-07-01</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
