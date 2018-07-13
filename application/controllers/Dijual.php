<?php
	if (!defined('BASEPATH')) exit('No direct script access allowed');
	class Dijual extends CI_Controller{	
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

		function produk($satu = null, $dua = null, $tiga = null)
		{
			require_once(APPPATH.'libraries/template.php'); 
			$main =  new template();

			// if($satu == null){
			if($this->uri->segment(3) == null)
			{
				$data['title'] = "Dijual";
				$data['hitung'] = $this->crud->getAllWithJoinWhere("id_dijual","produk","jenis_dijual","dijual","list_game","id_game");
				$main->display("dijual/index_produk",$data);
			}

			// elseif($satu == "detail")
			elseif($this->uri->segment(3) == "detail")
			{
				$cek = $this->crud->getsingledatatablewhere('dijual','id_dijual',$dua);
				$nm = url_title($cek['judul']); // untuk ubah format spasi menjadi dash ("-"), dari helper url CI
				if($this->uri->segment(4) == $cek['id_dijual'] && $this->uri->segment(5) == $nm)
				{
					$data['title'] = "Detail Dijual";
					$data['detail_item'] = $this->crud->cariDetailDijualBy($dua);
					$cek_detail = $this->crud->cariDetailDijualBy($dua);
					$data['ktgr'] = json_decode($cek_detail['kategori'], true);
					$data['gmbr'] = json_decode($cek_detail['foto'], true);

					$main->display("dijual/detail_produk",$data);
				}
				else
				{
					$data['heading'] = "404 Page Not Found";
					$data['message'] = "The page you requested was not found.";
					$this->load->view("errors/html/error_404",$data);
				}
			}

			else
			{
				$data['heading'] = "404 Page Not Found";
				$data['message'] = "The page you requested was not found.";
				$this->load->view("errors/html/error_404",$data);
			}
		}

		function tampil_produk()
		{
			$data['hasil'] = $this->crud->getAllWithJoinWhere("id_dijual","produk","jenis_dijual","dijual","list_game","id_game");
			$this->load->view("dijual/tampil_produk",$data);
		}

		function tampil_produk_onegrid()
		{
			$data['hasil'] = $this->crud->getAllWithJoinWhere("id_dijual","produk","jenis_dijual","dijual","list_game","id_game");
			$this->load->view("dijual/tampil_produk_onegrid",$data);
		}

		function tambah_suka()
		{
			$id_jual = $this->input->post('id');
			$id_user = $this->input->post('id_user');

			switch($this->input->post('action')){
				case "like":	

					$cekFavorit = $this->crud->cekFav($id_jual,$id_user);
					if($cekFavorit->num_rows() == 0)
					{
						$data = array(
							'id_dijual' => $id_jual,
							'id_user' => $id_user
						);
						$this->crud->allInsertSave($data,"favorit_dijual");

						// UPDATE FAVORIT DI TABEL DIJUAL
						$cari_dj = $this->crud->cariDetailDijualBy($id_jual);
						$favorit = $cari_dj['favorit'] + 1;
						$data2 = array(
							'favorit' => $favorit
						);
						$this->crud->allEditSave($data2,$id_jual,'dijual','id_dijual');

						$arr = array(
							"nomor" => $favorit
						);
						
					}
				break;		
				case "unlike":

					$cekFavorit = $this->crud->cekFav($id_jual,$id_user);
					if($cekFavorit->num_rows() > 0)
					{
						$hsl = $cekFavorit->row_array();
						$id_fv = $hsl['id_favorit_dijual'];
						$this->crud->deleteAll($id_fv,'favorit_dijual','id_favorit_dijual');

						// UPDATE FAVORIT DI TABEL DIJUAL
						$cari_dj = $this->crud->cariDetailDijualBy($id_jual);
						$favorit = $cari_dj['favorit'] - 1;
						$data2 = array(
							'favorit' => $favorit
						);
						$this->crud->allEditSave($data2,$id_jual,'dijual','id_dijual');

						$arr = array(
							"nomor" => $favorit
						);
						
					}

				break;		
			}

			header('Access-Control-Allow-Origin: *');
			echo json_encode($arr);

		}


		function lihat_penilaian_produk($id_dijual)
		{
			require_once(APPPATH.'libraries/template.php'); 
			$main =  new template();

			$cekPenilaianProduk = $this->crud->lihatPenilaianProduk($id_dijual);

			if($cekPenilaianProduk->num_rows() > 0)
			{
				$data['kosong'] = "";
				$data['hsl'] = $cekPenilaianProduk->result();
			}
			else
			{
				// $data['kosong'] = "<div class='alert alert-info text-center'>Belum Ada Penilaian!</div>";
				$data['kosong'] = "<div class='text-center' style='border:1px solid #d9d9d9;background:#fff;padding:35px;border-radius:3px;'>Belum Ada Penilaian!</div>";
				$data['hsl'] = $cekPenilaianProduk->result();
			}
			$data['title'] = "Penilaian Produk Dijual";
			$data['judul_item'] = $this->crud->getsingledatatablewhere("dijual","id_dijual",$id_dijual);

			$main->display("dijual/lihat_penilaian_produk",$data);
		}


	}
?>