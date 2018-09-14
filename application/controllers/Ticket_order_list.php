<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ticket_order_list extends CI_Controller {

	public function index()
	{
		$this->load->view('global/header');
		$this->load->view('page/ticket_order_list');
		$this->load->view('global/footer');
	}
}
