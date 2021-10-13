@extends('crm.layout.crmlayout')
@section('title','Student Login')
@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
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
                height:520px;
                top:70px;
                padding-top:50px;
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
                var email=document.getElementById('user_email').value;
                var password=document.getElementById('user_password').value;
                console.log(email+password);
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
                        printError("password-err","Please enter password");
                    }
                    else{
                        printError("password-err","");
                        password-err=false;
                        }
                    }
            }
        </script>
</body>
</html>

@endsection