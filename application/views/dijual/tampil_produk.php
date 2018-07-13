                <?php foreach($hasil AS $val):?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="margin-top: 20px;">
                    <div class="card" style="border:1px solid #ECECEC;width:100%;background:#ffffff;box-shadow: 0 1px 1px rgba(0,0,0,0.1);">
                    <!-- <div class="card" style="border:1px solid #ccc;width:100%;background:#ffffff;box-shadow: 0 1px 5px rgba(0,0,0,0.1);"> -->

                        <?php 
                            $ambil_foto = json_decode($val->foto, true);
                            $foto = $ambil_foto[0];
                        ;?>

                        <div onclick="detail('<?php echo $val->id_dijual;?>','<?php echo url_title($val->judul);?>');" style="cursor:pointer;">
                            <img class="card-img-top img-responsive" src="<?php echo base_url();?>assets/custom/images/image_dijual/<?php echo $foto;?>" alt="Gambar Dijual" style="height: 12em;margin:0 auto;text-align:center;min-height:80%;min-width:60%;"> <!-- KALAU MAU FULL PANJANG IMAGE PAKE WIDTH 100%-->
                        </div>

                        <div class="card-body" style="padding: 10px;">
                            <!-- <h5 class="card-title" style="text-transform: capitalize;overflow-wrap:break-word;margin-bottom: 5px;"><?php //echo $val->judul;?></h5> -->

                            <!-- line-height, height, dan overflow untuk kontrol hanya 2 baris saja yang ditampilkan 
                                (text-transform : capitalize untuk huruf besar di awal kalimat).
                            -->
                            <a href="javascript:void(0)" onclick="detail('<?php echo $val->id_dijual;?>','<?php echo url_title($val->judul);?>');"><h5 class="card-title" style="overflow-wrap:break-word;margin-bottom: 5px;line-height: 1.5em;height: 3em;overflow: hidden;color:#777;"><?php echo character_limiter($val->judul,30);?></h5></a>

                            <!-- <h5 class="card-title" style="line-height: 1.5em;height: 3em;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;width: 100%;"><?php //echo $val->judul;?></h5> -->

                            <?php if($val->harga == $val->harga_diskon):?>
                            <h5 class="card-text" style="margin-bottom: 5px;">Rp<?php echo number_format($val->harga,0,',','.');?></h5>
                            <?php else:?>
                            <div class="row">
                                <div class="col-md-12">
                                    <h5 style="text-decoration:line-through;color:#aaa;margin-bottom:5px;padding-right: 10px;" class="pull-left">Rp<?php echo number_format($val->harga,0,',','.');?></h5>
                                    <h5 style="margin-bottom:5px;" class="card-text pull-left">Rp<?php echo number_format($val->harga_diskon,0,',','.');?></h5>
                                </div>
                            </div>
                            <?php endif;?>

                            <!-- cek di table favorit_dijual -->
                            <?php 

                                if(isset($_SESSION['tc_id_user']))
                                {
                                    $query99 = $this->db->select("*")->from("favorit_dijual")->where("id_dijual", $val->id_dijual)->where("id_user", $_SESSION['tc_id_user'])->get();
                                    if($query99->num_rows() > 0)
                                    {
                                        $str_suka = "unlike";
                                        $judul = "tidak suka";
                                        $red = "color:red;";
                                    }
                                    else
                                    {
                                        $str_suka = "like";
                                        $judul = "suka";
                                        $red = "";
                                    }
                                }
                                else
                                {
                                    $str_suka = "like";
                                    $judul = "Suka";
                                    $red = "";
                                }
                            ;?>
                            <!-- end cek di table favorit_dijual -->

                            <div class="pull-left" id="suka<?php echo $val->id_dijual;?>"><i class="fa fa-heart" style="font-size: 13px;cursor:pointer;<?php echo $red;?>" title="<?php echo ucwords($judul);?>" onclick="addLikes('<?php echo $val->id_dijual;?>','<?php echo $str_suka;?>');"></i> (<?php echo $val->favorit;?>)</div>

                            <!-- LIHAT RATING ITEM -->
                            <?php
                                $cek_rating = $this->db->select("*")->from("rating_dijual")->where("id_dijual",$val->id_dijual)->get();
                                if($cek_rating->num_rows() > 0)
                                {
                                    $cekRating = $cek_rating->result();
                                    $count_cekRating = count($cekRating);
                                    $hitung_ttlRating = 0;
                                    foreach($cekRating AS $val_cekRating)
                                    {
                                        $hitung_ttlRating += $val_cekRating->nilai_rating;
                                    }
                                    $hasil_cekRating = $hitung_ttlRating/$count_cekRating;
                                }
                                else
                                {
                                    $hasil_cekRating = 0;
                                    $count_cekRating = 0;
                                }
                            ;?>

                            <?php if($hasil_cekRating == "1" || $hasil_cekRating == "2" || $hasil_cekRating == "3" || $hasil_cekRating == "4" || $hasil_cekRating == "5"):?>
                            <div class="pull-right" class="btn" title="Lihat Penilaian" style="background:transparent;outline:none;cursor:pointer;" onclick="lihat_penilaianProduk('<?php echo $val->id_dijual;?>');">
                                <?php for($x=0;$x<$hasil_cekRating;$x++):?>
                                    <i class="fa fa-star gradient-icon-actived"></i>
                                <?php endfor;?>
                                <?php for($y=5;$y>$hasil_cekRating;$y--):?>
                                    <i class="fa fa-star gradient-icon"></i>
                                <?php endfor;?>
                                (<?php echo $count_cekRating;?>)
                            </div>
                            <?php elseif($hasil_cekRating > "1" && $hasil_cekRating < "2" || $hasil_cekRating > "2" && $hasil_cekRating < "3" || $hasil_cekRating > "3" && $hasil_cekRating < "4" || $hasil_cekRating > "4" && $hasil_cekRating < "5"):?>
                            <div class="pull-right" class="btn" title="Lihat Penilaian" style="background:transparent;outline:none;cursor:pointer;" onclick="lihat_penilaianProduk('<?php echo $val->id_dijual;?>');">
                                <?php for($x=1;$x<$hasil_cekRating;$x++):?>
                                    <i class="fa fa-star gradient-icon-actived"></i>
                                <?php endfor;?>
                                <i class="fa fa-star-half-o gradient-icon-actived"></i>
                                <?php for($y=4;$y>$hasil_cekRating;$y--):?>
                                    <i class="fa fa-star gradient-icon"></i>
                                <?php endfor;?>
                                (<?php echo $count_cekRating;?>)
                            </div>
                            <?php elseif($hasil_cekRating == "" || $hasil_cekRating == 0):?>
                            <div class="pull-right" class="btn" title="Lihat Penilaian" style="background:transparent;outline:none;cursor:pointer;" onclick="lihat_penilaianProduk('<?php echo $val->id_dijual;?>');">
                                <i class="fas fa-star gradient-icon" style="font-size: 13px;"></i>
                                <i class="fas fa-star gradient-icon" style="font-size: 13px;"></i>
                                <i class="fas fa-star gradient-icon" style="font-size: 13px;"></i>
                                <i class="fas fa-star gradient-icon" style="font-size: 13px;"></i>
                                <i class="fas fa-star gradient-icon" style="font-size: 13px;"></i> (<?php echo $count_cekRating;?>)
                            </div>
                            <?php endif;?>
                            <!-- END LIHAT RATING ITEM -->

                        </div>

                        <div class="btn-group btn-block" style="margin-top: 5px;">
                            <a href="#" class="btn btn-primary col-md-6 col-sm-6 col-xs-6" style="border-radius:0px;"><i class="fas fa-comments" style="color: #fff;font-size: 20px;"></i></a>
                            <a href="javascript:void(0)" class="btn btn-danger col-md-6 col-sm-6 col-xs-6" onclick="preInsertCart('<?php echo $val->id_dijual;?>','<?php if($val->harga == $val->harga_diskon){echo number_format($val->harga,0,',','.');}else{echo number_format($val->harga_diskon,0,',','.');}?>','<?php echo $val->jumlah;?>','<?php echo $foto;?>');" style="border-radius:0px;"><i class="fa fa-cart-plus" style="color: #fff;font-size: 20px;"></i></a>
                        </div>

                    </div>
                </div>
                <?php endforeach;?>