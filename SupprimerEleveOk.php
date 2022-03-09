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
    <title>Utilisateur supprimé</title>
</head>
<body>
    <?php include("connexionPDO.php"); 

        $requeteDelete = $bdd->prepare("DELETE FROM eleves WHERE id = :id");
        $requeteDelete->execute(array('id'=>$_GET['id'])); 
    
              
    ?>

<p> L'eleve <?= $_GET['prenom']; ?> à bien été supprimé. </p>
<a href="eleves.php">Revenir à la liste des eleves</a>
    
</body>
</html>