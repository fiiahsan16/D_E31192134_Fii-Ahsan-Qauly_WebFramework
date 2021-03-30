<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Mahasiswa extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model');
	}

	public function index()
	{
		$data['Mahasiswa'] = $this->Mahasiswa_model->get_data();
		$this->load->view('view_mahasiswa',$data);
	}

	public function prodi()
	{
		$data['Prodi'] = $this->Mahasiswa_model->get_data1();
		$this->load->view('view_prodi',$data);
	}
	public function daftarAngkatan()
	{
		$data['Angkatan'] = $this->Mahasiswa_model->get_data2();
		$this->load->view('view_angkatan',$data);
	}
}

 ?>