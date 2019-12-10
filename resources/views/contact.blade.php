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

@import url(https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600);

* {
	margin:0;
	padding:0;
	box-sizing:border-box;
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	-webkit-font-smoothing:antialiased;
	-moz-font-smoothing:antialiased;
	-o-font-smoothing:antialiased;
	font-smoothing:antialiased;
	text-rendering:optimizeLegibility;
}

body {
	font-family:"Open Sans", Helvetica, Arial, sans-serif;
	font-weight:300;
	font-size: 12px;
	line-height:30px;
	color:#777;
	
}

.container {
	max-width:500px;
	width:100%;
	margin:0 auto;
    margin-top: 4%;
	position:relative;
}

#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea, #contact button[type="submit"] { font:400 12px/16px "Open Sans", Helvetica, Arial, sans-serif; }

#contact {
	background:#F9F9F9;
	padding:25px;
	margin:50px 0;
  border-radius: 5px;
}

#contact h3 {
	color: #F96;
	display: block;
	font-size: 30px;
	font-weight: 400;
}

#contact h4 {
	margin:5px 0 15px;
	display:block;
	font-size:13px;
}

fieldset {
	border: medium none !important;
	margin: 0 0 10px;
	min-width: 100%;
	padding: 0;
	width: 100%;
}

#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea {
	width:100%;
	border:1px solid #CCC;
	background:#FFF;
	margin:0 0 5px;
	padding:10px;
}

#contact input[type="text"]:hover, #contact input[type="email"]:hover, #contact input[type="tel"]:hover, #contact input[type="url"]:hover, #contact textarea:hover {
	-webkit-transition:border-color 0.3s ease-in-out;
	-moz-transition:border-color 0.3s ease-in-out;
	transition:border-color 0.3s ease-in-out;
	border:1px solid #AAA;
}

#contact textarea {
	height:100px;
	max-width:100%;
  resize:none;
}

#contact button[type="submit"] {
	cursor:pointer;
	width:100%;
	border:none;
	background: yellowgreen;
	color:#FFF;
	margin:0 0 5px;
	padding:10px;
	font-size:15px;
}

#contact button[type="submit"]:hover {
	background:#09C;
	-webkit-transition:background 0.3s ease-in-out;
	-moz-transition:background 0.3s ease-in-out;
	transition:background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active { box-shadow:inset 0 1px 3px rgba(0, 0, 0, 0.5); }

#contact input:focus, #contact textarea:focus {
	outline:0;
	border:1px solid #999;
}
::-webkit-input-placeholder {
 color:#888;
}
:-moz-placeholder {
 color:#888;
}
::-moz-placeholder {
 color:#888;
}
:-ms-input-placeholder {
 color:#888;
}

.titleform, .undertitleform {
    text-align: center;
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
        <li class=""><a href="http://127.0.0.1:8000/scholen">Scholen & Top 10</a></li>
        <li class=""><a href="http://127.0.0.1:8000/bestellen">Bestellen</a></li>
        <li class="active"><a href="http://127.0.0.1:8000/contact">Contact</a></li>
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

    <div class="container">  
  <form id="contact" action="" method="post">
    <h3 class="titleform">Contact</h3>
    <h4 class="undertitleform">U krijgt antwoord binnen 24 uur!</h4>
    <fieldset>
      <input placeholder="Naam" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="E-mail Adres" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Telefoonnummer" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Vul hier je bericht in..." tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
 
  
</div>
              
</body>
</html>