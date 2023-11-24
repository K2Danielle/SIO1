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
                <li><active><a href="#">Home</a></active></li>
                <!-- Here the link to Contact -->
                <li><active><a href="contact.php">Contact</a></active></li>
            </ul>

    
     
        </nav>
        
        <formulaire>
            <h2> Information de Contact </h2>
            <p> Les champs obligatoires sont suivis par un *.

            <form action= "contact.php" method="post">

                Qualité:
                <input type="radio" name="genre" value="Femme">Femme
                <input type="radio" name="genre" value="Homme">Homme <br>

                <ul>
                    <li>
                        <label for="Name">Name*&nbsp;</label>
                        <input type="text" id="name" name="Name"/>
                    </li>
                    <li>
                        <label for="E-mail">Email*&nbsp;</label>
                        <input type="email" id="email" name="E-mail"/>
                    </li>
                    <li>
                        <label for="Mot de passe">Mdp*&nbsp;</label>
                        <input type="mdp" id="mdp" name="Mot de passe"/>
                    </li>
                </ul>
                <div class="button">
                    <button type="submit">Valider le paiement</button>
                </div>
            </form>
        </formulaire>

    </body>
</html>