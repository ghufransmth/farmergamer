<?php $hsl = $rtng['rating_penjual'];?>
<?php $hsl2 = $rtng['rating_promotor'];?>

<!-- <?php 
	//if($hsl == 3):
	//$nmr = 3;
?> -->
	<div class="row">

		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-body">

					<div class="form-group">
						<label class="control-label">Rating Penjual - <span style="color: green;"><?php echo $hsl;?> dari 5</span></label>
						<div class="text-right" style="color:#aaa;font-weight: bold;font-size: 12px;">(<?php echo $count2;?> Penilaian)</div>
						<!-- CEK NILAI NYA -->
						<?php if($hsl == "1" || $hsl == "2" || $hsl == "3" || $hsl == "4" || $hsl == "5"):?>
						<div style="letter-spacing:3px;font-size: 20px;padding: 5px 15px;border: 2px solid rgba(0, 0, 0, 0.1);border-radius: 4px;height:46px;" class="text-center">
							<?php for($x=0;$x<$hsl;$x++):?>
								<i class="fa fa-star gradient-icon-actived"></i>
							<?php endfor;?>
							<?php for($y=5;$y>$hsl;$y--):?>
								<!-- <i class="fa fa-star-o"></i> -->
								<i class="fa fa-star gradient-icon"></i>
							<?php endfor;?>
							<!-- <span style="color: green;letter-spacing:0px!important;font-size: 15px!important;">(<?php //echo $hsl;?>)</span> -->
						</div>
						<?php elseif($hsl > "1" && $hsl < "2" || $hsl > "2" && $hsl < "3" || $hsl > "3" && $hsl < "4" || $hsl > "4" && $hsl < "5"):?>
						<div style="letter-spacing:3px;font-size: 20px;padding: 5px 15px;border: 2px solid rgba(0, 0, 0, 0.1);border-radius: 4px;height:46px;" class="text-center">
							<?php for($x=1;$x<$hsl;$x++):?>
								<i class="fa fa-star gradient-icon-actived"></i>
							<?php endfor;?>
							<i class="fa fa-star-half-o gradient-icon-actived"></i>
							<?php for($y=4;$y>$hsl;$y--):?>
								<i class="fa fa-star gradient-icon"></i>
							<?php endfor;?>
						</div>
						<?php endif;?>
					</div>

					<div class="form-group">
						<label class="control-label">Rating Promotor - <span style="color: green;"><?php echo $hsl2;?> dari 5</span></label>
						<div class="text-right" style="color:#aaa;font-weight: bold;font-size: 12px;">(<?php echo $count2;?> Penilaian)</div>
						<div style="letter-spacing:3px;font-size: 20px;padding: 5px 15px;border: 2px solid rgba(0, 0, 0, 0.1);border-radius: 4px;height:46px;" class="text-center">
							<?php for($x=0;$x<$hsl2;$x++):?>
								<i class="fa fa-star gradient-icon-actived"></i>
							<?php endfor;?>
							<?php for($y=5;$y>$hsl2;$y--):?>
								<i class="fa fa-star gradient-icon"></i>
							<?php endfor;?>
						</div>						
					</div>

				</div>
			</div>
		</div>

		<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">

			<?php foreach($item as $value):?>
			<div class="panel panel-default">
				<div class="panel-heading">
					<?php $cari_user = $this->db->select("*")->from("users")->where("id_user", $value->id_pembeli)->get()->row_array();?>
					<img class="img-circle" src="<?php echo base_url();?>assets/custom/images/image_user/<?php echo $cari_user['image'];?>" style="height:35px;width:35px;">
					<?php echo ucwords($cari_user['username']);?>
				</div>
				<div class="panel-body">
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center">
						<?php 
                            $ambil_foto = json_decode($value->foto, true);
                            $foto = $ambil_foto[0];
                        ;?>
						<img src="<?php echo base_url();?>assets/custom/images/image_dijual/<?php echo $foto;?>" alt="Rating Pic" style="max-height: 120px;">
					</div>

					<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
						<div><?php echo $value->judul;?></div>
						<div>
							<?php if($value->nilai_rating == "1"):?>
								<i class="fa fa-star gradient-icon-actived"></i>
								<i class="fa fa-star gradient-icon"></i>
								<i class="fa fa-star gradient-icon"></i>
								<i class="fa fa-star gradient-icon"></i>
								<i class="fa fa-star gradient-icon"></i>
							<?php elseif($value->nilai_rating == "2"):?>
								<i class="fa fa-star gradient-icon-actived"></i>
								<i class="fa fa-star gradient-icon-actived"></i>
								<i class="fa fa-star gradient-icon"></i>
								<i class="fa fa-star gradient-icon"></i>
								<i class="fa fa-star gradient-icon"></i>
							<?php elseif($value->nilai_rating == "3"):?>
								<i class="fa fa-star gradient-icon-actived"></i>
								<i class="fa fa-star gradient-icon-actived"></i>
								<i class="fa fa-star gradient-icon-actived"></i>
								<i class="fa fa-star gradient-icon"></i>
								<i class="fa fa-star gradient-icon"></i>
							<?php elseif($value->nilai_rating == "4"):?>
								<i class="fa fa-star gradient-icon-actived"></i>
								<i class="fa fa-star gradient-icon-actived"></i>
								<i class="fa fa-star gradient-icon-actived"></i>
								<i class="fa fa-star gradient-icon-actived"></i>
								<i class="fa fa-star gradient-icon"></i>
							<?php else:?>
								<i class="fa fa-star gradient-icon-actived"></i>
								<i class="fa fa-star gradient-icon-actived"></i>
								<i class="fa fa-star gradient-icon-actived"></i>
								<i class="fa fa-star gradient-icon-actived"></i>
								<i class="fa fa-star gradient-icon-actived"></i>
							<?php endif;?>
						</div>
						<div><?php echo $value->testimoni;?></div>
					</div>

				</div>
			</div>
			<?php endforeach;?>

			<?php echo $kosong;?>

		</div>

	</div>
		
<!-- <?php 
	//endif;
?> -->

<!-- <?php 
	//if($hsl == 3)
	{
		//$nmr = 3;

		//echo "<div style='letter-spacing:1em;'>";
			//for($x=0;$x<$nmr;$x++)
			{
				//echo "<i class='fa fa-star' style='color:gold;'></i>";
			}
		//echo "</div>";
		
	}
?> -->