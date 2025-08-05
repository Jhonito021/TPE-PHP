<?php
    require_once ('fonction.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transpose</title>
</head>
<body>
    <?php
        extract ($_GET);
        $matrix = [
            [1, 2, 3],
            [4, 5, 6],
            [7, 8, 9]
        ];
        
       $res = implode (" - ", array_merge(...transpose($matrix)));
       echo $res;
    ?>  

</body>
</html>