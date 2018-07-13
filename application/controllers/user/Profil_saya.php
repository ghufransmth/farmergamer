<?php
	if (!defined('BASEPATH')) exit('No direct script access allowed');
	class Profil_saya extends CI_Controller{	
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

			$data['title'] = "Profil Saya";

			$data['user'] = $this->crud->getsingledatatablewhere("users","id_user",$_SESSION['tc_id_user']);

			// cek jika ada isi info_game
			if($data['user']['info_game'] != "")
			{
				// // ubah bentuk json jadi array
				// $arr_infogame = (array)json_decode($data['user']['info_game'], true);
				// foreach($arr_infogame as $kunci => $nilai)
				// {
				// 	if($nilai['id_ingame'] != "" && $nilai['nama_game'] != "")
				// 	{
				// 		$data['game_char'] = json_decode($data['user']['info_game'],true);
				// 		$data['kosong'] = "";
				// 	}
				// 	else
				// 	{
				// 		$data['game_char'] = json_decode($data['user']['info_game'],true);
				// 		$data['kosong'] = "<tr><td colspan='3'><div class='alert alert-danger text-center'>--Tidak Tersedia--</div></td></tr>";
				// 		break; // stop jika id_ingame dan nama_game 0
				// 	}
				// }

				$data['game_char'] = json_decode($data['user']['info_game'],true);
				$data['kosong'] = "";
			}
			else
			{
				$data['game_char'] = array();
				$data['kosong'] = "<tr><td colspan='3'><div class='alert alert-danger text-center'>--Tidak Tersedia--</div></td></tr>";
			}
			
			$main->display("user/profil_saya/index",$data);
		}

		function ubah_profil()
		{
			require_once(APPPATH.'libraries/template.php'); 
			$main =  new template();

			if(!isset($_SESSION['tc_id_user']))
			{
				redirect('home/login'); // jika belum login, arahkan ke halaman login
			}

			$data['title'] = "Ubah Profil";
			$data['list_game'] = $this->crud->getalldatatable("list_game");

			$data['user'] = $this->crud->getsingledatatablewhere("users","id_user",$_SESSION['tc_id_user']);
			//cek jika info_game kosong
			if($data['user']['info_game'] != "")
			{
				$data['game_char'] = json_decode($data['user']['info_game'],true);
			}
			else
			{
				$data['game_char'] = array();
			}	

			$main->display("user/profil_saya/ubah_profil",$data);
		}

		function proses_ubah_profil()
		{
			$id_usr = $this->input->post("idusr");

			$tgl = $this->input->post("tanggal");
			$bln = $this->input->post("bulan");
			$thn = $this->input->post("tahun");
			if($tgl != null && $bln != null && $thn != null)
			{
				$tgl_lhr = $thn."-".$bln."-".$tgl;
			}
			else
			{
				$tgl_lhr = null;
			}

			//cek jika info game tidak diisi / id game kosong / nama game kosong
			$cek_infogame = (array)json_decode($this->input->post("ingame"),true);
			foreach($cek_infogame AS $key_infogm => $val_infogm)
			{
				if($cek_infogame == "[]")
				{
					// $infogame = "";
					$infogame = null;
					break;
				}
				elseif($val_infogm['id_ingame'] == "" || $val_infogm['nama_game'] == "")
				{
					// $infogame = "";
					$infogame = null;
					break;
				}
				elseif($val_infogm['id_ingame'] == "" && $val_infogm['nama_game'] == "")
				{
					// $infogame = "";
					$infogame = null;
					break;
				}
				else
				{
					$infogame = $this->input->post("ingame");
					break;
				}
			}

			$gf = $this->input->post("game_favorit");
			if($gf == null) // jika request dari ajax nya null
			{
				// $game_fv = "";
				$game_fv = null;
			}
			else
			{
				$game_fv = json_encode($this->input->post("game_favorit"));
			}

			// if($this->input->post("ingame") != "")
			// // if(isset($_POST['ingame']))
			// {
			// 	$data = array(
			// 		"nomor_telepon" => $this->input->post("nomor_telepon"),
			// 		"alamat" => $this->input->post("alamat"),
			// 		// "tgl_lahir" => $thn."-".$bln."-".$tgl,
			// 		"tgl_lahir" => $tgl_lhr,
			// 		"negara" => $this->input->post("negara"),
			// 		"deskripsi_toko" => $this->input->post("deskripsi_toko"),
			// 		// "game_favorit" => json_encode($this->input->post('game_favorit')),
			// 		"game_favorit" => $game_fv,
			// 		"info_game" => $infogame
			// 	);
			// }
			// else
			// {
			// 	$data = array(
			// 		"nomor_telepon" => $this->input->post("nomor_telepon"),
			// 		"alamat" => $this->input->post("alamat"),
			// 		"tgl_lahir" => $tgl_lhr,
			// 		"negara" => $this->input->post("negara"),
			// 		"deskripsi_toko" => $this->input->post("deskripsi_toko"),
			// 		"game_favorit" => $game_fv
			// 	);
			// }

			$data = array(
				"nomor_telepon" => $this->input->post("nomor_telepon"),
				"alamat" => $this->input->post("alamat"),
				// "tgl_lahir" => $thn."-".$bln."-".$tgl,
				"tgl_lahir" => $tgl_lhr,
				"negara" => $this->input->post("negara"),
				"deskripsi_toko" => $this->input->post("deskripsi_toko"),
				// "game_favorit" => json_encode($this->input->post('game_favorit')),
				"game_favorit" => $game_fv,
				"info_game" => $infogame
			);

			$response = $this->crud->allEditSave($data,$id_usr,"users","id_user");
			header('Access-Control-Allow-Origin: *');
			echo json_encode($response);
		}


		function ubah_gambar()
		{
			require_once(APPPATH.'libraries/template.php'); 
			$main =  new template();

			if(!isset($_SESSION['tc_id_user']))
			{
				redirect('home/login'); // jika belum login, arahkan ke halaman login
			}

			$data['title'] = "Ubah Gambar";
			$data['user'] = $this->crud->getsingledatatablewhere("users","id_user",$_SESSION['tc_id_user']);

			$main->display("user/profil_saya/ubah_gambar",$data);
		}

	}
?>