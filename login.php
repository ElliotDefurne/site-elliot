<html lang="fr">
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style/login.css">
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="style/navbar.css">
        <title> Page de connexion </title>
    </head>
    <body>
        <?php
        include "head.php";
        ?>
        <div class="container">
            <form action="verificationLogin.php" method="POST">
                <h1>Connexion</h1>
                <br>
                <label>Nom d'utilisateur :</label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label>Mot de passe :</label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
        </div>
        <?php
        include "footer.php";
        ?>
    </body>
</html>