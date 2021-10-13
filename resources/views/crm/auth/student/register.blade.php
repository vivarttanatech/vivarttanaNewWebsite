@extends('crm.layout.crmlayout')
@section('title','Student Register')
@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Registration</title>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
            #logo{
                object-position: left top;
            }
            .navbar-nav{
                flex-direction: row;
            }
            .nav-item
            {
                padding-left:30px;
            }
            .card-body{
                width:380px;
                height:540px;
                top:40px;
                padding-top:30px;
                border:none;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
            .btn1{
                width:300px;
                color:white;
                background-color: blue;
                border-radius:45px;
            }
            .checkbox{
                text-align:left;
            }
            .shade{
                box-shadow:0 0 0 1px rgba(0, 0, 0, 0.2);
            }
    </style>
    </head>
    <body>
    <header>
    <nav class="navbar">
                <a href="#" class="navbar-brand"><img src="{{asset('website/images/websiteimages/logos/viv2.jpeg')}}" alt="logo image" style="height:50px;" id="logo"></a>
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="#" class="nav-link custom-font-color" >Home</a></li>
                    <li class="nav-item"><a href="loginform2.php" class="nav-link custom-font-color">Login</a></li>
                </ul>
            </nav>
            <hr class="shade">
    </header>
    <section>
    <center>
        <div class="card card-body">
        <a href="#"><img src="{{asset('website/images/websiteimages/logos/viv1.jpeg')}}" alt="logo image" style="width:50px;"></a>
        <br>
            <p>USER REGISTRATION FORM</p>
            Please fill in your credentials to continue<br><br>
            <form class="container" method="post" action="{{route('crm.student.register')}}">
                @csrf
                <div class="form-group">
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="user_name" name="name" placeholder="Enter Your Name" style="border-color: blue;box-shadow:blue;" value="{{ (old('name')) ?  old('name') :''}}">
                <span class="text-danger">@error('name'){{$message}}@enderror</span>
                </div>
                <div class="form-group">
                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="user_phone" name="phone" placeholder="Enter Your Phone number" maxlength=10 style="border-color: blue;" value="{{ (old('phone')) ?  old('phone') :''}}">
                <span class="text-danger">@error('phone'){{$message}}@enderror</span>
                </div>
                <div class="form-group">
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="user_email" name="email" placeholder="Enter Your Email" style="border-color: blue;box-shadow:blue;" value="{{ (old('email')) ?  old('email') :''}}">
                <span class="text-danger">@error('email'){{$message}}@enderror</span>
                </div>
                <div class="form-group">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="user_pass" name="password" placeholder="Enter Your Password" style="border-color: blue;box-shadow:blue;">
                <span class="text-danger">@error('password'){{$message}}@enderror</span>
                </div>
                <div class="form-group">
                <input type="password" class="form-control" id="user_confpass" name="password_confirmation" placeholder="Confirm Your Password" style="border-color: blue;box-shadow:blue;"><br>
                <span class="text-danger">@error('password_confirmation'){{$message}}@enderror</span>
                </div>
                <div class="btn1"><input class="btn1" type="submit" value="Sign Up"></div>
                Already have an account?<a href="loginform2.php"> Login Instead!</a><br>
            </form>
        </div>
        </center>
        </section>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            function printError(elemId,hintMsg){
            document.getElementById(elemId).innerHTML=hintMsg;
            }
            function validateForm(){
                event.preventDefault();
                //Retrieving the values of form elements
                var name=document.getElementById('user_name').value;
                var phone=document.getElementById('user_phone').value;
                var email=document.getElementById('user_email').value;
                var password=document.getElementById('user_pass').value;
                var confpassword=document.getElementById('user_confpass').value;
                console.log(email+password);
                
                if(name==""){
                    printError("nameerr","Please enter your name");
                    }else{
                    var regex=/^[a-zA-Z\s]+$/;
                    if(regex.test(name)==false){
                    printError("nameerr","Please enter a valid name");
                    }else{
                    printError("nameerr","");
                    nameerr=false;
                    }
                }

                if(phone==""){
                    printError("phoneerr","Please enter your mobile number");
                    }else{
                    var regex=/^[1-9]\d{9}$/;
                    if(regex.test(phone)==false){
                    printError("phoneerr","Please enter a valid mobile number");
                    }else{
                    printError("phoneerr","");
                    phoneerr=false;
                    }
                    }
                    if(email==""){
                        printError("emailerr","Please enter your email id");
                        }else{
                        var regex=/^\S+@\S+\.\S+$/;
                        if(regex.test(email)==false){
                        printError("emailerr","Please enter a valid email address");
                        }else{
                        printError("emailerr","");
                        emailerr=false;
                        }
                    }
                {
                    if(password==""){
                        printError("passworderr","Please enter password");
                    }else{
            printError("passworderr","");
            passworderr=false;
        }
    }
    {
                    if(confpassword==""){
                        printError("confpassworderr","Please enter confirm password");
                    }else{
            printError("confpassworderr","");
            confpassworderr=false;
        }
            }
        }
        </script>
</body>
</html>

@endsection