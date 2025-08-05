<?php
    function lectureSpirale($array) {
        $res = [];
        $a = 0; //haut
        $b = count($array) - 1; //bas
        $c = 0; //gauche
        $d = count($array[0]) - 1;  //droite
    
        while ($a <= $b && $c <= $d) {
            for ($i = $c; $i <= $d; $i++) {
                $res[] = $array[$a][$i];
            }
            $a++;
    
            for ($i = $a; $i <= $b; $i++) {
                $res[] = $array[$i][$d];
            }
            $d--;
    
            if ($a <= $b) {
                for ($i = $d; $i >= $c; $i--) {
                    $res[] = $array[$b][$i];
                }
                $b--;
            }
    
            if ($c <= $d) {
                for ($i = $b; $i >= $a; $i--) {
                    $res[] = $array[$i][$c];
                }
                $c++;
            }
        }
        return $res;
    }
?>