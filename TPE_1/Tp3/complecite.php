<?php 
    require_once ("fonction.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analyse de complexité textuelle </title>
</head>
<body>
    <?php
        extract ($_GET);
        $texte = "Les bons programmeurs se posent toujours la question : et si ça tournait mal ?";
    ?>

    <p>On a: <?php echo compterMots("$texte"); ?></p>
    <p>On a: <?php echo compterPhrases("$texte"); ?></p>
    <p>Moyenne des mots: <?php echo longueurMoyenneMots($texte); ?></p>
    <p>Moyenne des phrases: <?php echo longueurMoyennePhrases($texte); ?></p>
</body>
</html>

   