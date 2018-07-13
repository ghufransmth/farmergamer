<style>
    /*ATUR BREADCRUMB DARI BOOTSTRAP*/
    ol.breadcrumb li+li:before {
        padding: 8px;
        color: #555;
        font-family: FontAwesome;
        content: "\f054";
        font-size: 12px;
    }

    /*CSS UNTUK ATUR BACKGROUND COLOR UNITEGALLERY*/
    .ug-gallery-wrapper .ug-slider-wrapper 
    {   
        background-color: #fff!important;
    }

    /*.ug-gallery-wrapper .ug-strip-panel 
    {
        background-color: #fff!important;
    }*/
    /*CSS UNTUK ATUR BACKGROUND COLOR UNITEGALLERY*/

    /*CSS UNTUK NAV TABS*/
    .nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus
    {
        color: #4854fb;
    }

    a
    {
        color: #555;
    }
    /*END CSS UNTUK NAV TABS*/

    /*REMOVE SPINNER FROM INPUT NUMBER*/
    input[type=number]::-webkit-inner-spin-button, 
    input[type=number]::-webkit-outer-spin-button { 
        -webkit-appearance: none; /* for chrome */
        -moz-appearance: none; /* for firefox*/
        appearance: none;
        margin: 0; 
    }
    input[type=number] {
        -moz-appearance: textfield; /* for firefox*/
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
                    <li><span style="color: #555;font-size:15px;font-family:latoregular;">FarmerGamer</span></li>
                    <li><span style="color: #555;font-size:15px;font-family:latoregular;">Dijual</span></li>
                    <li><?php echo anchor($this->uri->segment(1).'/produk','Produk','style="color:#555;font-size:15px;"');?></li>
                    <li><span style="color: #555;font-size:15px;font-family:latoregular;"><?php echo $nm_game['nama_game'];?></span></li>
                    <li><span style="color: #555;font-size:15px;font-family:latoregular;"><?php echo $detail_item['judul'];?></span></li>
                </ol>

            </div>

            <div class="col-md-4">

                <div class="panel panel-default" style="border: 1px solid #F9F9F9;box-shadow: 1px 1px 0px 0px #e9e9e9;">
                    <div class="panel-body">
                        <div class="row" style="margin-top: -15px;margin-bottom: -15px;">
                        <div id="gallery" style="display:none;">

                            <?php foreach($gmbr AS $val_gmbr):?>
                                <!-- <?php //if($val_gmbr != "no_image.jpg"):?> -->
                                <img alt="<?php echo $val_gmbr;?>"
                                 src="<?php echo base_url();?>assets/custom/images/image_dijual/<?php echo $val_gmbr;?>"
                                 data-image="<?php echo base_url();?>assets/custom/images/image_dijual/<?php echo $val_gmbr;?>"
                                 data-description="<?php echo $val_gmbr;?>">

                                <!-- <?php //else:?>
                                <img alt="<?php //echo $val_gmbr;?>"
                                 data-image="<?php //echo base_url();?>assets/custom/images/image_dijual/<?php //echo $val_gmbr;?>"
                                 >

                                <?php //endif;?> -->
                            <?php endforeach;?>

                            <!-- <img alt="Preview Image 1"
                                 src="<?php //echo base_url();?>assets/custom/images/properti/1.jpg"
                                 data-image="<?php //echo base_url();?>assets/custom/images/properti/1.jpg"
                                 data-description="Preview Image 1 Description">
                        
                            <img alt="Preview Image 2"
                                 src="<?php //echo base_url();?>assets/custom/images/properti/2.jpg"
                                 data-image="<?php //echo base_url();?>assets/custom/images/properti/2.jpg"
                                 data-description="Preview Image 2 Description">
                            
                            <img alt="Preview Image 3"
                                 src="<?php //echo base_url();?>assets/custom/images/properti/3.jpg"
                                 data-image="<?php //echo base_url();?>assets/custom/images/properti/3.jpg"
                                 data-description="Preview Image 3 Description"> -->
                                             
                        </div>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div id="love" class="pull-left">
                            <div class="btn btn-default" onclick="addLikes();" id="lg-suka"><i class="fa fa-heart" style="font-size: 13px;cursor:pointer;" title=""></i> Suka (0)
                            </div>
                        </div>

                        <div style="margin-top: 5px;margin-left: 7px;" class="pull-right">
                            <a href="#" title="Facebook"><span class="dot-fb"><i class="fa fa-facebook" style="color: #fff;font-size: 20px;"></i></span></a>
                            <a href="#" title="Twitter"><span class="dot-twitter"><i class="fa fa-twitter" style="color: #fff;font-size: 20px;"></i></span></a>
                            <a href="#" title="Google Plus"><span class="dot-google"><i class="fab fa-google-plus" style="color: #fff;font-size: 20px;"></i></span></a>
                            <a href="#" title="LinkedIn"><span class="dot-linked-in"><i class="fa fa-linkedin" style="color: #fff;font-size: 20px;"></i></span></a>
                        </div>
                    </div>

                </div> 

                <!-- <div class="panel panel-default" style="margin-top: -15px;border: 1px solid #F9F9F9;box-shadow: 1px 1px 0px 0px #e9e9e9;">
                    <div class="panel-body">
                        <div style="margin-top: 5px;margin-left: 7px;letter-spacing: 1em;" class="text-center"> -->
                            <!-- <span style="letter-spacing: 0em!important;">Share</span> -->
                            <!-- <a href="#" title="Facebook"><span class="dot-fb"><i class="fa fa-facebook" style="color: #fff;font-size: 20px;"></i></span></a>
                            <a href="#" title="Twitter"><span class="dot-twitter"><i class="fa fa-twitter" style="color: #fff;font-size: 20px;"></i></span></a>
                            <a href="#" title="Google Plus"><span class="dot-google"><i class="fab fa-google-plus" style="color: #fff;font-size: 20px;"></i></span></a>
                            <a href="#" title="LinkedIn"><span class="dot-linked-in"><i class="fa fa-linkedin" style="color: #fff;font-size: 20px;"></i></span></a>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="panel panel-default" style="margin-top: -15px;border: 1px solid #F9F9F9;box-shadow: 1px 1px 0px 0px #e9e9e9;">
                    <div class="panel-body">
                        <div class="text-center">

                            <div id="love">
                                <div class="btn btn-default pull-left col-lg-6 col-md-6 col-sm-12 col-xs-12" onclick="addLikes();" id="lg-suka"><i class="fa fa-heart" style="font-size: 13px;cursor:pointer;" title=""></i> Suka (0)
                                </div>
                            </div>
                            <button class="btn btn-default pull-right col-lg-6 col-md-6 col-sm-12 col-xs-12" class="btn btn-default" title="Lihat Penilaian" style="cursor:pointer;">
                                <i class="fas fa-star gradient-icon" style="font-size: 13px;"></i>
                                Penilaian (0)
                            </button>   
                            
                        </div>
                    </div>
                </div> -->

                <!-- <div class="panel panel-default" style="margin-top: -15px;border: 1px solid #F9F9F9;box-shadow: 1px 1px 0px 0px #e9e9e9;">
                    <div class="panel-body">

                        <div id="love" class="pull-left">
                            <div class="btn btn-default" onclick="addLikes();" id="lg-suka"><i class="fa fa-heart" style="font-size: 13px;cursor:pointer;" title=""></i> Suka (0)
                            </div>
                        </div>

                        <div style="margin-top: 5px;margin-left: 7px;" class="pull-right">
                            <a href="#" title="Facebook"><span class="dot-fb"><i class="fa fa-facebook" style="color: #fff;font-size: 20px;"></i></span></a>
                            <a href="#" title="Twitter"><span class="dot-twitter"><i class="fa fa-twitter" style="color: #fff;font-size: 20px;"></i></span></a>
                            <a href="#" title="Google Plus"><span class="dot-google"><i class="fab fa-google-plus" style="color: #fff;font-size: 20px;"></i></span></a>
                            <a href="#" title="LinkedIn"><span class="dot-linked-in"><i class="fa fa-linkedin" style="color: #fff;font-size: 20px;"></i></span></a>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="panel panel-default" style="margin-top: -15px;border: 1px solid #F9F9F9;box-shadow: 1px 1px 0px 0px #e9e9e9;">
                    <div class="panel-body">
                        <div class="text-center">
                            <div class="btn-group" id="love">
                                <button class="btn btn-default" onclick="addLikes();" id="lg-suka"><i class="fa fa-heart" style="font-size: 13px;" title=""></i> Suka (0)
                                    </button>
                                <button class="btn btn-default" class="btn btn-default" title="Lihat Penilaian" style="cursor:pointer;">
                                    <i class="fas fa-star gradient-icon" style="font-size: 13px;"></i>
                                    Penilaian (0)
                                </button>   
                            </div>
                        </div>
                    </div>
                </div> -->

            </div>

            <div class="col-md-8">
                <div class="panel panel-default" style="border: 1px solid #F9F9F9;box-shadow: 1px 1px 0px 0px #e9e9e9;">
                    <div class="panel-body">
                        <ul>
                            <li><div style="overflow: hidden;text-overflow: ellipsis;display: block;"><h1 style="font-size: 1.5rem;font-weight: 500!important;margin: 0;display: inline-block;color:rgba(0,0,0,.8);"><?php echo $detail_item['judul'];?></h1></div></li>
                            <li>
                                <?php if($detail_item['harga'] == $detail_item['harga_diskon']):?>
                                <h5 style="font-size: 20px;color: green;margin-bottom: 5px;">Rp<?php echo number_format($detail_item['harga'],0,',','.');?></h5>
                                <?php else:?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 style="text-decoration:line-through;color:#aaa;padding-right: 10px;font-size: 15px;margin-bottom: 5px;" class="pull-left">Rp<?php echo number_format($detail_item['harga'],0,',','.');?></h5>
                                        <h5 style="color: green;font-size: 20px;margin-bottom: 5px;" class="pull-left">Rp<?php echo number_format($detail_item['harga_diskon'],0,',','.');?></h5>
                                    </div>
                                </div>
                                <?php endif;?>      
                            </li>

                            <li><div style="color: #ababab;">Belum Ada Penilaian | 0 Terjual Setiap Bulan</div></li>

                            <!-- <li>KD. Dijual : <?php //echo $detail_item['kd_dijual'];?></li>
                            <li>Jenis Dijual : <?php //echo ucwords($detail_item['jenis_dijual']);?></li>
                            <li>Username : <?php //echo ucwords($detail_item['username']);?></li>
                            <li>Nama Produk / Jasa : <?php //echo ucwords($detail_item['nama_dijual']);?></li>
                            <li>Nama Game : <?php //echo $detail_item['nama_game'];?></li>
                            <li>Kategori Produk / Jasa : 
                                <?php 
                                //foreach($ktgr AS $val_ktgr)
                                {
                                    //echo ucwords($val_ktgr).', ';
                                }
                                ;?>
                            </li>
                            <li>Keterangan : <?php //echo ucwords($detail_item['keterangan']);?></li> -->

                        </ul>

                        <!-- <div class="row"><div style="color: #ababab;" class="col-md-12">Belum Ada Penilaian | 0 Terjual Setiap Bulan</div></div> -->

                        <div class="row" style="margin-top: 15px;padding-top: 15px;border-top: 1px solid #e9e9e9;">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <div style="margin-top: 10px;">Jumlah</div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-sm-12">
                                <div class="input-group">
                                    <span class="btn btn-success input-group-addon" style="font-weight:bold;" onclick="spinner_kurang(<?php echo $detail_item['id_dijual'];?>);">-</span>
                                    <input type="number" value="1" min="1" max="<?php echo $detail_item['jumlah'];?>" placeholder="Jumlah" class="form-control text-center" required autofocus id="qty_<?php echo $detail_item['id_dijual'];?>" onkeypress="validasi_spinner_number(<?php echo $detail_item['id_dijual'];?>,<?php echo $detail_item['jumlah'];?>);"/>
                                    <span class="btn btn-success input-group-addon" style="font-weight:bold;" onclick="spinner_tambah(<?php echo $detail_item['id_dijual'];?>,<?php echo $detail_item['jumlah'];?>);">+</span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div style="margin-top: 10px;color: #ababab;">Tersisa <?php echo $detail_item['jumlah'];?> buah</div>
                            </div>
                         </div>

                        <div style="margin-top: 15px;border-top: 1px solid #e9e9e9;padding-top: 15px;">
                            <button class="btn btn-primary"><i class="fas fa-comments" style="color: #fff;font-size: 17px;"></i> Chat Penjual</button>
                            <button class="btn btn-danger" onclick="prosesCart('add',<?php echo $detail_item['id_dijual'];?>)"><i class="fa fa-cart-plus" style="color: #fff;font-size: 17px;"></i> Masukkan Keranjang</button>
                            <button class="btn btn-success">Beli Sekarang</button>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default" style="border: 1px solid #F9F9F9;box-shadow: 1px 1px 0px 0px #e9e9e9;">
                    <div class="panel-body" style="border-bottom: 2px solid #F9F9F9;cursor: pointer;">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="padding-right: 25px;margin-bottom: 5px;">
                                    <img src="<?php echo base_url();?>assets/custom/images/image_user/<?php echo $info_usr['image'];?>" style="height:35px;width:35px;min-width: 35px;" class="img-circle">
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-10" style="margin-top: -5px;">
                                    <ul>
                                        <li><div><?php echo ucwords($info_usr['username']);?></div></li>
                                        <li><div style="font-size: 12px;color: #ababab;">Aktif 10 Menit Lalu</div></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="pull-right"><button class="btn btn-default">Kunjungi Toko</button></div>
                                    <div class="pull-right" style="margin-right: 5px;"><button class="btn btn-default">Ikuti</button></div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="panel-body">
                        <div class="col-md-12 text-center">
                            
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="border: 1px solid #E9E9E9;padding: 5px;">
                                <i class="fa fa-briefcase"></i> <span style="color: green;">5</span>
                                <div class="col-md-12" style="font-size: 13px;color: #ababab">Produk</div>
                                <!-- <div class="col-md-12" style="font-size: 13px;color: #ababab">Produk / Jasa</div> -->
                                <!-- <div class="col-md-12" style="font-size: 13px;color: #ababab">Jual Produk / Jasa</div> -->
                                <!-- <div class="col-md-12" style="font-size: 13px;color: #ababab">Item</div> -->
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="border: 1px solid #E9E9E9;padding: 5px;">
                                <i class="fa fa-suitcase"></i> <span style="color: green">5</span>
                                <div class="col-md-12" style="font-size: 13px;color: #ababab">Jasa</div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="border: 1px solid #E9E9E9;padding: 5px;">
                                <i class="fa fa-star"></i> <span style="color: green">3.5</span>
                                <div class="col-md-12" style="font-size: 13px;color: #ababab">Rating Penjual</div>
                            </div>
                            <!-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="border: 1px solid #E9E9E9;padding: 5px;">
                                <i class="fa fa-star"></i> <span style="color: green">0</span>
                                <div class="col-md-12" style="font-size: 13px;color: #ababab">Rating Promotor</div>
                            </div> -->
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="border: 1px solid #E9E9E9;padding: 5px;">
                                <i class="fas fa-user-circle"></i> <span style="color: green">8 Bulan Lalu</span>
                                <div class="col-md-12" style="font-size: 13px;color: #ababab">Bergabung</div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="panel panel-default" style="border: 1px solid #F9F9F9;box-shadow: 1px 1px 0px 0px #e9e9e9;">
                    <div class="panel-body">

                        <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#rincian_produk">RINCIAN PRODUK</a></li>
                          <li><a data-toggle="tab" href="#penilaian">PENILAIAN (<?php echo count($hsl);?>)</a></li>
                        </ul>

                        <div class="tab-content">
                          <div id="rincian_produk" class="tab-pane fade in active">
                            
                            <div class="col-md-12" style="padding-top: 10px;">
                                <div style="padding-bottom: 10px;"><?php echo $detail_item['keterangan'];?></div>

                                <div class="tabel-responsive">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td width="20%" style="background: #e9e9e9b8;">Jenis Dijual</td>
                                            <td><?php echo ucwords($detail_item['jenis_dijual']);?></td>
                                        </tr>
                                        <tr>
                                            <td width="20%" style="background: #e9e9e9b8;">Nama Produk / Jasa</td>
                                            <td><?php echo ucwords($detail_item['nama_dijual']);?></td>
                                        </tr>
                                        <tr>
                                            <td width="20%" style="background: #e9e9e9b8;">Nama Game</td>
                                            <td><?php echo $nm_game['nama_game'];?></td>
                                        </tr>
                                        <tr>
                                            <td width="20%" style="background: #e9e9e9b8;">Kategori</td>
                                            <td>
                                                <?php 
                                                foreach($ktgr AS $val_ktgr)
                                                {
                                                    echo ucwords($val_ktgr).', ';
                                                }
                                                ;?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="20%" style="background: #e9e9e9b8;">Stok</td>
                                            <td><?php echo $detail_item['jumlah'];?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                          </div>
                          <div id="penilaian" class="tab-pane fade">

                            <div class="col-md-12" style="padding-top: 10px;">


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


                    </div>
                </div>

            </div>



        </div>
    </div>
    </section>

<script type="text/javascript">

    function spinner_tambah(id_dijual,stk)
    {   
        var jt = $("#qty_"+id_dijual).val();
        if(jt < stk)
        {
            var tambah_jt = (jt*1)+1;
            $("#qty_"+id_dijual).val(tambah_jt);
        }
                
    }

    function spinner_kurang(id_dijual)
    {
        var jtransaksi = $("#qty_"+id_dijual).val();
            if(jtransaksi > 1)
            {
                var kurang_jt = (jtransaksi*1)-1;
                $("#qty_"+id_dijual).val(kurang_jt);
            }
            else
            {
                $("#qty_"+id_dijual).val(jtransaksi);
            }
                
    }
            
    // // form validasi client side untuk insert
    function validasi_spinner_number(id_dijual,stk){

        $("#qty_"+id_dijual).keyup(function(e){
            var key = (e.which) ? e.which : e.keyCode;
            if( key == 13 ){ filterLeads(e) }

            var jml_t = $("#qty_"+id_dijual).val();
            if(jml_t < 1 || jml_t > stk)
            {
                $("#qty_"+id_dijual).val("");
                // return false;
            }
            // console.log(jml_t)

        });

    }

    jQuery(document).ready(function(){

        // jQuery("#gallery").unitegallery();

        jQuery("#gallery").unitegallery({
            // slider_enable_arrows:false,
            // slider_enable_zoom_panel:false,
            // // slider_textpanel_enable_title:true,
            // theme_enable_text_panel: true, //untuk menampilkan text panel
            // slider_textpanel_bg_opacity:0.5,
            // thumb_width:120,
            // thumb_height:60,
            // thumb_border_color: "#aea703",
            // thumb_over_border_color: "#ded84d",
            // thumb_selected_border_width:4, // ketebalan garis di gambar
            // thumb_selected_border_color: "#ded84d",
            // thumb_round_corners_radius:2,
            // thumb_color_overlay_effect:false,
            // thumb_image_overlay_effect:true, // efek gambarnya
            // thumb_transition_duration:500,
            // thumb_transition_easing: "linear",
            // strippanel_enable_buttons:false,
            // strippanel_enable_handle:false,
            // theme_enable_hidepanel_button:false

            gallery_theme:"compact",     //example how to change skin to "compact"
            gallery_images_preload_type:"minimal",      //all , minimal , visible - preload type of the images.
                                                        //minimal - only image nabours will be loaded each time.
                                                        //visible - visible thumbs images will be loaded each time.
                                                        //all - load all the images first time.
            gallery_preserve_ratio: true,               //true, false - preserver ratio when on window resize
            //gallery_background_color: "white",               //set custom background color. If not set it will be taken from css.

            //gallery_width:900,                          //gallery width     
            //gallery_height:500,                         //gallery height    
            //gallery_min_width: 400,                     //gallery minimal width when resizing
            //gallery_min_height: 300,                    //gallery minimal height when resizing
            gallery_width:700,             //900                  
            gallery_height:400,          //500                
            gallery_min_width: 150,         // 150            
            gallery_min_height: 300,       //400 
            gallery_debug_errors:true,     //show error message when there is some error on the gallery area.            

            slider_control_swipe:false,   //true,false - enable swiping control
            slider_control_zoom:true,     //true, false - enable zooming control
            slider_zoom_max_ratio: 3,     //max zoom ratio
            slider_loader_type: 3,        //shape of the loader (1-7) / gambar loadingnya
            slider_scale_mode: "fill",    //fit: scale down and up the image to always fit the slider
                                         //down: scale down only, smaller images will be shown, don't enlarge images (scale up)
                                         //fill: fill the entire slider space by scaling, cropping and centering the image
            // slider_scale_mode: "fit", // masih bingung mau pake fit atau fill
            slider_enable_arrows:false,
            slider_enable_zoom_panel:false,
            slider_transition: "fade", //fade, slide - the transition of the slide change
            slider_enable_progress_indicator:false,
            slider_enable_play_button:false,
            slider_enable_fullscreen_button:false,
            slider_enable_text_panel:false,
            slider_textpanel_enable_title:false,

            slider_enable_bullets: true,     //enable the bullets onslider element
            slider_bullets_skin: "",          //skin of the bullets, if empty inherit from gallery skin
            slider_bullets_space_between: -1, //set the space between bullets. If -1 then will be set default space from the skins
            slider_bullets_align_hor:"center",   //left, center, right - bullets horizontal align
            slider_bullets_align_vert:"bottom",  //top, middle, bottom - bullets vertical algin
            slider_bullets_offset_hor:0,         //bullets horizontal offset 
            slider_bullets_offset_vert:10,       //bullets vertical offset

            // thumb_image_overlay_effect:true,
            // thumb_image_overlay_type: "blur",
            // thumb_width:88,          //thumb width 88
            // thumb_height:50,         //thumb height 50
            // thumb_fixed_size:false,   //true,false - fixed/dynamic thumbnail width

            strippanel_enable_handle:false,
            gridpanel_enable_handle:false

                    // //theme options
                    
                    // theme_enable_fullscreen_button: true,   //show, hide the theme fullscreen button. The position in the theme is constant
                    // theme_enable_play_button: true,         //show, hide the theme play button. The position in the theme is constant
                    // theme_enable_hidepanel_button: true,    //show, hide the hidepanel button
                    // theme_enable_text_panel: true,          //enable the panel text panel. 
                    
                    // theme_text_padding_left: 20,            //left padding of the text in the textpanel
                    // theme_text_padding_right: 5,            //right paddin of the text in the textpanel
                    // theme_text_align: "left",               //left, center, right - the align of the text in the textpanel
                    // theme_text_type: "title",               //title, description - text that will be shown on the text panel, title or description
                    
                    // theme_hide_panel_under_width: 480       //hide panel under certain browser width, if null, don't hide

                    // // gallery options
                
                     //gallery_width:900,                          //gallery width     
                     //gallery_height:500,                         //gallery height
    
                     //gallery_min_width: 200,                     //gallery minimal width when resizing
                     //gallery_min_height: 300,                    //gallery minimal height when resizing
    
                    // gallery_skin:"default",                     //default, alexis etc... - the global skin of the gallery. Will change all gallery items by default.
    
                    // gallery_images_preload_type:"minimal",      //all , minimal , visible - preload type of the images.
                    //                                             //minimal - only image nabours will be loaded each time.
                    //                                             //visible - visible thumbs images will be loaded each time.
                    //                                             //all - load all the images first time.
    
                    // gallery_autoplay:false,                     //true / false - begin slideshow autoplay on start
                    // gallery_play_interval: 3000,                //play interval of the slideshow
                    // gallery_pause_on_mouseover: true,           //true,false - pause on mouseover when playing slideshow true/false
    
                    // gallery_control_thumbs_mousewheel:false,    //true,false - enable / disable the mousewheel
                    // gallery_control_keyboard: true,             //true,false - enable / disble keyboard controls
                    // gallery_carousel:true,                      //true,false - next button on last image goes to first image.
    
                    // gallery_preserve_ratio: true,               //true, false - preserver ratio when on window resize
                    // gallery_debug_errors:true,                  //show error message when there is some error on the gallery area.
                    //gallery_background_color: "white",               //set custom background color. If not set it will be taken from css.
                        
                    // //slider options: 
    
                    // slider_scale_mode: "fill",                  //fit: scale down and up the image to always fit the slider
                    //                                             //down: scale down only, smaller images will be shown, don't enlarge images (scale up)
                    //                                             //fill: fill the entire slider space by scaling, cropping and centering the image
                    // slider_scale_mode_media: "fill",            //fit, down, full scale mode on media items
                    // slider_scale_mode_fullscreen: "down",       //fit, down, full scale mode on fullscreen.
                    // slider_item_padding_top: 0,                 //padding top of the slider item
                    // slider_item_padding_bottom: 0,              //padding bottom of the slider item
                    // slider_item_padding_left: 0,                //padding left of the slider item
                    // slider_item_padding_right: 0,               //padding right of the slider item
    
                    // slider_transition: "slide",                 //fade, slide - the transition of the slide change
                    // slider_transition_speed:300,                //transition duration of slide change
                    // slider_transition_easing: "easeInOutQuad",  //transition easing function of slide change
    
                    // slider_control_swipe:true,                  //true,false - enable swiping control
                    //slider_control_zoom:true,                   //true, false - enable zooming control
                    //slider_zoom_max_ratio: 6,                   //max zoom ratio
                    // slider_loader_type: 1,                      //shape of the loader (1-7)
                    // slider_loader_color:"white",                //color of the loader: (black , white)
    
                    // slider_enable_bullets: false,               //enable the bullets onslider element
                    // slider_bullets_skin: "",                    //skin of the bullets, if empty inherit from gallery skin
                    // slider_bullets_space_between: -1,           //set the space between bullets. If -1 then will be set default space from the skins
                    // slider_bullets_align_hor:"center",          //left, center, right - bullets horizontal align
                    // slider_bullets_align_vert:"bottom",         //top, middle, bottom - bullets vertical algin
                    // slider_bullets_offset_hor:0,                //bullets horizontal offset 
                    // slider_bullets_offset_vert:10,              //bullets vertical offset
    
                    // slider_enable_arrows: true,                 //enable arrows onslider element
                    // slider_arrows_skin: "",                     //skin of the slider arrows, if empty inherit from gallery skin
    
                    // slider_arrow_left_align_hor:"left",         //left, center, right - left arrow horizonal align
                    // slider_arrow_left_align_vert:"middle",      //top, middle, bottom - left arrow vertical align
                    // slider_arrow_left_offset_hor:20,            //left arrow horizontal offset
                    // slider_arrow_left_offset_vert:0,            //left arrow vertical offset
    
                    // slider_arrow_right_align_hor:"right",       //left, center, right - right arrow horizontal algin
                    // slider_arrow_right_align_vert:"middle",     //top, middle, bottom - right arrow vertical align
                    // slider_arrow_right_offset_hor:20,           //right arrow horizontal offset 
                    // slider_arrow_right_offset_vert:0,           //right arrow vertical offset
    
                    // slider_enable_progress_indicator: true,      //enable progress indicator element
                    // slider_progress_indicator_type: "pie",       //pie, pie2, bar (if pie not supported, it will switch to bar automatically)
                    // slider_progress_indicator_align_hor:"left",  //left, center, right - progress indicator horizontal align
                    // slider_progress_indicator_align_vert:"top",  //top, middle, bottom - progress indicator vertical align
                    // slider_progress_indicator_offset_hor:16,     //progress indicator horizontal offset 
                    // slider_progress_indicator_offset_vert:36,    //progress indicator vertical offset
    
                    // slider_progressbar_color:"#ffffff",          //progress bar color
                    // slider_progressbar_opacity: 0.6,             //progress bar opacity
                    // slider_progressbar_line_width: 5,            //progress bar line width
    
                    // slider_progresspie_type_fill: false,         //false is stroke, true is fill - the progress pie type, stroke of fill
                    // slider_progresspie_color1: "#B5B5B5",        //the first color of the progress pie
                    // slider_progresspie_color2: "#E5E5E5",        //progress pie second color 
                    // slider_progresspie_stroke_width: 6,          //progress pie stroke width 
                    // slider_progresspie_width: 30,                //progess pie width
                    // slider_progresspie_height:30,                //progress pie height
    
                    // slider_enable_play_button: true,             //true,false - enable play / pause button onslider element
                    // slider_play_button_skin: "",                 //skin of the slider play button, if empty inherit from gallery skin
                    // slider_play_button_align_hor:"left",         //left, center, right - play button horizontal align
                    // slider_play_button_align_vert:"top",         //top, middle, bottom - play button vertical align
                    // slider_play_button_offset_hor:40,            //play button horizontal offset 
                    // slider_play_button_offset_vert:8,            //play button vertical offset
    
                    // slider_enable_fullscreen_button: true,       //true,false - enable fullscreen button onslider element
                    // slider_fullscreen_button_skin: "",           //skin of the slider fullscreen button, if empty inherit from gallery skin
                    // slider_fullscreen_button_align_hor:"left",   //left, center, right  - fullscreen button horizonatal align
                    // slider_fullscreen_button_align_vert:"top",   //top, middle, bottom - fullscreen button vertical align
                    // slider_fullscreen_button_offset_hor:11,      //fullscreen button horizontal offset 
                    // slider_fullscreen_button_offset_vert:9,      //fullscreen button vertical offset
    
                    // slider_enable_zoom_panel: true,              //true,false - enable the zoom buttons, works together with zoom control.
                    // slider_zoompanel_skin: "",                   //skin of the slider zoom panel, if empty inherit from gallery skin          
                    // slider_zoompanel_align_hor:"right",          //left, center, right - zoom panel horizontal align
                    // slider_zoompanel_align_vert:"top",           //top, middle, bottom - zoom panel vertical align
                    // slider_zoompanel_offset_hor:12,              //zoom panel horizontal offset 
                    // slider_zoompanel_offset_vert:10,             //zoom panel vertical offset
    
                    // slider_controls_always_on: true,             //true,false - controls are always on, false - show only on mouseover
                    // slider_controls_appear_ontap: true,          //true,false - appear controls on tap event on touch devices
                    // slider_controls_appear_duration: 300,        //the duration of appearing controls
                    // slider_videoplay_button_type: "square",       //square, round - the videoplay button type, square or round  
    
                    // slider_enable_text_panel: false,             //true,false - enable the text panel
                    // slider_textpanel_always_on: true,            //true,false - text panel are always on, false - show only on mouseover

                    // slider_textpanel_text_valign:"middle",          //middle, top, bottom - text vertical align
                    // slider_textpanel_padding_top:10,                //textpanel padding top 
                    // slider_textpanel_padding_bottom:10,             //textpanel padding bottom
                    // slider_textpanel_height: null,                  //textpanel height. if null it will be set dynamically
                    // slider_textpanel_padding_title_description: 5,  //the space between the title and the description
                    // slider_textpanel_padding_right: 11,             //cut some space for text from right
                    // slider_textpanel_padding_left: 11,              //cut some space for text from left
                    // slider_textpanel_fade_duration: 200,            //the fade duration of textpanel appear
                    // slider_textpanel_enable_title: true,            //enable the title text
                    // slider_textpanel_enable_description: true,      //enable the description text
                    // slider_textpanel_enable_bg: true,               //enable the textpanel background
                    // slider_textpanel_bg_color:"#000000",            //textpanel background color
                    // slider_textpanel_bg_opacity: 0.4,               //textpanel background opacity
                    
                    // slider_textpanel_title_color:null,              //textpanel title color. if null - take from css
                    // slider_textpanel_title_font_family:null,        //textpanel title font family. if null - take from css
                    // slider_textpanel_title_text_align:null,         //textpanel title text align. if null - take from css
                    // slider_textpanel_title_font_size:null,          //textpanel title font size. if null - take from css
                    // slider_textpanel_title_bold:null,               //textpanel title bold. if null - take from css
                    // slider_textpanel_css_title:{},                  //textpanel additional css of the title
        
                    // slider_textpanel_desc_color:null,               //textpanel description font family. if null - take from css
                    // slider_textpanel_desc_font_family:null,         //textpanel description font family. if null - take from css
                    // slider_textpanel_desc_text_align:null,          //textpanel description text align. if null - take from css
                    // slider_textpanel_desc_font_size:null,           //textpanel description font size. if null - take from css
                    // slider_textpanel_desc_bold:null,                //textpanel description bold. if null - take from css
                    // slider_textpanel_css_description:{},            //textpanel additional css of the description
                    
                    // slider_textpanel_bg_css:{},                     //textpanel background css
                            
                    // //thumbs options
    
                    // thumb_width:88,                             //thumb width
                    // thumb_height:50,                            //thumb height
                    // thumb_fixed_size:true,                      //true,false - fixed/dynamic thumbnail width
    
                    // thumb_border_effect:true,                   //true, false - specify if the thumb has border
                    // thumb_border_width: 0,                      //thumb border width
                    // thumb_border_color: "#000000",              //thumb border color
                    // thumb_over_border_width: 0,                 //thumb border width in mouseover state
                    // thumb_over_border_color: "#d9d9d9",         //thumb border color in mouseover state
                    // thumb_selected_border_width: 1,             //thumb width in selected state
                    // thumb_selected_border_color: "#d9d9d9",     //thumb border color in selected state
    
                    // thumb_round_corners_radius:0,               //thumb border radius
    
                    // thumb_color_overlay_effect: true,           //true,false - thumb color overlay effect, release the overlay on mouseover and selected states
                    // thumb_overlay_color: "#000000",             //thumb overlay color
                    // thumb_overlay_opacity: 0.4,                 //thumb overlay color opacity
                    // thumb_overlay_reverse:false,                //true,false - reverse the overlay, will be shown on selected state only
    
                    // thumb_image_overlay_effect: false,          //true,false - images overlay effect on normal state only
                    // thumb_image_overlay_type: "bw",             //bw , blur, sepia - the type of image effect overlay, black and white, sepia and blur.
    
                    // thumb_transition_duration: 200,             //thumb effect transition duration
                    // thumb_transition_easing: "easeOutQuad",     //thumb effect transition easing
    
                    // thumb_show_loader:true,                     //show thumb loader while loading the thumb
                    // thumb_loader_type:"dark",                   //dark, light - thumb loader type
        
                    // //stript thumbs panel options
    
                    // strippanel_padding_top:8,                   //space from top of the panel
                    // strippanel_padding_bottom:8,                //space from bottom of the panel
    
                    // strippanel_padding_left:  0,                //space from left of the panel
                    // strippanel_padding_right: 0,                //space from right of the panel
    
                    // strippanel_enable_buttons: false,           //enable buttons from the sides of the panel
                    // strippanel_buttons_skin: "",                //skin of the buttons, if empty inherit from gallery skin
                    // strippanel_padding_buttons: 2,              //padding between the buttons and the panel
    
                    // strippanel_buttons_role : "scroll_strip",   // scroll_strip, advance_item - the role of the side buttons
    
                    // strippanel_enable_handle: true,             //enable grid handle            
                    // strippanel_handle_align: "top",             //top, middle, bottom , left, right, center - close handle tip align on the handle bar according panel orientation
                    // strippanel_handle_offset: 0,                //offset of handle bar according the valign
                    // strippanel_handle_skin: "",                 //skin of the handle, if empty inherit from gallery skin
    
                    // strippanel_background_color:"",             //background color of the strip wrapper, if not set, it will be taken from the css
    
                    // strip_thumbs_align: "left",                 //left, center, right, top, middle, bottom - the align of the thumbs when they smaller then the strip size.
                    // strip_space_between_thumbs:6,               //space between thumbs
                    // strip_thumb_touch_sensetivity:15,           //from 1-100, 1 - most sensetive, 100 - most unsensetive
                    // strip_scroll_to_thumb_duration:500,         //duration of scrolling to thumb
                    // strip_scroll_to_thumb_easing:"easeOutCubic", //easing of scrolling to thumb animation
                    // strip_control_avia:true,                    //avia control - move the strip according strip moseover position
                    // strip_control_touch:true,                   //touch control - move the strip by dragging it

        });



    });
        
</script>