<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Company dashboard</title>
	<!-- Liens vers les fichiers CSS de Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- Liens vers les fichiers JavaScript de Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
        body {
        background-image: url('/storage/images/18702139_sep09.jpg');
        background-size: cover;
        background-position: center;
      }
      .container {
  display: flex;
  justify-content: center;
  align-items: center;
}

.card {
  border: none;
  background-color: transparent;
}

.card-img-top {
  height: 100%;
  object-fit: cover;
}

.card-text {
  text-align: justify;
}

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #1B4F72;">

<a class="navbar-brand" href="{{ route('companyDashboard') }}">
    <img src="/storage/images/adalex-job-high-resolution-logo-white-on-transparent-background.png" class="d-inline-block align-top" alt="Logo ADALEX-JOB" style="height: 45px; width:300px;">
</a>
<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link text-white" href="{{ route('renseignerInformations') }}" >Renseigner Informations</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="{{ route('voirOffres') }}">Vos offres</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="{{ route('publierOffre') }}">publier offre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="{{ route('deconnexion') }}">Se deconnecter</a>
      </li>
      
    </ul>
  </div>
</nav><br>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
        <img src="/storage/images/21863864_6527313.jpg" alt="" style="width: 600;height: 600px;">
        </div>
        <div class="col-lg-6">
        <div class="card-body bg-white" style="height: 600px;">
      <form method="post" action="{{ route('companyUpdated') }}">
        @csrf
        @method('PUT')
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputNom">Nom</label>
            <input type="text" class="form-control" id="inputNom" placeholder="Votre nom" value="{{ $company->name }}" name="name">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPrenom">email</label>
            <input type="text" class="form-control" id="inputPrenom" placeholder="" value="{{ $company->email }}" name="email">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputAdresse">Adresse</label>
            <input type="text" class="form-control" id="inputAdresse" placeholder="" value="{{ $company->adresse }}" name="adresse">
          </div>
          <div class="form-group col-md-6">
            <label for="inputVille">Telephone</label>
            <input type="text" class="form-control" id="inputVille" placeholder="" value="{{ $company->telephone }}" name="telephone">
          </div>
          <div class="form-group col-md-6">
            <p for="">Description</p>
            <textarea name="description" id="description" cols="30" rows="10" placeholder="Description" value="{{ $company->description }}">{{ $company->description }}</textarea>
          </div>
          <div class="form-group col-md-6">
          <p for="">Domaine</p>
            <textarea name="domaine" id="description" cols="30" rows="10" placeholder="Domaine ?" value="{{ $company->domaine }}">{{ $company->domaine }}</textarea>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
        <button type="submit" class="btn btn-warning">Voir infos</button>
      </form>
      
    </div>
        </div>
    </div>
</div>

    
    <!-- <div class="col-md-12 text-center">
        <img src="storage/images/rag-dolls-with-word-new-job.jpg" alt="" class="img-fluid mx-auto d-block" style="max-width: 700px;">
    </div> -->

</body>
</html>
