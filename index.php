<html lang="fr">
    <head>
        <title> Page d'acceuil </title>
        <meta carset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
        <link href="style/style.css" rel="stylesheet"/>
        <link href="style/navbar.css" rel="stylesheet"/>
    </head>
    <body>
        <?php
        include "startSessionIfNotStarted.php";
        if(isset($_GET['deconnexion'])){ 
            if($_GET['deconnexion']==true){  
                unset($_SESSION["user"]);
                header("Location: index.php");
            }
        }
        include "head.php"?>
        <div class="container">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
        <?php 
        include "footer.php"?>
    </body>
</html>