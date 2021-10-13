@extends('crm.layout.crmlayout')
@section('title','Dashboard')
@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>One Page Website</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .shape{
            height: 25px;
            width: 25px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
        }
        .navbar-nav{
                flex-direction: row;
            }
            .nav-item
            {
                padding-left:30px;
            }
            .shade{
                box-shadow:0 0 0 1px rgba(0, 0, 0, 0.2);
            }
            .line{
                height:500px;
                color:black;
            }
    </style>
    </head>
    <div class="line">
    <header>
    <nav class="navbar">
                <a href="#" class="navbar-brand"><img src="{{asset('website/images/websiteimages/logos/viv2.jpeg')}}" alt="logo image" style="height:50px;" id="logo"></a>
                <ul class="navbar-nav">
                <li class="nav-item"><a href="#" class="shape" ></a></li>
            </ul>
            </nav>
            <hr class="shade">
    </header>
        </div>
        </body>
</body>
</html>
@endsection