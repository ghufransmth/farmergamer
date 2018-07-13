<?php
	if (!defined('BASEPATH')) exit('No direct script access allowed');
	class Home extends CI_Controller{	
		function __construct(){
			session_start();
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('m_crud','crud');
			
		}

		function index()
		{
			require_once(APPPATH.'libraries/template.php');
			$main = new template();

			if(!isset($_SESSION['tc_username'])){
				redirect('c_main');
			}

			$data['title'] = "Beranda";
			$main->display("home/index",$data);
		}

		function proses_daftar()
		{
			$ambil_kata = substr($this->input->post('username'),0,1);
			$image= "";
			if($ambil_kata == "a")
			{
				$image = "Letter-A.ico";
			}
			else if($ambil_kata == "b")
			{
				$image = "Letter-B.ico";
			}
			else if($ambil_kata == "c")
			{
				$image = "Letter-C.ico";
			}
			else if($ambil_kata == "d")
			{
				$image = "Letter-D.ico";
			}
			else if($ambil_kata == "e")
			{
				$image = "Letter-E.ico";
			}
			else if($ambil_kata == "f")
			{
				$image = "Letter-F.ico";
			}
			else if($ambil_kata == "g")
			{
				$image = "Letter-G.ico";
			}
			else if($ambil_kata == "h")
			{
				$image = "Letter-H.ico";
			}
			else if($ambil_kata == "i")
			{
				$image = "Letter-I.ico";
			}
			else if($ambil_kata == "j")
			{
				$image = "Letter-J.ico";
			}
			else if($ambil_kata == "k")
			{
				$image = "Letter-K.ico";
			}
			else if($ambil_kata == "l")
			{
				$image = "Letter-L.ico";
			}
			else if($ambil_kata == "m")
			{
				$image = "Letter-M.ico";
			}
			else if($ambil_kata == "n")
			{
				$image = "Letter-N.ico";
			}
			else if($ambil_kata == "o")
			{
				$image = "Letter-O.ico";
			}
			else if($ambil_kata == "p")
			{
				$image = "Letter-P.ico";
			}
			else if($ambil_kata == "q")
			{
				$image = "Letter-Q.ico";
			}
			else if($ambil_kata == "r")
			{
				$image = "Letter-R.ico";
			}
			else if($ambil_kata == "s")
			{
				$image = "Letter-S.ico";
			}
			else if($ambil_kata == "t")
			{
				$image = "Letter-T.ico";
			}
			else if($ambil_kata == "u")
			{
				$image = "Letter-U.ico";
			}
			else if($ambil_kata == "v")
			{
				$image = "Letter-V.ico";
			}
			else if($ambil_kata == "w")
			{
				$image = "Letter-W.ico";
			}
			else if($ambil_kata == "x")
			{
				$image = "Letter-X.ico";
			}
			else if($ambil_kata == "y")
			{
				$image = "Letter-Y.ico";
			}
			else if($ambil_kata == "z")
			{
				$image = "Letter-Z.ico";
			}

			$data = array(
				"username" => $this->input->post('username'),
				"email" => $this->input->post('email'),
				"password" => $this->input->post('password'),
				"nama_depan" => $this->input->post('nama_depan'),
				"nama_belakang" => $this->input->post('nama_belakang'),
				"image" => $image,
				"level" => 3
				);

			if($data['username']==null || $data['email']==null||$data['password']==null){
				$response = array(
	                'code' => 1,
	                'message' => "Data belum lengkap! : "
	            );
				if($data['username']==null) $response['message'] .= 'Username, ';
				if($data['email']==null) $response['message'] .= 'Email, ';
				if($data['password']==null) $response['message'] .= 'Kata Sandi ';
			}
			else {
				$cekNama = $this->crud->cekNamaUser($this->input->post("username"));
				if($cekNama->num_rows() < 1)
				{
					$response = $this->crud->allInsertSave($data,'users');
					header('Access-Control-Allow-Origin: *');
				}
				else
				{
					$response = array(
						'code' => 1,
						'message' => "Nama Sudah Digunakan !!!"
					);
				}
			}
			echo json_encode($response);
		}

		function logout(){
			session_destroy();
			redirect('c_main');
		}

		function count_cart()
		{

			if(isset($_SESSION["cart_item"]))
            {
                // echo '<span class="badge" style="background-color: rgba(239, 24, 24, 0.9);color: #fff;position: absolute;height:2em;font-size: 8px;margin-top: -7px;">'.count($_SESSION["cart_item"]).'</span>';

                $jml = 0;
                foreach($_SESSION['cart_item'] AS $val)
                {
                	$jml += $val['jumlah'];
            	}
                echo '<span class="badge" style="background-color: rgba(239, 24, 24, 0.9);color: #fff;position: absolute;height:2em;font-size: 8px;margin-top: -7px;">'.$jml.'</span>';
            }
            else
            {
                echo "";
            }

		}

		function proses_cart()
		{
			$aksi = $this->input->post("action");
			$code = $this->input->post("code");
			$quantity = $this->input->post("quantity");

			if(!empty($aksi))
			{
				switch($aksi) {
					case "add":
						if(!empty($quantity)) 
						{
							$cart = $this->crud->getsingledatatablewhere("dijual","id_dijual",$code);
							if($cart['harga'] == $cart['harga_diskon'])
							{
								$harga = $cart['harga'];
							}
							else
							{
								$harga = $cart['harga_diskon'];
							}
							$itemArray = array(
								$cart["kd_dijual"]=>array(
									'id_dijual' => $cart["id_dijual"],
									'judul'=>$cart["judul"],
									'jumlah'=>$quantity,
									'harga'=>$harga,
									'id_user' => $cart["id_user"]
									// 'price'=>$cekDijual[0]["price"]
								)
							);

							if(!empty($_SESSION["cart_item"])) 
							{
								if(in_array($cart["kd_dijual"],$_SESSION["cart_item"])) // param 3 bolean, jika true search string
								{
									foreach($_SESSION["cart_item"] as $k => $v) 
									{
										if($cart["kd_dijual"] == $k)
											// $_SESSION["cart_item"][$k]["quantity"] = $quantity;
											$_SESSION["cart_item"][$k]["jumlah"] = $quantity;
										// {
										// 	$_SESSION["cart_item"][$k]["jumlah"] += ($_SESSION["cart_item"][$k]["jumlah"] + $quantity);
										// 	var_dump($_SESSION["cart_item"][$k]["jumlah"]);
										// }
									}
								} 
								else 
								{
									$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
								}
							} 
							else
							{
								$_SESSION["cart_item"] = $itemArray;
							}
						}
					// var_dump($_SESSION);
					break;
					case "remove":
						if(!empty($_SESSION["cart_item"])) 
						{
							$cek = $this->crud->getsingledatatablewhere("dijual","id_dijual",$code);
							foreach($_SESSION["cart_item"] as $k => $v) {
									if($cek['kd_dijual'] == $k)
										unset($_SESSION["cart_item"][$k]);
									if(empty($_SESSION["cart_item"]))
										unset($_SESSION["cart_item"]);
							}
						}
					// var_dump($_SESSION);
					break;
					case "empty":
						unset($_SESSION["cart_item"]);
					break;		
				}

			}

			if(isset($_SESSION["cart_item"])){
				// echo "<h6>Keranjang Belanja</h6>";
				// echo "<button onclick='prosesCart(\"empty\");' class='btn btn-warning btn-block' style='margin-bottom:10px;'>Hapus Semua</button>";
	            $item_total = 0;
	            echo "<div class='table-responsive scrl' style='font-size:12px;'>
	            <table style='right:0;width:100%;' class='table'>
	            <tbody>
	            <tr>
	            <th><strong>Item</strong></th>
	            <th style='text-align:center'><strong>Jumlah</strong></th>
	            <th style='text-align:center'><strong>Harga</strong></th>
	            <th style='text-align:center'><strong>Aksi</strong></th>
	            </tr>"; 
	                            
	            foreach ($_SESSION["cart_item"] as $item):
	                echo "<tr>
	                <td>".wordwrap($item["judul"],30,"<br>\n",true)."</td>
	                <td style='text-align:center;'>".$item["jumlah"]."</td>
	                <td style='text-align:right;'>".number_format($item["harga"],0,',','.')."</td>
	                <td style='text-align:center;'><button onclick='prosesCart(\"remove\",".$item["id_dijual"].");' class='btn-md btn-danger'><i class='fa fa-close' style='color:white;'></i></button></td>
	                </tr>";

	                // echo "<tr>
	                // <td>".wordwrap($item["judul"],30,"<br>\n",true)."</td>
	                // <td style='text-align:center;'>
	                // 	<div class='col-md-7 input-group'>
	                // 		<span class='input-group-addon'>-</span>
	                // 		<input type='text' value='".$item["jumlah"]."' class='form-control input-xs text-center'>
	                // 		<span class='input-group-addon'>+</span>
	                // 	</div>
	                // </td>
	                // <td style='text-align:right;'>".number_format($item["harga"],0,',','.')."</td>
	                // <td style='text-align:center;'><button onclick='prosesCart(\"remove\",".$item["id_dijual"].");' class='btn-md btn-danger'><i class='fa fa-close' style='color:white;'></i></button></td>
	                // </tr>";
	                               
	                $item_total += ($item["harga"]*$item["jumlah"]);
	            endforeach;  
	                            
	           echo "<tr>
	            <td colspan='3' align=right><strong>Total: </strong>Rp".number_format($item_total,0,',','.')."</td>
	            <td></td>
	            </tr>
	            </tbody>
	            </table></div>";

	            if(isset($_SESSION['tc_id_user'])){ // cek jika ada session id user
	            	echo "<button class='btn btn-primary btn-block' style='margin-top:5px;' onclick='buatPesanan(".$_SESSION['tc_id_user'].");'>Buat Pesanan</button>";
	        	}
	        	else{ // cek jika tidak ada session id user
	        		echo "<button class='btn btn-primary btn-block' style='margin-top:5px;' onclick='buatPesanan();'>Buat Pesanan</button>";
	        	}
	            echo "<button onclick='prosesCart(\"empty\");' class='btn btn-danger btn-block' style='margin-bottom:10px;'>Hapus Semua</button>";
	            
	        }
	        else
	        {
	        	// echo "<h6>Keranjang Belanja</h6>";
	        	echo "<table class='table' style='font-size:12px;'>
	        	<tbody>
	        	<tr>
	        	<th><strong>Item</strong></th>
	            <th style='text-align:center'><strong>Jumlah</strong></th>
	            <th style='text-align:center'><strong>Harga</strong></th>
	            <th style='text-align:center'><strong>Aksi</strong></th>
	        	</tr>
	        	<tr>
	        	<td colspan='4'>
	        	<div class='alert alert-danger'>KERANJANG BELANJA MASIH KOSONG...!!!</div>
	        	</td>
	        	</tr>
	        	</tbody>
	        	</table>";
	        	// echo "<button class='btn btn-success btn-block'>Cek Pembayaran</button>";
	        	echo "<button class='btn btn-primary btn-block' style='margin-top:-35px;' disabled>Buat Pesanan</button>";
	        	echo "<button onclick='prosesCart(\"empty\");' class='btn btn-danger btn-block' style='margin-bottom:10px;' disabled>Hapus Semua</button>";
	        }

		}

		public function login()
		{
			require_once(APPPATH.'libraries/template.php'); 
			$main =  new template();

			$data['title'] = "Login Pengguna";
			$main->display("login",$data);
		}

		public function daftar()
		{
			require_once(APPPATH.'libraries/template.php'); 
			$main =  new template();

			$data['title'] = "Daftar Pengguna";
			$main->display("daftar",$data);
		}

	}
?>