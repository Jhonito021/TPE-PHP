<?php
    require_once ("fonction.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversion d’un nombre en anglais</title>
</head>
<body>
    <?php
        extract ($_GET);
        $n = 121;
    ?>
    <p>
        <?php
            echo "Le nombre $n en angalais est " . convertir_nombre($n);
        ?>
    </p>
</body>
</html>