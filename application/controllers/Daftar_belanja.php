<?php
	if (!defined('BASEPATH')) exit('No direct script access allowed');
	class Daftar_belanja extends CI_Controller{	
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

			// $data['hsl'] = $this->crud->getalldatatablewhere_orderdesc("transaksi", "id_pembeli", $_SESSION['tc_id_user'],"id_transaksi");

			// $cek = $this->crud->cek_daftarBelanja("transaksi", "id_pembeli", $_SESSION['tc_id_user'],"id_transaksi");

			$data['title'] = "Daftar Belanja";
			$main->display("daftar_belanja/index",$data);
		}

		function bayar($kd_pembayaran)
		{
			require_once(APPPATH.'libraries/template.php'); 
			$main =  new template();

			$cek = $this->crud->cek_infoPembayaran($_SESSION['tc_id_user'],$kd_pembayaran);

			if(!isset($_SESSION['tc_username']))
			{
				redirect('home/login'); // jika belum login, arahkan ke halaman login
			}
			elseif($cek->num_rows() < 1)
			{
				redirect('daftar_belanja');
			}

			$data['hsl'] = $this->crud->cek_infoPembayaran($_SESSION['tc_id_user'],$kd_pembayaran)->row_array();

			$data['title'] = "Info Pembayaran Farmergamer";
			$main->display("daftar_belanja/bayar",$data);
		}

		function tampil_belumBayar()
		{
			$cek = $this->crud->cek_daftarBelanjaBelumBayar($_SESSION['tc_id_user']);
			if($cek->num_rows() > 0)
			{
				$data['hsl'] = $cek->result();
				$data['no_data'] = "";
			}
			else
			{
				$data['hsl'] = $cek->result();
				$data['no_data'] = "<div class='col-md-12' style='margin-top:25px;'><div class='alert alert-danger text-center'>Belum Ada Pesanan!</div></div>";
			}
			$this->load->view("daftar_belanja/tampil_belum_bayar",$data);
		}

		function tampil_pengiriman()
		{
			$cek = $this->crud->cek_daftarBelanjaPengiriman($_SESSION['tc_id_user']);
			if($cek->num_rows() > 0)
			{
				$data['hsl'] = $cek->result();
				$data['no_data'] = "";
			}
			else
			{
				$data['hsl'] = $cek->result();
				$data['no_data'] = "<div class='col-md-12' style='margin-top:25px;'><div class='alert alert-danger text-center'>Belum Ada Pesanan!</div></div>";
			}
			$this->load->view("daftar_belanja/tampil_belum_bayar",$data);
		}

		function tampil_selesai()
		{
			$cek = $this->crud->cek_daftarBelanjaSelesai($_SESSION['tc_id_user']);
			if($cek->num_rows() > 0)
			{
				$data['hsl'] = $cek->result();
				$data['no_data'] = "";
			}
			else
			{
				$data['hsl'] = $cek->result();
				$data['no_data'] = "<div class='col-md-12' style='margin-top:25px;'><div class='alert alert-danger text-center'>Belum Ada Pesanan!</div></div>";
			}
			$this->load->view("daftar_belanja/tampil_selesai",$data);
		}

		function tampil_pengembalian()
		{
			$cek = $this->crud->cek_daftarBelanjaPengembalian($_SESSION['tc_id_user']);
			if($cek->num_rows() > 0)
			{
				$data['hsl'] = $cek->result();
				$data['no_data'] = "";
			}
			else
			{
				$data['hsl'] = $cek->result();
				$data['no_data'] = "<div class='col-md-12' style='margin-top:25px;'><div class='alert alert-danger text-center'>Belum Ada Pesanan!</div></div>";
			}
			$this->load->view("daftar_belanja/tampil_belum_bayar",$data);
		}

		// UNTUK JUMLAH YANG DITAMPILKAN PADA FITUR BELUM BAYAR
		function count_belumBayar()
		{
			$cek = $this->crud->cek_daftarBelanjaBelumBayar($_SESSION['tc_id_user'])->result();
			$hasil = count($cek);
			echo "(".$hasil.")";
		}

		// UNTUK JUMLAH YANG DITAMPILKAN PADA FITUR PENGIRIMAN
		function count_pengiriman()
		{
			$cek = $this->crud->cek_daftarBelanjaPengiriman($_SESSION['tc_id_user'])->result();
			$hasil = count($cek);
			echo "(".$hasil.")";
		}

		// UNTUK JUMLAH YANG DITAMPILKAN PADA FITUR SELESAI
		function count_selesai()
		{
			$cek = $this->crud->cek_daftarBelanjaSelesai($_SESSION['tc_id_user'])->result();
			$hasil = count($cek);
			echo "(".$hasil.")";
		}

		// UNTUK JUMLAH YANG DITAMPILKAN PADA FITUR PENGEMBALIAN
		function count_pengembalian()
		{
			$cek = $this->crud->cek_daftarBelanjaPengembalian($_SESSION['tc_id_user'])->result();
			$hasil = count($cek);
			echo "(".$hasil.")";
		}

		public function modal_konfirmasiPembayaran()
		{
			$idPembayaran = $this->input->post('idPembayaran');

			$arr_konten = '<div class="form-group text-center" style="border-bottom: 1px solid #e9e9e9;border-top: 1px solid #e9e9e9;padding:5px;"><div style="font-weight:bold;">Kode Pembayaran</div><div style="font-weight:bold;color:green;font-size:20px;letter-spacing:1px;">'.$idPembayaran.'</div></div><div class="form-group"><label class="control-label">Transfer kepada:</label><select class="form-control"><option>aaaa</option></select></div><div class="form-group"><label class="control-label">Transfer dari:</label><input class="form-control" placeholder="Bank" type="text"><input class="form-control" placeholder="No.Rek Anda" type="text"><input class="form-control" placeholder="A/n Anda" type="text"></div><div class="form-group"><label class="control-label">Bukti Transfer:</label><input class="form-control" type="file"></div>';

			$arr = array(
				"konten" => $arr_konten
			);

			echo json_encode($arr);
		}

		public function modal_penilaian()
		{
			$idTransaksi = $this->input->post('idTransaksi');
			$idPenjual = $this->input->post("idPenjual");

			$getTransaksi = $this->crud->getallitemtransaksi($idTransaksi,$idPenjual);
			if($getTransaksi->num_rows() > 0)
			{
				$hsl = $getTransaksi->result();
				$url_foto = base_url()."assets/custom/images/image_dijual";
				$nmr = 1;
				foreach($hsl AS $hasil)
				{
					// $arr = array(
					// 	"description" => $hasil->judul,
					// 	"version" => $hasil->id_penjual
					// );

					// $abc[] = $hasil->judul;

					$ambil_gmbr = json_decode($hasil->foto,true);
		            $gmbr = $ambil_gmbr[0];

					// $arr_konten[] = "<div class='col-md-3'><img src='".$url_foto."/".$gmbr."' alt='Gambar Pesanan Selesai ".$nmr."'></div>";
					// $arr_konten[] = "<div class='form-group col-md-9'><div class='pull-left'>".$hasil->judul."</div><div class='pull-right'>".$hasil->quantity." x Rp".number_format($hasil->harga_beli,0,',','.')."</div></div>";

					// $arr_konten[] = "<div class='col-lg-3 col-md-3 col-sm-3 col-xs-3' style='border-top:3px solid #E9E9E9;padding:15px;'><img src='".$url_foto."/".$gmbr."' alt='Gambar Pesanan Selesai ".$nmr."' style='height:80px;min-height:80px;min-width:65px;'></div>";
					$arr_konten[] = "<div class='col-lg-3 col-md-3 col-sm-3 col-xs-3' style='border-top:3px solid #E9E9E9;padding:15px;'><img src='".$url_foto."/".$gmbr."' alt='Gambar Pesanan Selesai ".$nmr."' style='width:100%;height:auto;max-width: 400px;max-height: 100px;min-width: 50px;min-height: 50px;'></div>";
					$arr_konten[] = "<div class='form-group col-lg-9 col-md-9 col-sm-9 col-xs-9' style='border-top:3px solid #E9E9E9;padding:15px;'><div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>".$hasil->judul."</div><div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'><div class='pull-right'>x ".$hasil->quantity."</div></div><div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'><div class='pull-right'>Rp".number_format($hasil->harga_beli,0,',','.')."</div></div></div>";
					$arr_konten[] = "<div class='form-group col-lg-12 text-center' style='letter-spacing:1em;padding:15px;border-top:1px solid #E9E9E9;border-bottom:1px solid #E9E9E9;margin-top:5px;'>".
						"<i class='fas fa-star gradient-icon' style='font-size:17px;cursor:pointer;' id='rating_1".$nmr."' onclick='toggle_rating(\"1\",".$nmr.");'></i>".
						"<i class='fas fa-star gradient-icon' style='font-size:17px;cursor:pointer;' id='rating_2".$nmr."' onclick='toggle_rating(\"2\",".$nmr.");'></i>".
						"<i class='fas fa-star gradient-icon' style='font-size:17px;cursor:pointer;' id='rating_3".$nmr."' onclick='toggle_rating(\"3\",".$nmr.");'></i>".
						"<i class='fas fa-star gradient-icon' style='font-size:17px;cursor:pointer;' id='rating_4".$nmr."' onclick='toggle_rating(\"4\",".$nmr.");'></i>".
						"<i class='fas fa-star gradient-icon' style='font-size:17px;cursor:pointer;' id='rating_5".$nmr."' onclick='toggle_rating(\"5\",".$nmr.");'></i>".
						"<div style='letter-spacing:0px;font-size:12px;color:#C1C1C1;' id='ket_rating".$nmr."'>Belum Nilai</div><input type='hidden' id='value_rating".$nmr."'></div>";
					$arr_konten[] = "<div class='form-group col-md-12'><button class='btn-sm btn-default' onclick='testimoni_button(\"pengiriman\",".$nmr.");'>Kecepatan Pengiriman Sangat Baik.</button><button class='btn-sm btn-default' onclick='testimoni_button(\"harga\",".$nmr.");'>Harga Item Sangat Baik.</button><button class='btn-sm btn-default' onclick='testimoni_button(\"respon\",".$nmr.");'>Respon Penjual Sangat Baik.</button></div>";
					$arr_konten[] = "<div class='form-group col-md-12'><textarea class='form-control' placeholder='Tinggalkan Testimoni Anda...' id='testimoni".$nmr."'></textarea><input type='hidden' id='id_jual".$nmr."' value='".$hasil->id_dijual."'><input type='hidden' id='id_pembeli".$nmr."' value='".$_SESSION['tc_id_user']."'><input type='hidden' id='id_penjual".$nmr."' value='".$hasil->id_user."'><input type='hidden' id='id_trans".$nmr."' value='".$hasil->id_transaksi."'></div>";

					$nmr++;

				}
				// var_dump($abc);
				// var_dump($arr_konten);
			}

			$arr = array(
				"konten" => $arr_konten
			);

			// $arr = array(
			// 	"judul" => $idTransaksi,
			// 	"harga" => $idPenjual
			// );

			echo json_encode($arr);
		}

		public function modal_lihatPenilaian()
		{
			$idTransaksi = $this->input->post('idTransaksi');
			$idPenjual = $this->input->post("idPenjual");

			$getTransaksi = $this->crud->getallitemtransaksi($idTransaksi,$idPenjual);
			if($getTransaksi->num_rows() > 0)
			{
				$hsl = $getTransaksi->result();
				$url_foto = base_url()."assets/custom/images/image_dijual";
				$nmr = 1;
				foreach($hsl AS $hasil)
				{
					// CARI RATING
					$cari_rating = $this->db->select("*")->from("rating_dijual")->where("id_transaksi",$hasil->id_transaksi)->where("id_dijual",$hasil->id_dijual)->where("id_pembeli",$_SESSION['tc_id_user'])->get()->row_array();
					// END CARI RATING

					$ambil_gmbr = json_decode($hasil->foto,true);
		            $gmbr = $ambil_gmbr[0];

		            // $arr_konten[] = $cari_rating['id_rating_dijual'];
					// $arr_konten[] = "<div class='col-lg-3 col-md-3 col-sm-3 col-xs-3' style='border-top:3px solid #E9E9E9;padding:15px;'><img src='".$url_foto."/".$gmbr."' alt='Gambar Pesanan Selesai ".$nmr."' style='height:80px;min-height:80px;min-width:65px;'></div>";
					$arr_konten[] = "<div class='col-lg-3 col-md-3 col-sm-3 col-xs-3' style='border-top:3px solid #E9E9E9;padding:15px;'><img src='".$url_foto."/".$gmbr."' alt='Gambar Pesanan Selesai ".$nmr."' style='width:100%;height:auto;max-width: 400px;max-height: 100px;min-width: 50px;min-height: 50px;'></div>";
					$arr_konten[] = "<div class='form-group col-lg-9 col-md-9 col-sm-9 col-xs-9' style='border-top:3px solid #E9E9E9;padding:15px;'><div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>".$hasil->judul."</div><div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'><div class='pull-right'>x ".$hasil->quantity."</div></div><div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'><div class='pull-right'>Rp".number_format($hasil->harga_beli,0,',','.')."</div></div></div>";
					if($cari_rating['nilai_rating'] == 1)
					{
						$arr_konten[] = "<div class='form-group col-lg-12 text-center' style='letter-spacing:1em;padding:15px;border-top:1px solid #E9E9E9;border-bottom:1px solid #E9E9E9;margin-top:5px;'>".
						"<i class='fas fa-star gradient-icon-actived' style='font-size:17px;cursor:pointer;' id='rating_1".$nmr."' onclick='toggle_rating(\"1\",".$nmr.");'></i>".
						"<i class='fas fa-star gradient-icon' style='font-size:17px;cursor:pointer;' id='rating_2".$nmr."' onclick='toggle_rating(\"2\",".$nmr.");'></i>".
						"<i class='fas fa-star gradient-icon' style='font-size:17px;cursor:pointer;' id='rating_3".$nmr."' onclick='toggle_rating(\"3\",".$nmr.");'></i>".
						"<i class='fas fa-star gradient-icon' style='font-size:17px;cursor:pointer;' id='rating_4".$nmr."' onclick='toggle_rating(\"4\",".$nmr.");'></i>".
						"<i class='fas fa-star gradient-icon' style='font-size:17px;cursor:pointer;' id='rating_5".$nmr."' onclick='toggle_rating(\"5\",".$nmr.");'></i>".
						"<div style='letter-spacing:0px;font-size:12px;color:#C1C1C1;' id='ket_rating".$nmr."'>Tidak Baik</div><input type='hidden' id='value_rating".$nmr."' value='".$cari_rating['nilai_rating']."'></div>";
					}
					elseif($cari_rating['nilai_rating'] == 2)
					{
						$arr_konten[] = "<div class='form-group col-lg-12 text-center' style='letter-spacing:1em;padding:15px;border-top:1px solid #E9E9E9;border-bottom:1px solid #E9E9E9;margin-top:5px;'>".
						"<i class='fas fa-star gradient-icon-actived' style='font-size:17px;cursor:pointer;' id='rating_1".$nmr."' onclick='toggle_rating(\"1\",".$nmr.");'></i>".
						"<i class='fas fa-star gradient-icon-actived' style='font-size:17px;cursor:pointer;' id='rating_2".$nmr."' onclick='toggle_rating(\"2\",".$nmr.");'></i>".
						"<i class='fas fa-star gradient-icon' style='font-size:17px;cursor:pointer;' id='rating_3".$nmr."' onclick='toggle_rating(\"3\",".$nmr.");'></i>".
						"<i class='fas fa-star gradient-icon' style='font-size:17px;cursor:pointer;' id='rating_4".$nmr."' onclick='toggle_rating(\"4\",".$nmr.");'></i>".
						"<i class='fas fa-star gradient-icon' style='font-size:17px;cursor:pointer;' id='rating_5".$nmr."' onclick='toggle_rating(\"5\",".$nmr.");'></i>".
						"<div style='letter-spacing:0px;font-size:12px;color:#C1C1C1;' id='ket_rating".$nmr."'>Kurang Baik</div><input type='hidden' id='value_rating".$nmr."' value='".$cari_rating['nilai_rating']."'></div>";
					}
					elseif($cari_rating['nilai_rating'] == 3)
					{
						$arr_konten[] = "<div class='form-group col-lg-12 text-center' style='letter-spacing:1em;padding:15px;border-top:1px solid #E9E9E9;border-bottom:1px solid #E9E9E9;margin-top:5px;'>".
						"<i class='fas fa-star gradient-icon-actived' style='font-size:17px;cursor:pointer;' id='rating_1".$nmr."' onclick='toggle_rating(\"1\",".$nmr.");'></i>".
						"<i class='fas fa-star gradient-icon-actived' style='font-size:17px;cursor:pointer;' id='rating_2".$nmr."' onclick='toggle_rating(\"2\",".$nmr.");'></i>".
						"<i class='fas fa-star gradient-icon-actived' style='font-size:17px;cursor:pointer;' id='rating_3".$nmr."' onclick='toggle_rating(\"3\",".$nmr.");'></i>".
						"<i class='fas fa-star gradient-icon' style='font-size:17px;cursor:pointer;' id='rating_4".$nmr."' onclick='toggle_rating(\"4\",".$nmr.");'></i>".
						"<i class='fas fa-star gradient-icon' style='font-size:17px;cursor:pointer;' id='rating_5".$nmr."' onclick='toggle_rating(\"5\",".$nmr.");'></i>".
						"<div style='letter-spacing:0px;font-size:12px;color:#C1C1C1;' id='ket_rating".$nmr."'>Standar</div><input type='hidden' id='value_rating".$nmr."' value='".$cari_rating['nilai_rating']."'></div>";
					}
					elseif($cari_rating['nilai_rating'] == 4)
					{
						$arr_konten[] = "<div class='form-group col-lg-12 text-center' style='letter-spacing:1em;padding:15px;border-top:1px solid #E9E9E9;border-bottom:1px solid #E9E9E9;margin-top:5px;'>".
						"<i class='fas fa-star gradient-icon-actived' style='font-size:17px;cursor:pointer;' id='rating_1".$nmr."' onclick='toggle_rating(\"1\",".$nmr.");'></i>".
						"<i class='fas fa-star gradient-icon-actived' style='font-size:17px;cursor:pointer;' id='rating_2".$nmr."' onclick='toggle_rating(\"2\",".$nmr.");'></i>".
						"<i class='fas fa-star gradient-icon-actived' style='font-size:17px;cursor:pointer;' id='rating_3".$nmr."' onclick='toggle_rating(\"3\",".$nmr.");'></i>".
						"<i class='fas fa-star gradient-icon-actived' style='font-size:17px;cursor:pointer;' id='rating_4".$nmr."' onclick='toggle_rating(\"4\",".$nmr.");'></i>".
						"<i class='fas fa-star gradient-icon' style='font-size:17px;cursor:pointer;' id='rating_5".$nmr."' onclick='toggle_rating(\"5\",".$nmr.");'></i>".
						"<div style='letter-spacing:0px;font-size:12px;color:#C1C1C1;' id='ket_rating".$nmr."'>Baik</div><input type='hidden' id='value_rating".$nmr."' value='".$cari_rating['nilai_rating']."'></div>";
					}
					else
					{
						$arr_konten[] = "<div class='form-group col-lg-12 text-center' style='letter-spacing:1em;padding:15px;border-top:1px solid #E9E9E9;border-bottom:1px solid #E9E9E9;margin-top:5px;'>".
						"<i class='fas fa-star gradient-icon-actived' style='font-size:17px;cursor:pointer;' id='rating_1".$nmr."' onclick='toggle_rating(\"1\",".$nmr.");'></i>".
						"<i class='fas fa-star gradient-icon-actived' style='font-size:17px;cursor:pointer;' id='rating_2".$nmr."' onclick='toggle_rating(\"2\",".$nmr.");'></i>".
						"<i class='fas fa-star gradient-icon-actived' style='font-size:17px;cursor:pointer;' id='rating_3".$nmr."' onclick='toggle_rating(\"3\",".$nmr.");'></i>".
						"<i class='fas fa-star gradient-icon-actived' style='font-size:17px;cursor:pointer;' id='rating_4".$nmr."' onclick='toggle_rating(\"4\",".$nmr.");'></i>".
						"<i class='fas fa-star gradient-icon-actived' style='font-size:17px;cursor:pointer;' id='rating_5".$nmr."' onclick='toggle_rating(\"5\",".$nmr.");'></i>".
						"<div style='letter-spacing:0px;font-size:12px;color:#C1C1C1;' id='ket_rating".$nmr."'>Sangat Baik</div><input type='hidden' id='value_rating".$nmr."' value='".$cari_rating['nilai_rating']."'></div>";
					}
					$arr_konten[] = "<div class='form-group col-md-12'><button class='btn-sm btn-default' onclick='testimoni_button(\"pengiriman\",".$nmr.");'>Kecepatan Pengiriman Sangat Baik.</button><button class='btn-sm btn-default' onclick='testimoni_button(\"harga\",".$nmr.");'>Harga Item Sangat Baik.</button><button class='btn-sm btn-default' onclick='testimoni_button(\"respon\",".$nmr.");'>Respon Penjual Sangat Baik.</button></div>";
					$arr_konten[] = "<div class='form-group col-md-12'><textarea class='form-control' placeholder='Tinggalkan Testimoni Anda...' id='testimoni".$nmr."'>".$cari_rating['testimoni']."</textarea><input type='hidden' id='id_jual".$nmr."' value='".$hasil->id_dijual."'><input type='hidden' id='id_pembeli".$nmr."' value='".$_SESSION['tc_id_user']."'><input type='hidden' id='id_penjual".$nmr."' value='".$hasil->id_user."'><input type='hidden' id='id_trans".$nmr."' value='".$hasil->id_transaksi."'></div>";

					$nmr++;

				}
				// var_dump($abc);
				// var_dump($arr_konten);
			}

			$arr = array(
				"konten" => $arr_konten
			);

			echo json_encode($arr);
		}

		public function proses_penilaian(){

			// UNTUK AMBIL DATA $_POST['cek']
			$item = (array)json_decode($this->input->post('cek'), true);

			// JIKA AKSI NYA = INSERT
			$aksi = $this->input->post("aksi");

			if($aksi == "insert") // cek jika aksi = insert
			{
				foreach($item AS $key => $hsl)
				{
					$val = array(
						"id_transaksi" => $hsl['id_trans'],
						"id_dijual" => $hsl['id_jual'],
						"id_pembeli" => $hsl['id_pembeli'],
						"id_penjual" => $hsl['id_penjual'],
						"nilai_rating" => $hsl['value_rating'],
						"testimoni" => $hsl['testimoni']
					);
					$response = $this->crud->allInsertSave($val,"rating_dijual");

					$id_penjual = $hsl['id_penjual'];
				}

				// HITUNG TOTAL RATING PENJUAL
				$query_hitung = $this->crud->get_allDetail($id_penjual,"rating_dijual","id_penjual");
				$nilai_rating = 0;
				$jml_data = count($query_hitung);
				foreach($query_hitung as $result)
				{
					$nilai_rating += $result->nilai_rating;
				}
				$total = number_format($nilai_rating/$jml_data,1);
				$val2 = array(
					"rating_penjual" => $total
				);
				// var_dump($jml_data);
				// var_dump($nilai_rating);
				// var_dump($total);
				$this->crud->allEditSave($val2,$id_penjual,"users","id_user");
				// END HITUNG TOTAL RATING PENJUAL

				header('Access-Control-Allow-Origin: *'); 
				echo json_encode($response); //respon untuk alert sukses ketika data masuk
			}
			else // cek jika aksi bukan insert
			{

				foreach($item AS $key => $hsl2)
				{
					// cari id_rating_dijual dari tabel rating_djual
					$cari_idRating = $this->crud->cari_idRatingDijual($hsl2['id_trans'],$hsl2['id_jual'],$hsl2['id_pembeli'])->row_array();
					// end cari id_rating_dijual dari tabel rating_djual

					$val = array(
						// "id_dijual" => $hsl2['id_jual'],
						// "id_pembeli" => $hsl2['id_pembeli'],
						// "id_penjual" => $hsl2['id_penjual'],
						"nilai_rating" => $hsl2['value_rating'],
						"testimoni" => $hsl2['testimoni']
					);
					// $resp[] = $this->crud->allEditSave($val,$cari_idRating['id_rating_dijual'],"rating_dijual","id_rating_dijual");

					$this->crud->allEditSave($val,$cari_idRating['id_rating_dijual'],"rating_dijual","id_rating_dijual");
					$id_penjual = $hsl2['id_penjual'];

				}
				
				// cek hasil dari edit, jika sudah ada code == 0 maka sukses
				// foreach($resp as $result_resp)
				// {
				// 	if($result_resp['code'] == 0)
				// 	{
				// 		$response = array(
				// 			"code" => 0,
				// 			"message" => "update sukses"
				// 		);
				// 	}
				// }
				// end cek hasil dari edit, jika sudah ada code == 0 maka sukses

				// HITUNG TOTAL RATING PENJUAL
				$query_hitung = $this->crud->get_allDetail($id_penjual,"rating_dijual","id_penjual");
				$nilai_rating = 0;
				$jml_data = count($query_hitung);
				foreach($query_hitung as $result)
				{
					$nilai_rating += $result->nilai_rating;
				}
				$total = number_format($nilai_rating/$jml_data,1);
				$val2 = array(
					"rating_penjual" => $total
				);
				$response = $this->crud->allEditSave($val2,$id_penjual,"users","id_user");
				// END HITUNG TOTAL RATING PENJUAL

				header('Access-Control-Allow-Origin: *'); 
				echo json_encode($response); //respon untuk alert sukses ketika data masuk

			}


		}



	}
?>