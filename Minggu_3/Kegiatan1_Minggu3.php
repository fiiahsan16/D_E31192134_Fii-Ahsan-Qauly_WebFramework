<?php 

/**
 tuliskan listing program tersebut dalam text editor anda, lalu amati dan tuliskan hasilnya
 */

class Car
{
	public $model;

	public function getModel()
	{
		return "The Car model is" . $this->model;
	}
}

$mercedes = new Car();
$mercedes -> model = "Mercedes Benz";
echo $mercedes -> getModel(); 

/**
 	Ketika sebuah property atau method dinyatakan sebagai public yang di mana di sini property ($model dinyatakan sebagai public),maka seluruh kode program diluar class bisa mengaksesnya,termasuk class turunan
 */
?>