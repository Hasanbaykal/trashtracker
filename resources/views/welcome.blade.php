<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

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

        </style>
    </head>
    <body>

    <img src="/images/garbagebackground2.jpg" id="bg" alt="">

    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">De Klasbak</a>
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
            <li><a class="a-topright" href="{{ url('/home') }}">Home</a></li>
        @else
            <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-user"></span>Login</a></li>
        @if (Route::has('register'))
        <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-log-in"></span>Register</a></li>
        @endif
      @endauth
      </ul>
      @endif
    </div>
  </div>
</nav>

            
        
    </body>
</html>
