<?php
    require_once "fonction.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome</title>
</head>
<body>
    <?php
        extract ($_GET);

        $texte1 = "Kayak";
        $texte2 = "BONjOur TouT Le monde";
    ?>   
    <p>
        "<?php echo $texte1; ?>" est
        <?php echo palindrome($texte1) ? "Palindrome" : "Pas palindrome"; ?>
    </p>

    <p>
        "<?php echo $texte2; ?>" est
        <?php echo palindrome($texte2) ? "Palindrome" : "Pas palindrome"; ?>
    </p>    
    
</body>
</html>