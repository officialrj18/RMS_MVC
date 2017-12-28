 <?php 

class Login extends CI_Controller					//to remove the loop
{  
	public function index()
	{
			
		$this->load->view('home/login');
	}

	public function admin_login()
	{
		

		$this->load->library('form_validation');
		$this->form_validation->set_rules('userid','User Name','required|trim');
		$this->form_validation->set_rules('pswd','Password','required');

		if($this->form_validation->run())
		{
			$userid=$this->input->post('userid');
			$password=$this->input->post('pswd');
			
			$this->load->model('login_model');

			if ($this->login_model->login_valid($userid,$password))
			{
				//credentials valid,login user
				$this->load->library('session');
				$this->session->set_userdata('userid',$userid);	
				
				//$this->load->view('admin/dashboard');  not good for security n logic wise

				return redirect('admin/dashboard');


				//echo "Password match";
			}
			else
			{
				//authentication error
				//echo "Password don't match";
				$this->session->set_flashdata('login_failed','Invalid Username/Password');
				$this->load->view('home/Login_modal');
			}			
		}
		
		else
		{
			//authentication error
			$this->load->view('home/login');

			//echo validation_errors();

		}

	}

	public function logout()
	{
		$this->session->unset_userdata('userid');
		return redirect('login');
	}
}

 ?>