<?php 

/**
 1. Buat sebuah class bernama class laptop.
 2. Pada class laptop tersebut memiliki 2 properties dengan hak akses public, yaitu pemilik dan  merk.  Pada  class  tersebut  juga  memiliki  3  methods,  yaitu  hidupkan_laptop(), matikan_laptop() dan restart_laptop(). 
 4. Untuk method hidupkan_laptop() berisi tekssebagai berikut:“Hidupkan laptop [merk] punya [pemilik]”
 5. Untuk method matikan_laptop() berisi teks sebagai berikut:“Matikan laptop [merk] punya [pemilik]”
 6. Untuk method restart_laptop() berisi teks sebagai berikut:“Matikan laptop [merk] punya [pemilik]”“Hidupkan laptop [merk] punya [pemilik]”
 7. Buatlah 3 objek menggunakan class laptop sehingga menampilkan teks sebagai berikut:a. Hidupkan laptop ASUS milik A.b. Matikan laptop Acer milik B.c. Matikan laptop Lenovo milik C. Hidupkan laptop Lenovo milik C
 */

class laptop 
{
	public $pemilik;
	public $merk;

	public function hidupkan_laptop()
	{
		return "Hidupkan laptop <i>" . $this -> merk .
		"</i> punya " . $this -> pemilik;
	}

	public function matikan_laptop()
	{
		return "Matikan laptop <i>" . $this -> merk .
		"</i> punya " . $this -> pemilik;
	}

	public function restart_laptop()
	{
		return "Matikan laptop <i>" . $this -> merk .
		"</i> punya " . $this -> pemilik .
		", Hidupkan laptop <i>" . $this -> merk . 
		"</i> punya " . $this -> pemilik;
	}
}
	$laptop_A = new laptop();
	$laptop_A->pemilik="A";
	$laptop_A->merk="Asus";
	$laptop_B = new laptop();
	$laptop_B->pemilik="B";
	$laptop_B->merk="Acer";
	$laptop_C = new laptop();
	$laptop_C->pemilik="C";
	$laptop_C->merk="Lenovo";

	echo $laptop_A->pemilik;
	echo "<br/ >";
	echo $laptop_A->merk;
	echo "<br/ >"; 
	echo $laptop_B->pemilik;
	echo "<br/ >";
	echo $laptop_B->merk;
	echo "<br/ >"; 
	echo $laptop_C->pemilik;
	echo "<br/ >";
	echo $laptop_C->merk;
	echo "<hr/ >";

	echo $laptop_A -> hidupkan_laptop();
	echo "<br/ >";
	echo $laptop_B -> matikan_laptop(); 
	echo "<br/ >";
	echo $laptop_C -> restart_laptop();
	?>