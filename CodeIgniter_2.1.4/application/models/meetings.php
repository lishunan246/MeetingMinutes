<?php
class Meetings extends CI_Model
{
	 function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insert($arr='')
	{
		$this->db->insert('meetings',$arr);
	}

	public function selectById($value=1)
	{
		$this->db->where('mid',$value);
		$this->db->select('*');
		$query=$this->db->get('meetings');
		return $query->result();	
	}
	public function meetinglist($meeting_index=0)
	{
		$this->db->select('*');
		$this->db->limit(10,$meeting_index);
		$query=$this->db->get('meetings');
		return $query->result();	
	}
	public function count_all()
	{
		$this->db->select('*');
		$query=$this->db->get('meetings');
		return count($query->result());
	}
}