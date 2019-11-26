<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                font-family: 'Raleway', sans-serif;
                height: 100%;
                background: url("/images/garbagebackground2.jpg") no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                background-size: cover;
                -o-background-size: cover;
            }

                /* Container holding the image and the text */
                .container-title {
                  position: relative;
                }

                /* Bottom right text */
                .text-block-title {
                position: absolute;
                top: 9vw;
                left: 43vw;
                font-size: 2.5vw;
                background: rgba(255, 255, 255, 0.0);
                color: black;
                transform: rotate(1.5deg);
                }

        </style>
    </head>
    <body>

    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://127.0.0.1:8000">De Klasbak</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="http://127.0.0.1:8000/idee">Het Idee</a></li>
        <li><a href="http://127.0.0.1:8000/top10">De Top 10</a></li>
        <li><a href="http://127.0.0.1:8000/scholen">De Scholen</a></li>
        <li><a href="http://127.0.0.1:8000/bestellen">Bestellen</a></li>
        <li><a href="http://127.0.0.1:8000/contact">Contact</a></li>
      </ul>
      @if (Route::has('login'))
      <ul class="nav navbar-nav navbar-right">
      @auth
      <li><a href="{{ url('/home') }}">Home</a></li>
      @else
        <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-user"></span> Register</a></li>
        @if (Route::has('register'))
        <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        @endif
      @endauth
      </ul>
      @endif
    </div>
  </div>
</nav>

<div class="container-title">
            <div class="text-block-title">
                <p>De Klasbak</p>
                <p>Scheid Afval Met Plezier</p>
            </div>
        </div>
              
</body>
</html>
