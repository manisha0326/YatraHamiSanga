@extends('admin.layouts.app')

@section('adminContent')
    <div class="container mt-5">
        <div class="row justify-content-center">

            <div class="col-md-10">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="row g-0">

                        <div class="col-md-4 p-0 d-flex flex-column align-items-center justify-content-start bg-light">

                            {{-- Show current user profile image or default --}}
                            <img src="{{ Auth::user()->profile_image ? asset('storage/' . Auth::user()->profile_image) : asset('image/default.jpg') }}"
                                alt="Profile Image"
                                style="width: 200px; height: 200px; object-fit: cover; border-radius: 50%;margin-top:80px; " />

                            {{-- Upload Form --}}
                            <form id="uploadForm" action="{{ route('profile.upload') }}" method="POST"
                                enctype="multipart/form-data" class="my-3">
                                @csrf

                                <input type="file" name="profile_image" id="uploadImage" class="d-none" accept="image/*"
                                    onchange="document.getElementById('uploadForm').submit();">

                                <a href="#" onclick="document.getElementById('uploadImage').click();"
                                    class="btn btn-outline-primary">
                                    Upload Image
                                </a>
                            </form>
                        </div>

                        {{-- text place --}}
                        <div class="col-md-8 p-4">
                            <h4 class="mb-4 border-bottom pb-2" style="color:#262586;">Profile Information</h4>

                            {{-- full name --}}
                            <div class="row mb-4">
                                <div class="col-sm-4 text-muted fw-semibold">Full Name:</div>
                                <div class="col-sm-8">{{ Auth::user()->fullname }}</div>
                            </div>

                            {{-- address --}}
                            <div class="row mb-4">
                                <div class="col-sm-4 text-muted fw-semibold">Address:</div>
                                <div class="col-sm-8">{{ Auth::user()->address }}</div>
                            </div>

                            {{-- dob --}}
                            <div class="row mb-4">
                                <div class="col-sm-4 text-muted fw-semibold">Date of Birth:</div>
                                <div class="col-sm-8">{{ Auth::user()->dob }}</div>
                            </div>

                            {{-- email --}}
                            <div class="row mb-4">
                                <div class="col-sm-4 text-muted fw-semibold">Email:</div>
                                <div class="col-sm-8">{{ Auth::user()->email }}</div>
                            </div>

                            {{-- contact --}}
                            <div class="row mb-4">
                                <div class="col-sm-4 text-muted fw-semibold">Contact Number:</div>
                                <div class="col-sm-8">{{ Auth::user()->contact }}</div>
                            </div>

                            {{-- register date --}}
                            <div class="row mb-4">
                                <div class="col-sm-4 text-muted fw-semibold">Registered Date:</div>
                                <div class="col-sm-8">{{ Auth::user()->created_at }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
