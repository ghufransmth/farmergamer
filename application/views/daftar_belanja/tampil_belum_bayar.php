			<!-- <style type="text/css">
				/*ATUR RESPONSIVE*/
			    /*@media all and (max-width: 768px) {
			        .foto-responsive {
			            max-height: 70px;
			            max-width: 70px;
			        }      
			    }*/
			</style> -->

			<div class="col-md-12" style="margin-top: 25px;">
				<ol class="breadcrumb" style="background-color: transparent;border: 0;padding: 0;">
                    <li><i class="fas fa-shopping-bag" style="color: #555;"></i><span style="color: #555;font-size:15px;font-family:latoregular;"> Daftar Belanja</span></li>
                    <li class="active"><span style="color: #555;font-size:15px;">Belum Bayar</span></li>
                </ol>
            </div>

			<!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 25px;"> -->
			<div class="col-md-8 col-md-offset-2">

            	<?php 
	            	foreach($hsl as $result):
	            	$cek_item = $this->db->select("*")->from("transaksi_dijual")->join("transaksi","transaksi.id_transaksi=transaksi_dijual.id_transaksi")->join("dijual","dijual.id_dijual=transaksi_dijual.id_dijual")->where("transaksi.id_pembayaran",$result->id_pembayaran)->group_by("transaksi_dijual.id_transaksi")->get()->result();

	            	// HITUNG JUMLAH TOTAL & JUMLAH ITEM
	            	$query1 = $this->db->select("*")->from("transaksi_dijual")->join("transaksi","transaksi.id_transaksi=transaksi_dijual.id_transaksi")->join("dijual","dijual.id_dijual=transaksi_dijual.id_dijual")->where("transaksi.id_pembayaran",$result->id_pembayaran)->get()->result();
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
	            	$count1 = count($cek_item);
	            	$count2 = $jml_item-$count1;
				    // end hitung item
	           	?>
            	<div class="panel panel-default">
	            	<div class="panel-body" style="background-color: #ffffff;">

			            <!-- <div style="color: cornflowerblue;font-size: 20px;">Transaksi Berhasil</div>
			            <div style="color: #757575;margin-bottom: 10px;">Silahkan Melakukan Pembayaran <span style="font-weight:bold;">(Max. 2x24 jam)</span></div> -->

			            <?php 
			            	foreach($cek_item as $val_item):
			            	// username
			            	$cari_username = $this->db->select("*")->from("users")->where("id_user",$val_item->id_penjual)->get()->row_array();
			            	// foto item
			            	$ambil_foto = json_decode($val_item->foto,true);
		                	$foto = $ambil_foto[0];
			            ?>
			            	<div style="border-top: 1px solid #EAEAEA;padding: 15px;margin-bottom: 5px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			            		<div class="pull-left">
				            		<img class="img-circle" src="<?php echo base_url();?>assets/custom/images/image_user/<?php echo $cari_username['image'];?>" style="height:35px;width:35px;">
				            		<?php echo ucwords($cari_username['username']);?>
				            	</div>
				            	<div class="pull-right" style="color: green;">
				            		Belum Bayar
				            	</div>
			            	</div>
			            	<div style="border-top: 1px solid #EAEAEA;padding: 15px;margin-bottom: 5px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			            		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
			           				<!-- <img src="<?php //echo base_url();?>assets/custom/images/image_dijual/<?php //echo $foto;?>" title="Image Item Belum Bayar" style="height:100px;width:100px;" class="foto-responsive"> -->
			           				<img src="<?php echo base_url();?>assets/custom/images/image_dijual/<?php echo $foto;?>" style="width:100%;height:auto;max-width: 400px;max-height: 100px;min-width: 50px;min-height: 50px;">
			           			</div>
			           			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
			           				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-size: 15px;"><?php echo $val_item->judul;?>
			           				</div>
			           				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="pull-right">x <?php echo $val_item->quantity;?></div></div>
			           				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="pull-right">Rp<?php echo number_format($val_item->harga_beli,0,',','.');?></div></div>
			           			</div>
			           	 	</div>

			            <?php 
			            	endforeach;
			            ?>

			            <?php if($count2 != 0):?>
			            <div style="border-top: 1px solid #EAEAEA;padding: 15px;margin-bottom: 5px;" class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
			            	<!-- Kode Pembayaran<br>
			            	<span style="font-size: 25px;letter-spacing: 3px;"><?php //echo $result->kode_pembayaran;?></span> -->
			            	<span style="color:#C1C1C1;">Tampilkan <?php echo $count2;?> Item Lagi</span>
			            </div>
			            <?php endif;?>

			            <div style="border-top: 1px solid #EAEAEA;border-bottom: 1px solid #EAEAEA;padding: 15px;margin-bottom: 15px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				            <?php 
				            	// $query1 = $this->db->select("*")->from("transaksi_dijual")->join("dijual","dijual.id_dijual = transaksi_dijual.id_dijual")->where("transaksi_dijual.id_transaksi",$result->id_transaksi)->get()->result();

				            	// $query1 = $this->db->select("*")->from("transaksi_dijual")->join("transaksi","transaksi.id_transaksi=transaksi_dijual.id_transaksi")->join("dijual","dijual.id_dijual=transaksi_dijual.id_dijual")->where("transaksi.id_pembayaran",$result->id_pembayaran)->get()->result();
				            	// $total = 0;
				            	// $jml_item = 0;
				            	// foreach($query1 as $value)
				            	// {
				            	// 	if($value->harga == $value->harga_diskon)
				            	// 	{
				            	// 		$hrg = $value->harga;
				            	// 	}
				            	// 	else
				            	// 	{
				            	// 		$hrg = $value->harga_diskon;
				            	// 	}
				            	// 	$total += ($value->quantity*$hrg);
				            	// 	$jml_item += $value->quantity;
				            	// }

				            	echo "<div class='pull-left' style='color:#C9C9C9;'>".$jml_item." Item</div>";
				            	echo "<div class='pull-right' style='font-weight:bold;'>Total Pembayaran: <span style='color:green;'>Rp".number_format($total,0,',','.')."</span></div>";			            	
				            ;?>
			            </div>

			            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
			            	<div class="pull-left">Bayar Sebelum <?php echo date("d-m-Y", strtotime("+1 days", strtotime($result->tgl_transaksi)));?></div>
			            </div>
			            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
			            	<a class="btn btn-danger btn-block pull-right" href="<?php echo base_url();?>daftar_belanja/bayar/<?php echo $result->kode_pembayaran;?>">Bayar Sekarang</a>
			            </div>
			            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
			            	<a class="btn btn-primary btn-block pull-right" href="javascript:void(0)" onclick="modal_konfirmasiPembayaran('<?php echo $result->kode_pembayaran;?>');">Konfirmasi Pembayaran</a>
			            </div>

		            </div>
	            </div>
	            <?php
	            	endforeach;	
	            ;?>

           	</div>

           	<?php echo $no_data;?>