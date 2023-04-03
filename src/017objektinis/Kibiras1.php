<?php

class Kibiras1 {

    // protected $akmenuKiekis = 0;

    // arba
    
    public function __construct()
    {
        $this->akmenuKiekis = 0;
    }

    public prideti1Akmeni() : void
    {
        $this->akmenuKiekis++;
    }

    public pridetiDaugAkmenu(int $kiekis) : void //void - nieko negrazina
    {
        $this->akmenuKiekis += $kiekis;
    }

    public kiekPririnktaAkmenu() 
    {
        echo '<h2>Pririnkta: ' .$this->akmenukiekis . '</h2>';
    }
};

//     private $spalva = "rudas"; //kintamieji

//     public function __construct(){
//        $this->spalva = ['rudas', 'raudonas', 'pilkas'][rand(0, 3)];
//     }
//  public function kokiaTavoSpalva() { //funkcijos
//         return 'nezinau';
//     }

//     // public function __construct(){
    //     echo '<h1> naujas </h1>';
    // }

    // public function kokiaTavoSpalva2() { //funkcijos
    //     return $this -> spalva;
    // }

//     public function __invoke (){
//         echo '<h1>alio</h1>';
//     }
    
// public function __destruct (){
//     echo '<h1>bebras dingo</h1>';
// }

//klaseje negali buti padriku if, jie turi buti funkcijose.