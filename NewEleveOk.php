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
$annee = $_POST['annee'];
$photo = $_POST['photo'];
$affichage = $_POST['affichage'];

 $requete = $bdd->prepare("INSERT INTO eleves (nom, prenom, annee, photo, affichage) VALUES (:nom, :prenom , :annee , :photo, :affichage)");
 $requete->execute(array('nom'=> $nom,
                        'prenom'=> $prenom,
                        'annee'=> $annee,
                        'photo'=> $photo,
                        'affichage'=> $affichage));
 
 ?>


<p> L'éleve <?= $_POST['prenom']; ?> à bien été créé et enregistrer. </p>

<div id="revenir">
        <a href="NewEleve.php">Revenir à la création d'un éleve</a>
        <a href="eleves.php">Revenir à la liste des éleves</a>
    </div>
    
</body>
</html>