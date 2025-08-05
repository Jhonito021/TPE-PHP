<?php
    require_once ('fonction.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Determinant</title>
</head>
<body>
    <p>
        <?php
        extract ($_GET);
        $matrix = [
            [2, 4, 1],
            [0, 3, 2],
            [1, 5, 6]
        ];
        $det = determinant($matrix);
        echo "$det";
        ?>
    </p>
</body>
</html>