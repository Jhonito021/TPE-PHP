<?php
    function lectureColonneParColonne($array) {
        $result = [];
        $nbColonnes = count($array[0]);
        
        for ($col = 0; $col < $nbColonnes; $col++) {
            foreach ($array as $ligne) {
                $result[] = $ligne[$col];
            }
        }
        return $result;
    }
?>