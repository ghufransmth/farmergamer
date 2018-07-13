<style>
    /*ATUR BREADCRUMB DARI BOOTSTRAP*/
    ol.breadcrumb li+li:before {
        padding: 8px;
        color: grey;
        content: ">";
    }

    /*EFEK WARNA GRADASI UNTUK ICON STAR FONT AWESOME*/
    .gradient-icon-actived 
    {
        background: -webkit-gradient(linear, left top, left bottom, from(yellow), to(gold));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        display: initial;
    }

    .gradient-icon 
    {
        background: -webkit-gradient(linear, left top, left bottom, from(#ddd), to(#ccc));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        display: initial;
    }
    /*END EFEK WARNA GRADASI UNTUK ICON STAR FONT AWESOME*/

</style>

    <section style="background-color: #F9F9F9;padding-bottom:5px;">
    <?php if(!isset($_SESSION['tc_id_user'])):?>
    <div class="container" style="margin-top: 90px;padding-top: 70px;margin-bottom: 40px;">
    <?php else:?>
    <div class="container" style="margin-top: 50px;padding-top: 70px;margin-bottom: 40px;">
    <?php endif;?>
            
            <div class="row">
                <div class="col-md-12">

                    <ol class="breadcrumb" style="background-color: transparent;border: 0;padding: 0;">
                        <li><span style="color: #db4a39;font-family:latoregular;">FarmerGamer</span></li>
                        <li><a style="color: #db4a39;font-family:latoregular;font-weight: bold;" href="<?php echo base_url();?>dijual/produk">Jual Produk</a></li>
                        <li><span style="color: #db4a39;font-family:latoregular;">Lihat Penilaian</span></li>
                        <li class="active"><span style="color: #db4a39;font-family:latoregular;"><?php echo $judul_item['judul'];?></span></li>
                    </ol>

                </div>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <?php 
                                $ambil_foto = json_decode($judul_item['foto'], true);
                                $foto = $ambil_foto[0];
                            ;?>
                            <div class="text-center"><img src="<?php echo base_url();?>assets/custom/images/image_dijual/<?php echo $foto;?>" alt="Gambar Item Dijual" style="width:100%;height:auto;max-width: 400px;max-height: 200px;min-width: 50px;min-height: 50px;"></div>
                            <div style="padding: 5px;"><?php echo $judul_item['judul'];?></div>

                            <?php if($judul_item['harga'] == $judul_item['harga_diskon']):?>
                            <div style="padding: 5px;">Rp<?php echo number_format($judul_item['harga'],0,',','.');?></div>
                            <?php else:?>
                            <div class="row" style="padding: 5px;">
                                <div class="col-md-12">
                                    <div style="text-decoration:line-through;color:#aaa;padding-right: 10px;" class="pull-left">Rp<?php echo number_format($judul_item['harga'],0,',','.');?></div>
                                    <div class="pull-left" style="color:green;">Rp<?php echo number_format($judul_item['harga_diskon'],0,',','.');?></div>
                                </div>
                            </div>
                            <?php endif;?>

                            <div style="padding: 5px;">
                                
                                <!-- LIHAT RATING ITEM -->
                                <?php
                                    $cek_rating = $this->db->select("*")->from("rating_dijual")->where("id_dijual",$judul_item['id_dijual'])->get();
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
                                <div class="pull-left" class="btn" title="Lihat Penilaian" style="background:transparent;outline:none;cursor:pointer;">
                                    <?php for($x=0;$x<$hasil_cekRating;$x++):?>
                                        <i class="fa fa-star gradient-icon-actived"></i>
                                    <?php endfor;?>
                                    <?php for($y=5;$y>$hasil_cekRating;$y--):?>
                                        <i class="fa fa-star gradient-icon"></i>
                                    <?php endfor;?>
                                    <?php echo $hasil_cekRating;?> / 5 (<?php echo $count_cekRating;?>)
                                </div>
                                <?php elseif($hasil_cekRating > "1" && $hasil_cekRating < "2" || $hasil_cekRating > "2" && $hasil_cekRating < "3" || $hasil_cekRating > "3" && $hasil_cekRating < "4" || $hasil_cekRating > "4" && $hasil_cekRating < "5"):?>
                                <div class="pull-left" class="btn" title="Lihat Penilaian" style="background:transparent;outline:none;cursor:pointer;">
                                    <?php for($x=1;$x<$hasil_cekRating;$x++):?>
                                        <i class="fa fa-star gradient-icon-actived"></i>
                                    <?php endfor;?>
                                    <i class="fa fa-star-half-o gradient-icon-actived"></i>
                                    <?php for($y=4;$y>$hasil_cekRating;$y--):?>
                                        <i class="fa fa-star gradient-icon"></i>
                                    <?php endfor;?>
                                    <?php echo $hasil_cekRating;?> / 5 (<?php echo $count_cekRating;?>)
                                </div>
                                <?php elseif($hasil_cekRating == "" || $hasil_cekRating == 0):?>
                                <div class="pull-left" class="btn" title="Lihat Penilaian" style="background:transparent;outline:none;cursor:pointer;">
                                    <i class="fas fa-star gradient-icon" style="font-size: 13px;"></i>
                                    <i class="fas fa-star gradient-icon" style="font-size: 13px;"></i>
                                    <i class="fas fa-star gradient-icon" style="font-size: 13px;"></i>
                                    <i class="fas fa-star gradient-icon" style="font-size: 13px;"></i>
                                    <i class="fas fa-star gradient-icon" style="font-size: 13px;"></i> <?php echo $hasil_cekRating;?> / 5 (<?php echo $count_cekRating;?>)
                                </div>
                                <?php endif;?>
                                <!-- END LIHAT RATING ITEM -->

                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">

                    <?php foreach($hsl as $value):?>                    
                    <div class="panel panel-default">

                        <div class="panel-heading col-md-12" style="margin-bottom: 10px;color: #777;">
                            <?php $cari_user = $this->db->select("*")->from("users")->where("id_user", $value->id_pembeli)->get()->row_array();?>
                            <img class="img-circle" src="<?php echo base_url();?>assets/custom/images/image_user/<?php echo $cari_user['image'];?>" style="height:35px;width:35px;">
                            <?php echo ucwords($cari_user['username']);?>
                        </div>
                            
                        <div class="panel-body">
                            
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
                            <div style="color: #c0c0c0;font-size: 12px;">25-05-2018 05.30</div>
                           
                        </div>               

                    </div>
                    <?php endforeach;?>

                    <?php echo $kosong;?>

                </div>
            </div>


    </div>
    </section>