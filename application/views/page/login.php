<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" >
    <link rel="stylesheet" href="<?php echo base_url('assets/bosbis/css/style.css') ?>">
    <!-- Javascript -->
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/bootstrap/js/jquery-3.2.1.min.js') ?>"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	  <script src="<?php echo base_url('assets/vendor/js/fontawesome-all.js') ?>"></script>
	<style type="text/css">
		.a-field .field__label {
			left: 0px;
		}
		.a-field label {
			position: absolute;
		    left: -58px;
		    bottom: -15px;
		    font-size: 31pt;	
		}
		.container {
			margin-top: 120px;
		}
		.card {
			width: 42rem;display: inline-block;
		}
		.form-group {
		margin-left: 140px;margin-right: 80px;
		}
	</style>
</head>
<body>
	<div class="container" style="">
		<div class="row">
			<div class="col-lg-12 text-center"> 

				<h1 class="bosbis-text text-center">BosBis</h1>

			</div>

			<div class="col-lg-12 text-center">

				<h2>Hello, please sign in</h2>

			</div>

			<div class="col-lg-12 text-center">

				<form action="<?php echo base_url('login') ?>" method="POST">
					
				<div class="card">
					<div class="card-body">
				<h5 class="card-title">Clear username and password field to see validation</h5>
						<div class="form-group" >
							<label class="field a-field a-field_a2 page__field">
								<label><i class="far fa-user"></i></label>
						      <input type="text" class="field__input" placeholder="Your Username" name="username" required>
						      <span class="field__label-wrap">
						        <span class="field__label">Your Username</span>
						      </span>
						    </label>
						    <label class="field a-field a-field_a2 page__field">
						    	<label><i class="far fa-unlock-alt"></i></label>
						      <input type="password" class="field__input" placeholder="Your Password" name="password" required>
						      <span class="field__label-wrap">
						        <span class="field__label">Type Your Password</span>
						      </span>
						    </label>
						</div>
						<button type="submit" class="btn btn-dark mb-4" style="float: right;">Submit</button>
					</div>
				</div>

				</form>

			</div>
		</div>
	</div>
</body>
</html>