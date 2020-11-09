<?php

function IsCyrillic($text)
{
    $patternCyr = "/[а-яё]+/ui";
    $patternLat = "/[a-z]+/i";

    if (preg_match($patternCyr,$text) and !preg_match($patternLat,$text)) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;



    
}
