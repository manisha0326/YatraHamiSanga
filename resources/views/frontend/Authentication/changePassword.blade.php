
@section('title','changePassword')

@extends('frontend.layouts.app')

@section('content')
 <section style="padding: 40px 0px 0px 0px">
      <div class="container" style="margin-top:94px;">
        <div class="row g-5">
          <!-- Left Column: Info & Image -->
          <div class="col-md-6 mb-4">
            <div>
              <img
                src="../image/signup.png" alt="" style="width: 600px; height: 700px;"/>
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
            <h2 style="text-align: center; color: #262586; font-family: Roboto; margin: 10px;">"Reset Your Password"</h2>
      <form method="POST" action="{{ route('changePassword') }}" method="post" style=" padding: 40px; border: 1.5px solid #d0d5dd; width: 700px; margin: 40px auto; border-radius: 4px; font-family: Roboto; background-color: #fff;" >
        @csrf
        <div class="mb-3">
          <label for="newPassword" class="form-label"> New Password</label>
          <input type="password" class="form-control @error('newPassword') is-invalid @enderror" id="newPassword" name="newPassword"/>
          @error('newPassword')
            <p class="invalid-feedback">{{ $message}}</p>
          @enderror
        </div>
        <div class="mb-3">
          <label for="confirmPassword" class="form-label">Confirm Password</label>
          <input type="password" class="form-control @error('confirmPassword') is-invalid @enderror" id="confirmPassword" name="confirmPassword" />
          @error('confirmPassword')
            <p class="invalid-feedback">{{ $message}}</p>
          @enderror
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
            margin-top: 20px;
            
          "
        >
          Submit 
        </button>
      
      </form>
          </div>
        </div>
     

    </section>
@endsection













