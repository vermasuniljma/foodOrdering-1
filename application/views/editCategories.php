  <?php include ('links.php');?>
 
  <form method= "post" name="createUser" enctype="multipart/form-data" action="<?php echo base_url().'index.php/register/editCategories/'.$user['id']?>">
		
		<div class="col-md-12">
		<div class="row">
		<table width="400" cellspacing="10" cellpadding="10">
		
		<div class="col-md-3">
                <tr>
					<td>
						<div class="form-group">
							<label for="exampleInputEmail1">Category name</label>
							<input type="text" name="cname" class="form-control" id="exampleInputEmail1" value="<?php echo set_value('cname',$user['category_name']);?>">
						</div>
					</td>
				</tr>
				 
				 <tr>
					<td>
						<div class="form-group">
							<label> Update Image </label>
							<?php if( ! is_null($user['image']));?>
							<img src="<?php echo base_url('upload/'.$user['image']);?>" style="max-height: 100px; max-width: 80px; ">
							<tr><td><?php echo form_upload(['name'=>'userfile']);?></td></tr>
						</div>
                 
					</td>
				</tr>
        </div>
                
                <!-- /.card-body -->

                <tr><td>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </td></tr>
				</div>
				</div>
				
              </form>
		