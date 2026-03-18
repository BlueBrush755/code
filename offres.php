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
    <title>Offres</title>
    <link rel="stylesheet" href="offres.css">
</head>
<body>

<header>
    <h1>Offres</h1>
</header>

<div class="Offres">
<?php foreach ($offres as $offre): ?>

    <?php
    if ($offre['nomOffres'] === 'seul') {
        $image = 'offreSeul.jpg';
    } elseif ($offre['nomOffres'] === 'couple') {
        $image = 'offreCouple.jpg';
    } elseif ($offre['nomOffres'] === 'ami') {
        $image = 'offreAmi.jpg';
    } elseif ($offre['nomOffres'] === 'famille') {
        $image = 'offreFamille.jpg';
    } elseif ($offre['nomOffres'] === 'groupe') {
        $image = 'offreGroupe.jpg';
    }
    ?>

    <div class="b6">
        <img src="<?= $image ?>" class="imageOffres" alt="Photo de <?= htmlspecialchars($offre['nomOffres']) ?>">    

        <div class="text-container">
            
            <section class="section">
                <?= htmlspecialchars($offre['nomOffres']) ?>
            </section>

            <h5 class="desciptionOffre">
                <?= htmlspecialchars($offre['description']) ?>
            </h5>

            <h5 class="desciptionOffre">
                <?= htmlspecialchars($offre['besoin']) ?>
            </h5>

            <h5 class="maxOffre">
                max :
                <?= htmlspecialchars($offre['personnesmax']) ?>
            </h5>

            <h2 class="prix">
                <?= htmlspecialchars($offre['prix']) ?> €
            </h2>

        </div> </div>

<?php endforeach; ?>
</div>

</body>
</html>