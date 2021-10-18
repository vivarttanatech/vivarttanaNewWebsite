@extends('crm.layout.authlayout')
@section('title','Student Login')
@section('custom_css')
@endsection
@section('content')
    <div class="">
        <div class="card auth-card-custom">
            <div class="card-body">
                <a class="auth-card-logo-container" href="#"><img class="auth-card-logo" src="{{asset('website/images/websiteimages/logos/logo.png')}}" alt="logo image"></a>
                <h6 class="text-center">User Login Form</h6>
                <p class="text-center auth-brief-font">Please fill in your credentials to continue</p>
                <form method="post" action="{{route('crm.student.register.save')}}">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="user_name" name="name" placeholder="Enter Your Name"  value="{{ (old('name')) ?  old('name') :''}}">
                        <span class="text-danger">@error('name'){{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="user_phone" name="phone_no" placeholder="Enter Your Phone number" value="{{ (old('phone_no')) ?  old('phone_no') :''}}">
                        <span class="text-danger">@error('phone_no'){{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="user_email" name="email" placeholder="Enter Your Email"  value="{{ (old('email')) ?  old('email') :''}}">
                        <span class="text-danger">@error('email'){{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="user_pass" name="password" placeholder="Enter Your Password" >
                        <span class="text-danger">@error('password'){{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="user_confpass" name="password_confirmation" placeholder="Confirm Your Password" >
                        <span class="text-danger">@error('password_confirmation'){{$message}}@enderror</span>
                    </div>
                    <div class="mb-3 top-space-10 bottom-space-10">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="true" name="signedInn" id="defaultCheck1">
                            <label class="form-check-label auth-brief-font" for="defaultCheck1">
                                I agree to all the terms and conditions of Vivarttana Technologies
                            </label>
                        </div>
                    </div>
                    <div class="d-grid gap-2 mx-auto">
                        <Button type="submit" class="btn btn-primary btn">Sign Up</Button>
                    </div>
                </form>
                <div class="auth-link-section">
                    <p class="auth-brief-font">Already have and Account ? <a class="auth-link" href="{{route('crm.student.login')}}">Login here</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
