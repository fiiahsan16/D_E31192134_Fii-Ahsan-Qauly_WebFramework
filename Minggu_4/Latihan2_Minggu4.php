<?php 
class Produk
{
	public $ukuran;
	public $warna;
	public $nama;

	function setUkuran($ukuran)
	{
		$this -> ukuran = $ukuran;
	}
	function getUkuran()
	{
		return $this -> ukuran;
	}
	function setWarna($warna)
	{
		$this -> warna = $warna;
	}
	function getWarna()
	{
		return $this -> warna;
	}
	function setNama($nama)
	{
		$this -> nama = $nama;
	}
	function getNama()
	{
		return $this -> nama;
	}
}
class Topi extends Produk
{
	public $model;

	function setModel($model)
	{
		$this -> model = $model;
	}
	function getModel(){
		return $this -> model;
	}
}
class celana extends Produk
{
	public $tipe;
	public $model;

	function setTipe($tipe)
	{
		$this -> tipe = $tipe;
	}
	function getTipe()
	{
		return $this -> tipe;
	}
	function setModel($model)
	{
		$this -> model = $model;
	}
	function getModel()
	{
		return $this -> model;
	}
}
class baju extends Produk
{
	public $tipe;

	function setTipe($tipe)
	{
		$this -> tipe = $tipe;
	}
	function getTipe()
	{
		return $this -> tipe;
	}
} ?>