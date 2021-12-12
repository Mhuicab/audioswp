<?php
defined('BASEPATH') or exit('No direct script access allowed');


class LoginController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	/*public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('login');
		$this->load->view('templates/footer');
	}*/

	public function index($page = 'login'){
		if(! file_exists(APPPATH.'views/'.$page.'.php'))
		{
			show_404();
		}

		$data['title'] = ucfirst($page);

		$this->load->view('templates/header', $data);
		$this->load->view($page, $data);
		$this->load->view('templates/footer', $data);
	}
}
