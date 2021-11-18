<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Shimanto-@yield('title')</title>
        
        @include('partials._stylesheets')

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="form.css" >
        
        <!-- Styles -->
        <style>
            @import url('https://fonts.googleapis.com/css?family=Beth+Ellen|Dancing+Script|Homemade+Apple|Kaushan+Script|Lacquer|Pacifico|Permanent+Marker|Roboto|Roboto+Condensed&display=swap');
        </style>

        <style>

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }


            .text {
                color: #fff;
                font-size: 14px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                text-align: center;
                margin-bottom: 2rem;
            }

            .text1 {
                color: #fff;
                text-align: center !important;
                font-size: 13px;
                font-weight: 400;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .text2 {
                color: #636b6f;
                text-align: center;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .flex-center-bottom {
            justify-content: flex-end;
            }

            .flex-container {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .flex-container > div {
                margin: 10px;
                text-align: center;
                padding-left: 40%;
            }
        </style>

        <link href="{{asset('css/main.css')}}" rel="stylesheet" type="text/css">

    </head>

    <body id="bd-img" onload="myFunction()">

       <div class="loader_bg" id="loading">
           <div class="loader"></div>
       </div>
       
       @include('partials._sidebar')

       @yield('content')

    </body>
            
    @include('partials._scripts')   
</html>
