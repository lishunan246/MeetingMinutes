<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {	
	public function add()
	{
		$this->load->model('testm');
		$arr=array('mtitle'=>'lsn');
		for ($i=1; $i<100 ; $i++) 
		{ 
			$arr=array('mtitle'=>'lsn'.$i);
			$this->testm->user_insert($arr);
		}
	}

	public function checklogin()
	{
		$this->load->model('testm');
		var_dump($_POST['email']);
		echo "/n";
		$this->testm->userselect(1);

	}
	public function pagelist($value='')
	{
		$this->load->model('testm');
		$user=$this->testm->userselectall();
		$num=count($user);
		$pagenum=10;

		$config['total_rows']=$num;
		$config['per_page']=$pagenum;
		$config['num_links']=2;
		$config['base_url']='/MeetingMinutes/CodeIgniter_2.1.4/index.php/page/pagelist';

		$this->load->library('pagination');
		$this->pagination->initialize($config);

		echo $num;
		echo $this->pagination->create_links();
		//var_dump($user);
	}
}
