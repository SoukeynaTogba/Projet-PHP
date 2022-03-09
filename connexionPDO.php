
<?php try
{
//On se connecte à MySQL
$bdd = new PDO('mysql:host=localhost;dbname=randomize;charset=utf8','root'
,'', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
    //En cas d'erreur, on s'affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
}
?>