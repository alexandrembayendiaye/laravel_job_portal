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
        background-image: url('storage/images/18702139_sep09.jpg');
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
<h1 style="color:white;text-align:center;" class="text-center mb-4">
        Bienvenue {{ $company->name }} !
    </h1>
</div>
<div class="container">
    
    <div class="row">
    <div class="col-md-6">
      <div class="card">
        <img src="/storage/images/into-success-group-young-freelancers-office-have-conversation-smiling.jpg" class="card-img-top" alt="...">
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h6 class="card-text" style="color:white;">"La recherche d'emploi est souvent une tâche ardue et fastidieuse pour les demandeurs d'emploi, et la publication d'offres d'emploi pour les recruteurs peut également être un défi. C'est là que la plateforme Adalex-Job entre en jeu. Adalex-Job permet aux recruteurs de publier facilement des offres d'emploi et aux demandeurs d'emploi de rechercher des opportunités d'emploi pertinentes en fonction de leurs compétences et de leur expérience.

En utilisant Adalex-Job, les recruteurs peuvent atteindre un public plus large et plus diversifié en publiant leurs offres d'emploi en ligne. Cela leur permet également de trier et de gérer plus efficacement les candidatures qu'ils reçoivent. Pour les demandeurs d'emploi, Adalex-Job offre un accès facile à une variété d'offres d'emploi dans différents secteurs et niveaux d'expérience. Les demandeurs d'emploi peuvent également créer des profils en ligne pour mettre en avant leurs compétences et leur expérience, ce qui facilite la recherche d'opportunités d'emploi adaptées.





</h6>
        </div>
      </div>
    </div>
  </div>
    
    <!-- <div class="col-md-12 text-center">
        <img src="storage/images/rag-dolls-with-word-new-job.jpg" alt="" class="img-fluid mx-auto d-block" style="max-width: 700px;">
    </div> -->
</div>

</body>
</html>
