<?php 
	class MY_Controller extends CI_Controller
	 {

	 	//used for authoriszation reduces redundancy put common features here

	 	//if(! $this->isAuthozied()) return redirect('home');

		public function __construct()
			{
				parent:: __construct();

				//for mantaining the session
				if(! $this->session->userdata('userid'))
				
					return redirect('login');
				
			}


	}


 ?>
