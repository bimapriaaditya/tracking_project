<!DOCTYPE html>
<html>
	<head>
		<title>Login Tracking Project</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/login.css">
	</head>
	<body>
		<div class="background">
			<form action="<?php echo base_url().'index.php/login/aksi_login' ?>" method="post">
				<div class="head_name">
					<h1 style="color: #e7f3ff;"><center>Login</center></h1>
					<hr style="border: 1px solid #8da8ab;">
				</div>
				<div class="bacaan">
					<?php echo $this->session->flashdata('msg');?>
				</div>
				<div>
					<input class="form-control" type="text" placeholder="Username" name="username" style="border-radius:100px">
				</div>
				<div>&nbsp;</div>
				<div>
				    <input type="password" class="form-control"id="exampleInputPassword1" placeholder="Password" name="password" style=" border-radius: 100px;">
				</div>
				<div class="form-group">
	      			<div class="form-check">
	        			<input type="checkbox" class="form-check-input" id="dropdownCheck">
	        			<label class="form-check-label" for="dropdownCheck">Remember me</label>
	      			</div>
	    		</div>
				<div class="tombol">
					<input type="submit" value="Sign In" name="pimpinan" class="btn btn-success" style="border-radius: 10px; width: 45%;">
				</div>
			</form>
		</div>
	</body>
</html>