<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function index()
	{
		$this->load->view('page/login');
	}
	public function data_ticket_terbayar()
	{
		$this->load->view('global/header');
		$this->load->view('page/data_ticket_terbayar');
		$this->load->view('global/footer');
	}
	public function data_pemesanan_ticket(){
		$this->load->view('global/header');
		$this->load->view('page/data_pemesanan_ticket');
		$this->load->view('global/footer');
	}
	public function refund_form(){
		$this->load->view('global/header');
		$this->load->view('page/refund_form');
		$this->load->view('global/footer');
	}
	public function request_refund(){
		$this->load->view('global/header');
		$this->load->view('page/request_refund');
		$this->load->view('global/footer');
	}
	public function refund_terproses(){
		$this->load->view('global/header');
		$this->load->view('page/refund_terproses');
		$this->load->view('global/footer');
	}
	public function refund_terbayar(){
		$this->load->view('global/header');
		$this->load->view('page/refund_terbayar');
		$this->load->view('global/footer');
	}
	public function refund_tertolak(){
		$this->load->view('global/header');
		$this->load->view('page/refund_tertolak');
		$this->load->view('global/footer');
	}
	public function data_refund(){
		$this->load->view('global/header');
		$this->load->view('page/data_refund');
		$this->load->view('global/footer');
	}
	public function payment_check(){
		$this->load->view('global/header');
		$this->load->view('page/finance/payment_check');
		$this->load->view('global/footer');
	}
	public function sms_payment(){
		$this->load->view('global/header');
		$this->load->view('page/finance/sms_payment');
		$this->load->view('global/footer');
	}
}
