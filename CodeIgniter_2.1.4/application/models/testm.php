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
		$this->db->insert('ci',$arr);
	}
}