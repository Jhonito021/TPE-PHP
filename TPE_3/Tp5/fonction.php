<?php
    function lectureSpiraleInversee($array) {
        $result = [];
        $a = 0;
        $b = count($array) - 1;
        $c = 0;
        $d = count($array[0]) - 1;
    
        while ($a <= $b && $c <= $d) {
            for ($i = $c; $i <= $d; $i++) {
                $result[] = $array[$a][$i];
            }
            $a++;
    
            for ($i = $a; $i <= $b; $i++) {
                $result[] = $array[$i][$d];
            }
            $d--;
    
            if ($a <= $b) {
                for ($i = $d; $i >= $c; $i--) {
                    $result[] = $array[$b][$i];
                }
                $b--;
            }
    
            if ($c <= $d) {
                for ($i = $b; $i >= $a; $i--) {
                    $result[] = $array[$i][$c];
                }
                $c++;
            }
        }
    
        return array_reverse($result);
    } 

    $array = [
        [5, 9, 6, 0, 1],
        [6, 8, 9, 4, 6],
        [2, 7, 9, 3, 4],
        [9, 5, 3, 1, 5],
        [7, 3, 0, 8, 5]
    ];

    $result = implode (" - ", lectureSpiraleInversee($array));
    echo $result;
?>