@extends('crm.layout.authlayout')
@section('title','Admin Login')
@section('custom_css')
@endsection
@section('content')
    <div class="">
        <div class="card auth-card-custom">
            <div class="card-body">
                <a class="auth-card-logo-container" href="#"><img class="auth-card-logo" src="{{asset('website/images/websiteimages/logos/logo.png')}}" alt="logo image"></a>
                <h6 class="text-center">User Login Form</h6>
                <p class="text-center auth-brief-font">Please fill in your credentials to continue</p>
                <form method="get">
                    <div class="form-group">
                        <input type="text" class="form-control"  name="email" id="user_email" placeholder="Enter your Email" style="border-color: blue;box-shadow:blue;"><br>
                        <span id="emailerr" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="user_password" name="password" placeholder="Enter Your Password" maxlength=10 style="border-color: blue;">
                        <span id="password-err" class="text-danger"></span>
                    </div>
                    <div class="form-group top-space-10 bottom-space-10">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="true" name="signedInn" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                              Keep Me Signed In
                            </label>
                        </div>
                    </div>
                    <div class="d-grid gap-2 mx-auto">
                        <Button type="submit" class="btn btn-primary btn">Login</Button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection