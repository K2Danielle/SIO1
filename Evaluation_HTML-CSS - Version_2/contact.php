<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">

    <title>My page title</title>
    <link rel="stylesheet" href="style.css">
  </head>

    <body>
        <!-- Here is our main header that is used across all the pages of our website -->

        <header>
            <h1>Océane BET--TAFFARD</h1>
            <img src="logo.jpg">
        </header>

        <nav>
            <ul>
                <li><active><a href="index.html">Home</a></active></li>
                <!-- Here the link to Contact -->
                <li><active><a href="contact.php">Contact</a></active></li>
            </ul>

    
     
        </nav>

        <?php

        $genreErr = $nameErr = $emailErr = $mdpErr = "";
        $genre = $name = $email = $mdp = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["genre"])) {
                $genreErr = "/!\Le genre n'a pas été renseigné";
            }
            else {
                $genre = test_input($_POST["genre"]);
            }
            if (empty($_POST["name"])) {
                $nameErr = "/!\Le nom n'a pas été renseigné";
            }
            else {
                $name = test_input($_POST["name"]);
            }
            if (empty($_POST["email"])) {
                $emailErr = "/!\L'email n'a pas été renseigné";
            }
            else {
                $email = test_input($_POST["email"]);
            }
            if (empty($_POST["mdp"])) {
                $mdpErr = "/!\Le mot de passe n'a pas été renseigné";
            }
            else {
                $mdp = test_input($_POST["mdp"]);
            }
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }

        ?>

        <formulaire>
            <h2> Information de Contact </h2>
            <p> Les champs obligatoires sont suivis par un *.

            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                Qualité:
                <input type="radio" name="genre" value="Femme">Femme
                <input type="radio" name="genre" value="Homme">Homme
                <span class="error"> <?php echo $genreErr;?></span> <br>

                <ul>
                    <li>
                        <label for="name">Name*&nbsp;</label>
                        <input type="text" id="name" name="name"/>
                        <span class="error"> <?php echo $nameErr;?></span>
                    </li>
                    <li>
                        <label for="E-mail">Email*&nbsp;</label>
                        <input type="email" id="email" name="E-mail"/>
                        <span class="error"> <?php echo $emailErr;?></span>
                    </li>
                    <li>
                        <label for="Mot de passe">Mdp*&nbsp;</label>
                        <input type="mdp" id="mdp" name="Mot de passe"/>
                        <span class="error"> <?php echo $mdpErr;?></span>
                    </li>
                </ul>
                <div class="button">
                    <button type="submit">Valider le paiement</button>
                </div>
            </form>
        </formulaire>

    </body>
</html>