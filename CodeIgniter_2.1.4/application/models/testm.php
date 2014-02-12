<?php
class Testm extends CI_Model
{
	 function __construct()
	{
		# code...
		parent::__construct();
		$this->load->database();
	}

	public function user_insert($arr='')
	{
		# code...
		$this->db->insert('meetings',$arr);
	}

	public function userselect($value='')
	{
		$this->db->where('mtitle','李书楠');
		$this->db->select('*');
		$query=$this->db->get('meetings');
		var_dump($query->result());
	}
	public function userselectall($value='')
	{
		$this->db->select('*');
		$query=$this->db->get('meetings');
		return $query->result();	
	}
}