@extends('layout')

@section('content')

    <form method="post" action="/ajoutmoral">
        @csrf
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control"  name="nom" id="nom" aria-describedby="emailHelp" placeholder="Nom de l'entreprise">
        </div>
        <div class="form-group">
            <label for="prenom">ninea</label>
            <input type="text" class="form-control" id="ninea" name="ninea" placeholder="Ninea  de l'entreprise">

       <div class="form-group">
            <label for="prenom">registre</label>
            <input type="text" class="form-control" id="registre" name="registre" placeholder="Registre de l'entreprise">
        </div>
        <button type="submit" class="btn btn-primary">Ajouter Client</button>
    </form>
@endsection


