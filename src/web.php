// 2.Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu kintamuoju nedarykite, o vietoj to padarykite, URL eilutėje ranka įvedus GET kintamąjį color su RGB spalvos kodu (pvz color=ff1234) puslapio fono spalva pasidarytų tokios spalvos.
<?php

$color = $_GET['color'] ?? '0d0d0d';

//validacija
if(!preg_match('/^[\da-f]{6}$/', $color)){
    $color = 'ff0000';
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="bachground: # <?= $color ?>;">

    
</body>
</html>






// be validacijos

