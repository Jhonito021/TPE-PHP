<?php require_once('fonction.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analyse des chaînes de caractères</title>
</head>
<body>
    <?php 
        extract($_GET);
        $chaine = "(Yo estudiando en ESMIA. En el ano 2024!!!)";
    ?>

    <p>Chaine de caractères: <?php echo nbrCaractere($chaine); ?></p>
    <p><?php echo compte($chaine); ?></p>
    <p>Nombre des chiffres: <?php echo nbrChiffre($chaine); ?></p>
    <p>Nombre des caractères spéciaux: <?php echo nbrSpeciaux($chaine); ?></p>
    
</body>
</html>