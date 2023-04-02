<ul class="horizontal">
    <li><button onclick='window.location.href="index.php"' class="button button--mimas active"><span>ACCEUIL</span></li>
    <?php 
    include "startSessionIfNotStarted.php";
    if(isset($_SESSION["user"])){
        if($_SESSION["user"]["admin"]== "1"){
            echo '<li><a href="admin.php" class="link link--elara text"><span>Admin</span></a></li>';
        }
        echo '<li class="rightli"><a href="cart.php" class="link link--elara text"><span>Panier</span></a></li>';
        echo '<li class="rightli"><a href="account.php" class="link link--elara text"><span>Mon Compte</span></a></li>';
        echo '<li class="rightli"><a href="index.php?deconnexion=true" class="link link--elara text"><span>Deconnexion</span></a></li>';    
    }
    else{
        echo'<li><a href="login.php" class="link link--elara text"><span>Connexion</span></a></li>';
        echo'<li><a href="signup.php" class="link link--elara text"><span>Inscription</span></a></li>';
    };?>
</ul>
