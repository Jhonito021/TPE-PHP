<?php
    function lectureLigneParLigne($array) {
        $result = [];
        foreach ($array as $ligne) {
            $result = array_merge($result, $ligne);
        }
        return $result;
    }
?>