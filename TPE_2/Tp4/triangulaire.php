<?php
    require_once ('fonction.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangulaire</title>
</head>
<body>
    <?php
        extract ($_GET);
        $A = [
            [3, 2, 1],
            [0, 1, 2],
            [0, 0, 3]
        ];
        $B = [9, 8, 7];
        $res = implode (" - ", solveUpperTriangular($A, $B));
        echo $res;
    ?>
</body>
</html>