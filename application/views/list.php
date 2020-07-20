<html>
<head>
<title> CRUD </title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>">
<script type= "text/javascript" src = "<?php echo base_url().'assets/js/jquery-3.5.1.min.js';?>"> </script>
<script type= "text/javascript" src = "<?php echo base_url().'assets/js/bootstrap.min.js';?>"> </script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/style.css'; ?>">

</head>
<body>
<div class="navbar navbar-dark bg-dark">
	<div class="container"> 
		<a href="#" class="navbar-brand">CRUD View</a>
	</div>
</div>

<div class="container" style="padding-top 10px;">
	<div class="row">
<div class="col-md-12">
	
	<div class="row">
	<div class="col-md-6"><h3>View Users</h3></<div class="col-md-12 text-right" >
	<a href="<?php echo base_url().'index.php/user/create';?>" class="btn btn-primary">Create</a>
	</div>
	<div class="col-md-12 text-right" >
	<a href="<?php echo base_url().'login/admin_logout';?>" class="btn btn-primary">Logout</a>
	</div>
	</div>
</div>
<hr>
<div class="row"> 
		<div class="col-md-8">
		<?php
		$success = $this->session->userdata('success');
		if($success != ""){
		?>
		<div class="alert alert-success"><?php echo $success;?></div>
		<?php }
		
		?>
		
		<?php
		$failure = $this->session->userdata('failure');
		if($failure != ""){
		?>
		<div class="alert alert-success"><?php echo $failure;?></div>
		<?php }
		
		?>
		</div>
		</div>
</div>
<hr>
<div class="row">
		<div class="col-md-12">
			<table class="table table-striped">

			<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Contact</th>
			<th>Image</th>
			<th>Edit</th>
			<th>Delete</th>
			
			</tr>
			<?php if(!empty($users)){foreach($users as $user){?>
			<tr>
			<td><?php echo $user['user_id']?></td>
			<td><?php echo $user['name']?></td>
			<td><?php echo $user['email']?></td>
			<td><?php echo $user['contact']?></td>
			
			<?php 
			$image = base_url("upload/default.png");
			if($user['image']!=""){
				$image=base_url("upload/".$user['image']);
			}
			?>
			<td><img src="<?= $image;?>" style="max-height: 100px; max-width: 80px; "></td>
			
			<td>
			<a href="<?php echo base_url().'index.php/user/edit/'.$user['user_id']?>" class="btn btn-primary">Edit</a>
			</td>
			<td>
			<a href="<?php echo base_url().'index.php/user/delete/'.$user['user_id']?>" class="btn btn-danger">Delete</a>
			</td>
			</tr>
			<?php }} else{?>
			<tr>
			<td colspan= "5">Records not found</td>
			
			</tr>
			<?php }?>
			</table>
		</div>

	
	</div>
</div>
</body>
</html>
</body>
</html>