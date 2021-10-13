@extends('crm.layout.crmlayout')
@section('title','Dashboard')
@section('content')
@include('crm.layout.headerscripts')

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