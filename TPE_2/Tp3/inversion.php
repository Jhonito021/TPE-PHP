<?php
    require_once ("fonction.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inversion</title>
</head>
<body>
    <?php
        extract ($_GET);
        $A = [
            [1, 2, 3],
            [0, 4, 5],
            [1, 0, 6]
        ];
        $B = [9, 8, 7];
        print_r (solveLinearSystem($A, $B));
    ?>
</body>
</html>