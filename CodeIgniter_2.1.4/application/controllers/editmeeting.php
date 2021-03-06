<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Editmeeting extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('meetings');
		$this->load->model('attendance');
		$this->load->model('participants');
		$this->load->helper('url');
		$this->load->library('session');			
	}

	public function index($mid=1)
	{
		if(!$this->session->userdata('isAdmin'))
		{
			$this->login();
			return false;
		}
		
		$data['people']=$this->participants->selectall();
		$data['base_url']=base_url();
		

		$this->load->view('header',$data);
		$this->load->view('edit');
		$this->load->view('footer');
	}
	public function create()
	{
		if(!$this->session->userdata('isAdmin'))
		{
			$this->login();
			return false;
		}

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
			$temp=$this->upload->data();
			$filepath=base_url()."uploads/".$temp['file_name'];
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
		$data['mid']=mysql_insert_id();
		$numOfPeople=$this->participants->count();
		
		

		for ($i=1; $i <=$numOfPeople ; $i++) 
		{ 
			if($this->input->post($i, TRUE))
			{		
				$arr = array('mid' => $data['mid'],'pid'=>$i,'pname'=>$this->participants->getNameByID($i) );
				$this->attendance->insert($arr);
			}
		}
		

		$this->load->view('header',$data);
		$this->load->view('meetingcreated');
		$this->load->view('footer');
	}

	public function modify($mid=1)
	{
		if(!$this->session->userdata('isAdmin'))
		{
			$this->login();
			return false;
		}

		$data['base_url']=base_url();
		$data['meeting']=$this->meetings->selectById($mid);
		$data['people']=$this->attendance->selectById($mid);
		$data['all_people']=$this->participants->selectall();

		$this->load->view('header',$data);
		$this->load->view('modify');
		$this->load->view('footer');
	}

	public function update($mid=1)
	{
		if(!$this->session->userdata('isAdmin'))
		{
			$this->login();
			return false;
		}

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
			$havefile= $this->input->post('old_havefile', TRUE);
			$filepath= $this->input->post('old_file', TRUE);
		}
		else
		{
			$havefile=1;
			$temp=$this->upload->data();
			$filepath=base_url()."uploads/".$temp['file_name'];
		}

		

		$arr = array('mtitle' => $this->input->post('mtitle', TRUE),
			'mdate' => $this->input->post('mdate', TRUE),
			'address' => $this->input->post('address', TRUE),
			'start' => $this->input->post('start', TRUE),
			'end' => $this->input->post('end', TRUE),
			'content' => $this->input->post('content', TRUE),
			'havefile'=>$havefile,
			'file'=>$filepath,
			'path'=>$temp['full_path']
		 );
		
		$this->meetings->update($arr,$mid);

		$numOfPeople=$this->participants->count();
		$data['mid']=$mid;
		

		$this->attendance->delAttendanceByID($mid);
		

		for ($i=1; $i <=$numOfPeople ; $i++) 
		{ 
			if($this->input->post($i, TRUE))
			{		
				$arr = array('mid' => $mid,'pid'=>$i,'pname'=>$this->participants->getNameByID($i) );
				
				$this->attendance->insert($arr);
			}
		}
		

		$this->load->view('header',$data);
		$this->load->view('meetingupdated');
		$this->load->view('footer');
	}

	public function login()
	{
		if($this->session->userdata('captcha'))
		{
			$randam='';
			$this->load->helper('captcha');
			for ($i=0; $i < 6; $i++) {
				$temp=rand(0,9);
				$randam=$randam."".$temp;
			
			}
			
			$vals = array(
	    	'img_path' => './captcha/',
	    	'img_url' => base_url().'captcha/',
	    	'word' => $randam
	    	);

			$cap = create_captcha($vals);
			$data['image']= $cap['image'];
			$this->session->set_userdata('word',$randam);

		}
		
		$data['base_url']=base_url();

		$this->load->view('header',$data);
		$this->load->view('login');
		$this->load->view('footer');
	}

	public function validate()
	{
		$data['base_url']=base_url();
			
		if(($this->input->post('user', TRUE)=='root')
			&&($this->input->post('password', TRUE)=='root')
			&&(strtolower($this->input->post('captcha', TRUE))==strtolower($this->session->userdata('word'))))
		{
			$this->session->set_userdata('isAdmin', 1);


			$this->load->view('login_success',$data);
			
		}
			
		else
		{
			$this->session->set_userdata('captcha', 1);
			$this->login();
		}
			
	}

	public function logout()
	{
		$this->session->sess_destroy();
	}

	public function deleteMeeting($mid)
	{
		if(!$this->session->userdata('isAdmin'))
		{
			$this->login();
			return false;
		}
		$this->attendance->delAttendanceByID($mid);
		$this->meetings->deleteByMid($mid);

		$data['base_url']=base_url();
		$this->load->view('delmeeting_success',$data);
	}
}

