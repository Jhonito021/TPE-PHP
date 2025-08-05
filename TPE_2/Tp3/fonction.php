<?php
function inverse($matrix) {
    $n = count($matrix);
    $identity = array_map(function($row) use ($n) {
        return array_map(function($col) use ($row) {
            return ($row == $col) ? 1 : 0;
        }, range(0, $n-1));
    }, range(0, $n-1));

    for ($i = 0; $i < $n; $i++) {
        $max = $matrix[$i][$i];
        $maxRow = $i;
        for ($j = $i + 1; $j < $n; $j++) {
            if (abs($matrix[$j][$i]) > abs($max)) {
                $max = $matrix[$j][$i];
                $maxRow = $j;
            }
        }

        if ($maxRow != $i) {
            $temp = $matrix[$i];
            $matrix[$i] = $matrix[$maxRow];
            $matrix[$maxRow] = $temp;
            $temp = $identity[$i];
            $identity[$i] = $identity[$maxRow];
            $identity[$maxRow] = $temp;
        }

        for ($j = $i + 1; $j < $n; $j++) {
            $factor = $matrix[$j][$i] / $matrix[$i][$i];
            for ($k = $i; $k < $n; $k++) {
                $matrix[$j][$k] -= $factor * $matrix[$i][$k];
            }
            for ($k = 0; $k < $n; $k++) {
                $identity[$j][$k] -= $factor * $identity[$i][$k];
            }
        }
    }

    for ($i = $n - 1; $i >= 0; $i--) {
        for ($j = $i - 1; $j >= 0; $j--) {
            $factor = $matrix[$j][$i] / $matrix[$i][$i];
            for ($k = 0; $k < $n; $k++) {
                $identity[$j][$k] -= $factor * $identity[$i][$k];
            }
        }
    }

    for ($i = 0; $i < $n; $i++) {
        $factor = $matrix[$i][$i];
        for ($j = 0; $j < $n; $j++) {
            $identity[$i][$j] /= $factor;
        }
    }

    file_put_contents('inverse.json', json_encode($identity));
    return $identity;
}

function solveLinearSystem($A, $B) {
    $A_inv = inverse($A);
    $X = [];
    foreach ($A_inv as $row) {
        $sum = 0;
        for ($i = 0; $i < count($B); $i++) {
            $sum += $row[$i] * $B[$i];
        }
        $X[] = $sum;
    }
    return $X;
}
?>