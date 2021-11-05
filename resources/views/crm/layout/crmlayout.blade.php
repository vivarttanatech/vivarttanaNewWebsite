<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <title>Vivarttana CRM | @yield('title')</title>
        @include('crm.layout.headerscripts')
    </head>
    <body>
        <div>
            @include('crm.layout.dashTopNav')
            <div class="row">
                <div class="col-md-3 ms-sm-auto col-lg-2 px-md-0">
                @include('crm.layout.dashSideNav')
                </div>
                <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                       
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        @include('crm.layout.footerscripts')
        @yield('javascript')
        <script>
            document.addEventListener("DOMContentLoaded", function(){
                document.querySelectorAll('.sidebar .nav-link').forEach(function(element){
                element.addEventListener('click', function (e) {    
                    let nextEl = element.nextElementSibling;
                    let parentEl  = element.parentElement;	
                        if(nextEl) {
                            e.preventDefault();	
                            let mycollapse = new bootstrap.Collapse(nextEl);
                            if(nextEl.classList.contains('show')){
                            mycollapse.hide();
                            } else {
                                mycollapse.show();
                                // find other submenus with class=show
                                var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                                // if it exists, then close all of them
                                if(opened_submenu){
                                new bootstrap.Collapse(opened_submenu);
                                }
                            }
                        }
                    }); // addEventListener
                }) // forEach
            }); 
            // DOMContentLoaded  end
        </script>
    </body>
</html>
