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

                .navbar-brand-1, .navbar-brand-2 {
                  font-size: 20px;
                }

                .navbar-header, .navbar-toggle, .collapsed {
                  background: rgba(255, 255, 255, 0.0);
                }

                .collapse, .navbar-collapse {
                  background: rgba(255, 255, 255, 0);
                }

                .active-page {
                  background-color: whitesmoke;
                }

                .navbar-toggle, .collapsed {
                  float: left;
                  left: 35%;
                  width: 30%;
                  border-radius: 20px;
                  background-color: whitesmoke;
                  font-size: 20px;
                }

        </style>
    </head>
    <body>

    <img src="/images/garbagebackground2.jpg" id="bg" alt="">


<nav class="navbar">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" 
              data-target="#codebrainery-toggle-nav" aria-expanded="false">Navigatie
      </button>
    </div>
    <div class="collapse navbar-collapse" id="codebrainery-toggle-nav">
      <ul class="nav navbar-nav mr-auto">
        <li><a class="navbar-brand-1 active-page" href="http://127.0.0.1:8000">De Klasbak</a></li>
        <li><a class="navbar-brand-1" href="http://127.0.0.1:8000/idee">Het Idee</a></li>
        <li><a class="navbar-brand-1" href="http://127.0.0.1:8000/top10">De Top 10</a></li>
        <li><a class="navbar-brand-1" href="http://127.0.0.1:8000/scholen">De Scholen</a></li>
        <li><a class="navbar-brand-1" href="http://127.0.0.1:8000/bestellen">Bestellen</a></li>
        <li><a class="navbar-brand-1" href="http://127.0.0.1:8000/contact">Contact</a></li>
      </ul>
      @if (Route::has('login'))
      <ul class="nav navbar-nav navbar-right">
        @auth
            <li><a class="navbar-brand-2" href="{{ url('/home') }}">Home</a></li>
        @else
            <li><a class="navbar-brand-2" href="{{ route('login') }}"><span class="glyphicon glyphicon-user"></span>Login</a></li>
        @if (Route::has('register'))
        <li><a class="navbar-brand-2" href="{{ route('register') }}"><span class="glyphicon glyphicon-log-in"></span>Register</a></li>
        @endif
      @endauth
      </ul>
      @endif
    </div>
  </div>
</nav>
              
</body>
</html>
