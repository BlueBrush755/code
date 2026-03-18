<?php
require_once "config.php";

$message = '';

if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['mdp'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    $sql = "INSERT INTO utilisateur (nom, prenom, mail, MDP) VALUES (:nom, :prenom, :mail, :mdp)";
    $stmt = $pdo->prepare($sql);
    

    $result = $stmt->execute([
        'nom' => $nom, 
        'prenom' => $prenom, 
        'mail' => $email, 
        'mdp' => $mdp
    ]);

    if ($result) {
        $message = 'Inscription réussie!';
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
    <div class="login-container">
    <h2>Inscription</h2>

    <?php if (!empty($message)): ?>
        <p style="color:red"><?= htmlspecialchars($message) ?></p>
    <?php endif; ?>

    <form action="" method="post"> <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>
        </div>

        <div>
            <label for="prenom">Prenom :</label>
            <input type="text" id="prenom" name="prenom" required>
        </div>

        <div>
            <label for="email">Adresse e-mail:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div>
            <label for="password">Mot de passe:</label>
            <input type="password" id="mdp" name="mdp" required> </div>

        <div>
            <input type="submit" value="S'inscrire">
        </div>
    </form>
</div>
    </body>
</html>