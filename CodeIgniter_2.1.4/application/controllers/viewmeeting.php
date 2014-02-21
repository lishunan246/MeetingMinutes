<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Viewmeeting extends CI_Controller {

	
	public function index($mid=1)
	{
		$this->load->helper('typography');
		$this->load->helper('url');
		$this->load->model('meetings');
		$this->load->model('attendance');
		$data['base_url']=base_url();
		$data['meeting']=$this->meetings->selectById($mid);
		$data['people']=$this->attendance->selectById($mid);
		$data['content']=auto_typography($data['meeting'][0]->content);

		$this->load->view('header',$data);
		$this->load->view('view');
		$this->load->view('footer');
	}
}
