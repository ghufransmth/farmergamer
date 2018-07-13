<style type="text/css">
    .tanpa_outline:focus, .tanpa_outline:active
    {
        outline:none;
    }

    /*ATUR STYLE SELECT2 AGAR SESUAI*/
    .select2-container .select2-selection--single
    {
        height: 46px!important;
    }
    .select2-container--default .select2-selection--single .select2-selection__rendered
    {
        line-height: 45px!important;
    }
    .select2-container--default .select2-selection--single .select2-selection__arrow
    {
        height: 46px!important;
    }

    .changeColor
    {
        color: white;
    }

    /*Card*/
    .card-text
    {
        /*padding-top: -110px;*/
        color: green;
    }

    /*ATUR BREADCRUMB DARI BOOTSTRAP*/
    ol.breadcrumb li+li:before {
        padding: 8px;
        color: grey;
        content: ">";
    }

    /*CUSTOM BUTTON DISABLED*/
    .disabled {
      opacity: 0.5;
      cursor:not-allowed!important;
    }

</style>

<style type="text/css">
    .sprite-bath
    {
        background: url('<?php echo base_url();?>/assets/custom/iconninja/iconninja-sprites.png') no-repeat -1px -1px;
        display: inline-block;
        width: 23px;
        height: 23px;
    }
</style>

<section style="background: ghostwhite;padding: 5px;">
<?php if(!isset($_SESSION['tc_id_user'])):?>
<div class="row" style="margin-top: 90px;background-color: #fff;padding-top: 55px;border-bottom: 1px solid ghostwhite;padding-bottom: 5px;">
<?php else:?>
<div class="row" style="margin-top: 50px;background-color: #fff;padding-top: 55px;border-bottom: 1px solid ghostwhite;padding-bottom: 5px;">
<?php endif;?>
    <div class="row text-center">

        <div class="col-sm-10 col-sm-offset-1">

            <div class="form-inline">
                <div class="form-group">
                    <select class="form-control select2" style="background-color: white;">
                        <option>Dijual</option>
                        <option>Dicari</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control select2" style="background-color: white;">
                        <option>RO Return</option>
                        <option>RF Return</option>
                        <option>Blade N Soul</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control select2" style="background-color: white;">
                        <option>Produk</option>
                        <option>Jasa</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control select2" style="background-color: white;">
                        <option>Gold</option>
                        <option>Equipment</option>
                        <option selected>Semuanya</option>
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn-lg btn-info"><i class="icon-search"></i> Cari</button>
                    <!-- <button class="btn-lg btn-info"><i class="glyphicon glyphicon-filter"></i> Filter</button> -->
                </div>
            </div>

            <div class="form-inline">

                <div class="form-group text-center">
                                                    
                    <select style="border: 0px;background: transparent;color: #000;" class="tanpa_outline">
                        <option>Rupiah (INA)</option>
                        <option>Dollar (USA)</option>
                        <option>Euro (ENG)</option>
                        <option>Yuan (JPN)</option>
                    </select>
                                                    
                </div>
                <div class="form-group text-center">
                    <select style="border: 0px;background: transparent;color: #000;" class="tanpa_outline">
                        <option>Harga Min</option>
                        <option>Berapapun</option>
                    </select>
                </div>
                <div class="form-group text-center">
                    <select style="border: 0px;background: transparent;color: #000;" class="tanpa_outline">
                        <option>Harga Max</option>
                        <option>Berapapun</option>
                    </select>
                </div>
                                    
            </div>

        </div>

    </div>
</div>

                                                <!-- CARA LAINNYA DI MENU SEARCH -->
<!-- <div class="container-fluid" style="margin-top: 141px;background-color: rgba(189, 185, 185, 0.3);padding-top: 10px;">

                <form class="navbar-form text-center">
                    <div class="form-group">
                        <input type="text" class="form-control searchform" placeholder="Enter Keyword" style="background: white;">
                    </div>
                    <div class="form-group">
                        <select class="form-control select2">
                            <option>AAA</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control select2">
                            <option>AAA</option>
                        </select>
                    </div>
                    <div class="form-group">
                    <button class="btn-lg btn-info"><i class="icon-search"></i> Cari</button>
                    </div>
                </form>
            
