<?php
function generateSpiral($n) {
    
    $spiral = array_fill(0, $n, array_fill(0, $n, 0));

    $value = 1; //
    $a = 0; // haut
    $b = $n - 1; // bas
    $c = 0; // gauche
    $d = $n - 1; // droite

    
    while ($value <= $n * $n) {
        for ($i = $c; $i <= $d; $i++) {
            $spiral[$a][$i] = $value++;
        }
        $a++; 

        for ($i = $a; $i <= $b; $i++) {
            $spiral[$i][$d] = $value++;
        }
        $d--;

        for ($i = $d; $i >= $c; $i--) {
            $spiral[$b][$i] = $value++;
        }
        $b--;

        for ($i = $b; $i >= $a; $i--) {
            $spiral[$i][$c] = $value++;
        }
        $c++;
    }

    file_put_contents("spirale.json", json_encode($spiral));

    return $spiral;
}

?>