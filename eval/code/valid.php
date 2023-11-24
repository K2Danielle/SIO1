<?php

    ?>
<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">

    <title>Bonjour</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href=
    "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.vhv.rs%2Fdpng%2Fd%2F9-95512_thumbs-up-emoji-hd-png-download.png&f=1&nofb=1&ipt=dcad2d864ce0ecc9793e18a939ab18609a211f2ede0b406ba3d36a9a43e2c203&ipo=images"
              type="image/x-icon">
  </head>

  <body>
    <div class="left">
    <!-- Here is our main header that is used across all the pages of our website -->

    <header>
      
      <h1><img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.vhv.rs%2Fdpng%2Fd%2F9-95512_thumbs-up-emoji-hd-png-download.png&f=1&nofb=1&ipt=dcad2d864ce0ecc9793e18a939ab18609a211f2ede0b406ba3d36a9a43e2c203&ipo=images" style="height: 50px; width: auto;">Antoine Nagy</h1>
    </header>

    <nav class="menu">
      <div class="pages">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
    
     
    </nav>

    <main>
        <h1>Bienvenue</h1>
       <?php echo "Qualité: ".htmlspecialchars($_POST['qualite'])."<br>";
       echo "Nom: ".htmlspecialchars($_POST['name'])."<br>";
       echo "E-mail: ".htmlspecialchars($_POST['email'])."<br>";
       echo "Mot de passe: ".htmlspecialchars($_POST['pass'])."<br>"; ?>
    </main>

<!-- And here is our main footer that is used across all the pages of our website -->
<footer>
  <p>Antoine Nagy</p>
</footer>


</body>
</html>
<?php
