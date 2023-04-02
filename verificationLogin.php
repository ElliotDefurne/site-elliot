<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
    // connexion à la base de données
    $db_username = 'admin';
    $db_password = 'bijouxdecollier';
    $db_name     = 'user';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username'])); 
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
    
    if($username !== "" && $password !== "")
    {
         $requete = "SELECT * FROM userdata WHERE 
               pseudo = '".$username."' and password = '".$password."';";
         $exec_requete = mysqli_query($db,$requete);
         $reponse = mysqli_fetch_array($exec_requete);
         $count = count($reponse); //$count = $reponse['count(*)'];
         if($count!=0) // nom d'utilisateur et mot de passe correctes
         {
            $_SESSION["user"]["id"] = $reponse[0];
            $_SESSION["user"]["username"] = $reponse[1];
            $_SESSION["user"]["password"] = $reponse[2];
            $_SESSION["user"]["admin"] = boolval(intval($reponse[3])); // "0" -> False et "1" -> True
            $_SESSION["user"]["dateInscription"] = $reponse[4];
            header('Location: index.php');
         }
         else
         {
            header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
         }
    }
    else
    {
       header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: login.php');
}
mysqli_close($db); // fermer la connexion
?>
<html>
   <head>
      <title> DropShipping - Page de verification <title>
   </head>
</html>
