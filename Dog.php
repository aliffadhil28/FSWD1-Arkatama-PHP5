<?php
include_once 'Animal.php';

class Dog extends Animal
{
    public function __construct($nama){
        $this->nama = $nama;
        $this->jenis = "Anjing";
        echo $this->getInfo($nama,$this->jenis);
    }

    public function getInfo($nama,$jenis){
        echo 'Hewan ini adalah '.$this->nama .' jenis '.$this->jenis.' . Anjing adalah hewan yang setia dan cerdas.' ;
        echo '<br>';
    }
}
