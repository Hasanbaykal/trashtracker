<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>De Klasbak</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                color: #000000;
                font-family: 'Poiret One', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            #bg {
                position: fixed; 
                top: 0; 
                left: 0; 
	
                /* Preserve aspet ratio */
                min-width: 100%;
                min-height: 100%;
                max-width: 100%;
                height: auto;
                }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: start;
                margin-left: 100px;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 10px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 8vw;
            }

            .m-b-md {
                margin-left: 600px;
            }

            .links > a {
                color: #000000;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

        </style>
    </head>
    <body>

    <img src="/images/garbagebackground2.jpg" id="bg" alt="">

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    De Klasbak
                </div>

                <div class="links">
                    <a href="http://127.0.0.1:8000/idee">Het Idee</a>
                    <a href="http://127.0.0.1:8000/top10">De Top 10</a>
                    <a href="http://127.0.0.1:8000/scholen">De Scholen</a>
                    <a href="http://127.0.0.1:8000/bestellen">Bestellen</a>
                    <a href="http://127.0.0.1:8000/contact">Contact</a>
                </div>
            </div>
        </div>
    </body>
</html>
