<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Candidature</title>
	<!-- Liens vers les fichiers CSS de Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- Liens vers les fichiers JavaScript de Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
        body {
        background-image: url('/storage/images/6189902_3185113.jpg');
        background-size: cover;
        background-position: center;
      }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #1B4F72;">

  <a class="navbar-brand" href="{{ route('employeDashboard') }}">
    <img src="/storage/images/adalex-job-high-resolution-logo-white-on-transparent-background.png" class="d-inline-block align-top" alt="Logo ADALEX-JOB" style="height: 45px; width:300px;">
  </a>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item active">
        <a class="nav-link text-white" href="{{ route('employeCV') }}">Compléter CV</a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-white" href="{{ route('offresEmploi') }}">Emplois</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Vos Candidatures
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('candidaturesEnCours') }}">Candidatures en cours</a>
          <a class="dropdown-item" href="{{ route('candidaturesRejetees') }}">Candidatures rejetées</a>
          <a class="dropdown-item" href="{{ route('candidaturesAcceptees') }}">Candidatures acceptées</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link text-white" href="{{ route('deconnexion') }}">Se deconnecter</a>
      </li>

    </ul>
  </div>

</nav><br>
<div class="container">
    <div class="row">
    <div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
    @foreach ($jobs as $job)
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Titre de l'offre</h5>
          <p class="card-text">{{ $job->titre }}</p>
          <h5 class="card-title">Description de l'offre</h5>
          <p class="card-text">{{ $job->description }}</p>
          <h5 class="card-title">Salaire</h5>
          <p class="card-text">{{ $job->salaire }}</p>
          <h5 class="card-title">Etat</h5>
        <p style="color:green;"><b>Acceptée</b></p>
          <a href="{{ route('detailsCandidatureAcceptee',['id' => $job->id]) }}" class="btn btn-primary">Détails</a>
        </div>
      </div><br>
      @endforeach
    </div>
  </div>
</div>

    </div><br>
      
</div>

</body>
</html>
