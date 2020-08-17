<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Gestion clients</title>
</head>
<body>
<header>
    <img src="{{asset('/images/bplogo.png')}}" alt="" id="logo">

    <h2>Banque Du Pleuple</h2>
     <img src="{{asset('/images/TT.png')}}" alt="" id="responsableCompte">
</header>

<nav>
    <ul>
        <li><a href="/home"> Accueil </a></li>
        <li> <a href="/addperson"> Ajouter Particulier </a> </li>
        <li><a href="/addentreprise"> Ajouter Moral </a></li>
        <li><a href="/addcompte"> Creer des compte </a></li>
        <li><a href="/listecompte"> Liste des comptes </a></li>
    </ul>
</nav>
<div class="col-md-12"> @yield('content') </div>
