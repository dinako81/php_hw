<?php

// 1. Naršyklėje nupieškite linija iš 400 “*”. 
// Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
// Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”; 


    for ($i = 0; $i < 400; $i++){
        echo '*';
    }

    echo '<br>';
    echo '***********************';
    echo '<br>';

    '<div className="aaa">';
    for ($i=0; $i<400; $i++){
        echo '*';
    }
    '</div>'; 
   
    echo '<br>';
    echo '***********************';
    echo '<br>';

    $string='<div>';
    for ($i=0; $i<400; $i++){
        echo '*';
    }
    '</div>'; 
    $newstring = wordwrap($string, 50, "<br />\n");
 ///neveikia


    echo '<br>';
    echo '***********************';
    echo '<br>';


    ?>

