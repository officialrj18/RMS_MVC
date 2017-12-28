<?php include_once('admin_header.php'); ?>

<?php include_once('admin_sidebar.php'); ?>

				
								
					<!-- <?php echo "<pre">
					print_r($sem); ?> -->
			<div class="col-sm-6 col-md-6">
			     <h1>Edit Semester </h1>
			
				<?php
					$this->load->helper('form');

					//echo form_hidden('semid',$sem->id);

					 echo form_open("admin/update_sem/{$sem->SEMID}"); 

					?>


						<div class="form-group">			
							   				    							    
							<?php echo form_input(['class'=>'form-control','name'=>'SEMID','required'=>'required','value'=>set_value('sem_id',$sem->SEMID)]); ?>

						</div>

						<div class="form-group">
						
							<?php echo form_input(['class'=>'form-control','name'=>'sem','placeholder'=>'ex. semester 1',
							  'required'=>'required','value'=>set_value('sem_name',$sem->SEM)]); ?>

						</div>

						<div>

							<?php echo form_submit(['name'=>'submit','value'=>'Update Semester','class'=>'btn btn-success']) ?>

						</div>

						<div class="col-lg-6">

							<?php echo form_error('sem_name');?>

						</div>
		     	
				<?php echo form_close(); ?>
				
		</div>
	</div>
</div>

<?php include_once('admin_footer.php'); ?>