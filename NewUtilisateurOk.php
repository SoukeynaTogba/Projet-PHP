<?php 
include("VerifLogin.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="css/back.css">
    <link rel="stylesheet" href="css/back2.css">
    <link rel="stylesheet" href="css/utilisateurs.css">
    <title>C'est ok</title>
</head>
<body>


<?php include("bandeau.php");
  include("connexionPDO.php"); 
 
/*grace à la methode post les informations vont se mettre dans la base de donné*/
$nom = $_POST['nom']; /*ceci est une déclaration de variable*/
$prenom = $_POST['prenom'];
$login = $_POST['login'];
$password = $_POST['password'];
$droits = $_POST['droits'];

 $requete = $bdd->prepare("INSERT INTO utilisateurs (nom, prenom, login, password, droits) VALUES (:nom, :prenom , :login , :password, :droits)");
 $requete->execute(array('nom'=> $nom,
                        'prenom'=> $prenom,
                        'login'=> $login,
                        'password'=> $password,
                        'droits'=> $droits));
 
 ?>


<p> L'utilisateur <?= $_POST['prenom']; ?> à bien été créé et enregistrer. </p>

<div id="revenir">
        <a href="NewUtilisateur.php">Revenir à la création d'un utilisateur</a>
        <a href="utilisateurs.php">Revenir à la liste des utilisateurs</a>
    </div>
    
</body>
</html>