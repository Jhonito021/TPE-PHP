<?php
    function convertir_nombre($n) {
        $units = ["zero","one","two","three","four","five","six","seven","eight","nine"];
        $tens = ["", "", "twenty", "thirty", "forty", "fifty", "sixty", "seventy", "eighty", "ninety"];
        $teens = ["ten","eleven","twelve","thirteen","fourteen","fifteen","sixteen","seventeen","eighteen","nineteen"];
    
        if ($n < 10) return $units[$n];
        if ($n < 20) return $teens[$n - 10];
        if ($n < 100) return $tens[intval($n / 10)] . ($n % 10 ? "-" . $units[$n % 10] : "");
        if ($n < 1000) {
            return $units[intval($n / 100)] . " hundred" . ($n % 100 ? " and " . convertir_nombre($n % 100) : "");
        }
        return "Nombre trop grand";
    }
?>