<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html class="fontawesome-i2svg-active fontawesome-i2svg-complete">
<head>
	<meta charset="utf-8">
	<title>BOSBIS - CSO</title>

	<!-- CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>" >
  <link rel="stylesheet" href="<?php echo base_url('assets/bosbis/css/style.css') ?>">
  <!-- Javascript -->
  <script src="<?php echo base_url('assets/bootstrap/js/popper.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/bootstrap/js/jquery-3.2.1.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/js/fontawesome-all.js') ?>"></script>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
  <div class="nav-black">
    <a class="navbar-brand" href="#">BOSBIS CSO TOOLS</a>
  </div>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- /////////////////////////////////////////// -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Database
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url('database_operator') ?>">Database Operator</a>
        </div>
      </li>
    <!-- /////////////////////////////////////////// -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Order
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url('ticket_order_list') ?>">Ticket Order List</a>
          <a class="dropdown-item" href="<?php echo base_url('page/data_ticket_terbayar') ?>">Data Ticket Berbayar</a>
          <a class="dropdown-item" href="<?php echo base_url('page/data_pemesanan_ticket') ?>">Data Pemesanan Berbayar</a>
        </div>
      </li>
    <!-- /////////////////////////////////////////// -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Refund
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url('page/refund_form') ?>">Form Refund Request</a>
          <a class="dropdown-item" href="<?php echo base_url('page/request_refund') ?>">Request Refund</a>
          <a class="dropdown-item" href="<?php echo base_url('page/refund_terproses') ?>">Refund Terproses</a>
          <a class="dropdown-item" href="<?php echo base_url('page/refund_terbayar') ?>">Refund Terbayar</a>
          <a class="dropdown-item" href="<?php echo base_url('page/refund_tertolak') ?>">Refund Tertolak</a>
          <a class="dropdown-item" href="<?php echo base_url('page/data_refund') ?>">Cari Data Refund</a>
        </div>
      </li>
      <!-- /////////////////////////////////////////// -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Finance - CSO
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url('page/payment_check') ?>">Payment Check</a>
          <a class="dropdown-item" href="<?php echo base_url('page/sms_payment') ?>">SMS Payment By Booking Code</a>
        </div>
      </li>
      <!-- /////////////////////////////////////////// -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          SMS Mode
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Write SMS</a>
          <a class="dropdown-item" href="#">Write SMS Multi Destination</a>
          <a class="dropdown-item" href="#">SMS Broadcast</a>
          <a class="dropdown-item" href="#">Inbox</a>
          <a class="dropdown-item" href="#">Sent Item</a>
          <a class="dropdown-item" href="#">Contact Group</a>
          <a class="dropdown-item" href="#">Contact</a>
        </div>
      </li>
      <!-- /////////////////////////////////////////// -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Setting
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">ON / OFF Payment Channel</a>
          <a class="dropdown-item" href="#">CSO Profile</a>
          <a class="dropdown-item" href="#">Ubah Password</a>
          <a class="dropdown-item" href="#">Logout</a>
        </div>
      </li>
  </div>
</nav>