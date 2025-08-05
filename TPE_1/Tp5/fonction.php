<?php
    function DecompFactPrem($n) {
        $p = $n;
        $fact = array();

        for ($i = 2; $i <= $n; $i++) {
            $count = 0;
            while ($n % $i == 0) {
                $count++;
                $n = $n / $i;
            }

            if ($count > 0) {
                $fact[$i] = $count;
            }
        }
            
        $res = "$p = ";
        $pre = true;

        foreach ($fact as $base => $expo) {
            if (!$pre) {
                $res .= " * ";
            }

            $pre = false;
            $res .= ($expo == 1) ? $base : "$base<sup>$expo</sup>";
        }

        return $res;
    }
?>