<?php
require_once "config.php";

$message = '';

if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['password'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (nom, prenom, email, mdp) VALUES (:nom, :prenom, :email, :mdp)";
    $stmt = $pdo->prepare($sql);
    $result = $stmt->execute(['nom' => $nom, 'prenom' => $prenom, 'email' => $email, 'password' => $password]);

    if ($result) {
        $message = 'Inscription réussie!';
        header('Location: login.php');
    } else {
        $message = 'Erreur lors de l\'inscription.';
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Compte</title>
        <link rel="stylesheet" href="compte.css">
    </head>
    <body>
    <?php if (!empty($message)): ?>
        <p style="color:red"><?= $message ?></p>
    <?php endif; ?>

    <div class="login-container">
    <h2>Inscription</h2>

    <?php if (!empty($message)): ?>
        <p style="color:red"><?= $message ?></p>
    <?php endif; ?>

    <form action="register.php" method="post">
        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom">
        </div>

        <div>
            <label for="prenom">Prenom :</label>
            <input type="text" id="prenom" name="prenom">
        </div>

        <div>
            <label for="email">Adresse e-mail:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div>
            <label for="password">Mot de passe:</label>
            <input type="password" id="mdp" name="mdp">
        </div>

        <div>
            <input type="submit" value="S'inscrire">
        </div>
    </form>
</div>
    </body>