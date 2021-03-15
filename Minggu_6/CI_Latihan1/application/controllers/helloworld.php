<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Helloworld extends CI_Controller

{

public function index(){
$data = array(
	'nama' => "Fii Ahsan Qauly<br/ >",
	'nim' => "E31192134<br/>",
	'kampus' => "Politeknik Negeri Jember");

$this->load->view('hello_ci',$data);

}

public function fungsi(){

echo "Function fungsi dari Controller Helloworld";

}

public function parameters($nama)
{
	echo "Selamat datang" . nama;
}

} ?>