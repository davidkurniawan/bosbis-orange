<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Database_operator extends CI_Controller {

	function __construct() {
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->view('global/header');
		$this->load->view('page/database_operator');
		$this->load->view('global/footer');
	}
}
