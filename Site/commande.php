<!DOCTYPE html>
<html lang="fr">
    <?php
function commande(){
    ?>
    <link rel="stylesheet" href="styles.css">
    <div class="commande">
        <center>
            <form method="post">
                Commande: 
                <select name="commA" style="width: max-content;">
                    <option value="NULL">---</option>
                    <option value="BURGER">BURGER</option>
                    <option value="ASSIETTE">ASSIETTE</option>
                    <option value="SALADE">SALADE du MOMENT</option>
                    <option value="P. FRITE">Portion petite frites</option>
                    <option value="G. FRITE">Portion grandes frites</option>
                </select>
                &nbsp;
                <select name="commB" style="width: max-content;">
                    <option value="NULL">---</option>
                    <option value="EAU">Eau cristaline 50cl</option>
                    <option value="AUTRE">Boisson 33cl</option>
                    <option value="B. ART.">Bière artisanale</option>
                    <option value="B. 1664">Bière 1664 33cl</option>
                </select>
                &nbsp; Menu: <input type="checkbox" name="menu">
                &nbsp; <input type="submit" value="valider" name="valComm">
            </form>
        </center>
    </div>
    <?php
}
function connexion(){
    ?>
<center>
    <br><br>
    <form action="" method="post">
        <input type="text" name="login" placeholder="Identifiant">
        <br>
        <input type="password" name="password" placeholder="mot de passe">
        <br>
        <input type="submit" name="valCo" value="valider">
        <input type="submit" name="deco" value="déconnexion">
    </form>
</center>
<?php
}