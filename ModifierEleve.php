<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/back.css">
    <link rel="stylesheet" href="css/back2.css">
    <link rel="stylesheet" href="css/utilisateurs.css">
    <title>Modification</title>
</head>

<body>

<?php include("bandeau.php");
    include("connexionPDO.php"); 
        $requete = $bdd->prepare ("SELECT * FROM eleves WHERE id= :id");
        $requete -> execute(array('id' => $_GET['id']));
        $data = $requete -> fetch();
        ?>

<table>
    <tr>
        <td> nom </td>
        <td> prenom </td>
        <td> année </td>
        <td> photo </td>
        <td> affichage </td>
        <td> validation </td>
    </tr>  

    <tr>

    <form method="POST" action="ModifierEleveOk.php?id=<?php echo $_GET['id']; ?>">

        <td> <input type="text" name="nom" id="input" value="<?php echo $data['nom']; ?>" > </td>

        <td> <input type="text" name="prenom" id="input" value="<?php echo $data['prenom']; ?>" > </td>

        <td> <input type="text" name="annee" id="input" value="<?php echo $data['annee']; ?>" > </td>

        <td> <input type="text" name="photo" id="input" value="<?php echo $data['photo']; ?>" > </td>

        <td> <select id="input" name="affichage" >
                <option value="oui" <?php if ($data['affichage'] == "oui") {  echo "SELECTED"; } ?>> oui</option>
                <option value="non" <?php if ($data['affichage'] == "non") {  echo "SELECTED"; } ?>>non</option></select> </td>

        <td> <input type="submit" name="modifier" id="submit" value="modifier" >  </td>

        </form>

    </tr>    

</table>
</body>
</html>