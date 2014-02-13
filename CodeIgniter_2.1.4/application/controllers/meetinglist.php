<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Meetinglist extends CI_Controller {
	public function index($meeting_index=0)
	{
	
		$this->load->library('pagination');
		$this->load->helper('url');
		$this->load->model('meetings');
		$data['meetings']=$this->meetings->meetinglist($meeting_index);
		
		 
		$config['base_url'] = base_url().'index.php/meetinglist/index/';
		$config['total_rows'] = $this->meetings->count_all();
		$config['per_page'] = 20; 
		$config['full_tag_open'] = '<div id="pagination">
								<ul class="pagination">';
		$config['full_tag_close'] = '</ul>
							</div>';
		$config['first_link'] = '&laquo;';

		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = '&raquo;';

		$config['last_tag_open'] = '<li>';

		$config['last_tag_close'] = '</li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a>';

		$config['cur_tag_close'] = '</a></li>';
		$config['prev_link'] = '&lt;';

		$config['prev_tag_open'] = '<li>';

		$config['prev_tag_close'] = '</li>';

		$config['next_link'] = '&gt;';

		$config['next_tag_open'] = '<li>';

		$config['next_tag_close'] = '</li>';
		$this->pagination->initialize($config);

		$data['pagination']=$this->pagination->create_links();
		


		$this->load->view('header',$data);
		$this->load->view('list');
		$this->load->view('pagination');
		$this->load->view('footer');
	}
}
