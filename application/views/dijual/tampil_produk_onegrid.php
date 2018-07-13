                <?php foreach($hasil AS $val):?>
                <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 20px;border:1px solid #ECECEC;background:#ffffff;box-shadow: 0 1px 1px rgba(0,0,0,0.1);margin-bottom: -10px;padding: 10px;">
                <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 20px;border:1px solid #ccc;background:#ffffff;box-shadow: 0 1px 5px rgba(0,0,0,0.1);padding: 10px;"> -->

                        <?php 
                            $ambil_foto = json_decode($val->foto, true);
                            $foto = $ambil_foto[0];
                        ;?>

                        <!-- TANPA CALC DAN SETTINGAN MEDIA QUERY (DENGAN CLASS FOTO RESPONSIVE) -->
                        <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" onclick="detail('<?php //echo $val->id_dijual;?>','<?php //echo url_title($val->judul);?>');" style="cursor:pointer;margin-top: -10px;"> -->

                        <!-- MENGGUNAKAN CALC DAN SETTINGAN MEDIA QUERY (DENGAN CLASS FOTO RESPONSIVE) -->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 foto-responsive" onclick="detail('<?php echo $val->id_dijual;?>','<?php echo url_title($val->judul);?>');" style="cursor:pointer;margin-top: -10px;left:0;right:0;width:calc(25%);margin-bottom:-10px;margin-right: 50px;">
                            <img class="card-img-top img-responsive" src="<?php echo base_url();?>assets/custom/images/image_dijual/<?php echo $foto;?>" alt="Gambar Dijual" style="height: 12em;margin:0 auto;text-align:center;min-height:80%;min-width:60%;"> <!-- KALAU MAU FULL PANJANG IMAGE PAKE WIDTH 100%-->
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                            <div style="padding:10px;">
                                <a href="javascript:void(0)" onclick="detail('<?php echo $val->id_dijual;?>','<?php echo url_title($val->judul);?>');"><h5 class="card-title" style="overflow-wrap:break-word;margin-bottom: 5px;line-height: 1.5em;height: 3em;overflow: hidden;color:#777;"><?php echo character_limiter($val->judul,30);?></h5></a>

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
                            </div>

                            <div style="margin-top: 5px;margin-left: 7px;">
                                <a href="#" title="Facebook"><span class="dot-fb"><i class="fa fa-facebook" style="color: #fff;font-size: 20px;"></i></span></a>
                                <a href="#" title="Twitter"><span class="dot-twitter"><i class="fa fa-twitter" style="color: #fff;font-size: 20px;"></i></span></a>
                                <a href="#" title="Google Plus"><span class="dot-google"><i class="fab fa-google-plus" style="color: #fff;font-size: 20px;"></i></span></a>
                                <a href="#" title="LinkedIn"><span class="dot-linked-in"><i class="fa fa-linkedin" style="color: #fff;font-size: 20px;"></i></span></a>
                            </div>

                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding-top: 10px;">
                        
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

                            <div class="row" style="margin-bottom: 5px;">
                                <div class="col-md-12">
                                    <div id="love<?php echo $val->id_dijual;?>">
                                        <!-- ID = lg-suka... berguna untuk animasi loading -->
                                        <div class="btn btn-default pull-right col-lg-6 col-md-6 col-sm-12 col-xs-12" onclick="addLikes('<?php echo $val->id_dijual;?>','<?php echo $str_suka;?>');" id="lg-suka<?php echo $val->id_dijual;?>"><i class="fa fa-heart" style="font-size: 13px;cursor:pointer;<?php echo $red;?>" title="<?php echo ucwords($judul);?>"></i> (<?php echo $val->favorit;?>)
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="margin-bottom: 5px;">
                                <div class="col-md-12">
                                    <button class="btn btn-default pull-right col-lg-6 col-md-6 col-sm-12 col-xs-12" class="btn btn-default" title="Lihat Penilaian" style="cursor:pointer;">
                                        <i class="fas fa-star gradient-icon" style="font-size: 13px;"></i>
                                        <i class="fas fa-star gradient-icon" style="font-size: 13px;"></i>
                                        <i class="fas fa-star gradient-icon" style="font-size: 13px;"></i>
                                        <i class="fas fa-star gradient-icon" style="font-size: 13px;"></i>
                                        <i class="fas fa-star gradient-icon" style="font-size: 13px;"></i> (0)
                                    </button>
                                </div>
                            </div>

                            <div class="row" style="margin-bottom: 5px;">
                                <div class="col-md-12">
                                    <button class="btn btn-primary pull-right col-lg-6 col-md-6 col-sm-12 col-xs-12"><i class="fas fa-comments" style="color: #fff;font-size: 20px;"></i></button>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-danger pull-right col-lg-6 col-md-6 col-sm-12 col-xs-12"><i class="fa fa-cart-plus" style="color: #fff;font-size: 20px;"></i></button>
                                </div>
                            </div>

                        </div>


                </div>
                </div>
                <?php endforeach;?>