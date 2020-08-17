@extends('layout')

@section('content')

    <form method="post" action="/ajoutCompte">
        @csrf
        <div class="form-group">
            <label for="numero">Numero du compte</label>
            <input type="text" class="form-control"  name="numero" id="numero" placeholder="Numero">
        </div>

        <label for="type">Type du compte</label>
        <select   name="type" class="form-control form-control-sm">
            <option>Type de compte</option>
            <option value="CC" >Courant</option>
            <option value="CE">Epargne</option>
            <option value="CB">Bloqué</option>
        </select><br>


        <button type="submit" class="btn btn-primary">Creer Compte</button>
    </form>


@endsection
