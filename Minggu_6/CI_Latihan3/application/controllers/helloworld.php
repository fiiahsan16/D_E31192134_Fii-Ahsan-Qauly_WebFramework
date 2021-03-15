<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Helloworld extends CI_Controller

{

public function index(){

echo "<script>alert('Helloworld dari CI Model');</script>";

}

public function fungsi(){

echo "Function fungsi dari Controller Helloworld";

}

public function parameters($nama){
        echo "Selamat datang ".nama;

}

} ?>