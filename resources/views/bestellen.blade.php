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
                background: url("/images/klasbaklogocomplete.png") no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                background-size: cover;
                -o-background-size: cover;
                overflow-x: hidden;
                -webkit-text-size-adjust: 100%;
            } 

            .active {
              display: block;
            }

            .menu {
    position: fixed; 
    width: 14%;
    z-index: 1; 
    top: 2%;
}

  .menu-list1 {
    position: fixed; 
    width: 12%;
    z-index: 1; 
    top: 80%;
  }

#menu-list {
    background-color: rgba(120, 180, 0, 0.8);
    border-radius: 15px;
    font-size: 16px; 
    padding: 0;
    text-align: justify;
}

#menu-list > li {
    display: block;
}


#menu-list > li > a {
    font-family: 'Raleway', sans-serif; 
    padding: 10px 0 10px 30px; 
    text-decoration: none; 
    display: block;
    color: #fff; 
}

#menu-list > .active > a,
#menu-list > li > a:hover { 
    background-color: rgba(255,255,255,0.25);
    border-radius: 15px;
}

.logo-klasbak {
  margin-left: -%;
  margin-top: 30%;
}

        </style>
    </head>
    <body>

    <div class="menu visible-md visible-lg">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul id="menu-list">
        <li class=""><a href="http://127.0.0.1:8000">Home</a></li>
        <li class=""><a href="http://127.0.0.1:8000/idee">Het Idee</a></li>
        <li class=""><a href="http://127.0.0.1:8000/top10">De Top 10</a></li>
        <li class=""><a href="http://127.0.0.1:8000/scholen">De Scholen</a></li>
        <li class="active"><a href="http://127.0.0.1:8000/bestellen">Bestellen</a></li>
        <li class=""><a href="http://127.0.0.1:8000/contact">Contact</a></li>
      </ul>
      @if (Route::has('login'))
      <ul id="menu-list" class="menu-list1">
      @auth
      <li><a href="{{ url('/home') }}">Home</a></li>
      @else
        <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-user"></span> Login</a></li>
        @if (Route::has('register'))
        <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>
        @endif
      @endauth
      </ul>
      @endif
    </div>
    </div>
              
</body>
</html>