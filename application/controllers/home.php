<?php 

class Home extends MY_Controller
{  
	public function index()
	{
		if($this->session->userdata('userid'))
		{
			return redirect('admin/dashboard');
		}

		$this->load->view('home/mainpage');
	}


	
	// public function test()
	// {
	// 	$this->load->view('test');
	// }
}



 ?> 