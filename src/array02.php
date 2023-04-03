<?php


// 

echo '<br>';
echo '************5***********';
echo '<br>';

// 5. Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas [user_id => xxx, place_in_row => xxx] user_id atsitiktinis unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100. 

// tikrinimui ar unikalus reikia pasirasyti funkciją.

function getUnique($to){
    static $ids = [];
 do {
    $id= rand(1, $to);
 }while(in_array($id, $ids));
 $ids[]=$id;
 return $id;
}

$users = array_map(fn($_)=>['user_id' => getUnique(30), 'place_in_row' => rand(1,100)], range (1, 30));

echo '<pre>';
print_r($users);

echo '<br>';
echo '************6***********';
echo '<br>';

// 6.Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka. Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.


usort($users, fn($a, $b) => $a['user_id'] <=> $b['user_id']);

echo '<pre>';
print_r($users);
echo '<br>';

usort($users, fn($a, $b) => $b['place_in_row'] <=> $a['place_in_row']);


echo '<pre>';
print_r($users);

echo '<br>';
echo '************7***********';
echo '<br>';
// 7.	Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus: name ir surname. Elementus užpildykite stringais iš atsitiktinai sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15.

function randString()
{
    $letters = range('a', 'z');
    $out = '';
    foreach(range(1, rand(5, 15)) as $_) {
        $out .= $letters[rand(0, count($letters) - 1 )];
    }
    return $out;
}

$users = array_map(function($user) {
    $user['name'] = randString();
    $user['surname'] = randString();
    return $user;
}, $users);

// function($user) {
//     $user['name'] = randString();
//     $user['surname'] = randString();
//     return $user;
// }, vienas argumentas
// $users antras argumentas



echo '<pre>';
print_r($users);

echo '<br>';
echo '************8***********';
echo '<br>';

?>