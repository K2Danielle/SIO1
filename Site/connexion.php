

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

<?php

session_start();
require 'commande.php';

$login=array();
$login=file("login.txt");
$login = str_replace(array("\r", "\n"), '',$login);
$user = $login[1];
$pass = $login[2];



if(isset($_POST['valCo'])){
    if($_POST['login'] == $user && $_POST['password'] == $pass){
        echo '2';
        $_SESSION['user'] = $_POST['login'];
        $_SESSION['pass'] = $_POST['password'];
        header('Location: index.php');
    } else {
        ?>
        <p style="text-align: center; color: red;">mauvais identifiant / mot de passe<p>
        <?php
        session_unset();
    }
}

if(isset($_POST['deco'])){
    session_unset();
    header('Location: index.php');
}
connexion();

