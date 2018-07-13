<style>
    /*ATUR BREADCRUMB DARI BOOTSTRAP*/
    ol.breadcrumb li+li:before {
        padding: 8px;
        color: #555;
        /*content: ">";*/
        font-family: FontAwesome;
        content: "\f054";
        font-size: 12px;
    }

    /*ATUR RESPONSIVE*/
    @media all and (max-width: 768px) {
        .foto-responsive {
            width:100%!important;
            text-align: center!important;
            margin-bottom:0!important; /*untuk atur letaknya agar tidak berdekatan */
        }      
    }

    /*EFEK WARNA GRADASI UNTUK ICON STAR FONT AWESOME*/
    /*.pick
    {
        color:gold!important;
    }*/
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
                        <li><span style="color: #555;font-size:15px;font-family:latoregular;">User</span></li>
                        <li class="active"><span style="color: #555;font-size:15px;font-family:latoregular;">Favorit</span></li>
                    </ol>

                    <h4 class="text-center" style="color: #565656;font-size: 25px;transform: scale(.9,1);font-family: sans-serif;text-transform: uppercase;">Favorit</h4>
                    <div class="separator"></div>

                </div>
            </div>

            <!-- <?php //foreach($hasil as $val):?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 20px;border:1px solid #ccc;background:#ffffff;box-shadow: 0 1px 10px rgba(0,0,0,0.1);padding:10px;">

                        <?php 
                            $ambil_foto //= json_decode($val->foto, true);
                            //$foto = $ambil_foto[0];
                        ;?>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="margin-top: -10px;">
                            <img class="img-responsive" src="<?php //echo base_url();?>assets/custom/images/image_dijual/<?php //echo $foto;?>" alt="Gambar Dijual" style="height: 12em;margin:0 auto;text-align:center;min-height:80%;min-width:60%;">
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div style="padding: 10px;">
                                
                                <a href="javascript:void(0)"><h5 style="overflow-wrap:break-word;margin-bottom: 5px;line-height: 1.5em;height: 3em;overflow: hidden;"><?php //echo $val->judul;?></h5></a>

                                <?php //if($val->harga == $val->harga_diskon):?>
                                <h5 style="margin-bottom: 5px;color:green;">Rp<?php //echo number_format($val->harga,0,',','.');?></h5>
                                <?php //else:?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 style="text-decoration:line-through;color:#aaa;margin-bottom:5px;padding-right: 10px;" class="pull-left">Rp<?php //echo number_format($val->harga,0,',','.');?></h5>
                                        <h5 style="margin-bottom:5px;color:green;" class="pull-left">Rp<?php //echo number_format($val->harga_diskon,0,',','.');?></h5>
                                    </div>
                                </div>
                                <?php //endif;?>
                            
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
                                        <button class="btn btn-default pull-right col-lg-6 col-md-6 col-sm-12 col-xs-12" title="Tidak Suka" onclick="preInsert('<?php //echo $val->id_favorit_dijual;?>','<?php //echo $val->id_dijual;?>');"><i class="fa fa-heart" style="color: red;font-size: 15px;"></i></button>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 5px;">
                                    <div class="col-md-12">
                                        <button class="btn btn-default pull-right col-lg-6 col-md-6 col-sm-12 col-xs-12" title="Lihat Penilaian Penjual">
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
            <?php //endforeach;?> -->
                
            <div id="tampil"></div>

    </div>
    </section>

<script>
    
    // function loadData(args) {
    //   //code
    //   $("#tampil").load("<?php //echo base_url();?>favorit/tampil/<?php //echo $_SESSION['tc_id_user'];?>");
    // }
    function loadData(args) {
      //code
      $("#tampil").load("<?php echo base_url();?>user/favorit/tampil");
    }
    loadData();


    function preInsert(id_favorit,id_dijual){
        
        $.confirm({
            title: 'Konfirmasi!',
            content: 'Anda Yakin Menghapus Data Favorit?',
            type: 'red',
            escapeKey: 'Batal',
            backgroundDismiss: false,
            buttons: {   
                Hapus: {
                    btnClass: 'btn-primary text-white',
                    keys: ['enter'],
                    action: function(){
                        hapusFavorit(id_favorit,id_dijual);
                    }
                },
                Batal: {
                    btnClass:'btn-red',
                    action:function(){

                        swal({
                            icon: "error",
                            closeOnClickOutside: true, //tutup dengan click area luar
                            closeOnEsc: true, // tutup dengan tombol esc
                            title: "Gagal", // judul
                            button: false, // button tidak ada
                            timer: 3000, // setting waktu alert
                            text: "Batal Menghapus Data Favorit!" // text
                        });

                    }
                }

            }
        });

    }

    function hapusFavorit(param,param2){

      $.ajax({
        url: "<?php echo base_url();?>user/favorit/hapus_fav",
        data:'id='+param+'&id_jual='+param2,
        type: "POST",
        cache: false,
        // dataType: 'json',
                                        // KALAU MAU ANIMASI LOADING SEBELUM REQUEST KE SERVER
        // beforeSend: function(){
        //   $('#tampil').html("<div class='text-center'><img src='<?php //echo base_url();?>assets/custom/img/loading.gif' style='height:25px;width:25px;'/></div>");
        // },
        // beforeSend: function(){
        //   $('#grid'+param2).html("<div class='text-center'><img src='<?php //echo base_url();?>assets/custom/img/loading.gif' style='height:25px;width:25px;'/></div>");
        // },
        success: function(data){

          loadData();
 
        }
      });

    }

    function detail(param,params)
    {
        location.href = "<?php echo base_url();?>dijual/produk/detail/"+param+"/"+params;
    }

</script>