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

.container {
	max-width:500px;
	width:100%;
	margin:0 auto;
  margin-top: 4%;
	position:relative;
}

#contact {
	background:#F9F9F9;
	padding:25px;
	margin:50px 0;
  border: 2px solid white;
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
	font-size:20px;
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
        <li class="active"><a href="http://127.0.0.1:8000/idee">Het Idee</a></li>
        <li class=""><a href="http://127.0.0.1:8000/scholen">Scholen & Top 10</a></li>
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

    <div class="container">
    <form id="contact" action="" method="post">
    <h3 class="titleform">De Klasbak</h3>
    <h4 class="undertitleform">Ons concept biedt een platform aan voor basisscholen om hun resultaten bij te houden en te
delen met soortgenoten. Door middel van slimme prullenbakken wordt er data verzameld
om de scores te berekenen. Deze gegevens worden vervolgens naar het online platform
gestuurd waaruit een ranking bepaalt wordt.
<br></br>
<img src="/images/ideepage1.png" height="120" width="400">
<br></br>
Om data te verzamelen van het afval is het de bedoeling dat het gewicht per afvalbak
bijgehouden wordt voordat de bak geleegd wordt. Het gewicht kan via een arduino
uitgelezen worden en vervolgens via een WiFi / Bluetooth verbinding verstuurd worden naar
het online platform. Zodra de gegevens het online platform bereiken kunnen hier
verschillende dingen mee in kaart worden gebracht. Om de hiërarchie tussen de deelnemers
te bepalen wordt een schaal toegepast om het totaal aantal punten te berekenen. Uit onze
deskresearch komt ook de mogelijkheid naar voren om bij te houden wie er iets weggooit en
of deze persoon wel daadwerkelijk bezig is met het scheiden van zijn afval. Deze laatste
toepassing kan dan weer heel toepasbaar zijn in een bedrijfssetting om elkaar te wijzen op
het niet scheiden.
<br></br>
<img src="/images/ideepage2.png" height="120" width="400">
<br></br>
Met toevoegingen zoals gamification en de competitie willen we het voor de kinderen zowel
leerzaam als leuk maken. Met een aantal functionaliteiten zoals extra geluiden of een
bepaald vorm op het klepje van de bak kunnen we er ook voor zorgen dat we zo veel
mogelijk pains uitschakelen.</h4>
    </form>
    </div>
              
</body>
</html>