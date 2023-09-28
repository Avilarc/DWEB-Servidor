<?php
    function esPalindromo($cadena) {
        if ($cadena == strrev($cadena)) {
            return "Es palindromo";
        } else {
            return "No es palindromo";
        }
    }

    echo esPalindromo("Mamahuevo");
?>