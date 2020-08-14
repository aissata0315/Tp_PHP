@extends('layout')

@section('content')

    <form method="post" action="/ajout">
        @csrf
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control"  name="nom" id="nom" aria-describedby="emailHelp" placeholder="Entrer votre nom">
        </div>
        <div class="form-group">
            <label for="prenom">Prenom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrer votre prenom">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email"  name="email" aria-describedby="emailHelp" placeholder="Entrer votre email">
        </div>
        <div class="form-group">
            <label for="telephone">Telephone</label>
            <input type="number" class="form-control" id="telephone"  name="telephone" placeholder="Entrer votre numero de telephone">
        </div>

        <button type="submit" class="btn btn-primary">Ajouter Client</button>
    </form>
@endsection


