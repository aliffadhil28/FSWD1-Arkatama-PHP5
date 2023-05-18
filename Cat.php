<?php

include_once 'Animal.php';

class Cat extends Animal
{
    public function __construct($nama){
        $this->nama = $nama;
        $this->jenis = "Kucing";
        echo $this->getInfo($nama,$this->jenis);
    }

    public function getInfo($nama,$jenis){
        echo 'Hewan ini adalah '.$this->nama .' jenis '.$this->jenis.' .Kucing adalah hewan yang suka bermain dan bersih.' ;
        echo '<br>';
    }
}
