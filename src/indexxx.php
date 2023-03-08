
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
echo "Aš esu $name $surname. Man yra $me_year metai.";

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

echo '<br>';
echo '***********************';
echo '<br>';
// 8. Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000.
$a = rand(5, 3000);
echo $a;
echo '<br>';

if ($a <= 1000) {
    $kaina = $a * 1;
    echo "Perkama: $a zvakiu uz $kaina eur.";
} else if ($a > 1000) {
    $kaina1 = $a * (1-0.03);
    echo "Perkama: $a zvakiu uz $kaina1 eur.";
} else if ($a > 2000) {
    $kaina2 = $a * (1-0.04);
    echo "Perkama: $a zvakiu uz $kaina2 eur.";
}

echo '<br>';
echo '***********************';
echo '<br>';
// 9. Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus.
$a = rand(0, 1000);
$b = rand(0, 1000);
$c = rand(0, 1000);

$aritmetinsVidurkis = (round($a+$b+$c/3));
echo "Aritmetini vidurkis: $aritmetinsVidurkis.";

$count = 3;
$sum = ($a + $b + $c);

if ($a < 10 && $aa > 90) {
    $sum - $a;
}
if ($b < 10 && $b > 90) {
    $sum - $b;
}
if ($c < 10 && $c > 90) {
    $sum - $c;
}

echo '<br>';
echo '***********************';
echo '<br>';
// 10. Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko. Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių.

$a = rand(0, 24);
$b = rand(0, 60);
$c = rand(0, 60);
echo "$a $b $c";
echo '<br>';

$papildomi = rand(0, 300);
echo $papildomi;

echo '<br>';
echo '***********************';
echo '<br>';
// 11. Papildomas.
// Naudokite funkcija rand(). Sugeneruokite 6 kintamuosius su atsitiktinem reikšmėm nuo 1000 iki 9999. Atspausdinkite reikšmes viename strige, išrūšiuotas nuo didžiausios iki mažiausios, atskirtas tarpais. Naudoti ciklų ir masyvų NEGALIMA. 
$a = rand(1000, 9999);
$b = rand(1000, 9999);
$c = rand(1000, 9999);  
$d = rand(1000, 9999);
$e = rand(1000, 9999);
$f = rand(1000, 9999); 

echo $a,'-', $b,'-',$c,'-',$d,'-',$e,'-',$f;

echo '<br>';
echo '************1***********';
echo '<br>';
// STRINGAI
// 1. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą.
 $vardas = 'Ogis';
 $pavarde = 'Tarakonas';

 if ($vardas < $pavarde){
    echo $vardas;
 } else echo $pavarde;

 echo '<br>';
 echo '************2***********';
 echo '<br>';
//  2.Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms

$vardas1 = 'Ogis';
$pavarde1 = 'Tarakonas';

echo strtoupper($vardas1);
echo '<br>';
echo strtolower($pavarde1);

echo '<br>';
echo '************3***********';
echo '<br>';
// 3.Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.

$vardas3 = 'Ogis';
$pavarde3 = 'Tarakonas';
echo sprintf("%s%s",substr($vardas3, 0,1),substr($pavarde3, 0, 1));
echo '<br>';
echo '************4***********';
echo '<br>';
// 4.Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.

$vardas4 = 'Ogis';
$pavarde4 = 'Tarakonas';
echo sprintf("%s%s",substr($vardas4, -3),substr($pavarde4, -3));
echo '<br>';
echo '************5***********';
echo '<br>';
// 5.Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti.

$sakinys = "An American in Paris";
echo str_replace(array('a', 'A'),array('*', '*'),$sakinys);
echo '<br>';
echo '************6***********';
echo '<br>';
// 6.Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.
$sakinys6 = "An American in Paris";
echo $total = substr_count($sakinys6, 'a') + substr_count($sakinys6, 'A');

echo '<br>';
echo '************7***********';
echo '<br>';
// 7. Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti. Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.

$sakinys1 = "An American in Paris";
$vovels = array('a', 'A', 'e', 'E', 'o', 'O', 'i', 'I', 'u', 'U' );
echo str_replace($vovels,"", $sakinys1);
echo '<br>';

$sakinys2 = "Breakfast at Tiffany's";
$vovels = array('a', 'A', 'e', 'E', 'o', 'O', 'i', 'I', 'u', 'U' );
echo str_replace($vovels,"", $sakinys2);
echo '<br>';

$sakinys3 = "2001: A Space Odyssey";
$vovels = array('a', 'A', 'e', 'E', 'o', 'O', 'i', 'I', 'u', 'U' );
echo str_replace($vovels,"", $sakinys3);
echo '<br>';

$sakinys4 = "It's a Wonderful Life";
$vovels = array('a', 'A', 'e', 'E', 'o', 'O', 'i', 'I', 'u', 'U' );
echo str_replace($vovels,"", $sakinys4);
echo '<br>';

echo '<br>';
echo '************8***********';
echo '<br>';
// 8.Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; Surasti ir atspausdinti epizodo numerį.


echo '<br>';
echo '************9***********';
echo '<br>';
// 9. Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.


echo '<br>';
echo '************10***********';
echo '<br>';
// 10.Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.



?>