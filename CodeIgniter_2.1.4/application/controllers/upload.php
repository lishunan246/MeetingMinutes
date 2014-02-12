<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller 
{
	public function index()
	{
		$this->load->view('up');
	}

	public function up($value='')
	{

		var_dump($_POST);
		if(!isset($_POST['sub']))
		{	
			echo "1";
			var_dump($_FILES['upfile']);
		}
		else
		{
			echo "2";
			var_dump($_FILES['upfile']);
		}
	}
}
