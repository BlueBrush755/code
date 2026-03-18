<?php
require_once "config.php";

$sql = "SELECT * FROM lieux";
$stmt = $pdo->query($sql);
$lieux = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Destination</title>
    <link rel="stylesheet" href="destination.css">
</head>
<body>

<header>
    <h1>Destination</h1>
</header>

<div class="destination">
<?php foreach ($lieux as $lieu): ?>

    <?php
    if ($lieu['nomDestination'] === 'Paris') {
        $image = 'destinationParis.jpg';
    } elseif ($lieu['nomDestination'] === 'Rome') {
        $image = 'destinationRome.jpeg';
    } elseif ($lieu['nomDestination'] === 'Tokyo') {
        $image ='destinationTokyo.jpg';
    } elseif ($lieu['nomDestination'] === 'Seoul') {
        $image ='destinationSeoul.jpg';
    } elseif ($lieu['nomDestination'] === 'Bucarest') {
        $image ='destinationBucarest.jpg';
    } elseif ($lieu['nomDestination'] === 'New York') {
        $image ='destinationNewYork.jpg';
    } elseif ($lieu['nomDestination'] === 'Berlin') {
        $image ='destinationBerlin.jpg';
    } elseif ($lieu['nomDestination'] === 'Madrid') {
        $image ='destinationMadrid.jpg';
    } 
    ?>

    <div class="b6">
        <img src="<?= $image ?>" class="imagedestination" alt="Photo de <?= htmlspecialchars($lieu['nomDestination']) ?>">

        <div class="text-container">
            
            <section class="section">
                <?= htmlspecialchars($lieu['nomDestination']) ?>
            </section>

            <h5 class="desciptiondestination">
                <?= htmlspecialchars($lieu['description']) ?>
            </h5>

            <h2 class="prix">
                <?= htmlspecialchars($lieu['prix']) ?> € / j TTC / pers
            </h2>

        </div> </div>

<?php endforeach; ?>
</div>

</body>
</html>