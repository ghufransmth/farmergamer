<style>
    /*ATUR BREADCRUMB DARI BOOTSTRAP*/
    ol.breadcrumb li+li:before {
        padding: 8px;
        color: grey;
        content: ">";
    }

    /*BUAT CIRCLE*/
    .dot-fb {
      height: 35px;
      width: 35px;
      padding: 5px 10px 0;
      background-color: #3b5998;
      border-radius: 50%;
      display: inline-block;
    }

    .dot-twitter {
      height: 35px;
      width: 35px;
      padding: 5px 9px 0;
      background-color: #55acee;
      border-radius: 50%;
      display: inline-block;
    }

    .dot-google {
      height: 35px;
      width: 35px;
      padding: 5px 5px 0;
      background-color: #dd4b39;
      border-radius: 50%;
      display: inline-block;
    }

    .dot-linked-in {
      height: 35px;
      width: 35px;
      padding: 5px 9px 0;
      background-color: #0077b5;
      border-radius: 50%;
      display: inline-block;
    }

</style>
    
    <section style="background-color: ghostwhite;padding-bottom: 5px;">
    <?php if(!isset($_SESSION['tc_id_user'])):?>
    <div class="container" style="margin-top: 90px;padding-top: 70px;margin-bottom: 40px;">
    <?php else:?>
    <div class="container" style="margin-top: 50px;padding-top: 70px;margin-bottom: 40px;">
    <?php endif;?>
            
            <div class="row">
            <div class="col-md-12">

                <!-- <ol class="breadcrumb" style="background-color: transparent;border: 0;padding: 0;"> -->
                <ol class="breadcrumb" style="background-color: #fff;border:1px solid #E0E0E0;box-shadow: 0 1px 1px rgba(0,0,0,0.1);">
                    <li><span style="color: #db4a39;font-family:latoregular;">FarmerGamer</span></li>
                    <li class="active"><span style="color: #db4a39;font-family:latoregular;">Favorit</span></li>
                </ol>

                <h4 class="text-center" style="color: #565656;font-size: 25px;transform: scale(.9,1);font-family: sans-serif;text-transform: uppercase;">Favorit</h4>
                <div class="separator"></div>
            </div>
            </div>
               

            <?php foreach($hasil as $val):?>
                <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 20px;border:1px solid #ccc;background:#ffffff;box-shadow: 0 1px 10px rgba(0,0,0,0.1);padding:10px;"> -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 20px;border:1px solid #E0E0E0;background:#fff;box-shadow: 0 1px 1px rgba(0,0,0,0.1);padding:10px;">

                        <?php 
                            $ambil_foto = json_decode($val->foto, true);
                            $foto = $ambil_foto[0];
                        ;?>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="margin-top: -10px;">
                            <!-- <img class="img-responsive" src="<?php //echo base_url();?>/assets/custom/images/image_dijual/1.jpg" alt="Gambar Dijual" style="height: 12em;margin:0 -25px;text-align:center;"> --> <!-- KALAU MAU FULL PANJANG IMAGE PAKE WIDTH 100%-->
                            <img class="img-responsive" src="<?php echo base_url();?>assets/custom/images/image_dijual/<?php echo $foto;?>" alt="Gambar Dijual" style="height: 12em;margin:0 auto;text-align:center;min-height:80%;min-width:60%;"> <!-- KALAU MAU FULL PANJANG IMAGE PAKE WIDTH 100%-->
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div style="padding: 10px;">
                                
                                <a href="javascript:void(0)"><h5 style="overflow-wrap:break-word;margin-bottom: 5px;line-height: 1.5em;height: 3em;overflow: hidden;"><?php echo $val->judul;?></h5></a>

                                <?php if($val->harga == $val->harga_diskon):?>
                                <h5 style="margin-bottom: 5px;color:green;">Rp<?php echo number_format($val->harga,0,',','.');?></h5>
                                <?php else:?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 style="text-decoration:line-through;color:#aaa;margin-bottom:5px;padding-right: 10px;" class="pull-left">Rp<?php echo number_format($val->harga,0,',','.');?></h5>
                                        <h5 style="margin-bottom:5px;color:green;" class="pull-left">Rp<?php echo number_format($val->harga_diskon,0,',','.');?></h5>
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

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                
                            <div style="padding:10px">
                                <div class="row" style="margin-bottom: 5px;">
                                    <div class="col-md-12">
                                        <button class="btn btn-default pull-right col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 5px;"><i class="fa fa-heart" style="color: #777;font-size: 15px;"></i></button>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 5px;">
                                    <div class="col-md-12">
                                        <button class="btn btn-default pull-right col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 5px;">
                                            <i class="fas fa-star" style="color: #777;font-size: 12px;"></i>
                                            <i class="fas fa-star" style="color: #777;font-size: 12px;"></i>
                                            <i class="fas fa-star" style="color: #777;font-size: 12px;"></i>
                                            <i class="fas fa-star" style="color: #777;font-size: 12px;"></i>
                                            <i class="fas fa-star" style="color: #777;font-size: 12px;"></i>
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
                

    </div>
    </section>

