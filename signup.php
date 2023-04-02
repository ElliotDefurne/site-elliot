<html lang="fr">
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style/login.css">
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="style/navbar.css">
        <title> Page d'Inscription </title>
    </head>
    <body>
        <?php
        include"head.php";
        ?>
        <div class="container">
            <form action="verificationSignup.php" method="POST">
                <h1>Inscription</h1>
                <br>
                <label>Nom d'utilisateur :</label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
                
                <label>Email :</label>
                <input type="text" placeholder="Entrer votre adresse email" name="email" required>


                <label>Mot de passe :</label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>
                
                <label>Répétez le mot de passe :</label>
                <input type="password" placeholder="Répétez le mot de passe" name="passwordRepeted" required>
                
                <label>Entrez le texte dans l'image</label>
                <input name="captcha" type="text">
                <img src="captcha/captcha.php" style="vertical-align: middle;"/> 
                
                <input type="submit" id='submit' value='LOGIN' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1){
                        echo "<p style='color:red;font-family:\"Trebuchet MS\"'>Utilisateur ou mot de passe vide</p>";
                    }
                    else if($err==2){
                        echo "<p style='color:red;font-family:\"Trebuchet MS\"'>Les mots de passe ne correspondent pas</p>";
                    }
                    else if($err==3){
                        echo "<p style='color:red;font-family:\"Trebuchet MS\"'>Les mots de passe ne correspondent pas</p>";
                    }
                    else if($err==4){
                        echo "<p style='color:red;font-family:\"Trebuchet MS\"'>Le captcha est incorrect</p>";
                    }
                }
                ?>
            </form>
        </div>
        <?php
        include"footer.php";
        ?>
    </body>
</html>
