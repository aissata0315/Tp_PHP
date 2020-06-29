if(!empty($_POST)){  

$idCon = mysqli_connect('localhost','aissata', "aissata")or die("impossible de se connecter!");
//choisir une bdd parmi les bdd du serveur de bdd
mysqli_select_db($idCon, 'BanquePopulaire') or die("impossible de choisir une bbd");


//request insertion client entreprise
$requeste2 = 
"  INSERT INTO client_entreprise VALUES
(    NULL,
    '{$_POST['nom']}',
    '{$_POST['registre']}',
    '{$_POST['ninea']}'
)";
//var_dump($_POST);

//excecusion de la requette dans la base
mysqli_query($idCon, $requeste2) or die("erreur requete: ".mysqli_error($idCon));
$msg = "<h3 style='color: '>Enregistrement reussi</h3>";
echo $msg;
header('location: client.php?succes=ok');

} else {






   try
{
	$bdd = new PDO('mysql:host=localhost;dbname=BanquePopulaire;charset=utf8', 'aissata', 'aissata');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
} 
if(isset($_POST)){

$req = $bdd->prepare('INSERT INTO client_entreprise (nom, ninea,resistre_commerce) VALUES(:nom, :ninea, :resistre_commerce)');
$req->execute
    (array(
        $_POST['nom'],
        $_POST['ninea'], 
        $_POST['registre']
        )
    ) ;
    var_dump($req);
    var_dump($_POST);
}