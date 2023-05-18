<?php

class Animal{
    public $nama;
    public $jenis;

    public function __construct($nama, $jenis) {
        $this->nama = $nama;
        $this->jenis = $jenis;
        echo $this->getInfo($nama,$jenis);  
    }

    public function getInfo($nama,$jenis) {
        echo 'Hewan ini adalah '.$this->nama .' jenis '.$this->jenis;
        echo '<br>';
    }
}

// $tiger = new Animal('Harimau','Karnivora');