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

.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}

.w3-container {
  max-width:500px;
	width:100%;
	margin:0 auto;
  margin-top: 4%;
	position:relative;
  text-align: center;
}

.scholenh2 {
  color: #F96;
	display: block;
	font-size: 30px;
	font-weight: 400;
}

.w3-content, .w3-display-container {
  max-width:500px;
	width:100%;
	margin:0 auto;
  margin-top: 4%;
	position:relative;
  text-align: center;
}

#contact {
	background:#F9F9F9;
	padding:25px;
	margin:50px 0;
  border: 2px solid white;
  border-radius: 5px;
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
        <li class="active"><a href="http://127.0.0.1:8000/scholen">Scholen & Top 10</a></li>
        <li class=""><a href="http://127.0.0.1:8000/bestellen">Bestellen</a></li>
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

    <div class="w3-container">
    <form id="contact" action="" method="post">
  <h2 class="scholenh2">Scholen & Top 10</h2>
  <p>Hier zie je de lijst van scholen die meedoen met het project. Daarnaast is er een ranglijst met scholen die het beste scheiden.</p>
  </form>
</div>


<div class="w3-content w3-display-container" style="max-width:800px">
<form id="contact" action="" method="post">
  <p class="mySlides">De scholen die meedoen zijn: <br></br>
        1. De Singel<br></br>
        2. De Provenier<br></br>
        3. Klimop<br></br>
        4. ...<br></br>
        5. ...<br></br>
        6. ...
  </p>
  <img class="mySlides" src="/images/number1.png" style="width:100%">
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
  </div>
  </form>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>

              
</body>
</html>