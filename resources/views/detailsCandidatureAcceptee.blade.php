<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>employe</title>
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
  <div class="row justify-content-center">
    <div class="col-md-8">
    <div class="card mx-auto" style="max-width: 85%;">
        <div class="card-header">Candidature</div>
        <div class="card-body">
        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
        @endif
          <div class="row">
            <div class="col-md-6">
              <p><strong>Titre du poste :</strong></p>
              <p><strong>Entreprise :</strong></p>
              <p><strong>Lieu :</strong></p>
              <p><strong> Telephone</strong></p>
              <p><strong>Salaire :</strong></p>
            </div>
            <div class="col-md-6">
              <p>{{ $job->titre }}</p>
              <p>{{ $company->name }}</p> 
              <p>{{ $job->lieu }}</p>
              <p>{{ $company->telephone }}</p>
              <p>{{ $job->salaire }}</p>
              
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-6">
              <p><strong>Description de l'offre :</strong></p>
              <ul>
              {{ $job->description }}
              </ul>
            </div>
            <div class="col-md-6">
              <p><strong>Compétences recquises :</strong></p>
              <ul>
              {{ $job->competences }}
              </ul>
            </div>
            <div class="col-md-6">
              <p><strong>Présentation de l'entreprise :</strong></p>
              <ul>
              {{ $company->description }}
              </ul>
            </div>
            <div class="col-md-6">
              <p><strong></strong></p>
              <ul>
              {{ $job->about }}
              </ul>
            </div>
            <div class="col-md-6">
            <a href="{{ route('supprimerCandidature',$job->id) }}" class="btn btn-danger">Supprimer Candidature</a>
            <a href="{{ route('candidaturesAcceptees') }}" class="btn btn-warning">Retour</a>
            </div>
            
          
        </div>
      </div><br>
      
    </div>
  </div>
</div>

</body>
</html>
