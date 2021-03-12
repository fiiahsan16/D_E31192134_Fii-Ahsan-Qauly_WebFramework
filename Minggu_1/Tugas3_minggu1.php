<?php 

/**
	Buatlah    function    dalam    kelas    ‘kendaraan’    dengan    nama‘hargaSecond()’    untuk  menentukan harga  second  dari  kendaraan  tersebut.  Function  ini  mereturn  harga  second  dari  kendaraan dengan ketentuan: 
	a.Jika  tahun  pembuatan  di  atas  2010,  maka  harga  second  nya  turun  20%  dari  harga aslinya 
	b.Jika  tahun  pembuatan  2005  s/d  2010,  maka  harga  second  nya  turun  30%  dari  harga aslinya 
	c.Jika  tahun  pembuatan  di  bawah  2005,  maka  harga  second  nya  turun  40%  dari  harga aslinya.
*/
class kendaraan {
	var $jenis_kendaraan;
	var $jumlah_roda;
	var $merk;
	var $bahan_bakar;
	var $harga;
	var $tahun_pembuatan;


	function hargaSecond(){
		if ($this ->tahun_pembuatan > 2010) 
			$hargasekondnya = $this->harga*20/100;
		else if ($this->tahun_pembuatan < 2005) 
			$hargasekondnya = $this->harga*40/100;
		else $hargasekondnya = $this->harga*30/100;
		return $hargasekondnya;
	}
}
