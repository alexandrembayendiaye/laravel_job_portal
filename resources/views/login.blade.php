<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Page de Connexion</title>
	<!-- Liens vers les fichiers CSS de Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- Liens vers les fichiers JavaScript de Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
        body {
        background-image: url('storage/images/6189902_3185113.jpg');
        background-size: cover;
        background-position: center;
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

	<div class="d-flex justify-content-center align-items-center h-100">
		<div class="card w-50">
			<div class="card-header">
				<h2>Page de connexion</h2>
			</div>
			<div class="card-body">
				<form action="{{ route('loginTraitement') }}" method="post">
				@if (session('echec'))
    <div class="alert alert-danger">
        {{ session('echec') }}
    </div>
@endif
					@csrf
					<div class="form-group">
						<label for="email">Adresse email:</label>
						<input type="email" class="form-control" id="email" placeholder="Entrez votre adresse email" name="email">
						@if($errors->has('email'))
    <div class="alert alert-danger">
        {{ $errors->first('email') }}
    </div>
@endif
					</div>
					<div class="form-group">
						<label for="password">Mot de passe:</label>
						<input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe" name="password">
						@if($errors->has('password'))
    <div class="alert alert-danger">
        {{ $errors->first('password') }}
    </div>
@endif
					</div>
					<div class="form-group form-check">
						<input type="checkbox" class="form-check-input" id="remember" name="remember">
						<label class="form-check-label" for="remember">Se souvenir de moi</label>
					</div>
					<button type="submit" class="btn btn-primary">Se connecter</button>
				</form>
			</div>
			<div class="card-footer">
				<p>Pas encore inscrit ? <a href="{{ route('register') }}">S'inscrire ici</a></p>
			</div>
		</div>
	</div>
</body>
</html>
