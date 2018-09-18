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

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center"> 
				<h1 class="bosbis-text text-center">BosBis</h1>
			</div>
			<div class="col-lg-12 text-center">
				<h2>Hello, please sign in</h2>
			</div>
			<div class="col-lg-12 text-center">
				<div class="card" style="width: 42rem;display: inline-block;">
					<div class="card-body">
				<h5 class="card-title">Clear username and password field to see validation</h5>
						<div class="form-group">
							<input type="text" class="form-control" name="username" placeholder="Your Username">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="username" placeholder="Type Your Password">
						</div>
						<button type="submit" class="btn btn-dark mb-4" style="float: right;">Submit</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>