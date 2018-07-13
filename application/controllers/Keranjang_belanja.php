<?php
	if (!defined('BASEPATH')) exit('No direct script access allowed');
	class Keranjang_belanja extends CI_Controller{	
		function __construct(){
			session_start();
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('m_crud','crud');
			date_default_timezone_set('Asia/Jakarta');
		}

		function buat_pesanan($idnya)
		{
			require_once(APPPATH.'libraries/template.php'); 
			$main =  new template();

			if(!isset($_SESSION['tc_username']))
			{
				redirect('home/login'); // jika belum login, arahkan ke halaman login
			}
			elseif($_SESSION['tc_id_user'] != $idnya || !isset($_SESSION['cart_item']))
			{
				redirect('home'); // jika tidak sama id user dengan id user pada url arahkan ke halaman home, atau session cart_item tidak ada arahkan ke halaman home
			}

			$data['title'] = "Buat Pesanan";
			$main->display("keranjang_belanja/buat_pesanan",$data);
		}

		// function checkout()
		// {
		// 	// Insert di tabel transaksi
		// 	$nomer = rand(1000,9999);
		// 	$pembeli = $this->input->post("idPembeli");
		// 	$val = array(
		// 		"id_pembeli" => $pembeli,
		// 		"no_pesanan" => $nomer,
		// 		"tgl_transaksi" => date("Y-m-d"),
		// 		"waktu_transaksi" => date("H:i:s"),
		// 		"pembayaran" => 0,
		// 		"selesai" => 0,
		// 		"pengembalian" => 0

		// 	);
		// 	$response = $this->crud->allInsertSave($val,"transaksi");

		// 	// AMBIL ID TRANSAKSI TERAKHIR
		// 	$last_id = $this->crud->lastid('id_transaksi','transaksi');

		// 	// UNTUK ITEM YANG DICEK LIST PADA $_POST['cek']
		// 	$item = (array)json_decode($this->input->post('cek'), true);

		// 	foreach($item as $key => $res){

		// 		//form validasi stok > input
		// 		$cek_stok = $this->crud->getsingledatatablewhere("dijual","id_dijual",$res['idDijual']);
		// 		$hitung_stok = $cek_stok['jumlah'];
		// 		$hitung = $hitung_stok - $res['quantity'];
		// 		if($hitung >= 0 && $res['quantity'] != "" && $res['quantity'] != 0 && $res['quantity'] != NULL)
		// 		{
		// 			// insert di tabel transaksi_dijual
		// 			$val2 = array(
		// 				"id_transaksi" => $last_id[0]->max,
		// 				"id_dijual" => $res['idDijual'],
		// 				"quantity" => $res['quantity']
		// 			);
		// 			// $response = $this->crud->allInsertSave($val2,"transaksi_dijual");
		// 			$this->crud->allInsertSave($val2,"transaksi_dijual");
		// 		}
				
		// 	}

		// 	// UNTUK ITEM YANG DICEK LIST PADA $_POST['cek2']
		// 	$item2 = (array)json_decode($this->input->post('cek2'), true);

		// 	foreach($item2 as $key2 => $res2){

		// 		// insert di tabel t_detail_dijual
		// 		$val2 = array(
		// 			"id_transaksi" => $last_id[0]->max,
		// 			"id_penjual" => $res2['idPenjual'],
		// 			"tulis_pesan" => $res2['tulisPesan']
		// 		);
		// 		// $response = $this->crud->allInsertSave($val2,"t_detail_dijual");
		// 		$this->crud->allInsertSave($val2,"t_detail_dijual");
				
		// 	}

		// 	// HAPUS SESSION CART ITEM
		// 	unset($_SESSION["cart_item"]);

		// 	header('Access-Control-Allow-Origin: *'); 
		// 	echo json_encode($response); //respon untuk alert sukses ketika data masuk



		// }

		function checkout()
		{
			// Insert di tabel pembayaran
			$kd_byr = rand(1000000000,9999999999);
			$pembayaran = array(
				"kode_pembayaran" => $kd_byr,
			);
			$response = $this->crud->allInsertSave($pembayaran,"pembayaran");

			// AMBIL ID PEMBAYARAN TERAKHIR
			$last_idPembayaran = $this->crud->lastid('id_pembayaran','pembayaran');

			$pembeli = $this->input->post("idPembeli");

			// UNTUK ITEM YANG DICEK LIST PADA $_POST['cek2']
			$item2 = (array)json_decode($this->input->post('cek2'), true);

			// UNTUK ITEM YANG DICEK LIST PADA $_POST['cek']
			$item = (array)json_decode($this->input->post('cek'), true);

			foreach($item2 as $key2 => $res2){

				$nomer = rand(1000,9999);

				// Insert di tabel transaksi
				$val = array(
					"id_pembeli" => $pembeli,
					"id_pembayaran" => $last_idPembayaran[0]->max,
					"no_pesanan" => $nomer,
					"tulis_pesan" => $res2['tulisPesan'],
					"id_penjual" => $res2['idPenjual'],
					"tgl_transaksi" => date("Y-m-d"),
					"waktu_transaksi" => date("H:i"),
					"pembayaran" => 0,
					"selesai" => 0,
					"pengembalian" => 0

				);
				$this->crud->allInsertSave($val,"transaksi");

				foreach($item as $key => $res){

					// AMBIL ID TRANSAKSI TERAKHIR
					$last_id = $this->crud->lastid('id_transaksi','transaksi');

					$cek_stok = $this->crud->getsingledatatablewhere("dijual","id_dijual",$res['idDijual']);
					$hitung_stok = $cek_stok['jumlah'];
					$hitung = $hitung_stok - $res['quantity'];
					if($hitung >= 0 && $res['quantity'] != "" && $res['quantity'] != 0 && $res['quantity'] != NULL) //form validasi stok > input
					{						
						if($res2['idPenjual'] == $cek_stok['id_user']) // jika id penjual sesuai
						{
							// insert di tabel transaksi_dijual
							$val2 = array(
								"id_transaksi" => $last_id[0]->max,
								"id_dijual" => $res['idDijual'],
								"quantity" => $res['quantity'],
								"harga_beli" => $res['hrg_beli']
							);
							// $response = $this->crud->allInsertSave($val2,"transaksi_dijual");
							$this->crud->allInsertSave($val2,"transaksi_dijual");
						}
					}
				
				}
				
			}

			// HAPUS SESSION CART ITEM
			unset($_SESSION["cart_item"]);

			header('Access-Control-Allow-Origin: *'); 
			echo json_encode($response); //respon untuk alert sukses ketika data masuk


		}

		// function transaksi($last_idTransaksi, $session_id_user){
		// 	require_once(APPPATH.'libraries/template.php'); 
		// 	$main =  new template();

		// 	$cek = $this->crud->cek_transaksi_iduser($session_id_user)->row_array();

		// 	if(!isset($_SESSION['tc_username']))
		// 	{
		// 		redirect('home/login'); // jika belum login, arahkan ke halaman login
		// 	}
		// 	elseif($session_id_user != $_SESSION['tc_id_user'] || $cek['id_transaksi'] != $last_idTransaksi)
		// 	{
		// 		redirect('home');
		// 	}

		// 	$data['hsl'] = $this->crud->cari_notransaksi($_SESSION['tc_id_user'])->row_array();

		// 	$data['title'] = "Transaksi FarmerGamer";
		// 	$main->display("keranjang_belanja/transaksi",$data);
		// }

		function transaksi($last_idPembayaran, $session_id_user){
			require_once(APPPATH.'libraries/template.php'); 
			$main =  new template();

			$cek = $this->crud->cek_PembayaranJoinTransaksi($session_id_user)->row_array();

			if(!isset($_SESSION['tc_username']))
			{
				redirect('home/login'); // jika belum login, arahkan ke halaman login
			}
			elseif($session_id_user != $_SESSION['tc_id_user'] || $cek['id_pembayaran'] != $last_idPembayaran)
			{
				redirect('home');
			}

			$data['hsl'] = $this->crud->cek_PembayaranJoinTransaksi($_SESSION['tc_id_user'])->row_array();

			$data['title'] = "Transaksi FarmerGamer";
			$main->display("keranjang_belanja/transaksi",$data);
		}

		function proses_penilaian()
		{

		}





	}
?>