<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>@yield('title')</title>

        <link rel="shortcut icon" href="{{URL::asset('images/logo.ico')}}"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="{{URL::asset('css/backend-bundle.min.css')}}"/>
        <link rel="stylesheet" href="{{URL::asset('css/backend.css')}}"/>
        <link rel="stylesheet" href="{{URL::asset('css/all.min.css')}}"/>
        <link rel="stylesheet" href="{{URL::asset('css/line-awesome.min.css')}}"/>
        <link rel="stylesheet" href="{{URL::asset('css/remixicon.css')}}"/>
        <link rel="stylesheet" href="{{URL::asset('css/dripicons.css')}}"/>
        <link rel="stylesheet" href="{{URL::asset('css/main.css')}}"/>
        <link rel="stylesheet" href="{{URL::asset('css/main1.css')}}"/>
        <link rel="stylesheet" href="{{URL::asset('css/main2.css')}}"/>
        <link rel="stylesheet" href="{{URL::asset('css/main3.css')}}"/>
        <link rel="stylesheet" href="{{URL::asset('css/headerandfooter.css')}}"/>
        <link rel="stylesheet" href="{{URL::asset('css/formitems.css')}}"/>
        <link rel="stylesheet" href="{{URL::asset('css/checkboxs.css')}}"/>
    </head>
    <body>
        <div class="container">
        @include('layouts.header')
        <div class="row">
        <div class="col-lg-12">
            <div class="card card-block card-stretch">
                <div class="card-body custom-notes-space">
        @yield('content')
        </div>
            </div>
        </div>
    </div>
        @include('layouts.footer')
        </div>
    </body>
</html>