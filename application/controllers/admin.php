<?php 
class Admin extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
	}



	public function index()
	{
		$this->load->view('home/login');
	}

	public function dashboard()
	{	

		$this->load->view('admin/admin_dashboard');

	}
// xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx SEMESTER xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx

	private function _flashAndRedirect($successfull, $successMessage, $failureMessage)
	{
		if($successfull)
			{

				$this->session->set_flashdata('feedback',$successMessage);
				$this->session->set_flashdata('feedback_class',"alert-success");
			}
		else
			{
				$this->session->set_flashdata('feedback',$failureMessage);
				$this->session->set_flashdata('feedback_class',"alert-danger");
			}
		return redirect('admin/semester');
		

			// THIS IS THE FULL CMD
			// if($this->sem_model->sem_delete($semid))
			// 	{

			// 		$this->session->set_flashdata('feedback',"Semester Deleted successfully.");
			// 		$this->session->set_flashdata('feedback_class',"alert-success");
			// 	}
			// else
			// 	{
			// 		$this->session->set_flashdata('feedback',"Semester Failed to delete,Please try Again.");
			// 		$this->session->set_flashdata('feedback_class',"alert-danger");
					
			// 	}
			// return redirect('admin/semester');

	}


	public function semester()
	{		

		$this->load->helper('form');
		$this->load->model('sem_model');


		$sem = $this->sem_model->sem_list();

		$this->load->view('admin/sem',['sem'=>$sem]);

	}

	public function store_sem()
	{
		$this->load->library('form_validation');
		if($this->form_validation->run('add_sem_rules'))
		{
			echo "FADJFASDJ";

		// 2222222222222222222222222222222222222222      eee        error in validation	
		}
		else{


			$sem_name = $this->input->post();

			$this->load->model('sem_model');

			unset($sem_name['submit']); 		// for removin submit field name

			return $this->_flashAndRedirect($this->sem_model->sem_insert($sem_name),"Semester added successfully.","Semester Failed to Add,Please try Again.");
			
			
		}
	}


	public function edit_sem($semid)
	{
		$this->load->model('sem_model');
		$sem=$this->sem_model->sem_find($semid);
		$this->load->view('admin/edit_sem',['sem'=>$sem]);
	}

	public function update_sem($semid)
	{
		$this->load->library('form_validation');
		if($this->form_validation->run('add_sem_rules'))
		{
			
		
		// 2222222222222222222222222222222222222222  eee    error in validation	
		}
		else{


			$sem_name = $this->input->post();


			$this->load->model('sem_model');

			unset($sem_name['submit']); 
					// for removin submit field name

			return $this->_flashAndRedirect($this->sem_model->sem_update($semid,$sem_name),"Semester Updated successfully.","Semester Failed to Update,Please try Again.");
		
		}
	}



	public function add_sem()
	{

		$this->load->view('admin/add_sem');
	}



	public function delete_sem()
	{

		$semid= $this->input->post('sem_id');

		$this->load->model('sem_model');

		return $this->_flashAndRedirect($this->sem_model->sem_delete($semid),"Semester Deleted successfully.","Semester Failed to delete,Please try Again.");

		
	}


}



?> 