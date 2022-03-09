<?php
if (isset($_GET['login'])) {
    if ($_GET['login']=="attempt"){
        $login = $_POST['login'];
        $password = $_POST['password'];
        include ("login.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/back.css">
    <title>BACK OFFICE</title>
</head>
<body>



    <nav>
        <h1>Back Office</h1>
    </nav>
    
    <div id="formulaire">
    <form method="POST" action="index.php?login=attempt">
        <input type="text" name="login" placeholder="login"> <br>
        <input type="password" name="password" placeholder="Mot de passe"> <br>
       
        <input type="submit" id="sub" value="se connecter">

    </form>
    </div>
    
</body>
</html>