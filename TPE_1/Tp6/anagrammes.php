<?php
    require_once ("fonction.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anagrammes</title>
</head>
<body>
    <?php
        extract ($_GET);
    ?>
    <p> REC: <?php echo anagrammes("REC");?>.</p>
</body>
</html>