

<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">


    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href=
    "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.vhv.rs%2Fdpng%2Fd%2F9-95512_thumbs-up-emoji-hd-png-download.png&f=1&nofb=1&ipt=dcad2d864ce0ecc9793e18a939ab18609a211f2ede0b406ba3d36a9a43e2c203&ipo=images"
              type="image/x-icon">
  </head>

  <body class="test">
  <header>
      
      <h1><img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.vhv.rs%2Fdpng%2Fd%2F9-95512_thumbs-up-emoji-hd-png-download.png&f=1&nofb=1&ipt=dcad2d864ce0ecc9793e18a939ab18609a211f2ede0b406ba3d36a9a43e2c203&ipo=images" style="height: 50px; width: auto;">Antoine Nagy</h1>
    </header>

    <nav class="menu">
        <ul class="pages">
          <li><a href="index.html">Home</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
  
      
       
      </nav>
      <center>
      <main>

        <h1>Informations de contact</h1>

        <p>Les champs obligatoires sont suivis par un *</p>

        <form method="post" action="valid.php">
            <div class="qualite">
                Qualité:<br><br>
                <input type="radio" name="qualite" value="monsieur">
                Monsieur
                <input type="radio" name="qualite" value="madame">
                Madame
            </div>
            <br><br>
            Nom: *
            <input type="text" name="name" placeholder="Nom" required>
            <br><br>
            e-mail: *
            <input type="email" name="email" placeholder="E-mail" required>
            <br><br>
            Mot de passe: *
            <input type="text" name="pass" placeholder="Mot de passe" required>
            <br><br>
            <input type="submit" value="Valider le paiement" name="valid" style="background-color: green; color: white;">
        </form>

      </main>
</center>

      <footer>
        <p>Antoine Nagy</p>
      </footer>

  </body>

  