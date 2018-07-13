<?php
	if (!defined('BASEPATH')) exit('No direct script access allowed');
	class Katalog_saya extends CI_Controller{	
		function __construct(){
			session_start();
			parent::__construct();
			$this->load->helper(array('url','functions_helper'));
			$this->load->model('m_crud','crud');
			$this->load->library('upload');
			date_default_timezone_set('Asia/Jakarta');
		}

		function index()
		{
			require_once(APPPATH.'libraries/template.php');
			$main = new template();

			if(!isset($_SESSION['tc_username'])){
				redirect('c_main');
			}

			$data['title'] = "Katalog Saya";
			$data['idnya'] = $_SESSION['tc_id_user'];
			$main->display("toko_saya/katalog_saya/index",$data);
		}

		function tambah_dijual()
		{
			require_once(APPPATH.'libraries/template.php'); 
			$main =  new template();

			if(!isset($_SESSION['tc_username'])){
				redirect('c_main');
			}

			$data['title'] = "Tambah Dijual Produk / Jasa";
			$data['idnya'] = $_SESSION['tc_id_user'];
			$data['usernm'] = $_SESSION['tc_username'];
			$data['kd_awal'] = $this->crud->kdotomatis_awal();
			$data['list_gm'] = $this->crud->getalldatatable("list_game");
			$main->display("toko_saya/katalog_saya/tambah_dijual",$data);
		}

		function cari_kdjual()
		{
			$kd=$this->input->post('value_kd');
			$tgl = date("Y-m-d");
			$tglnya = date("dmy");

	        $hasil=$this->crud->cariKDjual($kd,$tgl);
	        if ($hasil->num_rows()>0) 
	        {
	           	$hasil=$hasil->row_array();
	           	$ambil_angka = substr($hasil['kd_dijual'],8,4); // ambil huruf / angka dimulai dari index 1
	           	$kdnya = $ambil_angka + 1;
	           	// var_dump($kdnya);
	           	// var_dump($tgl);

	           	if($kd == "produk")
	           	{
	           		echo "A1".$tglnya.sprintf('%04s',$kdnya);
	           	}
	           	elseif($kd == "jasa")
	           	{
	           		echo "B1".$tglnya.sprintf('%04s',$kdnya);
	           	}
	        }
	        else
	        {
	        	if($kd == "produk")
	        	{
	        		echo "A1".$tglnya."0001";
	        	}
	        	elseif($kd == "jasa")
	        	{
	        		// echo "B100001";
	        		echo "B1".$tglnya."0001";
	        	}
	        }
		}

		// function insert_dijual()
		// {

		// 	// //setting konfigurasi upload image
  //  //         	// $config['upload_path'] = './assets/custom/images/image_dijual/';
  //  //         	// $jalur = "assets/custom/images/image_dijual/";
  //  //         	// $config['upload_path'] = base_url().$jalur;
  //  //         	// $config['upload_path'] = "../assets/custom/images/image_dijual/";
  //  //         	$config['upload_path'] = "../assets/custom/images/image_dijual/";
  //  //          $config['allowed_types'] = 'gif|jpg|png';
  //  //          $config['max_size'] = '1000';
  //  //          $config['max_width']  = '2000';
  //  //          $config['max_height']  = '1024';
                
  //  //          $this->upload->initialize($config);
  //  //          if(!$this->upload->do_upload('file'))
  //  //          // if($this->input->post("gambar"))
  //  //          {
  //  //              // $gambar="";
  //  //              $gambar= "no_image.jpg";
  //  //          }
  //  //          else
  //  //          {
  //  //          	// $this->upload->do_upload('gambar');
  //  //              $gambar=$this->upload->file_name;
  //  //          }

		// 	// TESSSS UPLOAD
  //          	$config['upload_path'] = base_url()."assets/custom/images/image_dijual/";
  //           $config['allowed_types'] = 'gif|jpg|png';
  //           $config['max_size'] = '1000';
  //           $config['max_width']  = '2000';
  //           $config['max_height']  = '1024';
                
  //           $this->upload->initialize($config);
  //           $foto = $this->input->post('gambar');
  //           $this->upload->do_upload($foto);
  //           // $tes = $this->upload->data($foto);
  //           $gambar=$this->upload->file_name;
  //           // END TESSSS UPLOAD

  //  //          // CARI HARGA DISKON
		// 	// $cek_disc = $this->input->post('disc');
		// 	// $cek_hrg = $this->input->post('hrg_satuan');
		// 	// $hrg_disc = ($cek_disc/100)*$cek_hrg;
		// 	// // END CARI HARGA DISKON

		// 	$data = array(
		// 		"kd_dijual" => $this->input->post('kd_dijual'),
		// 		"id_user" => $this->input->post('id_user'),
		// 		"jenis_dijual" => $this->input->post('jenis_jual'),
		// 		"judul" => $this->input->post('jdl'),
		// 		"id_game" => $this->input->post('id_game'),
		// 		"nama_dijual" => $this->input->post('nama_jual'),
		// 		"kategori" => json_encode($this->input->post('kategori')),
		// 		"harga" => $this->input->post('hrg_satuan'),
		// 		"diskon" => $this->input->post('disc'),
		// 		"harga_diskon" => $this->input->post('hrg_diskon'),
		// 		"jumlah" =>  $this->input->post('jml'),
		// 		"tgl_input" => date("Y-m-d"),
		// 		"waktu_input" => date("H:i"),
		// 		"keterangan" => $this->input->post("ket"),
		// 		"foto" => $this->input->post("gambar")
		// 		// "foto" => $_FILES['gambar']['name']
		// 	);

		// 	if($data['id_user']==null || $data['jenis_dijual']==null || $data['judul']==null || $data['id_game']==null || $data['nama_dijual']==null || $data['harga']==null || $data['diskon']==null || $data['jumlah']==null){
		// 		$response = array(
	 //                'code' => 1,
	 //                'message' => "Data belum lengkap! : "
	 //            );
		// 		if($data['id_user']==null) $response['message'] .= 'Id User, ';
		// 		if($data['jenis_dijual']==null) $response['message'] .= 'Jenis Dijual, ';
		// 		if($data['judul']==null) $response['message'] .= 'Judul, ';
		// 		if($data['id_game']==null) $response['message'] .= 'Nama Game, ';
		// 		if($data['nama_dijual']==null) $response['message'] .= 'Nama Dijual, ';
		// 		if($data['harga']==null) $response['message'] .= 'Harga, ';
		// 		if($data['diskon']==null) $response['message'] .= 'Diskon, ';
		// 		if($data['jumlah']==null) $response['message'] .= 'Jumlah, ';
		// 	}
		// 	else {
		// 		$response = $this->crud->allInsertSave($data,'dijual');
		// 		header('Access-Control-Allow-Origin: *');
		// 	}
		// 	echo json_encode($response);
		// }

		public function insert_dijual()
		{
			$gambar = array();
            sleep(0.5); // pause / delay 0.5 detik saat eksekusi
		  	// if($_FILES["gambar"]["name"] != '')
		  	if(isset($_FILES["gambar"]["name"]))
		  	{
		   		// //setting konfigurasi upload image
	           	$config['upload_path'] = "./assets/custom/images/image_dijual/";
	            $config['allowed_types'] = 'gif|jpg|png';
	            $config['max_size'] = '1000'; //1000kb
	            $config['max_width']  = '2000';
	            $config['max_height']  = '1024';
	            $this->upload->initialize($config);

		   		for($count = 0; $count<count($_FILES["gambar"]["name"]); $count++)
		   		{
			    	$_FILES["files"]["name"] = $_FILES["gambar"]["name"][$count];
			    	$_FILES["files"]["type"] = $_FILES["gambar"]["type"][$count];
			    	$_FILES["files"]["tmp_name"] = $_FILES["gambar"]["tmp_name"][$count];
			    	$_FILES["files"]["error"] = $_FILES["gambar"]["error"][$count];
			    	$_FILES["files"]["size"] = $_FILES["gambar"]["size"][$count];
			    	if($this->upload->do_upload("files"))
			    	{
				     	$hslnya = $this->upload->data();
				     	$gambar[$count] = $hslnya["file_name"];
				     	// $gambar = $hslnya["file_name"];
				     	// $gambar = array(
				     	// 	"namanya" => $hslnya["file_name"]
				     	// );

				     	// $output .= '
				     	// <div class="col-md-3">
				      // 		<img src="'.base_url().'upload/'.$data["file_name"].'" class="img-responsive img-thumbnail" />
				     	// </div>
				     	// ';

				     	// $abc = count($_FILES["gambar"]["name"]);
				     	// echo "<pre>";
				     	// print_r($abc);
				     	// echo "</pre>";
				     	// var_dump($gambar);
			    	}
			    	
		   		}
		  	}
		  	else
		  	{
		  		$gambar[] = "no_image.jpg";
		  	}

   //          // CARI HARGA DISKON
			// $cek_disc = $this->input->post('disc');
			// $cek_hrg = $this->input->post('hrg_satuan');
			// $hrg_disc = ($cek_disc/100)*$cek_hrg;
			// // END CARI HARGA DISKON

		  	// karena pada request ajax bukan datatype json, maka dibuat seperti ini untuk kategori multiple
		  	$cek_kategori = explode(",",$this->input->post('kategori'));
		  	if(count($cek_kategori) > 0)
		  	{
		  		for($a=0;$a<count($cek_kategori);$a++)
		  		{
		  			$kategori[]= $cek_kategori[$a];
		  		}
		  	}
		  	// $kategori[] = $this->input->post("kategori");

			$data = array(
				"kd_dijual" => $this->input->post('kd_dijual'),
				"id_user" => $this->input->post('id_user'),
				"jenis_dijual" => $this->input->post('jenis_jual'),
				"judul" => $this->input->post('jdl'),
				"id_game" => $this->input->post('id_game'),
				"nama_dijual" => $this->input->post('nama_jual'),
				// "kategori" => json_encode($this->input->post('kategori')),
				"kategori" => json_encode($kategori),
				"harga" => $this->input->post('hrg_satuan'),
				"diskon" => $this->input->post('disc'),
				"harga_diskon" => $this->input->post('hrg_diskon'),
				"jumlah" =>  $this->input->post('jml'),
				"tgl_input" => date("Y-m-d"),
				"waktu_input" => date("H:i"),
				"keterangan" => $this->input->post("ket"),
				"foto" => json_encode($gambar)
				// "foto" => $_FILES['gambar']['name']
			);

			if($data['id_user']==null || $data['jenis_dijual']==null || $data['judul']==null || $data['id_game']==null || $data['nama_dijual']==null || $data['harga']==null || $data['keterangan']==null || $data['kategori']==null || $data['jumlah']==null){
				$response = array(
	                'code' => 1,
	                'message' => "Data belum lengkap! : "
	            );
				if($data['id_user']==null) $response['message'] .= 'Id User, ';
				if($data['jenis_dijual']==null) $response['message'] .= 'Jenis Dijual, ';
				if($data['judul']==null) $response['message'] .= 'Judul, ';
				if($data['id_game']==null) $response['message'] .= 'Nama Game, ';
				if($data['nama_dijual']==null) $response['message'] .= 'Nama Produk / Jasa, ';
				if($data['jumlah']==null) $response['message'] .= 'Jumlah, ';
				if($data['keterangan']==null) $response['message'] .= 'Keterangan, ';
				if($data['kategori']==null) $response['message'] .= 'Kategori Produk / Jasa, ';
				if($data['harga']==null) $response['message'] .= 'Harga Satuan, ';
				
			}
			else {
				$response = $this->crud->allInsertSave($data,'dijual');
				
			}

			header('Access-Control-Allow-Origin: *');
			echo json_encode($response);

		}

		public function loadDataKatalog($iduser)
		{
			// $dataDijual = $this->crud->getalldatatablewhere("dijual","id_user",$iduser);
			$dataDijual = $this->crud->getDijualWhere($iduser);
			$json = array();
			$no=1;
			for($row = 0; $row<sizeof($dataDijual); $row++){
				// $kdnya = '<button onclick="detail_katalog('.$dataDijual[$row]->id_dijual.');" class="text-info" style="outline:none; background:transparent; border: none;">'.$dataDijual[$row]->kd_dijual.'</button>';
				$kdnya = '<a href="javascript:void(0);" onclick="detail_katalog('.$dataDijual[$row]->id_dijual.');" class="text-info">'.$dataDijual[$row]->kd_dijual.'</a>';

				// wordwrap fungsi php bukan dari CI HELPER, berfungsi memotong kalimat dan memiliki kelebihan potong kata yang panjang (pada parameter ke 4 dibuat true).
				$jdl = '<div>'.wordwrap($dataDijual[$row]->judul,30,"<br>\n",true).'</div>';

				$json[] = array(
					$no.".",
					// $dataDijual[$row]->kd_dijual,
					$kdnya,
					tgl_indoYF($dataDijual[$row]->tgl_input),
					ucwords($dataDijual[$row]->jenis_dijual),
					$jdl,
					$dataDijual[$row]->nama_game,
					$dataDijual[$row]->nama_dijual,
					// $dataDijual[$row]->jumlah,
					// $dataDijual[$row]->harga,
					'<button class="fa fa-edit btn btn-info" onclick="ubah_dijual('.$dataDijual[$row]->id_dijual.')"></button>
					<button class="fa fa-trash btn btn-danger" onclick="preHps('.$dataDijual[$row]->id_dijual.')"></button>'
				);
				$no++;
			}
			header('Access-Control-Allow-Origin: *');
			header("Content-Type: application/json");
			$response = array();
			$response['success'] = true;
			$response['aaData'] = $json;
			echo json_encode($response);
		}

		public function detail_dijual($id_user, $id_dijual)
		{
			require_once(APPPATH.'libraries/template.php');
			$main =  new template();

			if(!isset($_SESSION['tc_username'])){
				redirect('c_main');
			}
			else
			{
				$cek = $this->crud->cek_idUserDijual($id_user, $id_dijual);
				if($_SESSION['tc_id_user'] != $id_user || $cek->num_rows() < 1)
				{
					redirect('toko_saya/katalog_saya'); // nanti ubah ke halaman error, tidak diijinkan (not authorized)
				}
			}

			$data['title'] = "Detail Dijual";
			$data['detail_item'] = $this->crud->cariDetailDijualBy($id_dijual);

			$cek = $this->crud->cariDetailDijualBy($id_dijual);
			$data['ktgr'] = json_decode($cek['kategori'], true);
			$data['gmbr'] = json_decode($cek['foto'], true);

			$main->display("toko_saya/katalog_saya/detail_dijual",$data);
		}

		public function edit_dijual($id_user, $id_dijual)
		{
			require_once(APPPATH.'libraries/template.php'); 
			$main =  new template();

			if(!isset($_SESSION['tc_username'])){
				redirect('c_main');
			}
			else
			{
				$cek = $this->crud->cek_idUserDijual($id_user, $id_dijual);
				if($_SESSION['tc_id_user'] != $id_user || $cek->num_rows() < 1)
				{
					redirect('toko_saya/katalog_saya'); // nanti ubah ke halaman error, tidak diijinkan (not authorized)
				}
			}

			$data['title'] = "Edit Dijual Produk / Jasa";
			$data['idnya'] = $_SESSION['tc_id_user'];
			$data['jual'] = $this->crud->cari_dijualJoin($id_dijual);
			$data['list_gm'] = $this->crud->getalldatatable("list_game");

			$cek_gambar = $this->crud->cari_dijualJoin($id_dijual);
			$data['ambil_gambar'] = json_decode($cek_gambar['foto'], true);
			// $tes1 = json_decode($tes['foto'], true);
			// foreach($tes1 AS $tess)
			// {
			// 	$data['tes2'] = $tess;
			// }

			// $data['cek'] = filesize(base_url().'assets/custom/images/image_dijual/6.jpg');
			// $filename = filesize(base_url().'assets/custom/images/image_dijual/6.jpg');
			// $headers  = get_headers($filename, 1);
			// $data['fsize']    = $headers['Content-Length'];
			// $ambil_pic = json_decode($cek_gambar['foto'], true);
			// foreach($ambil_pic AS $val_pic)
			// {
			// 	$data['fsize'] = filesize('./assets/custom/images/image_dijual/'.$val_pic);
			// }

			$main->display("toko_saya/katalog_saya/edit_dijual",$data);
		}


		public function proses_edit_dijual()
		{
			$id_jual = $this->input->post("id_dijual");
			$cekGambar = $this->crud->getsingledatatablewhere('dijual','id_dijual',$id_jual);
			
			$gambar = array();
            sleep(0.5); // pause / delay 0.5 detik saat eksekusi
		  	// if($_FILES["gambar"]["name"] != '')
		  	if(isset($_FILES["gambar"]["name"]))
		  	{
		   		// //setting konfigurasi upload image
	           	$config['upload_path'] = "./assets/custom/images/image_dijual/";
	            $config['allowed_types'] = 'gif|jpg|png';
	            $config['max_size'] = '1000'; //1000kb
	            $config['max_width']  = '2000';
	            $config['max_height']  = '1024';
	            $this->upload->initialize($config);

		   		for($count = 0; $count<count($_FILES["gambar"]["name"]); $count++)
		   		{
			    	$_FILES["files"]["name"] = $_FILES["gambar"]["name"][$count];
			    	$_FILES["files"]["type"] = $_FILES["gambar"]["type"][$count];
			    	$_FILES["files"]["tmp_name"] = $_FILES["gambar"]["tmp_name"][$count];
			    	$_FILES["files"]["error"] = $_FILES["gambar"]["error"][$count];
			    	$_FILES["files"]["size"] = $_FILES["gambar"]["size"][$count];
			    	if($this->upload->do_upload("files"))
			    	{
			    		// lakukan upload gambar baru
				     	$hslnya = $this->upload->data();
				     	// $gambar[$count] = $hslnya["file_name"];

				     	$arr_satu[$count] = $hslnya["file_name"]; 

			    	}
			    	
		   		}

		   		// hapus gambar lama
			    // $cg = json_decode($cekGambar['foto'],true);
			    // for($a = 0;$a<count($cg);$a++)
			    // {
			    // 	if($cg[$a] != "no_image.jpg")
			    // 	{
			    // 		unlink('./assets/custom/images/image_dijual/'.$cg[$a]);
			    // 	}
			    // }

		   		$arr_dua = json_decode($cekGambar['foto'],true);
		   		$gabung_arr = array_merge($arr_satu,$arr_dua);
		   		foreach($gabung_arr AS $val_arr)
		   		{
		   			if($val_arr != "no_image.jpg")
		   			{
		   				$gambar[] = $val_arr;
		   			}
		   		}

		  	}
		  	else // jika tidak melakukan update gambar
		  	{
		  		$gambar = json_decode($cekGambar['foto'],true);
		  		// $gambar[] = "no_image.jpg";
		  	}

   //          // CARI HARGA DISKON
			// $cek_disc = $this->input->post('disc');
			// $cek_hrg = $this->input->post('hrg_satuan');
			// $hrg_disc = ($cek_disc/100)*$cek_hrg;
			// // END CARI HARGA DISKON

		  	// karena pada request ajax bukan datatype json, maka dibuat seperti ini untuk kategori multiple
		  	$cek_kategori = explode(",",$this->input->post('kategori'));
		  	if(count($cek_kategori) > 0)
		  	{
		  		for($a=0;$a<count($cek_kategori);$a++)
		  		{
		  			$kategori[]= $cek_kategori[$a];
		  		}
		  	}
		  	// $kategori[] = $this->input->post("kategori");

			$data = array(
				"kd_dijual" => $this->input->post('kd_dijual'),
				"id_user" => $this->input->post('id_user'),
				"jenis_dijual" => $this->input->post('jenis_jual'),
				"judul" => $this->input->post('jdl'),
				"id_game" => $this->input->post('id_game'),
				"nama_dijual" => $this->input->post('nama_jual'),
				// "kategori" => json_encode($this->input->post('kategori')),
				"kategori" => json_encode($kategori),
				"harga" => $this->input->post('hrg_satuan'),
				"diskon" => $this->input->post('disc'),
				"harga_diskon" => $this->input->post('hrg_diskon'),
				"jumlah" =>  $this->input->post('jml'),
				// "tgl_input" => date("Y-m-d"),
				// "waktu_input" => date("H:i"),
				"keterangan" => $this->input->post("ket"),
				"foto" => json_encode($gambar)
				// "foto" => $_FILES['gambar']['name']
			);

			if($data['id_user']==null || $data['jenis_dijual']==null || $data['judul']==null || $data['id_game']==null || $data['nama_dijual']==null || $data['harga']==null || $data['keterangan']==null || $data['kategori']==null || $data['jumlah']==null){
				$response = array(
	                'code' => 1,
	                'message' => "Data belum lengkap! : "
	            );
				if($data['id_user']==null) $response['message'] .= 'Id User, ';
				if($data['jenis_dijual']==null) $response['message'] .= 'Jenis Dijual, ';
				if($data['judul']==null) $response['message'] .= 'Judul, ';
				if($data['id_game']==null) $response['message'] .= 'Nama Game, ';
				if($data['nama_dijual']==null) $response['message'] .= 'Nama Produk / Jasa, ';
				if($data['jumlah']==null) $response['message'] .= 'Jumlah, ';
				if($data['keterangan']==null) $response['message'] .= 'Keterangan, ';
				if($data['kategori']==null) $response['message'] .= 'Kategori Produk / Jasa, ';
				if($data['harga']==null) $response['message'] .= 'Harga Satuan, ';
				
			}
			else {
				$response = $this->crud->allEditSave($data, $id_jual, 'dijual', 'id_dijual');
			}

			header('Access-Control-Allow-Origin: *');
			echo json_encode($response);

		}

		public function hapus_gambar($idnya,$id_jual){

			if($idnya != 'no_image.jpg')
			{
				unlink('./assets/custom/images/image_dijual/'.$idnya);
			}
			
			$cek_gambar = $this->crud->cari_dijualJoin($id_jual);
			$cek1 = json_decode($cek_gambar['foto'], true);
			if(count($cek1) == 1) // jika gambarnya tinggal sisa 1 untuk dihapus maka update dengan no_image.jpg
			{
				$gambar[] = "no_image.jpg";
			}
			else
			{
				for($a=0;$a<count($cek1);$a++)
				{
					if($cek1[$a] != $idnya)
					{
						$gambar[] = $cek1[$a];
					}
				}
			}

			// $gambar = $nm;
			$data = array(
				"foto" => json_encode($gambar)
			);

			$response = $this->crud->allEditSave($data, $id_jual, 'dijual', 'id_dijual');
			header('Access-Control-Allow-Origin: *');
			echo json_encode($response);

		}

		function hapus_dijual($idnya){

			//hapus gambarnya
			$cekGambar = $this->crud->getsingledatatablewhere('dijual','id_dijual',$idnya);
			$cek2 = json_decode($cekGambar['foto'],true);
		   	foreach($cek2 AS $val_cek)
		   	{
		   		if($val_cek != "no_image.jpg")
		   		{
		   			unlink('./assets/custom/images/image_dijual/'.$val_cek);
		   		}
		   	}

			//hapus data di db
			$response = $this->crud->deleteAll($idnya, 'dijual', 'id_dijual');
			header('Access-Control-Allow-Origin: *');
			echo json_encode($response);

		}


		// FITUR KATALOG SAYA > DICARI

		function tambah_dicari()
		{
			require_once(APPPATH.'libraries/template.php'); 
			$main =  new template();

			if(!isset($_SESSION['tc_username'])){
				redirect('c_main');
			}

			$data['title'] = "Tambah Dicari Produk / Jasa";
			$data['idnya'] = $_SESSION['tc_id_user'];
			$data['usernm'] = $_SESSION['tc_username'];
			$data['kd_awal'] = $this->crud->kdotomatis_awal2();
			$data['list_gm'] = $this->crud->getalldatatable("list_game");
			$main->display("toko_saya/katalog_saya/tambah_dicari",$data);
		}

		function cari_kddicari()
		{
			$kd=$this->input->post('value_kd');
			$tgl = date("Y-m-d");
			$tglnya = date("dmy");

	        $hasil=$this->crud->cariKDdicari($kd,$tgl);
	        if ($hasil->num_rows()>0) 
	        {
	           	$hasil=$hasil->row_array();
	           	$ambil_angka = substr($hasil['kd_dicari'],8,4); // ambil huruf / angka dimulai dari index 1
	           	$kdnya = $ambil_angka + 1;
	           	// var_dump($kdnya);
	           	// var_dump($tgl);

	           	if($kd == "produk")
	           	{
	           		echo "A2".$tglnya.sprintf('%04s',$kdnya);
	           	}
	           	elseif($kd == "jasa")
	           	{
	           		echo "B2".$tglnya.sprintf('%04s',$kdnya);
	           	}
	        }
	        else
	        {
	        	if($kd == "produk")
	        	{
	        		echo "A2".$tglnya."0001";
	        	}
	        	elseif($kd == "jasa")
	        	{
	        		// echo "B100001";
	        		echo "B2".$tglnya."0001";
	        	}
	        }
		}

		public function insert_dicari()
		{
			$gambar = array();
            sleep(0.5); // pause / delay 0.5 detik saat eksekusi

		  	if(isset($_FILES["gambar"]["name"]))
		  	{
		   		// //setting konfigurasi upload image
	           	$config['upload_path'] = "./assets/custom/images/image_dicari/";
	            $config['allowed_types'] = 'gif|jpg|png';
	            $config['max_size'] = '1000'; //1000kb
	            $config['max_width']  = '2000';
	            $config['max_height']  = '1024';
	            $this->upload->initialize($config);

		   		for($count = 0; $count<count($_FILES["gambar"]["name"]); $count++)
		   		{
			    	$_FILES["files"]["name"] = $_FILES["gambar"]["name"][$count];
			    	$_FILES["files"]["type"] = $_FILES["gambar"]["type"][$count];
			    	$_FILES["files"]["tmp_name"] = $_FILES["gambar"]["tmp_name"][$count];
			    	$_FILES["files"]["error"] = $_FILES["gambar"]["error"][$count];
			    	$_FILES["files"]["size"] = $_FILES["gambar"]["size"][$count];
			    	if($this->upload->do_upload("files"))
			    	{
				     	$hslnya = $this->upload->data();
				     	$gambar[$count] = $hslnya["file_name"];
			    	}
			    	
		   		}
		  	}
		  	else
		  	{
		  		$gambar[] = "no_image.jpg";
		  	}

		  	// karena pada request ajax bukan datatype json, maka dibuat seperti ini untuk kategori multiple
		  	$cek_kategori = explode(",",$this->input->post('kategori'));
		  	if(count($cek_kategori) > 0)
		  	{
		  		for($a=0;$a<count($cek_kategori);$a++)
		  		{
		  			$kategori[]= $cek_kategori[$a];
		  		}
		  	}

			$data = array(
				"kd_dicari" => $this->input->post('kd_dicari'),
				"id_user" => $this->input->post('id_user'),
				"jenis_dicari" => $this->input->post('jenis_dicari'),
				"judul" => $this->input->post('jdl'),
				"id_game" => $this->input->post('id_game'),
				"nama_dicari" => $this->input->post('nama_dicari'),
				"kategori" => json_encode($kategori),
				"harga" => $this->input->post('hrg_satuan'),
				// "diskon" => $this->input->post('disc'),
				// "harga_diskon" => $this->input->post('hrg_diskon'),
				"jumlah" =>  $this->input->post('jml'),
				"tgl_input" => date("Y-m-d"),
				"waktu_input" => date("H:i"),
				"keterangan" => $this->input->post("ket"),
				"foto" => json_encode($gambar)
			);

			if($data['id_user']==null || $data['jenis_dicari']==null || $data['judul']==null || $data['id_game']==null || $data['nama_dicari']==null || $data['harga']==null || $data['keterangan']==null || $data['kategori']==null || $data['jumlah']==null){
				$response = array(
	                'code' => 1,
	                'message' => "Data belum lengkap! : "
	            );
				if($data['id_user']==null) $response['message'] .= 'Id User, ';
				if($data['jenis_dicari']==null) $response['message'] .= 'Jenis Dicari, ';
				if($data['judul']==null) $response['message'] .= 'Judul, ';
				if($data['id_game']==null) $response['message'] .= 'Nama Game, ';
				if($data['nama_dicari']==null) $response['message'] .= 'Nama Produk / Jasa, ';
				if($data['jumlah']==null) $response['message'] .= 'Jumlah, ';
				if($data['keterangan']==null) $response['message'] .= 'Keterangan, ';
				if($data['kategori']==null) $response['message'] .= 'Kategori Produk / Jasa, ';
				if($data['harga']==null) $response['message'] .= 'Harga Satuan, ';
				
			}
			else {
				$response = $this->crud->allInsertSave($data,'dicari');
				
			}

			header('Access-Control-Allow-Origin: *');
			echo json_encode($response);

		}

		public function loadDataKatalogDicari($iduser)
		{
			// $dataDijual = $this->crud->getalldatatablewhere("dijual","id_user",$iduser);
			$dataDicari = $this->crud->getDicariWhere($iduser);
			$json = array();
			$no=1;
			for($row = 0; $row<sizeof($dataDicari); $row++){
				// $kdnya = '<button onclick="detail_katalog('.$dataDijual[$row]->id_dijual.');" class="text-info" style="outline:none; background:transparent; border: none;">'.$dataDijual[$row]->kd_dijual.'</button>';
				$kdnya = '<a href="javascript:void(0);" onclick="detail_katalog_dicari('.$dataDicari[$row]->id_dicari.');" class="text-info">'.$dataDicari[$row]->kd_dicari.'</a>';

				// wordwrap fungsi php bukan dari CI HELPER, berfungsi memotong kalimat dan memiliki kelebihan potong kata yang panjang (pada parameter ke 4 dibuat true).
				$jdl = '<div>'.wordwrap($dataDicari[$row]->judul,30,"<br>\n",true).'</div>';

				$json[] = array(
					$no.".",
					// $dataDijual[$row]->kd_dijual,
					$kdnya,
					tgl_indoYF($dataDicari[$row]->tgl_input),
					ucwords($dataDicari[$row]->jenis_dicari),
					$jdl,
					$dataDicari[$row]->nama_game,
					$dataDicari[$row]->nama_dicari,
					// $dataDicari[$row]->jumlah,
					// $dataDicari[$row]->harga,
					'<button class="fa fa-edit btn btn-info" onclick="ubah_dicari('.$dataDicari[$row]->id_dicari.')"></button>
					<button class="fa fa-trash btn btn-danger" onclick="preHps_dicari('.$dataDicari[$row]->id_dicari.')"></button>'
				);
				$no++;
			}
			header('Access-Control-Allow-Origin: *');
			header("Content-Type: application/json");
			$response = array();
			$response['success'] = true;
			$response['aaData'] = $json;
			echo json_encode($response);
		}

		public function detail_dicari($id_user, $id_dicari)
		{
			require_once(APPPATH.'libraries/template.php');
			$main =  new template();

			if(!isset($_SESSION['tc_username'])){
				redirect('c_main');
			}
			else
			{
				$cek = $this->crud->cek_idUserDicari($id_user, $id_dicari);
				if($_SESSION['tc_id_user'] != $id_user || $cek->num_rows() < 1)
				{
					redirect('toko_saya/katalog_saya'); // nanti ubah ke halaman error, tidak diijinkan (not authorized)
				}
			}

			$data['title'] = "Detail Dicari";
			$data['detail_item'] = $this->crud->cariDetailDicariBy($id_dicari);

			$cek = $this->crud->cariDetailDicariBy($id_dicari);
			$data['ktgr'] = json_decode($cek['kategori'], true);
			$data['gmbr'] = json_decode($cek['foto'], true);

			$main->display("toko_saya/katalog_saya/detail_dicari",$data);
		}

		public function edit_dicari($id_user, $id_dicari)
		{
			require_once(APPPATH.'libraries/template.php'); 
			$main =  new template();

			if(!isset($_SESSION['tc_username'])){
				redirect('c_main');
			}
			else
			{
				$cek = $this->crud->cek_idUserDicari($id_user, $id_dicari);
				if($_SESSION['tc_id_user'] != $id_user || $cek->num_rows() < 1)
				{
					redirect('toko_saya/katalog_saya'); // nanti ubah ke halaman error, tidak diijinkan (not authorized)
				}
			}

			$data['title'] = "Edit Dicari Produk / Jasa";
			$data['idnya'] = $_SESSION['tc_id_user'];
			$data['dicari'] = $this->crud->cari_dicariJoin($id_dicari);
			$data['list_gm'] = $this->crud->getalldatatable("list_game");

			$cek_gambar = $this->crud->cari_dicariJoin($id_dicari);
			$data['ambil_gambar'] = json_decode($cek_gambar['foto'], true);

			$main->display("toko_saya/katalog_saya/edit_dicari",$data);
		}

		public function proses_edit_dicari()
		{
			$id_dicari = $this->input->post("id_dicari");
			$cekGambar = $this->crud->getsingledatatablewhere('dicari','id_dicari',$id_dicari);
			
			$gambar = array();
            sleep(0.5); // pause / delay 0.5 detik saat eksekusi

		  	if(isset($_FILES["gambar"]["name"]))
		  	{
		   		// //setting konfigurasi upload image
	           	$config['upload_path'] = "./assets/custom/images/image_dicari/";
	            $config['allowed_types'] = 'gif|jpg|png';
	            $config['max_size'] = '1000'; //1000kb
	            $config['max_width']  = '2000';
	            $config['max_height']  = '1024';
	            $this->upload->initialize($config);

		   		for($count = 0; $count<count($_FILES["gambar"]["name"]); $count++)
		   		{
			    	$_FILES["files"]["name"] = $_FILES["gambar"]["name"][$count];
			    	$_FILES["files"]["type"] = $_FILES["gambar"]["type"][$count];
			    	$_FILES["files"]["tmp_name"] = $_FILES["gambar"]["tmp_name"][$count];
			    	$_FILES["files"]["error"] = $_FILES["gambar"]["error"][$count];
			    	$_FILES["files"]["size"] = $_FILES["gambar"]["size"][$count];
			    	if($this->upload->do_upload("files"))
			    	{
			    		// lakukan upload gambar baru
				     	$hslnya = $this->upload->data();
				     	// $gambar[$count] = $hslnya["file_name"];

				     	$arr_satu[$count] = $hslnya["file_name"]; 

			    	}
			    	
		   		}

		   		$arr_dua = json_decode($cekGambar['foto'],true);
		   		$gabung_arr = array_merge($arr_satu,$arr_dua);
		   		foreach($gabung_arr AS $val_arr)
		   		{
		   			if($val_arr != "no_image.jpg")
		   			{
		   				$gambar[] = $val_arr;
		   			}
		   		}

		  	}
		  	else // jika tidak melakukan update gambar
		  	{
		  		$gambar = json_decode($cekGambar['foto'],true);
		  	}

		  	// karena pada request ajax bukan datatype json, maka dibuat seperti ini untuk kategori multiple
		  	$cek_kategori = explode(",",$this->input->post('kategori'));
		  	if(count($cek_kategori) > 0)
		  	{
		  		for($a=0;$a<count($cek_kategori);$a++)
		  		{
		  			$kategori[]= $cek_kategori[$a];
		  		}
		  	}

			$data = array(
				"kd_dicari" => $this->input->post('kd_dicari'),
				"id_user" => $this->input->post('id_user'),
				"jenis_dicari" => $this->input->post('jenis_dicari'),
				"judul" => $this->input->post('jdl'),
				"id_game" => $this->input->post('id_game'),
				"nama_dicari" => $this->input->post('nama_dicari'),
				"kategori" => json_encode($kategori),
				"harga" => $this->input->post('hrg_satuan'),
				// "diskon" => $this->input->post('disc'),
				// "harga_diskon" => $this->input->post('hrg_diskon'),
				"jumlah" =>  $this->input->post('jml'),
				// "tgl_input" => date("Y-m-d"),
				// "waktu_input" => date("H:i"),
				"keterangan" => $this->input->post("ket"),
				"foto" => json_encode($gambar)
			);

			if($data['id_user']==null || $data['jenis_dicari']==null || $data['judul']==null || $data['id_game']==null || $data['nama_dicari']==null || $data['harga']==null || $data['keterangan']==null || $data['kategori']==null || $data['jumlah']==null){
				$response = array(
	                'code' => 1,
	                'message' => "Data belum lengkap! : "
	            );
				if($data['id_user']==null) $response['message'] .= 'Id User, ';
				if($data['jenis_dicari']==null) $response['message'] .= 'Jenis Dicari, ';
				if($data['judul']==null) $response['message'] .= 'Judul, ';
				if($data['id_game']==null) $response['message'] .= 'Nama Game, ';
				if($data['nama_dicari']==null) $response['message'] .= 'Nama Produk / Jasa, ';
				if($data['jumlah']==null) $response['message'] .= 'Jumlah, ';
				if($data['keterangan']==null) $response['message'] .= 'Keterangan, ';
				if($data['kategori']==null) $response['message'] .= 'Kategori Produk / Jasa, ';
				if($data['harga']==null) $response['message'] .= 'Harga Satuan, ';
				
			}
			else {
				$response = $this->crud->allEditSave($data, $id_dicari, 'dicari', 'id_dicari');
			}

			header('Access-Control-Allow-Origin: *');
			echo json_encode($response);

		}

		public function hapus_gambar2($idnya,$id_dicari){

			if($idnya != 'no_image.jpg')
			{
				unlink('./assets/custom/images/image_dicari/'.$idnya);
			}
			
			$cek_gambar = $this->crud->cari_dicariJoin($id_dicari);
			$cek1 = json_decode($cek_gambar['foto'], true);
			if(count($cek1) == 1) // jika gambarnya tinggal sisa 1 untuk dihapus maka update dengan no_image.jpg
			{
				$gambar[] = "no_image.jpg";
			}
			else
			{
				for($a=0;$a<count($cek1);$a++)
				{
					if($cek1[$a] != $idnya)
					{
						$gambar[] = $cek1[$a];
					}
				}
			}

			// $gambar = $nm;
			$data = array(
				"foto" => json_encode($gambar)
			);

			$response = $this->crud->allEditSave($data, $id_dicari, 'dicari', 'id_dicari');
			header('Access-Control-Allow-Origin: *');
			echo json_encode($response);

		}

		function hapus_dicari($idnya){

			//hapus gambarnya
			$cekGambar = $this->crud->getsingledatatablewhere('dicari','id_dicari',$idnya);
			$cek2 = json_decode($cekGambar['foto'],true);
		   	foreach($cek2 AS $val_cek)
		   	{
		   		if($val_cek != "no_image.jpg")
		   		{
		   			unlink('./assets/custom/images/image_dicari/'.$val_cek);
		   		}
		   	}

			//hapus data di db
			$response = $this->crud->deleteAll($idnya, 'dicari', 'id_dicari');
			header('Access-Control-Allow-Origin: *');
			echo json_encode($response);

		}

	}
?>