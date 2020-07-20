  <?php include ('links.php');?>
  <html>
  <head>
  <title> addCategories </title>
  </head>
  <body>
  <form method= "post" name="createUser" enctype="multipart/form-data" action="<?php echo base_url().'index.php/register/addCategories';?>">
		
		<div class="col-md-12">
		<div class="row">
		<table width="400" cellspacing="10" cellpadding="10">
		
		<div class="col-md-3">
                <tr>
				<td>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category name</label>
                    <input type="text" name="cname" class="form-control" id="exampleInputEmail1" placeholder="Category Name">
                  </div>
                 </td></tr>
				 
				 <tr>
				 <td>
                 <div class="form-group">
					<label> Select Image </label>
					<?php echo form_upload(['name'=>'userfile']);?>
		         </div>
				 </td></tr>
        </div>
                
                <!-- /.card-body -->

                <tr><td>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </td></tr>
				</div>
				</div>
			
              </form>
		</body>
		</html>