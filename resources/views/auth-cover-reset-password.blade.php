@extends('layouts.auth')

@section('title', 'Change Password')

@section('content')

  <!--authentication-->

  <div class="section-authentication-cover">
    <div class="">
      <div class="row g-0">

        <div class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex border-end">

          <div class="card rounded-0 mb-0 border-0 shadow-none bg-transparent">
            <div class="card-body">
              <img src="{{ URL::asset('build/images/auth/forgot-password1.png') }}" class="img-fluid auth-img-cover-login" width="600"
                alt="">
            </div>
          </div>

        </div>

        <div class="col-12 col-xl-5 col-xxl-4 auth-cover-right align-items-center justify-content-center">
          <div class="card rounded-0 m-3 mb-0 border-0 shadow-none">
            <div class="card-body p-5">
              <img src="{{ URL::asset('build/images/logo1.png') }}" class="mb-4" width="145" alt="">
              <h4 class="fw-bold">Genrate New Password</h4>
              <p class="mb-0">We received your reset password request. Please enter your new password!</p>
              <div class="form-body mt-4">
                <form class="row g-3">
                  <div class="col-12">
                    <label class="form-label" for="NewPassword">New Password</label>
                    <input type="text" class="form-control" id="NewPassword" placeholder="Enter new password">
                  </div>
                  <div class="col-12">
                    <label class="form-label" for="ConfirmPassword">Confirm Password</label>
                    <input type="text" class="form-control" id="ConfirmPassword" placeholder="Confirm password">
                  </div>
                  <div class="col-12">
                    <div class="d-grid gap-2">
                      <button type="button" class="btn btn-primary">Change Password</button>
                       <a href="auth-cover-login" class="btn btn-light">Back to Login</a>
                    </div>
                  </div>
                </form>
              </div>
    
          </div>
          </div>
        </div>

      </div>
      <!--end row-->
    </div>
  </div>

@endsection