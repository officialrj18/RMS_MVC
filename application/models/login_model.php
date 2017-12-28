<?php 
class Login_model extends CI_Model
{
	public function login_valid($userid,$password)
	{	

		$q=$this->db->where(['userid'=>$userid,'password'=>$password])
					->get('logininfo');

			// $this->db->select();
			// $this->db->from('logininfo');
			// $this->db->where('USERID',$userid);
			// $this->db->where('PASSWORD',$password);
			// $q=$this->db->get();
		
			if( $q->num_rows())
			{
				return TRUE;
			}
			else 
			{
				return FALSE;
			}
		
	}

}

 ?>