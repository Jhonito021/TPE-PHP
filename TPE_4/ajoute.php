<?php
    session_start();

    if (!isset ($_SESSION ['panier'])) {
        $_SESSION ['panier'] = [];
    }

    $prod = $prod = json_decode (file_get_contents('produits.json'), true);

    if ($_SERVER ['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['produit'];
        $qt = intval($_POST['quantite']);

        foreach ($prod as $p) {
            if ($p['id'] == $id) {
                $existe = false;
                foreach ($_SESSION['panier'] as $item) {
                    if ($item['nom' == $p['nom']]) {
                        $item['quantite'] += $qt;
                        $existe = true;
                        break;
                    }
                }

                if (!$existe) {
                    $_SESSION ['panier'] [] = [
                        'nom' => $p['nom'],
                        'prix' => $p['prix'],
                        'quantite' => $qt
                    ];
                }
                break;
            }
        }

        if (isset($_POST['valider'])) {
            header ('Location: panier.php');
            exit();
        }
    }
?>

<form method="post">
    <select name="produit">
        <?php foreach ($prod as $p): ?>
            <option value="<?= $p['id'] ?>"> <?= $p['nom'] ?> - <?= $p['prix'] ?> Ar</option>
        <?php endforeach ?>
    </select>
        <input type="number" name="quantite" min="1" placeholder="Quantite" required> <br>
        <button type="submit" name="ajouter">Ajouter</button>
        <button type="submit" name="valier">valider</button>
</form>