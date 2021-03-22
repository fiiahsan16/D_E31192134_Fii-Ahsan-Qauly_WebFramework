<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Demo_view2 extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
	}
	public function index(){
		$this->load->view('demoview');
	}
} ?>