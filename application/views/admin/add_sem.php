<?php include_once('admin_header.php'); ?>

<?php include_once('admin_sidebar.php'); ?>


			<div class="col-sm-6 col-md-6">
			     <h1>Enter Semester </h1>
			
				<?php
					$this->load->helper('form');
					 echo form_open('admin/store_sem'); ?>

				
						<div class="form-group">
						
							    <?php echo form_input(['class'=>'form-control','name'=>'sem','placeholder'=>'ex. semester 1','required'=>'required']); ?>
						</div>

						<div>
						<?php echo form_submit(['name'=>'submit','value'=>'Add Semester','class'=>'btn btn-success']) ?>
						</div>
						<div class="col-lg-6">
							
							<?php echo form_error('sem_name');?>

						</div>
		     	
					<?php echo form_close(); ?>
				
		</div>
	</div>
</div>

<?php include_once('admin_footer.php'); ?>