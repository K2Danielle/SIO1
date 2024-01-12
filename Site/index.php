<!DOCTYPE html>
<html lang="fr">
<?php
session_start();
require "commande.php";




$login=array();
$login=file("login.txt");
$login = str_replace(array("\r", "\n"), '',$login);
$user = $login[1];
$pass = $login[2];
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chez Mélo</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <div class="logo">
            <img src="..\Site\images\Chez Melo (LOGO PNG).png"
                alt="Logo Chez Mélo">
        </div>
        <div class="titre">
            <img src="..\Site\images\chezmelo.png" alt="Chez Mélo">
        </div>
        <div class="facebook">
            <a href="https://www.facebook.com/profile.php?id=61551617686654&sk=about" target="_blank">
                <img src="..\Site\images\facebook.png" alt="Facebook">
            </a>
        </div>
    </header>

    <div class="menu">
        <div class="pages">
            <a href="index.php">Services</a>
            <a href="infos.php">Qui sommes-nous ?</a>
            <a href="connexion.php">Connexion</a>
        </div>
    </div>

    
    <div class="page">
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>Seul</th>
                    <th>Menu</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>BURGER
                        <br>
                        - Pain artisanal
                        <br>
                        - steak haché ou poulet pané maison frit
                        <br>
                        - fromage au choix dus moment
                        <br>
                        - légumes de saison
                        <br>
                        - sauce maison
                    </td>
                    <td>8 €</td>
                    <td>10 €</td>
                </tr>
                <tr>
                    <td>ASSIETTE
                        <br>
                        - steak haché ou poulet pané maison frit
                        <br>
                        - frites maison
                    </td>
                    <td>8 €</td>
                    <td>9 €</td>
                </tr>
                <tr>
                    <td>SALADE du MOMENT</td>
                    <td>8 €</td>
                    <td>10 €</td>
                </tr>
                <tr>
                    <td>Portion petite frites</td>
                    <td>1,50 €</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Portion grandes frites</td>
                    <td>2,50 €</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Eau cristaline 50cl</td>
                    <td>1 €</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Boisson 33cl</td>
                    <td>1,50 €</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Bière artisanale</td>
                    <td>3 €</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Bière 1664 33cl</td>
                    <td>2,50 €</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Le menu est servi avec sa portion de frites maison et une boisson non alcoolisée </td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php /*
    <center>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type="text" name="name" placeholder="Nom article" style="width: 200px;">
        &nbsp;
        <input type="text" name="price1" placeholder="Prix seul" style="width: 200px;">
        &nbsp;
        <input type="text" name="price2" placeholder="Prix menu" style="width: 200px;">
        &nbsp;
        <input type="submit" name="add" value="Ajouter">
    </form>
</center>
    <?php

    $name = $price = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $price1 = test_input($_POST["price1"]);
    $price2 = test_input($_POST["price2"]);
    }

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

    if(isset($_POST['add'])){
        ?>
        <div class="page">
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>Seul</th>
                    <th>Menu</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                    <?php
        echo $name."</td>";
        echo "<td>".$price1." €</td>";
        echo "<td>".$price2." €</td>";
        ?>
        </tr>
    </tbody>
    </table>
    </div>
    <?php
    }
    */
?>
<br>
<?php
/*
$login = fopen("login.txt","r") or die("couldn't open file!");
$user = fgets($login,);
echo $user;
*/



if(isset($_SESSION['user'],$_SESSION['pass'])){
    if($_SESSION['user'] == $user && $_SESSION['pass'] == $pass){
        commande();

        if(isset($_POST['valComm'])){
            if(!isset($_POST['menu'])){
                $menu = "PAS MENU";
            } else {
                $menu = "MENU";
            }
            $comms = fopen("commandes.txt","a") or die ("Couldn't open file");
            $commande = "\n----".date("Y-m-d H:i:s")."----"."\n".$_POST['commA'].", ".$_POST['commB'].", ".$menu;
            fwrite($comms,$commande);
        }
    }
}
    ?>
</body>

<footer>
    <div class="contact">
        <div class="telephone">
            <p>Téléphone : 0659752493</p>
        </div>
        <div class="email">
            <p>Email : melodyfoodtruck@gmail.com</p>
        </div>
    </div>
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d35521.37751963647!2d0.3023749785424384!3d45.48727589398413!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ffc9b7eb371b5f%3A0x82273a275c15ccef!2sLa%20fille%20du%20Nord%20Food%20truck!5e0!3m2!1sfr!2sfr!4v1695721540301!5m2!1sfr!2sfr"
            title="Emplacement de Chez Mélo sur Google Maps" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</footer>
</body>

</html>