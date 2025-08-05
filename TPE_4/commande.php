<?php
    session_start();

    if (empty($_SESSION['panier'])) {
        echo "Votre panier est vide";
        exit;
    }

    if (!file_exists ('historique.json')) {
        file_put_contents ('historique.json', json_encode([]));
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $historique = json_decode(file_get_contents('historique.json'), true);

        $comand = [
            'nom' => $_POST['nom'],
            'adresse' => $_POST['adresse'],
            'email' => $_POST['email'],
            'commentaire' => $_POST['commentaire'],
            'detail' => $_SESSION['panier'] 
        ];

        $historique[] = $comand;

        file_put_contents('historique.json', json_encode($historique, JSON_PRETTY_PRINT));
        $_SESSION['derniere_commande'] = $comand;
        $_SESSION['panier'] = [];
        header ('Location: recu.php');
        exit();
    }
?>

<form method="post">
    <input type="text" name="nom" placeholder="Nom" required><br>
    <input type="text" name="adresse" placeholder="Adresse" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <textarea name="commentaire"></textarea>
    <input type="submit" value="Confirmer la commande">
</form>

