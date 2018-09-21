<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ticket_order_list extends CI_Controller {

function __construct() {
		parent::__construct();
		$this->load->model("TicketOrderModel");
		$this->RequestUrl = "http://".$_SERVER['HTTP_HOST'];
	}

	public function index()
	{
		$data['bank_transfer'] 	 	= $this->TicketOrderModel->read_order('Bank_Transfer');
		$data['bri_va']				= $this->TicketOrderModel->read_order('BRI_VA');
		$data['credit']				= $this->TicketOrderModel->read_order('Credit');
		$data['mandiri_clickpay']	= $this->TicketOrderModel->read_order('Mandiri_ClickPay');
		$data['DOKU']				= $this->TicketOrderModel->read_order('DOKU');
		$data['mandiri_va']			= $this->TicketOrderModel->read_order('Mandiri_VA');
		$data['bri_va']				= $this->TicketOrderModel->read_order('BRI_VA');
		$data['permata_va']			= $this->TicketOrderModel->read_order('Permata_VA');
		$data['alfamart']			= $this->TicketOrderModel->read_order('Alfamart');

		$this->load->view('global/header');
		$this->load->view('page/ticket/ticket_order_list',$data);
		$this->load->view('global/footer');
	}
}
