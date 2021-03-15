<?php

/**
Karena property pada kelas parent Tablet di public, maka untuk mengakses propery parent Tablet pada kelas child Handphone dapat dilakukan secara langsung dari dalam maupun luar kelas child Handphone.
 */

class Tablet {
    public $merk, $camera, $memory;

    public function getInfoProduk()
    {
        $str = "Merk : {$this->merk} <br> Camera : {$this->camera} Gb <br> Memory : {$this->memory} Mp";

        return $str;
    }

}

class Handphone extends Tablet {
    public $nama;

    public function __construct( $nama = "nama", $merk = "merk", $camera = 0, $memory = 0 ) {

        $this->nama = $nama;
        $this->merk = $merk;
        $this->camera = $camera;
        $this->memory = $memory;
    }

    public function getInfoProduk()
    {
        $str = "Nama : {$this->nama} <br>" . parent::getInfoProduk();
        return $str;
    }
}

$hp = new Handphone("RedmiA5", "Xiaomi", 8, 3);
echo $hp->getInfoProduk();
