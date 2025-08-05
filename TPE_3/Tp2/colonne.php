<?php
    require_once ("fonction.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colonne par colonne</title>
</head>
<body>
    <?php
        extract ($_GET);
        $array = [
            [5, 9, 6, 0, 1],
            [6, 8, 9, 4, 6],
            [2, 7, 9, 3, 4],
            [9, 5, 3, 1, 5],
            [7, 3, 0, 8, 5]
        ];

        $result = implode (" - ", lectureColonneParColonne($array));
        echo $result;
    ?>
</body>
</html>