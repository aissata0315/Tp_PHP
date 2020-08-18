<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<form method="post" action="<?php echo base_url('public/Personne/addperson');?>">
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" class="form-control" name="nom" placeholder="Nom...">
    </div>
    <div class="form-group">
        <label for="prenom">Prenom</label>
        <input type="text" class="form-control" name="prenom" placeholder="Prenom...">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" placeholder="Email...">
    </div>
    <div class="form-group">
        <label for="telephone">Telephone</label>
        <input type="text" class="form-control" name="telephone" placeholder="Telephone...">
    </div>
    <input class="btn btn-primary" type="submit" value="Ajouter Client">

</form>