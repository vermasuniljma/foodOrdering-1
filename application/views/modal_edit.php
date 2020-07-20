<div class="modal fade" id="editmodal">
        <div class="modal-dialog">
          <div class="modal-content">
            
            <div class="modal-body">
              <!--<div id="customers-list"></div>-->
			  
			  <form method= "post" name="createUser" enctype="multipart/form-data" action="">
		
		<div class="col-md-12">
		<div class="row">
		<table width="400" cellspacing="10" cellpadding="10">
		
		<div class="col-md-3">
			
                <tr>
					<td>
						<div class="form-group">
							<label for="exampleInputEmail1">Category name</label>
							<input type="text" name="cname" class="form-control" id="category_name" value="">
							
				    <input type="text" name="formtype" class="form-control" id="exampleformtype" value="<?php print_r($id);?>">
						</div>
					</td>
				</tr>
				 
				 <tr>
					<td>
						<div class="form-group">
							<label> Update Image </label>
							
							<img src="" style="max-height: 100px; max-width: 80px; ">
							<tr><td><?php echo form_upload(['name'=>'userfile']);?></td></tr>
						</div>
                 
					</td>
				</tr>
        </div>
                
                <!-- /.card-body -->

                <tr><td>
				  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </td></tr>
				</div>
				</div>
				
              </form>
			  
			  
			  
			  
			  
			  
            </div>
           
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
