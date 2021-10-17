@extends('crm.layout.authlayout')
@section('title','Student Login')
@section('content')
        <div class="card card-body">
        <a href="#"><img src="{{asset('website/images/websiteimages/logos/viv1.jpeg')}}" alt="logo image" style="width:50px;"></a>
        <br>
            <p>USER LOGIN FORM</p>
            Please fill in your credentials to continue<br><br>
            <form class="container" method="get" id="form_details">
                <div class="form-group">
                <input type="text" class="form-control"  name="email" id="user_email" placeholder="Enter your Email" style="border-color: blue;box-shadow:blue;"><br>
                <span id="emailerr" class="text-danger"></span>
                </div>
                <div class="form-group">
                <input type="password" class="form-control" id="user_password" name="password" placeholder="Enter Your Password" maxlength=10 style="border-color: blue;">
                <span id="password-err" class="text-danger"></span>
                </div><br>
                <div class="checkbox">
                <input type="checkbox" value="Keep me Signed in"> Keep me Signed in
                </div><br>
                <div class="btn1"><input class="btn1" type="submit" value="Login" onclick="validateForm()"></div>
                Don't have an account?<a href="register.php"> Sign up here!</a><br>
                Forgot Password?<a href="reset.php"> Click here!</a>
            </form>
        </div>
        
@endsection