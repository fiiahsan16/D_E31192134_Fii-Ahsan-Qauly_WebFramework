<?php 

/**
	Buatlah  kelas  kendaraan  dengan  properties:  jenis  kendaraan,  jumlah  roda,  merk,  bahan bakar,  merk,  harga,  dan  tahun  pembuatan.  Tambahkan  fungsi untuk  menentukan  apakah suatu  kendaraan  mendapat  subsidi  BBM  atau  tidak.  Kendaraan  yang  mendapat  subsidi adalah  yang berbahan bakar ‘Premium’ dan tahun pembuatannya sebelum tahun 2005. Function ini mereturn ‘Ya’ jika mendapat subsidi, dan ‘Tidak’ jika tidak mendapat subsidi. 
*/


class kendaraan {
	var $jenis_kendaraan;
	var $jumlah_roda;
	var $merk;
	var $bahan_bakar;
	var $harga;
	var $tahun_pembuatan;

	function subsidiBBM(){
		if ($this ->bahan_bakar = 'premium') && ($this->tahun_pembuatan < 2005) $subsidi = 'ya';
		else $subsidi = 'tidak';
		return $subsidi;
	}
} ?>