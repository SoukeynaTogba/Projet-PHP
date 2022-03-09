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
    <title>Nouveau eleve</title>
</head>
<body>

<?php include("bandeau.php"); ?>

<nav id="liens">
            <a href="eleves.php">éleves</a>
            <a href="upload.php">uploader une image</a>
            <a href="utilisateurs.php">comptes utilisateurs</a>
            <a href="deconnexion.php">déconnexion</a>
        </nav>

<table>
    <tr>
        <td> nom </td>
        <td> prenom </td>
        <td> année </td>
        <td> photo </td>
        <td> affichage </td>
    </tr>  
    <tr>

    <form method="POST" action="NewEleveOk.php">

        <td> <input type="text" name="nom" id="input" > </td>
        <td> <input type="text" name="prenom" id="input" > </td>
        <td> <input type="text" name="annee" id="input" > </td>
        <td> <input type="password" name="photo" id="input" > </td>
        <td> <select id="input" name="affichage">

                <option value="erreur">--Cliquez pour choisir--</option>
                <option value="oui">oui</option>
                <option value="non">non</option></select> </td>

        <td> <input type="submit" name="ajouter" id="submit" value="ajouter" >  </td>

        </form>

    </tr>    

</table>


<div id="revenir">
        <a href="eleves.php">Revenir à la liste</a>
    </div>



    
</body>
</html>