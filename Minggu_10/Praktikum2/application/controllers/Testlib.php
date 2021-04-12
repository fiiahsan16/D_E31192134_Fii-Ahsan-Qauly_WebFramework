<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Testlib extends CI_Controller
{
	function __construct()
	{
		
		parent::__construct();
		$this->benchmark->mark('code_start');
		$this->load->library('table');
		$this->load->model('Mahasiswa_model');
		$this->benchmark->mark('code_end');
	}

	public function index()
	{
		$data['Mahasiswa'] = $this->Mahasiswa_model->get_data();
		$this->load->view('view_teslib',$data);
	}
}

 ?>