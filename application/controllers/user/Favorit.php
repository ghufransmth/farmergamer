<?php
	if (!defined('BASEPATH')) exit('No direct script access allowed');
	class Favorit extends CI_Controller{	
		function __construct(){
			session_start();
			parent::__construct();
			// $this->load->helper('url');
			$this->load->helper(array('url','text'));
			$this->load->model('m_crud','crud');
			// if(!isset($_SESSION['tc_username'])){
			// 	redirect('c_login');
			// }
		}

		function index($satu = null, $dua= null)
		{
			require_once(APPPATH.'libraries/template.php'); 
			$main =  new template();

			if(!isset($_SESSION['tc_username']))
			{
				redirect('c_main');
			}
			// else
			// {
			// 	// $cek = $this->crud->getsingledatatablewhere('users','id_user',$satu);
			// 	// $nm = url_title($cek['username']);
			// 	if($this->uri->segment(3) != null || $this->uri->segment(4) != null)
			// 	{
			// 		if($this->uri->segment(3) == $_SESSION['tc_id_user'] && $this->uri->segment(4) == $_SESSION['tc_username'])
			// 		{
			// 			$data['title'] = "Favorit";
			// 			// $data['hasil'] = $this->crud->cekFavJoin($satu)->result();
			// 			$main->display("favorit/index",$data);
			// 		}
			// 		else
			// 		{
			// 			$data['heading'] = "404 Page Not Found";
			// 			$data['message'] = "The page you requested was not found.";
			// 			$this->load->view("errors/html/error_404",$data);
			// 		}
			// 	}
			// 	else
			// 	{
			// 		$data['heading'] = "404 Page Not Found";
			// 		$data['message'] = "The page you requested was not found.";
			// 		$this->load->view("errors/html/error_404",$data);
			// 	}

			// }

			$data['title'] = "Favorit";
			$main->display("user/favorit/index",$data);

		}

		// function tampil($satu)
		// {
		// 	$data['hasil'] = $this->crud->cekFavJoin($satu)->result();
		// 	$this->load->view("favorit/tampil",$data);
		// }

		function tampil()
		{
			$data['hasil'] = $this->crud->cekFavJoin($_SESSION['tc_id_user'])->result();
			$this->load->view("user/favorit/tampil",$data);
		}

		public function hapus_fav()
		{
			$idnya = $this->input->post('id');
			$id_jual = $this->input->post('id_jual');

			// hapus data di tabel favori_dijual
			$this->crud->deleteAll($idnya,'favorit_dijual','id_favorit_dijual');

			// UPDATE FAVORIT DI TABEL DIJUAL
			$cari_dj = $this->crud->cariDetailDijualBy($id_jual);
			$favorit = $cari_dj['favorit'] - 1;
			$data2 = array(
				'favorit' => $favorit
			);
			$this->crud->allEditSave($data2,$id_jual,'dijual','id_dijual');

		}


	}
?>