<?php require_once('fonction.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decomposition en produit des facteurs premier</title>
</head>
<body>
    <?php
        extract($_GET);
        $n = 360;
    ?>
    <p>
        <?php
            echo DecompFactPrem($n);
        ?>
    </p>
</body>
</html>