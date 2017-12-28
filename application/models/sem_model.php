<?php

class Sem_model extends CI_Model
{

	public function sem_list()
	{
		$query=$this->db
					->select()
					->from('SEMINFO')
					->get();
		// echo '<pre>';
		// 		print_r($query->result());
		// echo  '</PRE>';
		//exit;
		
		return $query->result();

	}


	public function sem_insert($sem)
	{
		return $this->db->insert('SEMINFO',$sem);
	}


	public function sem_find($semid)
	{
		$query=$this->db->select()
						->where('SEMID',$semid)
						->get('seminfo');
		return $query->row();
	}

	public function sem_update($semid,Array $sem)
	{
		return $this->db
						->where('SEMID',$semid)
						->update('seminfo',$sem);		//table name ,array
						
	}

	public function sem_delete($semid)
	{
		return $this->db->delete('seminfo',['SEMID'=>$semid]);
	}

}

?>
