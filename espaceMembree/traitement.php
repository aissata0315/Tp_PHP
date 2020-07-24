<?php
session_start();
include 'Dbaccess.php';

// if(isset($_POST['inscription'])){
//     //echo('ok');
//     if(!empty($_POST['login']) and !empty($_POST['password']) and !empty($_POST['poste'])){
//         //echo('okey');
//         $login = htmlspecialchars($_POST['login']);
//         $password = sha1($_POST['password']);
//         $poste = htmlspecialchars($_POST['poste']);

//         $loginLength = strlen($login);
//         if(strlen($login) <=15)
//         {

//         }
//         else{
//             echo'votre login ne doit pas dépasser 15 caractere!';
//         }

   
//     /*else{
//         echo('pas ok');
//     }*/
//     $req = $bdd->prepare('INSERT INTO employes (login, password,post) VALUES(?,?,?)');
// $req->execute
//     (array(
//         $_POST['login'],
//         $_POST['password'], 
//         $_POST['poste']
//         )
//     ) ;
// }

if(isset($_POST['connexion'])){
    //var_dump(isset($_POST));
    $login = htmlspecialchars($_POST['login']);
    $password = sha1($_POST['password']);
    if(!empty($login) && !empty($password))
    {
        $query = $bdd->prepare("SELECT * FROM employes WHERE login = ? and password = ?");
        $query->execute(array($login,$password));
        $userexist = $query->rowCount();
        if($userexist == 1)
        {
            $userinfo = $query->fetch();
            $_SESSION['id_employe']= $userinfo['id_employe'];
            $_SESSION['login'] = $userinfo['login'];
            $_SESSION['password'] = $userinfo['password'];
            header("Location: profil.php?id_employe=".$_SESSION['id_employe']);
         } 
    } 
        

       
}