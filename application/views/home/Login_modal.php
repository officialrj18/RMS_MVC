<!DOCTYPE html>
<html>
<head>
	<title>RMS</title>
	<?= link_tag('assets/css/bootstrap.min.css')?>
	<?= link_tag('assets/css/admin-sidebar.css')?>
	
</head>
	<body>
						<div class="modal-dialog">

							<div class="modal-content">

							  	<div class="modal-header" style=" background-color:#343434;   color:#fff;">
						        	<a type="button" href="index" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a>
						        	<h3 class="modal-title"></span>&nbsp;Login</h3>
								</div>

								<div class="modal-body">

																	
								<?php $this->load->helper('form');
									 echo form_open('login/admin_login'); ?>



								<?php if($error=$this->session->flashdata('login_failed')):?>
									 <div class="row">
										<div class="alert alert-dismissible alert-danger">
  											<?= $error ?>
										</div>
									</div>
								<?php endif; ?>

								
										<div class="form-group">
										
											    <?php echo form_input(['class'=>'form-control','name'=>'userid','id'=>'userid','placeholder'=>'User Id','required'=>'required']); ?>
										</div>
				
										<div class="form-group">

										<?php echo form_password(['class'=>'form-control','name'=>'pswd','id'=>'pswd','placeholder'=>'password','required'=>'required']); ?>
										</div>

										<div class="form-group">													
										  
											<?php
											$select=array('class'=>'form-control','name'=>'usertype','id'=>'usertype','required' =>'required');

											$options = array(
												''=>'Select User',
												'1'=>'Student',
												'2'=>'Teacher',
												'3'=>'Admin',
												'4'=>'DEO');
											 echo form_dropdown($select,$options);?>

										</div>
									
								</div>

								<div class="modal-footer">

									 
										<?php echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-danger']);
		 									 echo form_submit(['name'=>'login','value'=>'Login','class'=>'btn btn-success']) ?>
								
											 
								<?php echo form_close(); ?>
								</div>
							</div>
						</div>
					</div>
</body>