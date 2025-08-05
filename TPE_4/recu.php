<?php
    session_start();

    $command = isset($_SESSION['derniere_commande']) ? $_SESSION['derniere_commande'] : null;

    if (!$command) {
        echo "Auccune commande trouvée";
        exit();
    }

    $total = 0;
?>

<h2>Reçu de commande</h2>
<p>Nom: <?= $command['nom'] ?></p>
<p>Adresse: <?= $command['adresse'] ?></p>
<p>Email: <?= $command['email'] ?></p>
<p>Commentaire: <?= $command['commentaire'] ?></p>

<h3>Détails de la commande:</h3>
<table border="1">
    <tr>
        <th>Nom</th>
        <th>Prix</th>
        <th>Quantite</th>
        <th>Total</th>

        <?php foreach($command['detail'] as $item): $sousTotal = $item['prix'] * $item['quantite'];
            $total += $sousTotal;
        ?>

        <tr>
            <td><?= $item['nom'] ?></td>
            <td><?= $item['prix'] ?></td>
            <td><?= $item['quantite'] ?></td>
            <td><?= $sousTotal ?></td>
        </tr>
        <?php endforeach; ?>
    </tr>
</table>

<p>Total: <?= $total ?>Ar</p>
<h3>Merci pour votre commande</h3>