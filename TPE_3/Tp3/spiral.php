<?php
    require_once ("fonction.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spirale</title>
</head>
<body>
    <?php
        extract ($_GET);
        $n = 5;
        $spiral = generateSpiral($n);
        file_put_contents("spirale.json", json_encode($spiral));
    
        $res = implode(" - ", array_merge(...$spiral));
        echo $res;
    ?>
</body>
</html>