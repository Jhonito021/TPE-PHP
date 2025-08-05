<?php
function upperTriangular($matrix) {
    $n = count($matrix);
    for ($i = 0; $i < $n; $i++) {
        for ($j = $i + 1; $j < $n; $j++) {
            $factor = $matrix[$j][$i] / $matrix[$i][$i];
            for ($k = $i; $k < $n; $k++) {
                $matrix[$j][$k] -= $factor * $matrix[$i][$k];
            }
        }
    }
    file_put_contents('triangulaireSuperieure.json', json_encode($matrix));
    return $matrix;
}

function solveUpperTriangular($matrix, $B) {
    $n = count($matrix);
    $X = array_fill(0, $n, 0);
    for ($i = $n - 1; $i >= 0; $i--) {
        $sum = $B[$i];
        for ($j = $i + 1; $j < $n; $j++) {
            $sum -= $matrix[$i][$j] * $X[$j];
        }
        $X[$i] = $sum / $matrix[$i][$i];
    }
    return $X;
}
?>