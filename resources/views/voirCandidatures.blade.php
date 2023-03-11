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
<div class="card mx-auto bg-white" style="max-width: 70%;">
    <div class="card-header">
        Liste des candidats à cette offre
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th style="width: 50px;">#</th>
                        <th style="width: 100px;">Nom</th>
                        <th style="width: 100px;">Email</th>
                        <th style="width: 100px;">Adresse</th>
                        <th style="width: 100px;">Téléphone</th>
                        <th style="width: 100px;">Détails</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employes as $employe)
                    <tr>
                        <td>{{ $employe->id }}</td>
                        <td>{{ $employe->name }}</td>
                        <td>{{ $employe->email }}</td>
                        <td>{{ $employe->adresse }}</td>
                        <td>{{ $employe->telephone }}</td>
                        <td>
                            <a href="{{ route('informationsEmploye',['id_job' => $job->id, 'id_employe' => $employe->id]) }}" class="btn btn-primary">Details</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ route('voirOffres') }}" class="btn btn-warning">Retour</a>
        </div>
    </div>
</div>
</body>
</html>
