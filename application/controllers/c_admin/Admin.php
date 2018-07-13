<?php
	if (!defined('BASEPATH')) exit('No direct script access allowed');
	class Admin extends CI_Controller{	
		function __construct(){
			session_start();
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('m_crud','crud');
			if($_SESSION['tc_lv'] != 1 ){
				redirect('c_main');
			}
		}

		function adminsite()
		{
			require_once(APPPATH.'libraries/template.php');
			$main = new template();
			$data['title'] = "Admin Site";
			$main->display_admin("admin/jual_produk/index",$data);
		}

		function logout(){
			session_destroy();
			redirect('c_main/admin_fg');
		}

	}
?>