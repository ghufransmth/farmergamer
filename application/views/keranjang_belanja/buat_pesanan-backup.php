<section style="background-color: #F9F9F9;padding-bottom:5px;">
    <div class="container" style="margin-top: 50px;padding-top: 70px;margin-bottom: 40px;">
        <div class="row">
            <div class="col-md-8 col-md-offset-2" style="margin-top: 25px;">

	            <?php
	            	$item_total = 0;
	            	$no = 1;
	            	// $abc = "";
	               	foreach ($_SESSION["cart_item"] as $item):

	               	$cek = $this->db->select("*")->from("dijual")->join("users","users.id_user = dijual.id_user")->where("id_dijual", $item["id_dijual"])->get()->row_array();
	                $ambil_foto = json_decode($cek["foto"],true);
	                $foto = $ambil_foto[0];

	                // $cek_iduser = $this->db->select("*")->from("dijual")->join("users","users.id_user = dijual.id_user")->where("dijual.id_user", $item["id_user"])->get()->result();

	                // $abc[] = $cek['id_user'];
	                // if($item['id_user'] != $abc)
	                // {
	                // 	$abc[] = $item['id_user'];
	                // }
	                
	            ?>
	        	<div class="panel panel-default" style="margin-top:-10px;">
	        		<div class="panel-heading" style="background-color: #ffffff;">
		        		<div>
		        			<?php echo ucwords($cek["username"]);?>
		        		</div>
		        		<div style="right:0;position: absolute;margin-top: -25px;padding-right: 45px;">
		        			<span style="color: #A1A1A1;cursor:pointer;">Ubah</span>
		        		</div>
	        		</div>
	        		<div class="panel-body">
	        			<div class="col-lg-3 col-md-3 col-sm-5 col-xs-5">
	        				<img src="<?php echo base_url();?>assets/custom/images/image_dijual/<?php echo $foto;?>" title="Cart FG <?php echo $no;?>" style="height:100px;width:100px;min-height:70px;min-width:70px;">
	        			</div>
	        			<div class="col-lg-9 col-md-9 col-sm-7 col-xs-7">
			                <h6><?php echo wordwrap($item["judul"],30,"<br>\n",true);?></h6>

			                <div style="margin-top: -10px;margin-bottom: 5px;color: green;">Rp<?php echo number_format($item["harga"],0,',','.');?></div>
			                <div style="margin-top: -10px;margin-bottom: 5px;">Stok : <?php echo $cek["jumlah"];?></div>
			                <div class="input-group col-md-4">
				                <span class="input-group-addon">-</span>
				                <input type="number" value="<?php echo $item["jumlah"];?>" class="form-control text-center" />
				                <span class="input-group-addon">+</span>
			                </div>
			           			                			                
		                </div>
		            </div>
		            <hr>
		            <div class="panel-body">
	        			<div class="col-lg-3 col-md-3 col-sm-5 col-xs-5">
	        				<img src="<?php echo base_url();?>assets/custom/images/image_dijual/<?php echo $foto;?>" title="Cart FG <?php echo $no;?>" style="height:100px;width:100px;min-height:70px;min-width:70px;">
	        			</div>
	        			<div class="col-lg-9 col-md-9 col-sm-7 col-xs-7">
			                <h6><?php echo wordwrap($item["judul"],30,"<br>\n",true);?></h6>

			                <div style="margin-top: -10px;margin-bottom: 5px;color: green;">Rp<?php echo number_format($item["harga"],0,',','.');?></div>
			                <div style="margin-top: -10px;margin-bottom: 5px;">Stok : <?php echo $cek["jumlah"];?></div>
			                <div class="input-group col-md-4">
				                <span class="input-group-addon">-</span>
				                <input type="number" value="<?php echo $item["jumlah"];?>" class="form-control text-center" />
				                <span class="input-group-addon">+</span>
			                </div>
			           			                			                
		                </div>
		             </div>


		             <!-- <?php 		             	
		             	//foreach($cek_iduser as $val):
		             	//if($val->id_dijual == $item['id_dijual']):
		             ?>
		             <div class="panel-body">
	        			<div class="col-lg-3 col-md-3 col-sm-5 col-xs-5">
	        				<img src="<?php //echo base_url();?>assets/custom/images/image_dijual/<?php //echo $foto;?>" title="Cart FG <?php //echo $no;?>" style="height:100px;width:100px;min-height:70px;min-width:70px;">
	        			</div>
	        			<div class="col-lg-9 col-md-9 col-sm-7 col-xs-7">
			                <h6><?php //echo wordwrap($val->judul,30,"<br>\n",true);?></h6>

			                <div style="margin-top: -10px;margin-bottom: 5px;color: green;">Rp<?php //echo number_format($val->harga,0,',','.');?></div>
			                <div style="margin-top: -10px;margin-bottom: 5px;">Stok : <?php //echo $val->jumlah;?></div>
			                <div class="input-group col-md-4">
				                <span class="input-group-addon">-</span>
				                <input type="number" value="<?php //echo $val->jumlah;?>" class="form-control text-center" />
				                <span class="input-group-addon">+</span>
			                </div>
			           			                			                
		                </div>
		            </div>
		            <?php 
		            	//endif;
		        		//endforeach;
		            ?> -->


		             <div class="panel-footer" style="background-color: #ffffff;">
		             	<div class="form-group">
		             	<label for="tulis_pesanan">Pesanan</label>
		             	<textarea class="form-control" placeholder="Tulis Pesanan" id="tulis_pesanan"></textarea>
		             	</div>
		             </div>
		        </div>                       
		        <?php 
		        	$no++;
		            $item_total += ($item["harga"]*$item["jumlah"]);
		            endforeach;
		        ?>
	            <!-- <button onclick="prosesCart('remove','<?php //echo $item["id_dijual"];?>');" class="btn-md btn-danger"><i class="fa fa-close" style="color:white;"></i></button> -->

		        <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-right">
		            <div class="pull-left"><span style="font-weight: bold;">Sub Total :</span><span style="color: green;font-size:20px;">Rp<?php //echo number_format($item_total,0,',','.');?></span></div>
		            <button class="btn btn-success pull-right">Checkout</button>
	            </div> -->

		        <!-- <div class="pull-left"><span style="font-weight: bold;">Sub Total :</span><span style="color: green;font-size:20px;">Rp<?php //echo number_format($item_total,0,',','.');?></span></div>
		        <button class="btn btn-success pull-right">Checkout</button> -->

		       <!--  <button class="btn btn-success pull-right">Checkout</button>
		        <div class="pull-right" style="padding-right: 15px;"><span style="font-weight: bold;">Sub Total :</span><span style="color: green;font-size:20px;">Rp<?php //echo number_format($item_total,0,',','.');?></span></div> -->
		         
		        <div class="row">
			        <div class="col-md-12">
				        <div class="pull-right">
					        <span style="font-weight: bold;">Sub Total : </span><span style="color: green;font-size:20px;">Rp<?php echo number_format($item_total,0,',','.');?></span>
				            <button class="btn btn-success">Checkout</button>
			            </div>
		            </div>
	            </div>

	            <!-- <?php //foreach($abc as $tes)
	            {
	            	//echo $tes;
	            }
	            ?> -->

            </div>
        </div>
    </div>
</section>