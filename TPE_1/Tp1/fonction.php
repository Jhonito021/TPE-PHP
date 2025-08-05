<?php
    function nbrCaractere($chaine) {
        return strlen($chaine);
    }   

    function compte($chaine) {
        $min = 0;
        $maj = 0;

        for ($i = 0; $i < strlen($chaine); $i++) {
            $tx = $chaine[$i];

            if ($tx >= 'A' && $tx <= 'Z') $maj++;
            elseif ($tx >= 'a' && $tx <= 'z') $min++;
        }
        
        echo "Majuscule: $maj, Miniscule: $min";
    }

    function nbrChiffre($chaine) {
        $count = 0;
         
        for ($i = 0; $i < strlen($chaine); $i++) {
            $chf = $chaine[$i];

            if ($chf >= '0' && $chf <= '9') {
                $count++;
            }
        }
        return $count;
    }

    function nbrSpeciaux($chaine) {
        return preg_match_all('/[^a-zA-Z0-9]/', $chaine);
    }  
?>