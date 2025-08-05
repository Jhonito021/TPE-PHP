<?php
function determinant($matrix) {
    $n = count($matrix);

    if ($n == 2) {
        return $matrix[0][0] * $matrix[1][1] - $matrix[0][1] * $matrix[1][0];
    }

    $det = 0;

    for ($i = 0; $i < $n; $i++) {
        $subMatrix = [];
        for ($j = 1; $j < $n; $j++) {
            $row = [];
            for ($k = 0; $k < $n; $k++) {
                if ($k != $i) {
                    $row[] = $matrix[$j][$k];
                }
            }
            $subMatrix[] = $row;
        }

        $det += (($i % 2 == 0 ? 1 : -1) * $matrix[0][$i] * determinant($subMatrix));
    }

    return $det;
}
?>