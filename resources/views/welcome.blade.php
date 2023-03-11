<!DOCTYPE html>
<html>
<head>
	<title>ADALEX-JOB</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style>
        body {
        background-image: url('storage/images/6189902_3185113.jpg');
        background-size: cover;
        background-position: center;
        color:white;
      }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #1B4F72;">

<a class="navbar-brand" href="{{ route('welcome') }}">
    <img src="storage/images/adalex-job-high-resolution-logo-white-on-transparent-background.png" class="d-inline-block align-top" alt="Logo ADALEX-JOB" style="height: 45px; width:300px;">
</a>
<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link text-white" href="{{ route('login') }}" >Se connecter</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="{{ route('register') }}">S'inscrire</a>
      </li>
    </ul>
  </div>
</nav><br>

<div class="container">
	<div class="row">
		<div class="">
			<h1>Bienvenue sur ADALEX-JOB</h1>
			<!--<p>Ceci est une page d'accueil personnalisable avec HTML et Bootstrap</p>-->
		</div>
        <div class="">
  <h5>
    Adalex-Job est une plateforme en ligne qui permet de gérer des offres et des demandes d'emploi.
     Grâce à notre plateforme, les recruteurs peuvent facilement publier des offres d'emploi et filtrer
      les candidats en fonction de leurs compétences et de leur expérience. 
      Les chercheurs d'emploi peuvent quant à eux parcourir les offres et postuler directement en ligne.
    </h5>
</div>
	</div>
</div>



</body>
</html>
