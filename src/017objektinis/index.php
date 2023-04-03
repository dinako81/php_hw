<?php

// 1. Sukurti klasę Kibiras1. Sukurti protected savybę akmenuKiekis. Parašyti šiai savybei metodus prideti1Akmeni() pridetiDaugAkmenu($kiekis) ir metodą kiekPririnktaAkmenu(). Sukurti kibiro objektą ir pademonstruoti akmenų rinkimą į kibirą ir rezultatų išvedimą.


require __DIR__ . '/Kibiras1.php';

$k1= new Kibiras1;
$k2= new Kibiras1;
$k3= new Kibiras1;


$k1->prideti1Akmeni();
$k1->prideti1Akmeni();

$k2->prideti1Akmeni();

$k3->prideti1Akmeni();
$k3->pridetiDaugAkmenu(5);

$k1->pridetiDaugAkmenu(10);

$k2->pridetiDaugAkmenu(5);

echo '<pre>';
var_dump($kibiras1);


echo "\n\n\n" . $bebras2 -> spalva;

// $bebras2->spalva = 'juodas';

// echo "\n\n\n" . $bebras2 -> spalva;

// echo "\n\n\n" . $bebras2 -> kokiaTavoSpalva2();

// $bebras2();

