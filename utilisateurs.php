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
<?php 
//include("VerifLogin.php");
?>
<body>

    <?php include("bandeau.php");
        include("connexionPDO.php"); 
        $requete = $bdd->query ("SELECT * FROM utilisateurs");?>

        <nav id="liens">
            <a href="eleves.php">éleves</a>
            <a href="upload.php">uploader une image</a>
            <a href="utilisateurs.php">comptes utilisateurs</a>
            <a href="deconnexion.php">déconnexion</a>
        </nav>

    <div id="titre">
        <h1>Liste des utilisateurs</h1>
    </div>

    <table id="tableau">
        <tr>
            <td> nom </td>
            <td> prenom </td>
            <td> login </td>
            <td> password </td>
            <td> droits </td>
            <td> modifier </td>
            <td> supprimer </td>
        </tr>
        
<?php while ($data = $requete -> fetch()) { ?> 
     <tr> 
     <td> <?php echo $data['nom']; ?> </td>
     <td> <?php echo $data['prenom']; ?> </td>
     <td> <?php echo $data['login']; ?> </td>
     <td> <?php echo $data['password']; ?> </td>
     <td> <?php echo $data['droits']; ?></td>
     <td> <a href="modifier.php?id=<?php echo $data['id']; ?>">modifier</a> </td>
     <td> <a href="supprimer.php?id=<?php echo $data['id']; ?>">supprimer</a> </td>

    </tr>

    <?php } ?>

  
    </table>

    <div id="ajouter">
        <a href="NewUtilisateur.php">Ajouter un utilisateur</a>
    </div>

</body>
</html>