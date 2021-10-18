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
                @if(session()->has('error'))
                    <div class="alert alert-warning alert-dismissible fade show">
                        {{session()->get('error')}}
                        <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <form method="post" action="{{route('crm.student.login.authenticate')}}">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="user_email" name="email" placeholder="Enter Your Email"  value="{{ (old('email')) ?  old('email') :''}}">
                        <span class="text-danger">@error('email'){{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="user_pass" name="password" placeholder="Enter Your Password" >
                        <span class="text-danger">@error('password'){{$message}}@enderror</span>
                    </div>
                    <div class="mb-3 top-space-10 bottom-space-10">
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
                <div class="auth-link-section">
                    <p class="auth-brief-font">Forgot Password? <a class="auth-link" href="#">Click to Reset</a></p>
                    <p class="auth-brief-font">New to Vivarttana? <a class="auth-link" href="{{route('crm.student.register')}}">Click to Register</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection