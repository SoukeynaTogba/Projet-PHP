<?php 
include("VerifLogin.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/back.css">
    <link rel="stylesheet" href="css/back2.css">
    <link rel="stylesheet" href="css/utilisateurs.css">
    <title>Modification effectué</title>
</head>
<body>
    <?php

include ("connexionPDO.php");

    //if (empty ($_POST['nom']) || empty ($_POST['prenom']) || empty ($_POST['login']) || empty ($_POST['password']) || empty ($_POST['droits']))
     //{
        
     $requete = $bdd->prepare("UPDATE utilisateurs SET nom = :nom, prenom = :prenom, login = :login, password = :password, droits = :droits WHERE id = :id");
     $requete->execute(array('nom'=> $_POST['nom'],
                            'prenom'=> $_POST['prenom'],
                            'login'=> $_POST['login'],
                            'password'=> $_POST['password'],    
                            'droits'=> $_POST['droits'],
                            'id'=>$_GET['id'])); 
               // }
    ?>

<p> L'utilisateur <?= $_POST['prenom']; ?> à bien été modifié. </p>
<a href="utilisateurs.php">Revenir à la liste des utilisateurs</a>
</body>
</html>