<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Editmeeting extends CI_Controller {

	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model('meetings');
		$this->load->model('attendance');
		$this->load->model('participants');
		$this->load->helper('url');
	}

	public function index($mid=1)
	{
		
		$data['people']=$this->participants->selectall();
		$data['base_url']=base_url();
		

		$this->load->view('header',$data);
		$this->load->view('edit');
		$this->load->view('footer');
	}
	public function create()
	{
		$data['base_url']=base_url();
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'zip|rar|7z';
		$config['max_size'] = '1000000';
		$config['overwrite'] = TRUE;

		$this->load->library('upload', $config);

		$this->upload->do_upload("file");
		$data['display_errors']=$this->upload->display_errors('<p class="text-danger">','</p>');

		if($data['display_errors'])
		{
			$havefile=0;
			$filepath=0;
		}
		else
		{
			$havefile=1;
			$filepath=base_url()."uploads/".$this->upload->data()['file_name'];
		}

		$arr = array('mtitle' => $this->input->post('mtitle', TRUE),
			'mdate' => $this->input->post('mdate', TRUE),
			'address' => $this->input->post('address', TRUE),
			'start' => $this->input->post('start', TRUE),
			'end' => $this->input->post('end', TRUE),
			'content' => $this->input->post('content', TRUE),
			'havefile'=>$havefile,
			'file'=>$filepath
		 );
		
		$this->meetings->insert($arr);

		$numOfPeople=$this->participants->count();
		$data['mid']=$numOfMeeting=$this->meetings->count_all();
		

		for ($i=1; $i <=$numOfPeople ; $i++) 
		{ 
			if($this->input->post($i, TRUE))
			{		
				$arr = array('mid' => $numOfMeeting,'pid'=>$i,'pname'=>$this->participants->getNameByID($i) );
				$this->attendance->insert($arr);
			}
		}
		

		$this->load->view('header',$data);
		$this->load->view('meetingcreated');
		$this->load->view('footer');
	}
}
