<?php
require_once "config.php";

$sql = "SELECT * FROM offres";
$stmt = $pdo->query($sql);
$offres = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Contact</title>
        <link rel="stylesheet" href="Contact.css">
    </head>
    <body>

    <header>
        <h1>Offres</h1>
    </header>

    <center>
        <div class="contact">
        <h3> 📧​ mail: exploria95@gmail.com </h3>
        <h3> 📱​ numéro de téléphone: 06 06 06 06 07</h3>
        <h3> nos réseau :</h3>
        <br>
        <img src="Twitter.jpg" alt="logo twitter" style="float: center; max-width: 40px;">
        <img src="Instagram_icon.png" alt="logo Insta" style="float: center; max-width: 40px;">
        </div>
    </center>

    <br> 

    <footer>
        <p>Copyright © 2025. Tous droits réservés à Daniel et Mihail du BTS SIO 1.</p>
    </footer>

    </body>
</html>