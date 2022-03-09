<?php


sleep (1);



if(isset($_POST) AND !empty($_POST['login']) AND !empty($_POST['password'])) {
    include ("connexionPDO.php"); 
    $requete = $bdd->prepare("SELECT * FROM utilisateurs WHERE login= :login");

    $requete->execute(array('login'=> $login));

    //récupere ce qu'il a dans la base
    $data = $requete -> fetch ();

   // $verifMotDePasse = password_verify ($_POST['password'], $data ['password']);
   // if (!verifMotDePasse) {


      if ($password != $data['password'] ){ //ici on compare le mot de passe rentrer au mot de passe de la bdd
       
        echo $message = '<p id="message> Erreur de login et/ou password. Merci de recommencer';
       
    } else {
     
        session_start();
        $_SESSION['login'] = $login;
        $_SESSION['prenom'] = $data['prenom'];
        header ("location:index2.php"); //on met le fichier sur lequel ca va nous renvoyer si le mdp est bon
       
    }
}else{
    echo $message = '<p id="message">Vous avez oublié un champ.</p>';
}
?>