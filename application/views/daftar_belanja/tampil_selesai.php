			<style type="text/css">
				/*ATUR RESPONSIVE*/
			    @media all and (max-width: 768px) {
			        .foto-responsive {
			            max-height: 70px;
			            max-width: 70px;
			        }      
			    }
			</style>

			<div class="col-md-12" style="margin-top: 25px;">
				<ol class="breadcrumb" style="background-color: transparent;border: 0;padding: 0;">
                    <li><i class="fas fa-shopping-bag" style="color: #555;"></i><span style="color: #555;font-size:15px;font-family:latoregular;"> Daftar Belanja</span></li>
                    <li class="active"><span style="color: #555;font-size:15px;">Selesai</span></li>
                </ol>
            </div>

			<div class="col-md-8 col-md-offset-2">

            	<?php 
	            	foreach($hsl as $result):

	            	$hsl_dijual = $this->db->select("*")->from("dijual")->where("id_dijual",$result->id_dijual)->get()->result();

	       			// HITUNG JUMLAH TOTAL & JUMLAH ITEM
	            	$query1 = $this->db->select("*")->from("transaksi_dijual")->join("transaksi","transaksi.id_transaksi=transaksi_dijual.id_transaksi")->join("dijual","dijual.id_dijual=transaksi_dijual.id_dijual")->where("transaksi.id_pembayaran",$result->id_pembayaran)->where("id_penjual", $result->id_penjual)->get()->result();
				    $total = 0;
				    $jml_item = 0;
				    foreach($query1 as $value)
				    // {
				    //     if($value->harga == $value->harga_diskon)
				    //     {
				    //         $hrg = $value->harga;
				    //     }
				    //     else
				    //     {
				    //         $hrg = $value->harga_diskon;
				    //     }
				    //     $total += ($value->quantity*$hrg);
				    //     $jml_item += $value->quantity;
				    // }
				    {
				        $total += ($value->quantity*$value->harga_beli);
				        $jml_item += $value->quantity;
				    }
				    // END HITUNG JUMLAH TOTAL & JUMLAH ITEM

				    // hitung item yang belum ditampilkan
	            	// $count1 = count($hsl_dijual);
	            	// $count2 = $jml_item-$count1;
	            	$count1 = count($query1);
	            	$count2 = $count1-1;
				    // end hitung item
	           	?>

	           	<!-- CEK APAKAH SUDAH DI NILAI ATAU BELUM -->
	           	<?php 
	           	$cek_sudahNilai = $this->db->select("*")->from("rating_dijual")->where("id_transaksi",$result->id_transaksi)->where("id_dijual",$result->id_dijual)->where("id_pembeli",$_SESSION['tc_id_user'])->get();
	           	if($cek_sudahNilai->num_rows() > 0):?>
	           	<!-- <?php //$hsl_cek = $cek_sudahNilai->row_array();?>
	           	<?php //echo $hsl_cek['nilai_rating'];?> -->

            	<div class="panel panel-default">
	            	<div class="panel-body" style="background-color: #ffffff;">

			            <?php 
			            	foreach($hsl_dijual as $val_item):
			            	// foto item
			            	$ambil_foto = json_decode($val_item->foto,true);
		            		$foto = $ambil_foto[0];
			            	// username
			            	$cari_username = $this->db->select("*")->from("users")->where("id_user",$result->id_penjual)->get()->row_array();
			            ?>
			            	<div style="border-top: 1px solid #EAEAEA;padding: 15px;margin-bottom: 5px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			            		<div class="pull-left">
				            		<img class="img-circle" src="<?php echo base_url();?>assets/custom/images/image_user/<?php echo $cari_username['image'];?>" style="height:35px;width:35px;">
				            		<?php echo ucwords($cari_username['username']);?>
				            	</div>
				            	<div class="pull-right" style="color: green;">
				            		Telah Dinilai
				            	</div>
			            	</div>
			            	<div style="border-top: 1px solid #EAEAEA;padding: 15px;margin-bottom: 5px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			            		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
			           				<!-- <img src="<?php //echo base_url();?>assets/custom/images/image_dijual/<?php //echo $foto;?>" title="Image Pesanan Selesai" style="height:100px;width:100px;" class="foto-responsive"> -->
			           				<!-- <img src="<?php //echo base_url();?>assets/custom/images/image_dijual/<?php //echo $foto;?>" alt="<?php //echo $foto;?>" style="height:70px;min-height:50px;min-width:50px;width:70px"> -->
			           				<img src="<?php echo base_url();?>assets/custom/images/image_dijual/<?php echo $foto;?>" alt="<?php echo $foto;?>" style="width:100%;height:auto;max-width: 400px;max-height: 100px;min-width: 50px;min-height: 50px;">
			           			</div>
			           			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
			           				<div style="font-size: 15px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><?php echo $val_item->judul;?></div>
			           				<div style="font-size: 15px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="pull-right">x <?php echo $result->quantity;?></div></div>
			           				<!-- <div style="font-size: 15px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-right"><div class="pull-right">Rp<?php //if($val_item->harga == $val_item->harga_diskon){echo number_format($val_item->harga,0,',','.');}else{echo number_format($val_item->harga_diskon,0,',','.');}?></div></div> -->
			           				<div style="font-size: 15px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="pull-right">Rp<?php echo number_format($result->harga_beli,0,',','.');?></div></div>
			           			</div>
			           	 	</div>

			            <?php 
			            	endforeach;
			            ?>

			            <?php if($count2 != 0):?>
			            <div style="border-top: 1px solid #EAEAEA;padding: 15px;margin-bottom: 5px;" class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
			            	<span style="color:#C1C1C1;">Tampilkan <?php echo $count2;?> Item Lagi</span>
			            </div>
			            <?php endif;?>

			            <div style="border-top: 1px solid #EAEAEA;border-bottom: 1px solid #EAEAEA;padding: 15px;margin-bottom: 15px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				            <?php 

				            	echo "<div class='pull-left' style='color:#C9C9C9;'>".$jml_item." Item</div>";
				            	echo "<div class='pull-right' style='font-weight:bold;'>Total Pembayaran: <span style='color:green;'>Rp".number_format($total,0,',','.')."</span></div>";			            		
				            ;?>
			            </div>

			            <!-- <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> -->
			            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			            	<button class="btn btn-success btn-block pull-left" onclick="modal_lihatPenilaian('<?php echo $result->id_transaksi;?>','<?php echo $result->id_penjual;?>');">Lihat Penilaian</button>
			            </div>
			            <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			            	<div class="pull-right"><i class="fa fa-check-circle"></i></div>
			            </div>
 -->
		            </div>
	            </div>

	            <!-- KALAU BELUM DINILAI -->
	        	<?php else:?>

	        	<div class="panel panel-default">
	            	<div class="panel-body" style="background-color: #ffffff;">

			            <?php 
			            	foreach($hsl_dijual as $val_item):
			            	// foto item
			            	$ambil_foto = json_decode($val_item->foto,true);
		            		$foto = $ambil_foto[0];
			            	// username
			            	$cari_username = $this->db->select("*")->from("users")->where("id_user",$result->id_penjual)->get()->row_array();
			            ?>
			            	<div style="border-top: 1px solid #EAEAEA;padding: 15px;margin-bottom: 5px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			            		<div class="pull-left">
				            		<img class="img-circle" src="<?php echo base_url();?>assets/custom/images/image_user/<?php echo $cari_username['image'];?>" style="height:35px;width:35px;">
				            		<?php echo ucwords($cari_username['username']);?>
				            	</div>
				            	<div class="pull-right" style="color: green;">
				            		Belum Dinilai
				            	</div>
			            	</div>
			            	<div style="border-top: 1px solid #EAEAEA;padding: 15px;margin-bottom: 5px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			            		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
			           				<!-- <img src="<?php //echo base_url();?>assets/custom/images/image_dijual/<?php //echo $foto;?>" title="Image Pesanan Selesai" style="height:100px;width:100px;" class="foto-responsive"> -->
			           				<img src="<?php echo base_url();?>assets/custom/images/image_dijual/<?php echo $foto;?>" alt="<?php echo $foto;?>" style="height:70px;min-height:50px;min-width:50px;width:70px">
			           			</div>
			           			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
			           				<div style="font-size: 15px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><?php echo $val_item->judul;?></div>
			           				<div style="font-size: 15px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="pull-right">x <?php echo $result->quantity;?></div></div>
			           				<!-- <div style="font-size: 15px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-right"><div class="pull-right">Rp<?php //if($val_item->harga == $val_item->harga_diskon){echo number_format($val_item->harga,0,',','.');}else{echo number_format($val_item->harga_diskon,0,',','.');}?></div></div> -->
			           				<div style="font-size: 15px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-right"><div class="pull-right">Rp<?php echo number_format($result->harga_beli,0,',','.');?></div></div>
			           			</div>
			           	 	</div>

			            <?php 
			            	endforeach;
			            ?>

			            <?php if($count2 != 0):?>
			            <div style="border-top: 1px solid #EAEAEA;padding: 15px;margin-bottom: 5px;" class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
			            	<span style="color:#C1C1C1;">Tampilkan <?php echo $count2;?> Item Lagi</span>
			            </div>
			            <?php endif;?>

			            <div style="border-top: 1px solid #EAEAEA;border-bottom: 1px solid #EAEAEA;padding: 15px;margin-bottom: 15px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				            <?php 

				            	echo "<div class='pull-left' style='color:#C9C9C9;'>".$jml_item." Item</div>";
				            	echo "<div class='pull-right' style='font-weight:bold;'>Total Pembayaran: <span style='color:green;'>Rp".number_format($total,0,',','.')."</span></div>";			            		
				            ;?>
			            </div>

			            <!-- <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
			            	Belum Ada Penilaian
			            </div>
			            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> -->
			            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			            	<button class="btn btn-primary btn-block pull-right" onclick="modal_penilaian('<?php echo $result->id_transaksi;?>','<?php echo $result->id_penjual;?>');">Beri Penilaian</button>
			            </div>

		            </div>
	            </div>

	        	<?php endif;?>

	            <?php
	            	// echo $result->id_dijual.'<br>';
	            	// echo $result->id_pembayaran.'<br>';
	            	// echo $result->id_transaksi.'<br>';
	            	// echo $result->id_penjual;
	            	endforeach;	
	            ;?>

           	</div>

           	<?php echo $no_data;?>