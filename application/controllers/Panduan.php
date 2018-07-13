<?php
	if (!defined('BASEPATH')) exit('No direct script access allowed');
	class Panduan extends CI_Controller{	
		function __construct(){
			session_start();
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('m_crud','crud');
			// if(!isset($_SESSION['tc_username'])){
			// 	redirect('c_login');
			// }
		}

		function panduan_transaksi_aman()
		{
			require_once(APPPATH.'libraries/template.php'); 
			$main =  new template();
			$data['title'] = "Panduan Transaksi Aman";
			$main->display("panduan/panduan_transaksi_aman",$data);
		}

		function daftar_game()
		{
			require_once(APPPATH.'libraries/template.php'); 
			$main =  new template();
			$data['title'] = "Daftar Game";
			$main->display("panduan/daftar_game",$data);
		}
		

	}
?>