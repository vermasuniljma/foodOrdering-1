<html>
<head>
<title> Register </title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>">
</head>
<body>

<div class="col-md-12">
	<div class="row">
	<div class="col-md-6"><h3>Register</h3></<div class="col-md-12 text-right" >
	</div>
	</div>
	</div>
	</div>
<hr>
	<form method= "post" name="createUser"  action="<?php echo base_url().'index.php/register/create';?>">
	<div class="col-md-12">
		<div class="row">
		<div class="col-md-3">
			<div class="form-group">
				<label> First Name </label>
				<input type="text" name="name" value="<?php echo set_value('name');?>" class="form-control">
				<?php echo form_error('name');?>
			</div>
			<div class="form-group">
				<label> Last Name </label>
				<input type="text" name="name" value="<?php echo set_value('name');?>" class="form-control">
				<?php echo form_error('name');?>
			</div>
			<div class="form-group">
				<label> Email </label>
				<input type="text" name="name" value="<?php echo set_value('name');?>" class="form-control">
				<?php echo form_error('name');?>
			</div>
			<div class="form-group">
				<label> Password </label>
				<input type="text" name="name" value="<?php echo set_value('name');?>" class="form-control">
				<?php echo form_error('name');?>
			</div>
			<div class="form-group">
				<label> Conform Password </label>
				<input type="text" name="name" value="<?php echo set_value('name');?>" class="form-control">
				<?php echo form_error('name');?>
			</div>
			<div class="form-group">
				<label> status </label>
				<input type="checkbox" name="checkbox" value="<?php echo set_value('checknox');?>" class="form-control">
				
			</div>
			
			<button class="btn btn-primary">Submit</button>
			
			
			
		
		</div>

	
	</div>
	</div>

</body>
</html>