<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Viewmeeting extends CI_Controller {

	
	public function index($mid=1)
	{
		$this->load->model('meetings');
		$this->load->model('attendance');
		$data['meeting']=$this->meetings->selectById($mid);
		$data['people']=$this->attendance->selectById($mid);

		$this->load->view('header',$data);
		$this->load->view('view');
		$this->load->view('footer');
	}
}
