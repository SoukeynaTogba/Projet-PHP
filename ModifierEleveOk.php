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

        
     $requete = $bdd->prepare("UPDATE eleves SET nom = :nom, prenom = :prenom, annee = :annee, photo = :photo, affichage = :affichage WHERE id = :id");
     $requete->execute(array('nom'=> $_POST['nom'],
                            'prenom'=> $_POST['prenom'],
                            'annee'=> $_POST['annee'],
                            'photo'=> $_POST['photo'],    
                            'affichage'=> $_POST['affichage'],
                            'id'=>$_GET['id'])); 
    ?>

<p> L'éleve <?= $_POST['prenom']; ?> à bien été modifié. </p>
<a href="eleves.php">Revenir à la liste des éleves</a>
</body>
</html>