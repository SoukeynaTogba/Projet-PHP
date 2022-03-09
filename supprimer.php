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
    <title>Supprimer</title>
</head>
<body>
<?php include("bandeau.php");
        include("connexionPDO.php");
        $requete = $bdd->prepare ("SELECT * FROM utilisateurs WHERE id= :id");
        $requete -> execute(array('id' => $_GET['id']));
        $data = $requete -> fetch();
        ?>

<h1> Êtes vous sur de vouloir supprimer ce compte ? </h1>
<a href="SupprimerOk.php?id=<?php echo $_GET['id']; ?>&prenom= <?php echo $data['prenom'];?>">Oui, je suis sur et certain !</a>
<a href="utilisateurs.php">Non.</a>






    
</body>
</html>