<html>
	<head>
		<title> Register </title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>">
	</head>
	<body>

		<div class="col-md-3">
			<div class="row">
				<div class="col-md-6"><h3>Register</h3>
					<div class="col-md-12 text-right" ></div>
				</div>
			</div>
			<hr>

			<form method= "post" name="createUser"  action="<?php echo base_url().'index.php/registration_controller/add';?>">
				<table width="400" cellspacing="10" cellpadding="10" align="center">

					<div class="col-md-12">
						<div class="row">
							<div class="form-group">
								<label> Select user </label>
			
								<?php if(!empty($users)){?>
								<select name="user" required>
									<?php foreach($users as $user){?>
									<input type="hidden" name="u_id" value="<?php echo $user['id']?>">
									<option value="<?php echo $user['f_name']?>"><?php echo $user['f_name']?></option>
									<?php echo form_error('fname');?>
									<?php }?>
								</select>
								<?php
								}
								else{?> 
									<h5>Records not found<h5>
								<?php }?>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label> Select Role </label>
								<select name="user" required>
									<option value="1">Admin</option>
									<option value="2">Manager</option>
									<option value="3">Employee</option>
									<option value="4">User</option>
									<option value="5">Customer</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</div>
				</table>
			</form>
		</div>
	</body>
</html>