</div> -->
                                    <!-- END CARA LAINNYA DI MENU SEARCH -->


        <div class="container" style="margin-top: 15px;">

            <ol class="breadcrumb" style="background-color: transparent;border: 0;padding-left: 0;">
                <li><span style="color: #db4a39;font-family:latoregular;">FarmerGamer</span></li>
                <li><?php echo anchor($this->uri->segment(1).'/'.$this->uri->segment(2),'Jual Produk','style="color:#db4a39;text-decoration: underline;font-weight:bold;"');?></li>
            </ol>

            <div class="row" style="margin-top: -15px;">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="pull-right btn-primary">
                        <select class="form-control changeColor" style="height: 33px;font-size: 12px;border:0px;outline:none;">
                            <option style="color: black;">Urutkan Terbaru</option>
                            <option style="color: black;">Urutkan Populer</option>
                            <option style="color: black;">Urutkan Rating</option>
                            <option style="color: black;">Harga Termurah</option>
                            <option style="color: black;">Harga Termahal</option>
                        </select>
                    </div>

                    <div class="pull-right" style="padding-right: 5px;">
                        <button class="btn-sm btn-default disabled" title="Grid View" disabled><i class="fas fa-th" style="font-size: 17px;color:#191970;"></i></button>
                        <button class="btn-sm btn-default" title="1 Grid View"><i class="fas fa-list" style="font-size: 17px;"></i></button>
                    </div>
                </div>
            </div>

            <div class="row" style="padding:15px 0;">
                <div class="col-md-5">
                    <hr style="border-top: 1px solid #CECECE;margin: 8px 0;">
                </div>
                <div class="col-md-2">
                    <span style="color: white;background-color: #388e3c;display: block;position: relative;margin: -4px 0;border-radius: 5px;" class="text-center">
                        <div style="font-size: 15px;font-family: sans-serif;text-transform: uppercase;letter-spacing:1px;">Produk Dijual</div>
                    </span>
                </div>
                <div class="col-md-5">
                    <hr style="border-top: 1px solid #CECECE;margin: 8px 0;">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="panel panel-default" style="background-color: rgb(248, 248, 248);margin-bottom: 5px;">
                        <div class="panel-body">

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">

                                    <div class="pull-left">
                                        <div style="font-family: PT Sans Narrow,sans-serif;" class="text-primary"><?php echo count($hasil);?> Produk <?php echo $title;?> Ditemukan...</div>
                                        <!-- <h5 style="font-family: PT Sans Narrow,sans-serif;" class="text-primary"><?php //echo count($hasil);?> Produk <?php //echo $title;?> Ditemukan</h5> -->
                                    </div>

                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="padding-bottom: 30px;">

                <!-- widthnya apus -->
                <!-- <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6" style="margin-top: 10px;">
                    <div class="card" style="width:18rem;border:1px solid #ccc;padding: 10px;"> 
                      <img class="card-img-top" src="<?php //echo base_url();?>assets/custom/images/image_dicari/1.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="btn-group btn-block">
                            <a href="#" class="btn btn-default col-md-4 col-sm-4 col-xs-4"><i class="fa fa-heart" style="font-size: 20px;"></i></a>
                            <a href="#" class="btn btn-primary col-md-4 col-sm-4 col-xs-4"><i class="fas fa-comments" style="color: #fff;font-size: 20px;"></i></a>
                            <a href="#" class="btn btn-primary col-md-4 col-sm-4 col-xs-4"><i class="fa fa-cart-plus" style="color: #fff;font-size: 20px;"></i></a>
                        </div>
                      </div>
                    </div>
                </div> -->

                <?php foreach($hasil AS $val):?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="margin-top: 20px;">
                    <!-- <div class="card" style="border:1px solid #ccc;padding: 10px;"> -->
                    <!-- <div class="card" style="border:1px solid #ccc;width:100%;background:#ffffff;box-shadow: 0 1px 10px rgba(0,0,0,0.1);"> -->
                    <div class="card" style="border:none;width:100%;background:#fff;box-shadow: 0 1px 10px rgba(0,0,0,0.1);">

                        <?php 
                            $ambil_foto = json_decode($val->foto, true);
                            $foto = $ambil_foto[0];
                        ;?>
                        <!-- <img class="card-img-top" src="<?php //echo base_url();?>assets/custom/images/image_dijual/<?php //echo $foto;?>" alt="Gambar Dijual"> -->

                        <div onclick="detail('<?php echo $val->id_dijual;?>','<?php echo url_title($val->judul);?>');" style="cursor:pointer;">
                            <img class="card-img-top img-responsive" src="<?php echo base_url();?>assets/custom/images/image_dijual/<?php echo $foto;?>" alt="Gambar Dijual" style="height: 12em;margin:0 auto;text-align:center;min-height:80%;min-width:60%;"> <!-- KALAU MAU FULL PANJANG IMAGE PAKE WIDTH 100%-->
                        </div>

                        <div class="card-body" style="padding: 10px;">
                            <!-- <h5 class="card-title" style="text-transform: capitalize;overflow-wrap:break-word;margin-bottom: 5px;"><?php //echo $val->judul;?></h5> -->

                            <!-- line-height, height, dan overflow untuk kontrol hanya 2 baris saja yang ditampilkan 
                                (text-transform : capitalize untuk huruf besar di awal kalimat).
                            -->
                            <a href="javascript:void(0)" onclick="detail('<?php echo $val->id_dijual;?>','<?php echo url_title($val->judul);?>');"><h5 class="card-title" style="overflow-wrap:break-word;margin-bottom: 5px;line-height: 1.5em;height: 3em;overflow: hidden;"><?php echo character_limiter($val->judul,30);?></h5></a>

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

                            <!-- <div class="pull-right">
                                <i class="fas fa-star" style="font-size: 13px;cursor:pointer;" title="Rating 1"></i>
                                <i class="fas fa-star" style="font-size: 13px;cursor:pointer;" title="Rating 2"></i>
                                <i class="fas fa-star" style="font-size: 13px;cursor:pointer;" title="Rating 3"></i>
                                <i class="fas fa-star" style="font-size: 13px;cursor:pointer;" title="Rating 4"></i>
                                <i class="fas fa-star" style="font-size: 13px;cursor:pointer;" title="Rating 5"></i> (0)</div> -->

                            <div class="pull-right" class="btn" title="Lihat Penilaian Penjual" style="background:transparent;outline:none;cursor:pointer;">
                                <i class="fas fa-star" style="font-size: 13px;"></i>
                                <i class="fas fa-star" style="font-size: 13px;"></i>
                                <i class="fas fa-star" style="font-size: 13px;"></i>
                                <i class="fas fa-star" style="font-size: 13px;"></i>
                                <i class="fas fa-star" style="font-size: 13px;"></i> (0)
                            </div>
                        
                        </div>

                        <div class="btn-group btn-block" style="margin-top: 5px;">
                            <!-- <a href="#" class="btn btn-default col-md-4 col-sm-4 col-xs-4"><i class="fa fa-heart" style="font-size: 20px;"></i></a> -->
                            <a href="#" class="btn btn-primary col-md-6 col-sm-6 col-xs-6"><i class="fas fa-comments" style="color: #fff;font-size: 20px;"></i></a>
                            <a href="#" class="btn btn-danger col-md-6 col-sm-6 col-xs-6"><i class="fa fa-cart-plus" style="color: #fff;font-size: 20px;"></i></a>
                        </div>

                    </div>
                </div>
                <?php endforeach;?>

                <!-- SESSION ID USER -->
                <?php if(!isset($_SESSION['tc_id_user'])):?>
                    <input type="hidden" name="id_us" id="id_us" value="">
                <?php else:?>
                    <input type="hidden" name="id_us" id="id_us" value="<?php echo $_SESSION['tc_id_user'];?>">  
                <?php endif;?>
                <!-- END SESSION ID USER -->

            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="pagination" style="margin-top: 20px;">
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

        <script>
            function addLikes(id,action) {
                // $('#suka'+id).each(function(index) {
                //     $(this).addClass('selected');
                //     $('#suka'+id).val((index+1));
                //     if(index == $('#suka'+id).index(obj)) {
                //         return false;   
                //     }
                // });

                var id_user = $("#id_us").val();
                if(id_user == null || id_user == "")
                {
                    alert("LOGIN TERLEBIH DAHULU");
                }
                else
                {
                    $.ajax({
                        url: "<?php echo base_url();?>dijual/tambah_suka",
                        data:'id='+id+'&id_user='+id_user+'&action='+action,
                        type: "POST",
                        dataType: 'json',
                        beforeSend: function(){
                            $('#suka'+id).html("<img src='<?php echo base_url();?>assets/custom/img/loading-sm.gif' />");
                        },
                        success: function(data){
                            switch(action) {
                                case "like":
                                // $('#suka'+id).html('<input type="button" title="Unlike" class="unlike" onClick="addLikes('+id+',\'unlike\')" />');
                                $('#suka'+id).html('<i class="fa fa-heart" style="color:red;font-size: 13px;cursor:pointer;" title="Tidak Suka" onclick="addLikes('+id+',\'unlike\');"></i> ('+data.nomor+')');
                                break;
                                case "unlike":
                                // $('#suka'+id).html('<input type="button" title="Like" class="like"  onClick="addLikes('+id+',\'like\')" />')
                                $('#suka'+id).html('<i class="fa fa-heart" style="font-size: 13px;cursor:pointer;" title="Suka" onclick="addLikes('+id+',\'like\');"></i> ('+data.nomor+')');
                                break;
                            }
                        }
                    });
                }
            }

            function detail(param,params)
            {
                location.href = "<?php echo base_url();?>dijual/produk/detail/"+param+"/"+params;
            }
        </script>