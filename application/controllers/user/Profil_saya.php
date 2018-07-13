<?php
	if (!defined('BASEPATH')) exit('No direct script access allowed');
	class Profil_saya extends CI_Controller{	
		function __construct(){
			session_start();
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('m_crud','crud');
			$this->load->library('upload');
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

		public function proses_ubah_profil()
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

		public function proses_ubah_gambar()
		{
			$id_usernya = $this->input->post("userid");
			$nama_user = $this->input->post("namauser");
			
			$gambar = "";
            sleep(0.5); // pause / delay 0.5 detik saat eksekusi
		  	if(isset($_FILES["image"]["name"]))
		  	{
		   		// //setting konfigurasi upload image
	           	$config['upload_path'] = "./assets/custom/images/image_user/";
	            $config['allowed_types'] = 'gif|jpg|png';
	            $config['max_size'] = '1000'; //1000kb
	            $config['max_width']  = '2000';
	            $config['max_height']  = '1024';

	            //$config['encrypt_name'] = TRUE; // enkripsi nama foto
	            $new_name = $id_usernya."_".$nama_user; 
				$config['file_name'] = $new_name; // nama baru
				$config['overwrite'] = TRUE; // jika true, file dengan nama yang sama akan di ganti dengan baru (tumpuk)

	            $this->upload->initialize($config);

	            if($_FILES["image"]["size"][0] <= 100000) // cek file size nya jika lebih kecil sama dengan 100kb maka sukses diupload
	            {

			   		for($count = 0; $count<count($_FILES["image"]["name"]); $count++)
			   		{
				    	$_FILES["files"]["name"] = $_FILES["image"]["name"][$count];
				    	$_FILES["files"]["type"] = $_FILES["image"]["type"][$count];
				    	$_FILES["files"]["tmp_name"] = $_FILES["image"]["tmp_name"][$count];
				    	$_FILES["files"]["error"] = $_FILES["image"]["error"][$count];
				    	$_FILES["files"]["size"] = $_FILES["image"]["size"][$count];
				    	if($this->upload->do_upload("files"))
				    	{
				    		// lakukan upload gambar baru
					     	$hslnya = $this->upload->data();
					     	// $gambar[$count] = $hslnya["file_name"];

					     	// $arr_satu[$count] = $hslnya["file_name"]; 
					     	$gambar = $hslnya["file_name"];

				    	}
				    	
			   		}
		   			$response['code'] = 0; // kirim ajax respon sukses
		   			$response['message'] = "Sukses Upload Foto!";
		   		}
		   		else
		   		{
		   			$cari_gmbr = $this->crud->getsingledatatablewhere("users", "id_user", $id_usernya);
			  		$gambar = $cari_gmbr['image'];

			  		$response['code'] = 1; // kirim ajax respon gagal
			  		$response['message'] = "Ukuran File Maximal 100kb!";
		   		}

		  	}
		  	else
		  	{
		  		$cari_gmbr = $this->crud->getsingledatatablewhere("users", "id_user", $id_usernya);
		  		$gambar = $cari_gmbr['image'];

		  		$response['code'] = 1; // kirim ajax respon gagal
		  		$response['message'] = "Foto Belum Diubah";
		  	}

			// var_dump($gambar);
			// var_dump($_FILES["image"]["size"]);

		  	$data = array(
				"image" => $gambar
			);

			$this->crud->allEditSave($data, $id_usernya, 'users', 'id_user');

			header('Access-Control-Allow-Origin: *');
			echo json_encode($response);

		}



	}
?>