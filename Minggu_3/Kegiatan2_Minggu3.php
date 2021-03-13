<?php 

/**
 	Coba tuliskan listing program tersebut dalam text editor anda, lalu amati dan tuliskan hasilnya	
 */

class Car
{
	private $model;

	public function getModel()
	{
		return "The Car model is " . $this->model;
	}
}

$mercedes = new Car();
$mercedes -> model = "Mercedes Benz";
echo $mercedes -> getModel(); 

/**
	Jika sebuah property atau method di-set sebagai private,maka satu-satunya yang bisa mengakses adalah class itu sendiri.Class lain tidak bisa mengaksesnya,termasuk class turunan. Dimana jika di run maka akan muncul pesan error.
 */
?>