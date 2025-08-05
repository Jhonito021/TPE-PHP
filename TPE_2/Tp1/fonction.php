<?php
function transpose($matrice) {
    $transpose = [];
    foreach ($matrice as $i => $k) {
        foreach ($k as $j => $val) {
            $transpose[$j][$i] = $val;
        }
    }
    file_put_contents('transpose.json', json_encode($transpose));
    return $transpose;
}
?>