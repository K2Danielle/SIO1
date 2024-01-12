<?php
    $hote = 'localhost'; // le chemin vers le serveur
    $bd = 'first'; // le nom de votre base de données
    $user = 'root'; // nom d'utilisateur pour se connecter
    $pwd = 'HelveticaStandard'; // mot de passe de l'utilisateur pour se connecter
try {
        $con = new PDO('mysql:host='.$hote.'; dbname='.$bd, $user, $pwd);
        // utiliser la connexion ici
    }
catch (PDOException $e) {
        $msg = 'ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
        die($msg);
    }
?>

<?php
// ouverture d'une connexion ...
$req3=$con->prepare("SELECT NOM FROM client WHERE ID = ? ");
$req3->execute(array( 1 ));
$lignes=$req3->fetchAll();
print_r($lignes);
?>
