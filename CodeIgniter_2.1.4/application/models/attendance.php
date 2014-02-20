<?php
class Attendance extends CI_Model
{
	 function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insert($arr='')
	{
		$this->db->insert('attendance',$arr);
	}

	public function selectById($value=1)
	{
		$this->db->where('mid',$value);
		$this->db->select('*');
		$query=$this->db->get('attendance');
		return $query->result();	
	}

	public function count()
	{
		$this->db->select('*');
		$query=$this->db->get('attendance');
		return count($query->result());
	}
}