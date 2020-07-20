<div class="content-wrapper">
	
	<div class="content-header">
	   <div class="container-fluid">
		  <div class="row mb-2">
			 <div class="col-sm-6">
				<h2 class="m-0 text-dark">Add Menu Item</h2>
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
				<h5 class="m-0 text-dark">Add Menu Item Details</h5>
				</div>
			</div>
		</div>
		<hr>
		
		<div class="x_content">
		
		
		<form role="form" method="POST" enctype="multipart/form-data" action="<?php echo base_url().'index.php/menu_Controller/add_menuItem';?>" name="form1" >
                           
            <div class="form-group">
                <label>Item Name:</label> <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="Enter name of your menu item"></i>
                <input type="text" class="form-control" placeholder="Enter name of your menu item" name="name" required>
            </div>

			<div class="form-group">
                <label>Menu Item Description:</label> <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="Enter description of your menu item"></i>
				
					<textarea name="editor1" id="editor1" rows="10" cols="80" required>
					</textarea>
                <script src="ckeditor/ckeditor.js"></script>
                <script>
					CKEDITOR.replace('editor1');
                </script>
            </div>

		<div class="form-group">
            <label>Menu Item Variant:</label> <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="Enter variant of your menu item"></i>
                <table id="employee_table" align=center class="table table-striped">
                    <th>Variant Size</th>
                    <th>Variant Price</th>
                    <tr id="row1">
                        <td><input type="text" name="vname" placeholder="Size of your menu item" class="form-control" required></td>
                        <td><input type="number"  step="0.01" min="0" max="10000000" name="vprice" placeholder="Price of variant" class="form-control" required></td>

                    </tr>
                </table>
				
            <a type="button" onclick="add_row();"  class="fa fa-plus-circle btn btn-primary"> ADD Variant</a>

        </div>

		<br>
		<div class="form-group">
            <label>Extras:</label> <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="Enter extras of your menu item"></i>
            <table id="employee_table1" align=center class="table table-striped">
                <th>Extra item name</th>
                <th>Extra item Price</th>
                <tr id="row">
                    <td><input type="text" name="extra" placeholder="Extra item name" class="form-control" ></td>
                    <td><input type="number"  step="0.01" min="0" max="10000000" name="extraprice" placeholder="Price of extra item" class="form-control" ></td>

				</tr>
			</table>
			
            <a type="button" onclick="add_rows();"  class="fa fa-plus-circle btn btn-primary"> ADD Extra</a>

        </div>
		<br>
                            
        <div class="form-group">
			<label for="sel1">Product Status:</label> <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="Choose status of your item."></i>
			<select class="form-control" id="sel1" name="product_status" required>
				<option value="Available">Available</option>
                <option value="Not Available">Not Available</option>
			</select>	
		</div>


		<div class="form-group">
			<label for="sel1">Recommended:</label> <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="Choose if you want to add this item to recommended list."></i>
			<select class="form-control" id="sel1" name="rec" >
                <option value="Not Recommended">Not Recommended</option>
                <option value="Recommended">Recommended</option>

			</select>
		</div>


		<div class="form-group">
            <label>Product Quantity Limit Per Order:</label> <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="How many quantity customer can order at one time."></i>
            <input type="number" class="form-control" placeholder="No. of quantity customer can order at one time" name="plimit"   required >
        </div>
		
		
		<div class="form-group">
			<label> Item Image </label>
			<input type="file" name="userfile" value="" required>
		</div>
		<!--<div class="form-group">
			<label for="exampleInputFile">Item Image</label> <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="Add primary image of your item."></i>
            <input type="file" name="" required id="fileUpload">
			<p class="help-block">Please upload GIf,JPG,Jpeg,BMP,PNG files only.</p>
		</div>-->

		
                

			<div class="form-group text-muted well well-sm no-shadow">
                <p class="help-block">Please check at least one category.</p>                     
                <lable><b>Categories</b></lable><br>

                <div class="checkbox-inline">
                    <span style="margin-left:10px"></span><input name="chk[]" value="27" type="checkbox" id="mycheckbox"><span>Breakfast </span><span style="margin-left:10px"></span>
                </div>
				
				<div class="checkbox-inline">
                    <span style="margin-left:10px"></span><input name="chk[]" value="31" type="checkbox" id="mycheckbox"><span>Trendy </span><span style="margin-left:10px"></span>
                </div>

                <div class="checkbox-inline">
                    <span style="margin-left:10px"></span><input name="chk[]" value="35" type="checkbox" id="mycheckbox"><span>Honey </span><span style="margin-left:10px"></span>
                </div>

                <div class="checkbox-inline">
					<span style="margin-left:10px"></span><input name="chk[]" value="38" type="checkbox" id="mycheckbox"><span>jkjkj </span><span style="margin-left:10px"></span>
                </div>
				
				<br>

            </div>
			
		

			<div class="box-footer">
				<input type="submit" class="btn btn-primary" value="Add Menu Item" name="addproduct" id="postme">
			</div>
    
		</form>
		
		</div>
	</section>
</div>