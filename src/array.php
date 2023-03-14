<?php

echo '<br>'.'************1***********'. '<br>';
// 1. Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.

$nums = array();
for($i=0; $i<30; $i++){
    echo $nums [] = rand(5, 25). ' ';
}
 
echo '<pre>';
print_r($nums);
echo gettype($nums);


echo '<br>';
echo '************2a***********';
echo '<br>';
// 2. Naudodamiesi 1 uždavinio masyvu:
// a)	Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;

// c)	Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;


// f)	Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;
// g)	Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;
// h)	Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;
// i)	Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;

$count = 0;
foreach ($nums as $num) {
    
    if ($num>10) {
        $count++;
    }
}
echo "Didesnių už 10 skaičių kiekis: $count";

echo '<br>';
echo '************2b***********';
echo '<br>';
// b)	Raskite didžiausią masyvo reikšmę ir jos indeksą arba indeksus jeigu yra keli;
$max = max($nums);
echo "Max reiksme yra: " .$max;

echo '<br>';
echo '************2c***********';
echo '<br>';

// $sum = 0;
// for ($i = 2; $i < strlen($nums); $i+2) {
//         $sum+=[$i];
// }
// echo "Lyginiu indeksu skaiciu suma: " .$sum;

echo '<br>';
echo '************2d***********';
echo '<br>';

// d)	Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;



echo '<br>';
echo '************2e***********';
echo '<br>';
// e)	Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;

$papildomasnums = range(2, 25);
$newnums = array_merge($nums, $papildomasnums);


echo '<pre>';
print_r($newnums);


echo '<br>';
echo '************2f***********';
echo '<br>';

// f. Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;

// usort($nums, fn($a, $b) => $a%2==0 ? true: false);

usort();