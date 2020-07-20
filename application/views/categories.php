<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
// just for the demos, avoids form submit
jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
$( "#createUser" ).validate({
  rules: {
    cname: {
      required: true,
	  message:"Error Found"
    }
  }
});
</script>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
	   <div class="container-fluid">
		  <div class="row mb-2">
			 <div class="col-sm-6">
				<h1 class="m-0 text-dark">Categories</h1>
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
				<h3 class="m-0 text-dark">Categories details</h3>
			 </div>
			 <!-- /.col -->
		  </div>
		  <!-- /.row -->
		  <button type="button" onclick="showModal();" class="btn btn-primary ">Add category</button>
		</div>
		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<table class="table table-striped">
					   <tr>
						  <th>Name</th>
						  <th>Image</th>
						  <th>Edit</th>
						  <th>Delete</th>
					   </tr>
						<?php if(!empty($users)){foreach($users as $user){?>
						   <tr>
							  <td><?php echo $user['category_name']?>
							  
							  </td>
							  <td>
								 <img src="<?php echo base_url('upload/'.$user['image']);?>" style="max-height: 100px; max-width: 80px; ">
								 
							  </td>
							  <td>
								 <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#operationEdit" onclick="editModal(<?php echo $user['id']?>);">Edit</button>
							  </td>
							  <td>
								 <button type="button" class="btn btn-danger"  data-toggle="modal" onclick="deleteModal(<?php echo $user['id']?>);">Delete</button>
							  </td>
						   </tr>
						<?php }
							} else{?>
					   <tr>
						  <td colspan= "5">Records not found</td>
					   </tr>
					   <?php }?>
					   <tbody id="show_data">
											   
										  
					   </tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
</div>
         <!--####################################################-->
        <div class="modal fade" id="operation">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">
						<form method= "post" name="createUser" id="createUser" enctype="multipart/form-data" action="<?php echo base_url().'index.php/register/addCategories';?>">
							<div class="col-md-12">
								<div class="row">
									<table width="400" cellspacing="10" cellpadding="10">
										<tr>
											<td>
											   <div class="form-group">
												  <label for="exampleInputEmail1">Category name</label>
												  <input type="text" name="cname" class="form-control" id="exampleInputEmail1" placeholder="Category Name" required>
												 
												  <!--<input type="text" name="formtype" class="form-control" id="exampleformtype" value="">-->
											   </div>
											</td>
										</tr>
										<tr>
											<td>
											   <div class="form-group">
												  <label> Select Image </label>
												  <input type="file" name="userfile" value="" required>
												  
												  
											   </div>
											</td>
										</tr>
										  <!-- /.card-body -->
										<tr>
											<td>
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												<button type="submit" name="submit" class="btn btn-primary">Submit</button>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</form>
					</div>
                  <!-- /.modal-content -->
               </div>
               <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
         </div>
         <!--########################################################-->
         <!--####################################################-->
         <div class="modal fade" id="operationEdit">
            <div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">
						<form method= "post" name="createUser" enctype="multipart/form-data" action="<?php echo base_url().'index.php/register/update';?>">
							<div class="col-md-12">
								<div class="row">
									<table width="400" cellspacing="10" cellpadding="10">
									<input type="hidden" name="cId" class="form-control" id="cId" value="">
										<tr>
											<td>
											   <div class="form-group">
												  <label for="exampleInputEmail1">Category name</label>
												  <input type="text" name="cname" id="cname" class="form-control" value="" id="exampleInputEmail1" placeholder="Category Name" required>
												  
											   </div>
											</td>
										</tr>
										<tr>
											<td>
											   <div class="form-group">
												  <label> Select Image </label>
												  <img src="" id="cat_image" style="max-height: 100px; max-width: 80px; ">
												  <input type="file" name="userfile" value="">
											   </div>
											</td>
										</tr>
										<tr>
											<td>
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												<button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</form>
					</div>
                  <!-- /.modal-content -->
				</div>
               <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
         </div>
         <!--########################################################-->
		 
		 
		 <div class="modal fade" id="operationDelete">
		 
            <div class="modal-dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
				<h5 class="modal-title">Conformation</h5>
					<div class="modal-body">
					
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-danger" id="delete">Yes</button>
					</div>
					</div>
				</div>
			</div>
		</div>
		 
		 <!--#############################################################-->
        <script type="text/javascript">
            function showModal(){
            	$('#operation').modal('show');
            }
		</script>
		 
         <script type="text/javascript">
            function editModal(userId){
            	
            	$.ajax({
            		url  : "<?php echo base_url().'index.php/register/edit'?>",
                          		type : "POST",
                            	data : {userId:userId},
            		success: function(responce){
            			var data=responce.split("--x--");
						$("#cId").val(data[0]).focus();
            			$("#cname").val(data[1]).focus();
						$("#cat_image").attr('src',data[2]);
						
				}
            	});
            }
			
		 </script>
		 
		 <script type="text/javascript">
		 
			function deleteModal(userId){
				$('#operationDelete .modal-body').html("Are you sure want to delete #"+ userId +" ?");
				$('#operationDelete').modal('toggle');
				$('#operationDelete').data("id",userId);
				
			}
			
			$(document).ready(function(){
			$("#delete").on('click',function(){
			
			var userId = $('#operationDelete').data("id");
			$.ajax({
            		url  : "<?php echo base_url().'index.php/register/delete'?>",
                          		type : "POST",
                            	data : {userId:userId},
            		success: function(responce){
						alert(hi);
						$('#delete').modal("hide");
					}
				});
			});
			});
		 
		 </script>
		 