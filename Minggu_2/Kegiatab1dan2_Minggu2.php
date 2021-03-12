<?php 

/**
 	1.Buat file baru menggunakan notepad++, lalu ketikkan listing program berikut:
 	2. Amati dan tuliskan hasil keluaran dari listing program tersebut.
 */

class car {

	public $comp;
	public $color = 'beige';
	public $hasSunRoof = true;

	public function hello()
	{
		return "Beep I am a <i>" . $this -> comp .
		"</i>, and I am <i>" . $this -> color;
	}
}

$bmw = new car ();
$mercedes = new car ();

$bmw -> color = 'blue';
$bmw -> comp = "BMW";
$mercedes -> comp = "Mercedes Benz";

echo $bmw -> hello(); 

/**
 Hasil :
 Perintah: $bmw = new car() akan membuat objek $bmw memiliki property $comp dan $color dan method hello() (sesuai dengan kerangka dari class car). Seluruh perintah lanjutan yang di lakukan berada di dalam objek $bmw, bukan di dalam class car.
 Untuk mengatasi masalah ini, kita harus mengubah definisi method hello() menjadi:
 return "Beep I am a <i>" . $this -> comp .
		"</i>, and I am <i>" . $this -> color;
Variabel $this merujuk kepada objek yang sedang menginstansiasi class.
 */
?>