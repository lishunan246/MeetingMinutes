<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hello extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index($name='2',$name2='1')
	{
		echo("e");
		echo $name;
		echo $name2;
	}

	public function view($value='1')
	{
		$name="lsn";
		@$count=file_get_contents('./1.txt');
		$count=$count?$count:0;
		$count++;

		$re=fopen('./1.txt', 'w');
		fwrite($re,$count);

		$arr = array('a' =>'1' ,'b'=>'2' );
		$data= array('name' =>$name ,'count'=>$count,'arr'=>$arr );
		$this->load->view('testview',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */