<?php
    if (!file_exists('produits.json')) {
        file_put_contents ('produits.json', json_encode ([]));
    }

    $prod = json_decode (file_get_contents('produits.json'), true);

    if ($_SERVER ['REQUEST_METHOD'] === 'POST') {
        $nom = $_POST ['nom'];
        $prix = intval ($_POST ['prix']);
        $id = count ($prod) + 1;

        $prod [] = [
            'id' => $id,
            'nom' => $nom,
            'prix' => $prix,
            'qtStock' => 0
        ];

        file_put_contents ('produits.json', json_encode ($prod, JSON_PRETTY_PRINT));
        echo "Produits ajouté";
    }
?>

<form method="post">
    <input type="text" name="nom" placeholder="Nom" required> <br>
    <input type="number" name = "prix" placeholder="Prix" required> <br>
    <input type="submit" value="ajouter">
</form>

