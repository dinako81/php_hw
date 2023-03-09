<?php

// 1. Naršyklėje nupieškite linija iš 400 “*”. 
// Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
// Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”; 


    for ($i = 0; $i < 400; $i++){
        echo '*';
    }

    echo '<br>';
    echo '***********1a************';
    echo '<br>';

    ?>

    <div style="word-wrap: break-word">

    <?php
    for ($i=0; $i<400; $i++){
        echo '*';
    }
   ?>
   </div>

   <?php
    echo '<br>';
    echo '***********1b************';
    echo '<br>';

    for ($i = 0; $i < 400; $i++) {
        echo '*';
        if (($i+1) % 50 == 0) {
            echo '<br>';
        }
    }

    echo '<br>';
    echo '************2***********';
    echo '<br>';
// 2.Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos atskirtus tarpais ir suskaičiuokite kiek tarp jų yra didesnių už 150.  Skaičiai didesni nei 275 turi būti raudonos spalvos.

$count = 0;
for ($i=0; $i<300; $i++) {
    $a = rand(0, 300). " ";
    if ($a>275){
        echo "<span style='color:red;'>$a</span> ";
    } else echo $a;
    
    if ($a>150){
        $count++;
    }
}
echo "<br>";
echo "Didesnių už 150 skaičių kiekis: $count";
    ?>

