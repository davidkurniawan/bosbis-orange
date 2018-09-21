
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Ticket Order List</li>
  </ol>
</nav>

<section class="tiket-order-list">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="table order-list">
					<div class="table-coll text-left parallel-padding">
						<h1><small>Ticket Order List</small></h1>
					</div>
					<div class="table-coll text-center">
						<h1>48</h1>
					</div>
				</div>
			</div>
			<div class="col-lg-9 parallel-padding">
				<!-- TAB PANE -->
				<ul class="nav nav-tabs" id="ticket-list" role="tablist">
				  <li class="nav-item">
				    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#manual" role="tab" aria-selected="true"><span class="badge badge-pill badge-danger">33</span>Manual Transfer</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#credit" role="tab" aria-selected="false"><span class="badge badge-pill badge-danger">33</span>Creadit</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#mandiri" role="tab" aria-selected="false"><span class="badge badge-pill badge-danger">33</span>Mandiri Clickpay</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="home-tab" data-toggle="tab" href="#doku" role="tab" aria-selected="true"><span class="badge badge-pill badge-danger">33</span>DOKU Wallet</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#bri" role="tab" aria-selected="false"><span class="badge badge-pill badge-danger">33</span>BRI VA</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#mandiriva" role="tab" aria-selected="false"><span class="badge badge-pill badge-danger">33</span>Mandiri VA</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="home-tab" data-toggle="tab" href="#permata" role="tab" aria-selected="true"><span class="badge badge-pill badge-danger">33</span>Permata VA</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#alfamart" role="tab" aria-selected="false"><span class="badge badge-pill badge-danger">33</span>Alfamart</a>
				  </li>
				</ul>

				<div class="tab-content" id="myTabContent">

				  <div class="tab-pane fade show active" id="manual" role="tabpanel" aria-labelledby="home-tab">

					  	<div class="table-responsive">
					  		<table class="table table-bordered">

							    <tr>
							      <th rowspan="2">PAYMENT CODE</th>
							      <th rowspan="2">PEMESANAN</th>
							      <th rowspan="2">PROMO</th>
							      <th rowspan="2">TOTAL</th>
							      <th rowspan="2">PEMBAYARAN</th>
							      <th colspan="2">PESAN</th>
							      <th colspan="2">EXPIRED</th>
							      <th rowspan="2">SISA WAKTU</th>
							      <th rowspan="2">Action</th>
							    </tr>
							    <tr>	
							    	<th>Tangal</th>
  									<th>Jam</th>
  									<th>Tangal</th>
  									<th>Jam</th>
							    </tr>
							   	
							   <?php foreach ($bank_transfer as $key => $value): ?>
							    <tr>
							      <td><?php echo $value['cso_payment_code'] ?> <span><?php echo $value['cso_source'] ?></span></td>
							      <td><?php echo $value['cso_contact_name'] ?>
							      	<br><?php echo $value['cso_contact_phone'] ?><br><?php echo $value['cso_contact_email'] ?></td>
							      <td><?php echo $value['cso_promo_code'] ?></td>
							      <td><?php echo $value['cso_total_payment'] ?></td>
							      <td><?php echo $value['cso_payment_info'] ?> <br> (<?php echo $value[''] ?>)</td>
							      <td><?php echo $value['cso_payment_gateway'] ?></td>
							      <td><?php echo $value['cso_created_at'] ?></td>
							      <td><?php echo $value['cso_created_at'] ?></td>
							      <td><?php echo $value['cso_expire_datetime'] ?></td>
							      <td><?php echo $value['cso_expire_datetime'] ?></td>
							      <td><button class="btn btn-bosbis" id="resultpayment" data-payment="<?php echo $value['cso_payment_code'] ?>" data-toggle="modal" data-target="#confirmpayment<?php echo $key ?>">Confirm</button></td>
							    </tr>
							   <?php endforeach ?>
							</table>
					  	</div>

				  </div>
				  <div class="tab-pane fade" id="credit" role="tabpanel"> ... </div>
				  <div class="tab-pane fade" id="mandiri" role="tabpanel" >...</div>
				  <div class="tab-pane fade" id="doku" role="tabpanel">...</div>
				  <div class="tab-pane fade" id="bri" role="tabpanel" >...</div>
				  <div class="tab-pane fade" id="mandiriva" role="tabpanel">...</div>
				  <div class="tab-pane fade" id="permata" role="tabpanel" >...</div>
				  <div class="tab-pane fade" id="alfamart" role="tabpanel" >...</div>
				</div>
				<!-- END TAB PANE -->
			</div>
			<div class="col-lg-3">
				<div class="alert alert-bosbis" role="alert">
				  <h4 class="alert-heading">SMS Today</h4>
				  <p class="text-right">
				  	<small><?php echo date('h-M-Y') ?></small>
				  </p>
				  <hr>
				  	<div class="alert alert-light alert-dismissible fade show" role="alert">
					  <strong>089638674738</strong> 
					  <div>You should check in on some of those fields below.</div>
					  <div class="text-right"><small>17:07:08</small></div>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>
				</div>
			</div>

			<div class="modal fade" id="confirmpayment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Regular Trip</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <div class="container-fluit">
						<div class="row">
							<div class="col-lg-12 nopadding">
								<div class="table nomargin">
									<div class="table-row">
										<div class="bold-text border-unset">Booking Code  </div>
										<div class="bold-text border-unset">Operator </div>
										<div class="bold-text border-unset">Keberangkatan  </div>
										<div class="bold-text border-unset">Trayek Armada  </div>
										<div class="bold-text border-unset">Tujuan Penumpang </div>
										<div class="bold-text border-unset">Bus Class </div>
										<div class="bold-text border-unset">Boarding Point </div>
										<div class="bold-text border-unset">Penumpang </div>
										<div class="bold-text border-unset">Nomor Kursi </div>
										<div class="bold-text border-unset">Total Harga </div>
										<div class="bold-text border-unset">Admin Fee </div>
										<div class="bold-text border-unset">Discount </div>
										<div class="bold-text border-unset">Total Bayar </div>
									</div>
									<div class="table-coll">
										<div class="border-unset">: bulakrejo</div>
										<div class="border-unset">: 089638674732 </div>
										<div class="border-unset">: - </div>
										<div class="border-unset">: poraya@gmail.com </div>
										<div class="border-unset">: - </div> 
									</div>
								</div>
								<div class="form-group">
					        		<input type="text" name="bankReceiver" class="form-control">
					        	</div>
					        	<div class="form-group">
					        		<input type="text" name="accountSender" class="form-control">
					        	</div>
					        	<div class="form-group">
					        		<input type="text" name="paidTime" class="form-control">
					        	</div>
							</div>
						</div>
					</div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <form action="" method="POST">
			        	<input type="hidden" name="status_payment" value="3">
			        	<input type="hidden" name="payment_code" value="U23DS3">
			        <button type="submit" class="btn btn-primary">ISSUED #U23DS3</button>
			        </form>
			      </div>
			    </div>
			  </div>
			</div>

		</div>
	</div>
</section>
<script type="text/javascript">
	$(document).ready(function(){
		$("#resultpayment").click(function(){
			var code_payment = $(this).data('payment');
			alert(val);
		});
	});
</script>