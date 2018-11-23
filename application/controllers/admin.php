<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('header.php');
		$this->load->view('main.php');
		$this->load->view('footer.php');
	}

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */