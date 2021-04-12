<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
class Hitunglingkaran extends CI_Controller 
{
	
	function __construct()
	{
		parent::__construct();
		$this->benchmark->mark('my_mark_start');
		$this->load->library('lingkaran');
		$this->benchmark->mark('my_mark_end');
	}
	function index()
	{
		$this->lingkaran->keliling('21');
		echo "<hr/>";$this->lingkaran->luas('14');
		echo "<hr/>";$this->benchmark->elapsed_time();
	}
	
}

 ?>