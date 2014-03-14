<?php
class Participants extends CI_Model
{
	 function __construct()
	{
		# code...
		parent::__construct();
		$this->load->database();
	}

	public function selectall()
	{
		$this->db->select('*');
		$query=$this->db->get('participants');
		return $query->result();	
	}

	public function count()
	{
		$this->db->select('*');
		$query=$this->db->get('participants');
		return count($query->result());
	}

	public function getNameByID($value='')
	{
		$this->db->where('pid',$value);
		$this->db->select('*');
		$query=$this->db->get('participants');
		
		return $query->result()[0]->pname;
	}
}