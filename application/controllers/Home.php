<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
        parent::__construct();
        $this->load->model('Home_model');
	}
	
	public function index()
	{
		$this->load->view('home');
	}

	public function service()
	{
		$this->load->view('service');
	}

	public function workflow()
	{
		$this->load->view('workflow');
	}

	public function contact()
	{
		$this->load->view('contact');
	}

	public function faq()
	{
		$this->load->view('faq');
	}

	public function detail($id)
	{
		$table = 'serive-detail';
        $hasil =$this->Home_model->get_detail_service($table,$id);
		$data['data_ke_view']= $hasil;	
		$this->load->view('service-detail',$data);
	}

	public function dashboard(){
		$this->load->view('admin/dashboard');
	}
}
