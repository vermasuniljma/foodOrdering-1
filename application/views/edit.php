<div class="modal-body">
					
	<form method= "post" name="createUser" enctype="multipart/form-data" action="<?php echo base_url().'index.php/register/editCategories/';?>">
         <?php
			echo "<pre>";
			print_r($user);
			exit;
		?>
		<div class="col-md-12">
		<div class="row">
		<table width="400" cellspacing="10" cellpadding="10">
		<div class="col-md-3">
                <tr>
				<td>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category name</label>
                    <input type="text" name="cname" class="form-control" value="<?php echo set_value('cname',$user['category_name']);?>" id="exampleInputEmail1" placeholder="Category Name">
					
				    <!--<input type="text" name="formtype" class="form-control" id="exampleformtype" value="">-->
                  </div>
                 </td></tr>
				 
				 <tr>
				 <td>
                 <div class="form-group">
					<label> Select Image </label>
					<img src="<?php echo base_url('upload/'.$user['image']);?>" style="max-height: 100px; max-width: 80px; ">
					<?php echo form_upload(['name'=>'userfile']);?>
		         </div>
				 </td></tr>
        </div>
			
                <!-- /.card-body -->

                <tr><td>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </td></tr>
				</div>
				</div>
			
    </form>
</div>