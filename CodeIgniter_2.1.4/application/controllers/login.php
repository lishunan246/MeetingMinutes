<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {	
	public function index()
	{
		$this->load->view('up');
	}

	public function checklogin()
	{
		$this->load->model('testm');
		var_dump($_POST['email']);
		echo "/n";
		$this->testm->userselect(1);

	}
}
