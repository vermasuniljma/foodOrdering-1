
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
	   <div class="container-fluid">
		  <div class="row mb-2">
			 <div class="col-sm-6">
				<h2 class="m-0 text-dark">Food-Item</h2>
			 </div>
			 <!-- /.col -->
		  </div>
		  <!-- /.row -->
	   </div>
	   <!-- /.container-fluid -->
	</div>
	<hr>
	<section class="col-lg-12 connectedSortable">
		<div class="container-fluid">
		  <div class="row mb-2">
			 <div class="col-sm-6">
				<h5 class="m-0 text-dark">Menu Item Details</h5>
			 </div>
			 <!-- /.col -->
		  </div>
		  <!-- /.row -->
		  
		  <a href="<?php echo base_url().'index.php/menu_Controller/add_item';?>"" class="btn btn-primary">Add Item</a>
		</div>
		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<table class="table table-striped" border="1">
					   <tr>
						  <th>Name</th>
						  <th>Image</th>
						  <th>Status</th>
						  <th>Date</th>
						  <th>View</th>
						  <th>Edit</th>
						  <th>Delete</th>
					   </tr>
					   
					   <?php if(!empty($users)){foreach($users as $user){?>
						   <tr>
							  <td><?php echo $user['item_name']?>
							  
							  </td>
							  
							<td>
								 <img src="<?php echo base_url('upload/'.$user['image']);?>" style="max-height: 100px; max-width: 80px; ">
								 
							  </td>
							  <td>
							  <span class="badge bg-green"><?php echo $user['status']?></span>
							  
							  </td>
							  <td><?php echo $user['date']?>
							  </td>
							  
							  <td>
								 <a href="<?php echo base_url()."menu_Controller/item_ViewDetails/".$user['id'];?>" class="btn btn-primary">view</a>
							  </td>
							  <td>
								 <a href="<?php echo base_url()."menu_Controller/item_EditDetails/".$user['id'];?>" class="btn btn-primary">Edit</a>
							  </td>
							 <td>
								 <a href="<?php echo base_url()."menu_Controller/item_DeleteDetails/".$user['id'];?>" class="btn btn-danger">Delete</a>
							  </td>
						   </tr>
						<?php }
							} else{?>
							
					   <tr>
						  <td colspan= "5">Records not found</td>
					   </tr>
					   <?php }?>
						
					</table>
				</div>
			</div>
		</div>
	</section>
</div>
        
		 