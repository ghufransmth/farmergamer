<?php
	if (!defined('BASEPATH')) exit('No direct script access allowed');
	class C_main extends CI_Controller{	
		function __construct(){
			session_start();
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('m_crud','crud');
			// if(!isset($_SESSION['tc_username'])){
			// 	redirect('c_login');
			// }
		}
		// function index($dir = 'system', $pages = 'dashboard', $data = array()){
		// 	if (!isset($data['title'])){
		// 		$data['title'] = 'Dashboard';
		// 	}
		// 	$this->load->view('v_header',$data);
		// 	if($this->input->is_ajax_request()){
		// 		$this->load->view($dir.'/'.$pages);
		// 	}
		// 	else{
		// 		$this->load->view($dir.'/'.$pages, $data);
		// 	}
		// 	$this->load->view('v_footer');
		// }

		// function index(){
		// 	$data['title'] = "AABBCCDD";
		// 	$this->template->display("dashboard",$data);
		// }

		function index(){
			require_once(APPPATH.'libraries/template.php'); 
			$main =  new template();
			$data['title'] = "Portal Jual Beli Dalam Game";
			$main->display("dashboard2",$data);
		}

		function admin_fg()
		{
			$data['title'] = "Admin Site";
			$this->load->view("admin/index",$data);
		}

		function logout(){
			session_destroy();
			redirect('c_login');
		}

	}
?>