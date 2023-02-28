<!-- 1. Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)". -->
<!-- 2. Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio. -->
<?php
$name = 'Pedro';
$surname = 'Petrauskas';
$born_year = 1881;
$this_year = 2023;
$me_year = $this_year-$born_year;
echo 'Aš esu '. $name .' '. $surname . '. ' . 'Man yra ' . $me_year .' '. 'metai.';

echo '<br>';

$min = 0;
$max = 4;
// function rand(min, max) {
//     min = Math.ceil(min);
//     max = Math.floor(max);
//     return Math.floor(Math.random() * (max - min + 1) + min);
// }
$div = $max - $min;

echo $div;