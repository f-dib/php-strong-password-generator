<?php

    function rand_string( $passLength ) {

            $allChars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
            return substr(str_shuffle($allChars),0,$passLength);

    };

?>