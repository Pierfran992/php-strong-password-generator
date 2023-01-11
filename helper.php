<?php

    // creo il paramentro in get per inviare la lunghezza della password
    $length = $_GET['length'] ?? false;

    // creo la funzione per generare una password
    function genPassword($length) {
        $characters = array_merge(range('A', 'Z'), range('a', 'z'), range('0', '9'), array('!', '@', '#', '$', '%', '^', '&', '*'));
        $password = "";
        for ($i = 0; $i < $length; $i++) {
            $password .= $characters[array_rand($characters)];
        }
        return $password;
    }