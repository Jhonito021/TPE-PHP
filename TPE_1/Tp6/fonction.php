<?php
    function anagrammes($str, $prefix = "") {
        $n = strlen($str);
        if ($n == 0) {
            echo $prefix . "\n";
        } else {
            for ($i = 0; $i < $n; $i++) {
                $rest = substr($str, 0, $i) . substr($str, $i + 1);
                anagrammes($rest, $prefix . $str[$i]);
            }
        }
    }
?>