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
    <title>Modification</title>
</head>

<body>

<?php include("bandeau.php");
    include("connexionPDO.php"); 
        $requete = $bdd->prepare ("SELECT * FROM utilisateurs WHERE id= :id");
        $requete -> execute(array('id' => $_GET['id']));
        $data = $requete -> fetch();
        ?>

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

    <form method="POST" action="ModifierOk.php?id=<?php echo $_GET['id']; ?>">

        <td> <input type="text" name="nom" id="input" value="<?php echo $data['nom']; ?>" > </td>

        <td> <input type="text" name="prenom" id="input" value="<?php echo $data['prenom']; ?>" > </td>

        <td> <input type="text" name="login" id="input" value="<?php echo $data['login']; ?>" > </td>

        <td> <input type="password" name="password" id="input" value="<?php echo $data['password']; ?>" > </td>

        <td> <select id="input" name="droits" >
                <option value="Admin" <?php if ($data['droits'] == "admin") {  echo "SELECTED"; } ?>> admin</option>
                <option value="Visiteur" <?php if ($data['droits'] == "visiteur") {  echo "SELECTED"; } ?>>visiteur</option></select> </td>

        <td> <input type="submit" name="modifier" id="submit" value="modifier" >  </td>

        </form>

    </tr>    

</table>
</body>
</html>