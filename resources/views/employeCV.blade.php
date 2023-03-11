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
<div class="d-flex justify-content-center flex-row">
        <img src="/storage/images/16763504_tp204-resume-09-ps.jpg" alt="" class="img-fluid mx-auto d-block" style="max-width: 300px;">
        <img src="/storage/images/18701943_tp204-resume-08.jpg" alt="" class="img-fluid mx-auto d-block" style="max-width: 300px;">
        <img src="/storage/images/16322890_tp188-403-mind-resume-04.jpg" alt="" class="img-fluid mx-auto d-block" style="max-width: 300px;">
    </div><br>
  <div class="card mx-auto">
    <div class="card-header">
      Mettez à jour votre CV pour d'avantage faire bonne impression !
    </div>
    <div class="card-body">
      <form method="post" action="{{ route('employeUpdate',$employe) }}">
        @csrf
        @method('PUT')
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputNom">Nom</label>
            <input type="text" class="form-control" id="inputNom" placeholder="Votre nom" value="{{ $employe->name }}" name="name">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPrenom">email</label>
            <input type="text" class="form-control" id="inputPrenom" placeholder="" value="{{ $employe->email }}" name="email">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputAdresse">Adresse</label>
            <input type="text" class="form-control" id="inputAdresse" placeholder="" value="{{ $employe->adresse }}" name="adresse">
          </div>
          <div class="form-group col-md-6">
            <label for="inputVille">Telephone</label>
            <input type="text" class="form-control" id="inputVille" placeholder="" value="{{ $employe->telephone }}" name="telephone">
          </div>
          <div class="form-group col-md-6">
            <p for="">A propos de vous</p>
            <textarea name="about" id="description" cols="30" rows="10" placeholder="A propos de vous" value="{{ $employe->about }}">{{ $employe->about }}</textarea>
          </div>
          <div class="form-group col-md-6">
          <p for="">Expériences professionnelles</p>
            <textarea name="experience" id="description" cols="30" rows="10" placeholder="Quelles sont vos experiences professionnelles ?" value="{{ $employe->experience }}">{{ $employe->experience }}</textarea>
          </div>
          
        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
        <button type="submit" class="btn btn-warning">Voir CV</button>
      </form>
      
    </div>
  </div><br>
  
  
</div>

</body>
</html>
