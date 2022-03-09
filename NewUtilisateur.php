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
    <title>Nouveau utilisateur</title>
</head>
<body>

<?php include("bandeau.php"); ?>

<nav id="liens">
            <a href="">éleves</a>
            <a href="upload.php">uploader une image</a>
            <a href="utilisateurs.php">comptes utilisateurs</a>
            <a href="deconnexion.php">déconnexion</a>
        </nav>

<table>
    <tr>
        <td> nom </td>
        <td> prenom </td>
        <td> login </td>
        <td> password </td>
        <td> droits </td>
        <td> validation </td>
    </tr>  

    <tr>

    <form method="POST" action="NewUtilisateurOk.php">

        <td> <input type="text" name="nom" id="input" > </td>
        <td> <input type="text" name="prenom" id="input" > </td>
        <td> <input type="text" name="login" id="input" > </td>
        <td> <input type="password" name="password" id="input" > </td>
        <td> <select id="input" name="droits">

                <option value="erreur">--Cliquez pour choisir--</option>
                <option value="Admin">Admin</option>
                <option value="Visiteur">Visiteur</option></select> </td>

        <td> <input type="submit" name="ajouter" id="submit" value="ajouter" >  </td>

        </form>

    </tr>    

</table>


<div id="revenir">
        <a href="utilisateurs.php">Revenir à la liste</a>
    </div>



    
</body>
</html>