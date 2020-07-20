<html>
<head>
<title> Register </title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>">
</head>
<body>

<div class="col-md-12">
	<div class="row">
		<div class="col-md-6"><h3>Register</h3>
		</div>
	</div>
	<div class="col-md-12 text-right">
		<a href="<?php echo base_url().'index.php/registration_controller/login2';?>" class="button button-primary"><h3>Login</h3></a>
	</div>
</div>	
<hr>
	<form method= "post" name="createUser"  action="<?php echo base_url().'index.php/registration_controller/create';?>">
	<div class="col-md-12">
		<div class="row">
		<table width="400" cellspacing="10" cellpadding="10">
		
		<div class="col-md-3">
			<div class="form-group">
			<tr>
			<td><label> First Name </label></td>
				<td><input type="text" name="fname" value="<?php echo set_value('fname');?>" class="form-control">
				<?php echo form_error('fname');?>
			</td></tr>
			</div>
			<div class="form-group">
			<tr>
			<td><label> Last Name </label></td>
				<td><input type="text" name="lname" value="<?php echo set_value('lname');?>" class="form-control">
				<?php echo form_error('lname');?>
			</td></tr>
			</div>
			<div class="form-group">
			<tr>
			<td><label> Email </label></td>
				<td><input type="text" name="email" value="<?php echo set_value('email');?>" class="form-control">
				<?php echo form_error('email');?>
			</td></tr>
			</div>
			
			<div class="form-group">
				<tr>
				<td><label> Phone </label></td>
				<td><input type="text" name="phone" value="<?php echo set_value('phone');?>" class="form-control">
				<?php echo form_error('phone');?>
			</td></tr>
			</div>
			
			<div class="form-group">
				<tr><td>
				<label> status </label></td>
				<td><input type="checkbox" name="checkbox" value="<?php echo set_value('checknox');?>" class="form-control">
				</td></tr>
			</div>
			<tr>
			<td>
			<button type="submit" name="submit" class="btn btn-primary">Submit</button>
			</td>
			</tr>
		
		</div>
		
		</table>
	</div>
	</div>
</form>
</body>
</html>