<?php
    function compterMots($texte) {
        $texte = trim($texte);
        $longueur = strlen($texte);
        $mot = false;
        $count = 0;
    
        for ($i = 0; $i < $longueur; $i++) {
            if ($texte[$i] !== ' ' && $texte[$i] !== ',' && $texte[$i] !== ';') {
                if (!$mot) {
                    $mot = true;
                    $count++;
                }
            } else {
                $mot = false;
            }
        }
    
        return $count;
    }

    function compterPhrases($texte) {
        $count = 0;
        $longueur = strlen($texte);

        for ($i = 0; $i < $longueur; $i++) {
            $caractere = $texte[$i];
            if ($caractere === '.' || $caractere === '!' || $caractere === '?') {
            $count++;
            }
        }

            return $count;
    }

    function longueurMoyenneMots($texte) {
        $texte = trim($texte); 
        $total = 0;
        $nbrMots = 0;
        $mot = false;
        $longueurMot = 0;

        for ($i = 0; $i < strlen($texte); $i++) {
            $caractere = $texte[$i];

            if ($caractere === ' ' || $caractere === ',' || $caractere === ';') {
                if ($mot) {
                    $total += $longueurMot;
                    $nbrMots++;
                    $longueurMot = 0;
                    $mot = false;
                }
            } else {
                $mot = true;
                $longueurMot++;
            }
        }

        if ($mot) {
            $total += $longueurMot;
            $nbrMots++;
        }

        return $nbrMots > 0 ? $total / $nbrMots : 0;
    }   

    
    function longueurMoyennePhrases($texte) {
        $texte = trim($texte);
        $total = 0;
        $nbrPh = 0;
        $longueurPh = 0;

        for ($i = 0; $i < strlen($texte); $i++) {
            $caractere = $texte[$i];

            if ($caractere === '.' || $caractere === '!' || $caractere === '?') {
                if ($longueurPh > 0) {
                    $total += $longueurPh;
                    $nbrPh++;
                    $longueurPh = 0;
                }
            } else {
                $longueurPh++;
            }
        }

        if ($longueurPh > 0) {
            $total += $longueurPh;
            $nbrPh++;
        }

        return $nbrPh > 0 ? $total / $nbrPh : 0;
    }
?>
    