<?php
    session_start();

    $panier = isset($_SESSION['panier']) ? $_SESSION['panier'] : [];
    $total=0;
?>

<h2>Votre panier</h2>
<table border="1">
    <tr>
        <th>Nom</th>
        <th>Prix</th>
        <th>Quantite</th>
        <th>Total</th>
    </tr>

    <?php foreach ($panier as $item): $sousTotal = $item['prix'] * $item['quantite'];
        $total += $sousTotal;
    ?>

    <tr>
        <td><?= $item['nom'] ?></td>
        <td><?= $item['prix'] ?></td>
        <td><?= $item['quantite'] ?></td>
        <td><?= $sousTotal ?></td>
    </tr>
    <?php endforeach; ?>
</table>


<p>Total: <?= $total ?>Ar</p>
<a href="commande.php">
    <button>Commander</button>
</a>