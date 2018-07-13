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
        color: #555;
        /*content: ">";*/
        font-family: FontAwesome;
        content: "\f054";
        font-size: 12px;
    }

    /*CUSTOM BUTTON ACTIVED*/
    .actived {
      opacity: 0.5;
      cursor:not-allowed!important;
      /*border-top: solid 2px #777;
      border-left: solid 2px #777;
      border-bottom: solid 2px #eaeaea;
      border-right: solid 2px #eaeaea;*/
    }
    .logo-actived
    {
        color:#191970;
    }
    .btn-nohover:hover,.btn-nohover:focus, .btn-nohover:active
    {
        background: transparent;
        outline:none;
    }

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

<style type="text/css">
    .sprite-bath
    {
        background: url('<?php echo base_url();?>/assets/custom/iconninja/iconninja-sprites.png') no-repeat -1px -1px;
        display: inline-block;
        width: 23px;
        height: 23px;
    }
</style>

<?php if(!isset($_SESSION['tc_id_user'])):?>
<div class="container-fluid" style="margin-top: 90px;background-color: rgba(189, 185, 185, 0.3);padding-top: 55px;padding-bottom: 5px;border-bottom: 1px solid #eee;">
<?php else:?>
<div class="container-fluid" style="margin-top: 50px;background-color: rgba(189, 185, 185, 0.3);padding-top: 55px;padding-bottom: 5px;border-bottom: 1px solid #eee">
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
                        <option>Produk</option>
                        <option>Jasa</option>
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

    <!-- <section style="background-color: rgba(245, 245, 245, 0.7);padding-top: 2px;"> -->
    <!-- <section style="background-color: #fff;padding-top: 2px;"> -->
    <section style="background-color: #F9F9F9;padding-top: 2px;">
        <div class="container" style="margin-top: 15px;">

            <ol class="breadcrumb" style="background-color: transparent;border: 0;padding-left: 0;">
                <li><span style="color: #555;font-size:15px;font-family:latoregular;">FarmerGamer</span></li>
                <li><span style="color: #555;font-size:15px;font-family:latoregular;">Dijual</span></li>
                <li><?php echo anchor($this->uri->segment(1).'/'.$this->uri->segment(2),'Produk','style="color: #555;font-size:15px;"');?></li>
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
                        <button class="btn-sm btn-default btn-nohover actived" onclick="toggle_btn('grid');" title="Grid View" disabled id="grid" data-toggle="tooltip"><i class="fas fa-th logo-actived" style="font-size: 17px;" id="logo-grid"></i></button>
                        <button class="btn-sm btn-default btn-nohover" onclick="toggle_btn('onegrid');" title="1 Grid View" id="onegrid" data-toggle="tooltip"><i class="fas fa-list" style="font-size: 17px;" id="logo-onegrid"></i></button>
                    </div>
                </div>
            </div>

            <div class="row" style="padding:15px 0;">
                <div class="col-md-5">
                    <hr style="border-top: 1px solid #CECECE;margin: 8px 0;">
                </div>
                <div class="col-md-2">
                    <span style="color: white;background-color: rgba(34, 139, 34, 0.8);display: block;position: relative;margin: -4px 0;border-radius: 5px;" class="text-center">
                        <div style="font-size: 15px;font-family: sans-serif;text-transform: uppercase;letter-spacing:1px;">Produk Dijual</div>
                    </span>
                </div>
                <div class="col-md-5">
                    <hr style="border-top: 1px solid #CECECE;margin: 8px 0;">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <!-- <div class="panel panel-default" style="background-color: rgb(248, 248, 248);margin-bottom: 5px;"> -->
                    <div class="panel panel-default" style="background-color: #fff;margin-bottom: 5px;">
                        <div class="panel-body">

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">

                                    <div class="pull-left">
                                        <div style="font-family: PT Sans Narrow,sans-serif;" class="text-primary"><?php echo count($hitung);?> Produk <?php echo $title;?> Ditemukan...</div>
                                    </div>

                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="padding-bottom: 30px;">
                <!-- LOAD PADA TAMPIL.PHP -->
                <div id="tampil"></div>

            </div>

            <!-- <div id="cart-item"></div> -->

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

            <!-- SESSION ID USER -->
            <?php if(!isset($_SESSION['tc_id_user'])):?>
                <input type="hidden" name="id_us" id="id_us" value="">
            <?php else:?>
                <input type="hidden" name="id_us" id="id_us" value="<?php echo $_SESSION['tc_id_user'];?>">  
            <?php endif;?>
            <!-- END SESSION ID USER -->

        </div>
    </section>

        <script>

            function loadData(args) {
              //code
              $("#tampil").load("<?php echo base_url();?>dijual/tampil_produk");
            }
            loadData();

            function loadDataOneGrid(args) {
              //code
              $("#tampil").load("<?php echo base_url();?>dijual/tampil_produk_onegrid");
            }

            function toggle_btn(param) {
                switch(param)
                {
                    case "grid":
                        loadData();
                        $("#grid").addClass("actived");
                        $("#logo-grid").addClass("logo-actived");
                        $("#onegrid").removeClass("actived");
                        $("#logo-onegrid").removeClass("logo-actived");
                        $("#grid").attr('disabled','');
                        $("#onegrid").removeAttr("disabled");
                    break;
                    case "onegrid":
                        loadDataOneGrid();
                        $("#onegrid").addClass("actived");
                        $("#logo-onegrid").addClass("logo-actived");
                        $("#grid").removeClass("actived");
                        $("#logo-grid").removeClass("logo-actived");
                        $("#onegrid").attr('disabled','');
                        $("#grid").removeAttr("disabled");
                    break;
                }
            }

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
                    // alert("LOGIN TERLEBIH DAHULU");
                    location.href= "<?php echo base_url();?>home/login";
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
                            $('#lg-suka'+id).html("<img src='<?php echo base_url();?>assets/custom/img/loading-sm.gif' />");
                        },
                        success: function(data){
                            switch(action) {
                                case "like":
                                // $('#suka'+id).html('<input type="button" title="Unlike" class="unlike" onClick="addLikes('+id+',\'unlike\')" />');
                                $('#suka'+id).html('<i class="fa fa-heart" style="color:red;font-size: 13px;cursor:pointer;" title="Tidak Suka" onclick="addLikes('+id+',\'unlike\');"></i> ('+data.nomor+')');
                                $('#love'+id).html('<div class="btn btn-default pull-right col-lg-6 col-md-6 col-sm-12 col-xs-12" onclick="addLikes('+id+',\'unlike\');" id="lg-suka'+id+'"><i class="fa fa-heart" style="font-size: 13px;cursor:pointer;color:red" title="Tidak Suka"></i> ('+data.nomor+')</div>');
                                break;
                                case "unlike":
                                // $('#suka'+id).html('<input type="button" title="Like" class="like"  onClick="addLikes('+id+',\'like\')" />')
                                $('#suka'+id).html('<i class="fa fa-heart" style="font-size: 13px;cursor:pointer;" title="Suka" onclick="addLikes('+id+',\'like\');"></i> ('+data.nomor+')');
                                $('#love'+id).html('<div class="btn btn-default pull-right col-lg-6 col-md-6 col-sm-12 col-xs-12" onclick="addLikes('+id+',\'like\');" id="lg-suka'+id+'"><i class="fa fa-heart" style="font-size: 13px;cursor:pointer;" title="Suka"></i> ('+data.nomor+')</div>');
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

            function preInsertCart(id_dijual,hrg,stk,gmbr)
            {

                $.confirm({
                    // title: 'Masukkan Jumlah Pembelian',
                    title: '',
                    content: ''+
                    '<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><img src="<?php echo base_url();?>assets/custom/images/image_dijual/'+gmbr+'" class="img-rounded" style="height:50px;min-height:50px;min-width:45px;"></div>' +
                    '<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><div style="font-weight:bold;color:green;">Rp'+hrg+'</div>' +
                    '<div style="font-weight:bold;">Stok : '+stk+'</div></div>' +
                    '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top:15px;"><form action="" class="formName">' +
                    '<div style="text-align:center!important;">' +
                    '<div class="input-group">' +
                    '<span class="btn btn-success input-group-addon" style="font-weight:bold;" onclick="spinner_kurang('+id_dijual+');">-</span>' +
                    '<input type="number" value="1" min="1" max="'+stk+'" placeholder="Jumlah" class="form-control text-center" required autofocus id="qty_'+id_dijual+'" onkeypress="validasi_spinner_number('+id_dijual+','+stk+');"/>' +
                    '<span class="btn btn-success input-group-addon" style="font-weight:bold;" onclick="spinner_tambah('+id_dijual+','+stk+');">+</span>' +
                    '</div>' +
                    '</div>' +
                    '</form></div>',

                    type: 'green',
                    // escapeKey: 'Batal',
                    backgroundDismiss: true,
                    buttons: {   
                        tambah : {
                            text: "Tambahkan",
                            btnClass: 'btn-success',
                            keys: ['enter'],
                            action: function(){
                                // hapusFavorit(id_favorit,id_dijual);
                                prosesCart("add", id_dijual);
                            }
                        },
                        // Batal: {
                        //     btnClass:'btn-red',
                        //     action:function(){

                        //         swal({
                        //             icon: "error",
                        //             closeOnClickOutside: true, //tutup dengan click area luar
                        //             closeOnEsc: true, // tutup dengan tombol esc
                        //             title: "Gagal", // judul
                        //             button: false, // button tidak ada
                        //             timer: 3000, // setting waktu alert
                        //             text: "Batal Menghapus Data Favorit!" // text
                        //         });

                        //     }
                        // }

                    }
                });

            }

            // function spinner_number(aksi)
            // {   
            //     switch(aksi){
            //         case "tambah":
            //             var jt = $("#jml_transaksi").val();
            //             var tambah_jt = (jt*1)+1;
            //             $("#jml_transaksi").val(tambah_jt);
            //         break;
            //         case "kurang":
            //             var jtransaksi = $("#jml_transaksi").val();
            //             var kurang_jt = (jtransaksi*1)-1;
            //             $("#jml_transaksi").val(kurang_jt);
            //         break;
            //     }
                
            // }

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
                
            // HALAMAN LIHAT PENILAIAN
            function lihat_penilaianProduk(id_dijual)
            {
                location.href = "<?php echo base_url();?>dijual/lihat_penilaian_produk/"+id_dijual;
            }

        </script>