<?php
	if (!defined('BASEPATH')) exit('No direct script access allowed');
	class Rating_saya extends CI_Controller{	
		function __construct(){
			session_start();
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('m_crud','crud');
			date_default_timezone_set('Asia/Jakarta');
		}

		function index()
		{
			require_once(APPPATH.'libraries/template.php'); 
			$main =  new template();

			if(!isset($_SESSION['tc_id_user']))
			{
				redirect('home/login'); // jika belum login, arahkan ke halaman login
			}

			$data['title'] = "Rating Saya";
			$main->display("user/rating_saya/index",$data);
		}

		function tampil_rating()
		{
			$data['rtng'] = $this->crud->getsingledatatablewhere("users","id_user",$_SESSION['tc_id_user']); 
			$cek = $this->crud->getRatingItemBy($_SESSION['tc_id_user']);
			if($cek->num_rows() > 0)
			{
				$data['item'] = $cek->result();
				$data['kosong'] = "";
			}
			else
			{
				$data['item'] = $cek->result();
				$data['kosong'] = "<div class='alert alert-info'>Belum Ada Rating!</div>";
			}

			$count1 = $this->crud->getRatingItemBy($_SESSION['tc_id_user'])->result();
			$data['count2'] = count($count1);
			$this->load->view("user/rating_saya/tampil_rating",$data);
		}

		

	}
?>