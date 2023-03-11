<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
        <a class="nav-link text-white" href="{{ route('register') }}">Sinscrire</a>
      </li>

    </ul>
  </div>
</nav><br>
    <div class="d-flex justify-content-center align-items-center h-100">
      <div class="card w-50">
        <div class="card-header">
          <h1>Formulaire d'inscription</h1>
        </div>
        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
        <div class="card-body">
          <form action="{{ route('registerTraitement') }}" method="post">
            @csrf
            <div class="form-group">
              <label for="email">Adresse e-mail:</label>
              <input type="email" class="form-control" id="email" placeholder="Entrez votre adresse e-mail" name="email">
              @if($errors->has('email'))
    <div class="alert alert-danger">
        {{ $errors->first('email') }}
    </div>
@endif
            </div>
            <div class="form-group">
              <label for="email">Nom</label>
              <input type="text" class="form-control" id="nom" placeholder="Entrez votre nom :" name="name">
              @if($errors->has('name'))
    <div class="alert alert-danger">
        {{ $errors->first('name') }}
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
            <!--
            <div class="form-group">
              <label for="confirm-password">Confirmer le mot de passe:</label>
              <input type="password" class="form-control" id="confirm-password" placeholder="Confirmez votre mot de passe">
            </div>
    -->

            <div class="form-group">
              <label for="profil">Profil:</label>
              <select class="form-control" id="profil" name="profil">
                <option value="demandeur">Demandeur d'emploi</option>
                <option value="entreprise">Entreprise</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">S'inscrire</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
