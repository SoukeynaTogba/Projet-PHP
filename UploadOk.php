<?php 
//include("VerifLogin.php");
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
 
  $tmpName = $_FILES['file']['tmp_name'];
  $name = $_FILES['file']['name'];
  //$size = $_FILES['file']['size'];
  //$error = $_FILES['file']['error'];
  
  if(isset($_POST)){
      // && !empty($_POST['file']) && !empty($_POST['year']) && !empty($_POST['name'])
      $request = $bdd->prepare("INSERT INTO photos (nom, annee, photo) VALUES (:nom , :annee, :photo);");
      $request -> execute(array('nom' => $_POST['nom'],
                              'annee' => $_POST['annee'],
                              'photo' => $name ));
      
      move_uploaded_file($tmpName, 'img/'.$name);
     
  }?>


<p> La photo de <?= $_POST['nom']; ?> a bien été enregistrer. </p>

<div id="revenir">
        <a href="upload.php">Revenir à l'upload des fichier</a>
        <a href="eleves.php">Revenir à la liste des éleves</a>
    </div>
    
</body>
</html>