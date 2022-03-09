<?php 
//include("VerifLogin.php");
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
    <title>Bienvenue</title>
</head>
<body>

    <?php include("bandeau.php");
        include("connexionPDO.php"); 
        $requete = $bdd->query ("SELECT * FROM eleves");?>

        <nav id="liens">
            <a href="eleves.php">éleves</a>
            <a href="upload.php">uploader une image</a>
            <a href="utilisateurs.php">comptes utilisateurs</a>
            <a href="deconnexion.php">déconnexion</a>
        </nav>

    <div id="titre">
        <h1>Uploader des images</h1>
    </div>


    <form action="UploadOk.php" method="POST" enctype="multipart/form-data" class="upload">

            
                <input type="text" name='nom' placeholder="nom de l'éleve">
                <input type="number" name='annee' placeholder="année du diplôme">
                <input type="file" name="file">
                
            
                <button type="submit">Enregistrer</button>
            </form>