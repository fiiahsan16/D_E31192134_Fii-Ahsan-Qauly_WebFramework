<?php 

/**
 Buatlah kasus dimana terdapat class, property (minimal 5), dan function (minimal 3)
 */
class buku {
	var $judul_buku;
	var $pengarang;
	var $penerbit;
	var $tahun_terbit;
	var $cetakan;
	var $tebal_buku;
	var $harga

	function kwalitasCetakan(){
		if ($this->cetakan = 'GramediaUtama') $kwalitas = 'bagus';
		else $kwalitas = 'tidak bagus'
	}

	function hargaJadul(){
		if ($this->penerbit = 'Pustaka') && ($this->tahun_terbit < 2000) $hargane = 50000;
		else $hargane = 20000;
	}
	function hargaTebal(){
		if ($this->tahun_terbit > 2015) $harganya = $this->harga*10/100;
		else ($this->tahun_terbit < 2015) $harganya = $this->harga*5/100;
	}
} ?>