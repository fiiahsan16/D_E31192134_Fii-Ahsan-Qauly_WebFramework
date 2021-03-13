<?php

/**
	1. Buatlah class kalkulator sederhana menggunakan ketentuan sebagai berikut:
	2. Memiliki 3 properti yang digunakan untuk menampung angka yang akan dioperasikan, ketiga property ini memiliki hak akses private.
	3. Memiliki 4 methods, yaitu tambah(), kurang(), bagi() dan kali().
	4. Buatkan objek yang menggunakan masing-masing methods yang ada dalam class kalkulator
 */

class kalkulatorSederhana
{
	private $bil1;
	private $bil2;
	private $bil3;

	function __construct ($x, $y, $z)
	{
		$this->bil1 = $x;
		$this->bil2 = $y;
		$this->bil3 = $z;
	}

	function bacaBil1()
	{
		return $this->bil1;
	}
	function bacaBil2()
	{
		return $this->bil2;
	}
	function bacaBil3()
	{
		return $this->bil3;
	}

	function penjumlahan()
	{
		$hasil = $this->bil1 + $this->bil2 + $this->bil3;
		return $hasil;
	}
	function pengurangan()
	{
		$hasil = $this->bil1 - $this->bil2 - $this->bil3;
		return $hasil;
	}
	function perkalian(){
		$hasil = $this->bil1*$this->bil2*$this->bil3;
		return $hasil;
	}
	function pembagian()
	{
		$hasil = $this->bil1/$this->bil2/$this->bil3;
		return $hasil;
	}
} 

$operasi = new kalkulatorSederhana(6, 2, 1);

echo 'Hasil Penjumlahan dari : '.$operasi->bacaBil1().' + '.$operasi->bacaBil2().' + '.$operasi->bacaBil3().' = '.$operasi->penjumlahan().'<br/ > ';
echo 'Hasil Pengurangan dari : '.$operasi->bacaBil1().' - '.$operasi->bacaBil2().' - '.$operasi->bacaBil3().' = '.$operasi->pengurangan().'<br/ >';
echo 'Hasil Perkalian dari : '.$operasi->bacaBil1().' x '.$operasi->bacaBil2().' x '.$operasi->bacaBil3().' = '.$operasi->perkalian().'<br/ >';
echo 'Hasil Pembagian dari : '.$operasi->bacaBil1().' : '.$operasi->bacaBil2().' : '.$operasi->bacaBil3().' = '.$operasi->pembagian().'<br/ >';

?>