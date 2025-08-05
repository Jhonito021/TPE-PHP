<?php
    function palindrome($chaine) {
    
        $nouv = '';
        for ($i = 0; $i < strlen($chaine); $i++) {
            $char = $chaine[$i];
            if (($char >= 'a' && $char <= 'z') || ($char >= 'A' && $char <= 'Z')) {
                $nouv .= ($char >= 'A' && $char <= 'Z') ? chr(ord($char) + 32) : $char;
            }
        }

    
        $len = strlen($nouv);
        for ($i = 0; $i < $len / 2; $i++) {
            if ($nouv[$i] !== $nouv[$len - $i - 1]) {
                return false;
            }
        }

        return true;
    }
?>