<?php echo "<h1>Login Form</h1>";
 	
 		$this->load->helper('form');

 		echo form_open('/index.php/Verify/login');

 		echo "<br>"; 
 		echo form_label('Username ','uname');
 		echo form_input('uname');

 		echo "<br>";
 		echo form_label('Password ','pswd');
 		echo form_password('pswd');

 		echo "<br>";
 		echo form_submit('submit','login');

 		echo form_close();
?>