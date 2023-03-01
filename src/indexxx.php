
<!-- 

9. Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus.
10. Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko. Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių.

11. Papildomas.
Naudokite funkcija rand(). Sugeneruokite 6 kintamuosius su atsitiktinem reikšmėm nuo 1000 iki 9999. Atspausdinkite reikšmes viename strige, išrūšiuotas nuo didžiausios iki mažiausios, atskirtas tarpais. Naudoti ciklų ir masyvų NEGALIMA.     -->
<?php
echo '<br>';
echo '***********************';
echo '<br>';
// 1. Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
// "Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".
$name = 'Pedro';
$surname = 'Petrauskas';
$born_year = 1881;
$this_year = 2023;
$me_year = $this_year-$born_year;
echo 'Aš esu '. $name .' '. $surname . '. ' . 'Man yra ' . $me_year .' '. 'metai.';

echo '<br>';
echo '***********************';
echo '<br>';
// 2. Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.

$a = rand(0, 4);
$b = rand(0, 4);

echo 'A: ' . $a .', ' .'B: '  . $b;
echo '<br>';

 if ($a > $b && $b!=0) {
    echo(round(($a / $b), 2));

} else if ($b > $a && $a!=0) { 
    echo(round(($b / $a), 2));
   } 
   else if ($b == $a) { 
    echo 'Skaiciai yra lygus';
   } 


echo '<br>';
echo '***********************';
echo '<br>';
// 3. Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.
$a = rand(0, 25);
$b = rand(0, 25);
$c = rand(0, 25);
echo $a .' '. $b.' '. $c;

$result = $a + $b + $c- max($a, $b, $c) - min($a, $b, $c);
echo "<p>$result</p>";

echo '***********************';
echo '<br>';
// 4. Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų. 
$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);
echo "$a $b $c";
echo '<br>';

if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
    echo 'Galima sudaryti trikampi.'; 
} else echo 'Negalima sudaryti trikampio.';

echo '<br>';
echo '***********************';
echo '<br>';
// 5. Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems 
// reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti).

$a = rand(0, 2);
$b = rand(0, 2);
$c = rand(0, 2);
$d = rand(0, 2);
echo "$a $b $c $d";

$nuliu = 0;
$vienetu = 0;
$dvejetu = 0;

if ($a==0) {
    $nuliu++;
} if ($a==1) {
    $vienetu++;
} if ($a==2) {
    $dvejetu++;
} else if ($b==0) {
    $nuliu++; 
}
if ($b==1) {
    $vienetu++;
}
if ($b==2) {
    $dvejetu++;
}   
else if ($c==0) {
    $nuliu++;
}
if ($c==1) {
    $vienetu++;
}
if ($c==2) {
    $dvejetu++;
}  
else if ($d==0) {
    $nuliu++;
}
if ($d==1) {
    $vienetu++;
}
if ($d==2) {
    $dvejetu++;
}    
echo '<br>';
echo "Nuliu skaicius: $nuliu, vienetu skaicius: $vienetu, dvejetu skaicius: $dvejetu.";

echo '<br>';
echo '***********************';
echo '<br>';
//  6. Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3>
$number = rand(1, 6);
echo "<h$number> $number </h$number>";

echo '<br>';
echo '***********************';
echo '<br>';
//  7. Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni.
$a = rand(-10, 10);
$b = rand(-10, 10);
$c = rand(-10, 10);
echo "$a, $b, $c";

if ($a < 0) {
    echo '<p style="color: green">' . $a . '</p>';
}if ($a == 0) {
    echo '<p style="color: red">' . $a . '</p>';
    }
if ($a > 0) {
    echo '<p style="color: blue">' . $a . '</p>';
    }
if ($b < 0) {
    echo '<p style="color: green">' . $b . '</p>';
}if ($b == 0) {
    echo '<p style="color: red">' . $b . '</p>';
    }
if ($b > 0) {
    echo '<p style="color: blue">' . $b . '</p>';
    }   
if ($b < 0) {
    echo '<p style="color: green">' . $b . '</p>';
}
if ($b == 0) {
    echo '<p style="color: red">' . $b . '</p>';
}
if ($b > 0) {
    echo '<p style="color: blue">' . $b . '</p>';
    }  

// 8. Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000.
