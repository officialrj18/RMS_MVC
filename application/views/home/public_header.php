<!DOCTYPE html>
<html>
<head>
	<title>RMS</title>
	<?= link_tag('assets/css/bootstrap.min.css')?>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNavBar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">Result Management System</a>
			</div>

			<div class="collapse navbar-collapse" id="mainNavBar" >
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a></li>
					<li ><a href="#">About Us</a></li>
					<li ><a href="#">Contact</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" data-toggle="modal" data-target="#mymodallogin">Sign in</a></li>

		<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Login modal xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->

					<div class="modal" id="mymodallogin">
						<div class="modal-dialog">
							<div class="modal-content">

							  	<div class="modal-header" style=" background-color:#343434;   color:#fff;">
						        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        	<h3 class="modal-title"></span>&nbsp;Login</h3>
								</div>

								<div class="modal-body">
									
									<!-- <form action="#" method="post"> -->
									<?php
									$this->load->helper('form');
									 echo form_open('login/admin_login'); ?>

								
										<div class="form-group">
										
											    <!-- <input type="text" class="form-control" name="username"  id="userid" placeholder="User Id"/> -->
											    <?php echo form_input(['class'=>'form-control','name'=>'userid','id'=>'userid','placeholder'=>'User Id','required'=>'required']); ?>
										</div>
				
										<div class="form-group">

										<!-- <input type="password" class="form-control" name="pass"  id="pswd" placeholder="password"/> -->
										<?php echo form_password(['class'=>'form-control','name'=>'pswd','id'=>'pswd','placeholder'=>'password','required'=>'required']); ?>
										</div>

										<div class="form-group">													
										    <!-- <select class="form-control" name="usertype"  id="usertype" required>
												<option value="">Select User</option>
												<option value="1">Student</option>
												<option value="2">Teacher</option>
												<option value="3">Admin</option>
												<option value="4">DEO</option>
											</select> -->
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

									 <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>	-->				     
										<?php echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-danger']);
		 									 echo form_submit(['name'=>'login','value'=>'Login','class'=>'btn btn-success']) ?>
									<!-- <input type="submit" class="btn btn-success" id="save"  value="Login" name="login" > -->
											 
								<?php echo form_close(); ?>
								</div>
							</div>
						</div>
					</div>


<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx SignUp modal xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->

					<li><a href="#" data-toggle="modal" data-target="#mymodalsignup">Sign Up</a></li>
					
						<div class="modal default" id="mymodalsignup"  role="dialog" >
							<div class="modal-dialog">
				    			<div class="modal-content">
			
								  	<div class="modal-header" style=" background-color:#343434;   color:#fff;">
							        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        	<h3 class="modal-title"></span>&nbsp;Register</h3>
							      	</div>
							     	

								    <div class="modal-body">

										<?php echo form_open('login/admin_login'); ?>
										   
												<div class="form-group">																		
												   	 
												   	  <?php echo form_input(['class'=>'form-control','name'=>'username','id'=>'username','placeholder'=>'User Name']); ?>

												</div>

												<div class="form-group">				
																	
													<!--  <input type="email" class="form-control" name="email"  id="email" placeholder="Email"/> -->
													<?php echo form_input(['type'=>'email','class'=>'form-control','name'=>'email','id'=>'email','placeholder'=>'Email']); ?>
												</div>

												<div class="form-group">																					
													 <!-- <input type="password" class="form-control" name="pass"  id="pswd" placeholder="password"/> -->
													 <?php echo form_password(['class'=>'form-control','name'=>'pswd','id'=>'pswd','placeholder'=>'password']); ?>
												</div>

												 <div class="form-group">
											
												    <!-- <input type="number" class="form-control" name="mob"  id="mob" placeholder="Mobile number"/> -->
												    <?php echo form_password(['type'=>'number','class'=>'form-control','name'=>'mob','id'=>'mob','placeholder'=>'Mobile number']); ?>
									
												</div>

												<div class="form-group">
												
												 <!-- <select class="form-control" name="gender"  id="gender" required>
														<option value="">Gender</option>
														<option value="m">Male</option>
														<option value="f">Female</option>
													</select> -->
												<?php $select=array('class'=>'form-control','name'=>'gender','id'=>'gender','required' =>'required');

													$options = array(
														''=>'Select Gender',
														'1'=>'Male',
														'2'=>'Female',
														'3'=>'Transgender');
													 echo form_dropdown($select,$options);?>


												</div>


												<div class="form-group">
													 <!-- <select class="form-control" name="course" id="course" required>

														<option selected="selected" disabled="disabled"><strong>Select Semester</strong>
														</option>
														  <option value='1'>Semester 1 </option>
														  <option value='2'>Semester 2 </option>
														  <option value='3'>Semester 3 </option>
														  <option value='4'>Semester 4 </option>
														  <option value='5'>Semester 5 </option>
														  <option value='6'>Semester 6 </option>
														  <option value='7'>Semester 7 </option>
														  <option value='8'>Semester 8 </option> 
												    </select> -->

												    <?php $select=array('class'=>'form-control','name'=>'course','id'=>'course', 'required'=>'required');

	 				//   XXXXXXXXXXXXXXXXXX ERRORR HEREXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
												    	$options= array(
												    		"'selected'=>'selected','disabled'=>'disabled'"=>'Select Semester',
												    		'1'=>'Semester 1',
														  	'2'=>'Semester 2',
														  	'3'=>'Semester 3',
														  	'4'=>'Semester 4',
														  	'5'=>'Semester 5',
														  	'6'=>'Semester 6',
														  	'7'=>'Semester 7',
														  	'8'=>'Semester 8',
														  													  
												    	);
												    	 echo form_dropdown($select,$options);?>


												
												</div> 
													

												<div class="form-group">													
												    <!-- <select class="form-control" name="usertype"  id="usertype" required>
														<option value="">Select User</option>
														<option value="1">Student</option>
														<option value="2">Teacher</option>
														<option value="3">Admin</option>
														<option value="4">DEO</option>
													</select> -->
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
 	

									<div class="modal-footer" >
											
											<div align="center">
											 <!-- <input type="submit" class="btn btn-success" id="save"  value="Register" name="reg" >
											 </form> -->
											<!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button> -->

											<?php echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-danger']);
		 									 echo form_submit(['name'=>'reg','value'=>'Register','class'=>'btn btn-success','id'=>'save']) ?>
																			 
											<?php echo form_close(); ?>
										    
										    </div>
									</div>
								</div>


				</ul>
			</div>
		</div>
	</nav>

