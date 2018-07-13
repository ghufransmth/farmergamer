<!-- DataTables -->
<script src="<?php echo base_url();?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.print.min.js"></script>
<!-- <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script> -->

<style type="text/css">
    /*.tanpa_outline:focus, .tanpa_outline:active
    {
        outline:none;
    }*/

    /*ATUR STYLE SELECT2 AGAR SESUAI*/
    /*.select2-container .select2-selection--single
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
    }*/

    /*ATUR RESPONSIVE*/
    /*@media screen and (max-width: 768px) {
      .panel {
        margin-top: -7em!important;
      }
    }*/

    /*ATUR CSS BREADCRUMB BOOSTRAP*/
    /*.breadcrumb
    {
        border-top: 3px solid #d2d6de;
        background-color: rgba(255, 255, 255, 0.7);
        width: 100%;
        box-shadow: 0 1px 1px rgba(0,0,0,0.1);
    }*/
    /*END ATUR CSS BREADCRUMB BOOTSTRAP*/

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
    
</style>
        
        <section style="background:linear-gradient(rgba(189, 185, 185, 0.2), rgba(189, 185, 185, 0.3));">
            <div class="container" style="margin-top: 30px;padding-top: 90px;margin-bottom: 40px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4 act">
                                <div class="panel" style="cursor:pointer;" onclick="toggle_btn('belumBayar');">
                                    <div class="panel-body" id="belumBayar">
                                        <div class="text-center"><i class="fas fa-clipboard-list" style="font-size: 25px;"></i></div>
                                        <!-- <div class="text-center">Katalog Dijual <div id="hitung_belumBayar" style="font-size: 12px;color: #d1d1d1;">(0)</div></div> -->
                                        <div class="text-center">Katalog Dijual <span id="hitung_belumBayar">(0)</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 act">
                                <div class="panel" style="cursor:pointer;" onclick="toggle_btn('pengiriman');">
                                    <div class="panel-body" id="pengiriman">
                                        <div class="text-center"><i class="icon-book" style="font-size: 25px;"></i></div>
                                        <!-- <div class="text-center">Katalog Dicari <div id="hitung_pengiriman" style="font-size: 12px;color: #d1d1d1;">(0)</div></div> -->
                                        <div class="text-center">Katalog Dicari <span id="hitung_pengiriman">(0)</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 act">
                                <div class="panel" style="cursor:pointer;" onclick="toggle_btn('selesai');">
                                    <div class="panel-body" id="selesai">
                                        <div class="text-center"><i class="icon-ticket" style="font-size: 25px;"></i></div>
                                        <!-- <div class="text-center">Katalog Event <div id="hitung_selesai" style="font-size: 12px;color: #d1d1d1;">(0)</div></div> -->
                                        <div class="text-center">Katalog Event <span id="hitung_selesai">(0)</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section id="katalogSaya" class="katalogSaya"> -->
        <!-- <div class="container"> -->
        <section style="background-color: #F9F9F9;padding-bottom:5px;">
            <div class="container" style="margin-top: -40px;padding-top: 0;margin-bottom: 40px;">
                <div class="row">
                    <!-- <div class="col-md-12"> -->
                    <div class="col-md-12" style="margin-top: 25px;">

                        <!-- <ol class="breadcrumb" style="background-color: rgb(248, 248, 248);border: 0;"> -->
                        <ol class="breadcrumb" style="background-color: transparent;border: 0;padding: 0;">
                            <li><i class="far fa-building" style="color: #555;"></i><span style="color: #555;font-size:15px;font-family:latoregular;"> Toko Saya</span></li>
                            <li><?php echo anchor($this->uri->segment(1)."/".$this->uri->segment(2),'Katalog Saya','style="color: #555;font-size:15px;"');?></li>
                        </ol>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-right">
                                    <button class="btn-sm btn-default btn-nohover actived" title="Table View" disabled data-toggle="tooltip"><i class="fa fa-table logo-actived" style="font-size: 17px;"></i></button>
                                    <button class="btn-sm btn-default btn-nohover" title="Grid View" data-toggle="tooltip"><i class="fas fa-th" style="font-size: 17px;"></i></button>
                                    <button class="btn-sm btn-default btn-nohover" title="1 Grid View" data-toggle="tooltip"><i class="fas fa-list" style="font-size: 17px;"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="text-center" style="color: #565656;font-size: 25px;transform: scale(.9,1);font-family: sans-serif;text-transform: uppercase;">Katalog Saya</div>
                        <div class="separator"></div>

                        <!-- <div class="panel panel-default">
                            <div class="panel-heading">
                                Jual Produk / Jasa Saya
                            </div>
                            <div class="panel-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>aaaa</th>
                                            <th>aaaa</th>
                                            <th>aaaa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>bbb</td>
                                            <td>ccc</td>
                                            <td>ddd</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> -->

                        <div class="boxnya">
                            <div class="box-footernya clearfix no-bordernya">
                                <b>Katalog Dijual</b>
                                <!-- <button class="btn btn-primary pull-right" id="tambah_dijual" style="margin-left: 10px;"><i class="fa fa-plus"></i> Tambah Dijual</button> -->
                                <a class="btn btn-primary pull-right" href="<?php echo base_url();?>toko_saya/katalog_saya/tambah_dijual" style="margin-left: 10px;"><i class="fa fa-plus" style="color:#fff;"></i>Tambah Dijual</a>
                                <!-- <button class="pull-right" title="3 Grid View"><i class="fas fa-th"></i></button>
                                <button class="pull-right" title="1 Grid View"><i class="fas fa-list"></i></button>
                                <button class="pull-right" title="Table View"><i class="fa fa-table"></i></button> -->
                            </div>
                            <div class="box-bodynya">
                                <!-- <button class="btn btn-lg btn-primary" style="float:left;margin-bottom: -70px;"><i class="fa fa-plus"></i> Tambah Dijual</button>
                                <div class="table-responsive" style="clear: left;"> -->
                                <div class="table-responsive">
                                    <table id="dijual" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kd. Dijual</th>
                                                <th>Tgl</th>
                                                <th>Jns. Dijual</th>
                                                <th>Judul</th>
                                                <th>Nm. Game</th>
                                                <th>Nm. P/J</th>
                                                <!-- <th>Jml</th>
                                                <th>Harga</th> -->
                                                <th style="width: 10%;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- <tr>
                                                <td>1</td>
                                                <td>ccc</td>
                                                <td><button><i class="fa fa-edit"></i></button>&nbsp;<button><i class="fa fa-trash"></i></button></td>
                                            </tr> -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="boxnya">
                            <div class="box-footernya clearfix no-bordernya">
                                <b>Katalog Dicari</b>
                                <!-- <button class="btn btn-primary pull-right" id="tambah_dicari" style="margin-left: 10px;"><i class="fa fa-plus"></i> Tambah Dicari</button> -->
                                <a class="btn btn-primary pull-right" style="margin-left: 10px;" href="<?php echo base_url();?>toko_saya/katalog_saya/tambah_dicari"><i class="fa fa-plus" style="color:#fff;"></i>Tambah Dicari</a>
                                <!-- <button class="pull-right" title="3 Grid View"><i class="fas fa-th"></i></button>
                                <button class="pull-right" title="1 Grid View"><i class="fas fa-list"></i></button>
                                <button class="pull-right" title="Table View"><i class="fa fa-table"></i></button> -->
                            </div>
                            <div class="box-bodynya">
                                <!-- <button class="btn btn-lg btn-primary" style="float:left;margin-bottom: -70px;"><i class="fa fa-plus"></i> Tambah Dijual</button>
                                <div class="table-responsive" style="clear: left;"> -->
                                <div class="table-responsive">
                                    <table id="dicari" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kd. Dijual</th>
                                                <th>Tgl</th>
                                                <th>Jns. Dijual</th>
                                                <th>Judul</th>
                                                <th>Nm. Game</th>
                                                <th>Nm. P/J</th>
                                                <!-- <th>Jml</th>
                                                <th>Harga</th> -->
                                                <th style="width: 10%;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </section>

<script>
    $(function () {
        $('#dijual').dataTable( {
            dom: 'Bfrtip',
            buttons: [],
            "ajax":{
                url :"<?php echo base_url();?>toko_saya/katalog_saya/loadDataKatalog/<?php echo $idnya;?>", // json datasource
                type: "post",  // method  , by default get
                error: function(){  // error handling
                }
            }
        });
    });

    // $(function(){
    //     $("#tambah_dijual").click(function(){
    //         location.href = "<?php //echo base_url();?>toko_saya/katalog_saya/tambah_dijual";
    //     });
    // });

    function detail_katalog(idnya){
        location.href = '<?php echo base_url();?>toko_saya/katalog_saya/detail_dijual/<?php echo $idnya;?>/'+idnya;
    }

    function ubah_dijual(idnya){
        location.href = '<?php echo base_url();?>toko_saya/katalog_saya/edit_dijual/<?php echo $idnya;?>/'+idnya;
    }

    function preHps(idnya){
        // Confirm.show("Anda yakin menghapus data?","Hapus","hps_dijual("+idnya+")");
        $.confirm({
            title: 'Konfirmasi!',
            content: 'Anda Yakin Menghapus Data?',
            type: 'red',
            escapeKey: 'Batal',
            backgroundDismiss: false,
            buttons: {   
                Hapus: {
                    btnClass: 'btn-primary text-white',
                    keys: ['enter'],
                    action: function(){
                        hps_dijual(idnya);
                    }
                },
                Batal: {
                    btnClass:'btn-red',
                    action: function(){
                        // $.alert('Batal Menghapus Data!');

                        swal({
                            icon: "error",
                            closeOnClickOutside: true, //tutup dengan click area luar
                            closeOnEsc: true, // tutup dengan tombol esc
                            title: "Gagal", // judul
                            button: false, // button tidak ada
                            timer: 3000, // setting waktu alert
                            text: "Batal Menghapus Data!" // text
                        });

                    }
                }

            }
        });

    }

    function hps_dijual(id_hapus){
        $.ajax({  
            url: '<?php echo base_url();?>toko_saya/katalog_saya/hapus_dijual/'+id_hapus,
            dataType: 'json',
            success: function(result) {
              console.log(result);
              // Alert.show("Berhasil Dihapus : <b>"+result.message+"</b>","success");
              // alert("Berhasil Dihapus "+result.message);
              // $.alert(result.message);

                if(result.code == 0)
                {
                    swal({
                        icon: "success",
                        closeOnClickOutside: true, //tutup dengan click area luar
                        closeOnEsc: true, // tutup dengan tombol esc
                        title: "Sukses", // judul
                        button: false, // button tidak ada
                        timer: 3000, // setting waktu alert
                        text: result.message // text
                    });
                    setTimeout(function(){
                        location.href = '<?php echo base_url();?>toko_saya/katalog_saya';
                    }, 2000);
                }
                else
                {
                    // alert("Gagal : "+result.message);
                    // Alert.show("Gagal : <b>"+result.message+"</b>","danger");
                    swal({
                        icon: "warning",
                        closeOnClickOutside: true,
                        closeOnEsc: true,
                        title: "Peringatan",
                        button: { // setting button
                            className: "tombol_red" // kasih nama class
                        },
                        text: result.message
                    });
                }

            }
        });
        // setTimeout(function() {
        //     location.href = '<?php //echo base_url();?>toko_saya/katalog_saya';
        // }, 2000);
    }


    // FITUR DICARI PRODUK / JASA SAYA
    $(function () {
        $('#dicari').dataTable( {
            dom: 'Bfrtip',
            buttons: [],
            "ajax":{
                url :"<?php echo base_url();?>toko_saya/katalog_saya/loadDataKatalogDicari/<?php echo $idnya;?>", // json datasource
                type: "post",  // method  , by default get
                error: function(){  // error handling
                }
            }
        });
    });

    // $(function(){
    //     $("#tambah_dicari").click(function(){
    //         location.href = "<?php //echo base_url();?>toko_saya/katalog_saya/tambah_dicari";
    //     });
    // });

    function detail_katalog_dicari(idnya){
        location.href = '<?php echo base_url();?>toko_saya/katalog_saya/detail_dicari/<?php echo $idnya;?>/'+idnya;
    }

    function ubah_dicari(idnya){
        location.href = '<?php echo base_url();?>toko_saya/katalog_saya/edit_dicari/<?php echo $idnya;?>/'+idnya;
    }

    function preHps_dicari(idnya){
        // Confirm.show("Anda yakin menghapus data?","Hapus","hps_dijual("+idnya+")");
        $.confirm({
            title: 'Konfirmasi!',
            content: 'Anda Yakin Menghapus Data?',
            type: 'red',
            escapeKey: 'Batal',
            backgroundDismiss: false,
            buttons: {   
                Hapus: {
                    btnClass: 'btn-primary text-white',
                    keys: ['enter'],
                    action: function(){
                        hps_dicari(idnya);
                    }
                },
                Batal: {
                    btnClass:'btn-red',
                    action: function(){
                        // $.alert('Batal Menghapus Data!');

                        swal({
                            icon: "error",
                            closeOnClickOutside: true, //tutup dengan click area luar
                            closeOnEsc: true, // tutup dengan tombol esc
                            title: "Gagal", // judul
                            button: false, // button tidak ada
                            timer: 3000, // setting waktu alert
                            text: "Batal Menghapus Data!" // text
                        });

                    }
                }

            }
        });

    }

    function hps_dicari(id_hapus){
        $.ajax({  
            url: '<?php echo base_url();?>toko_saya/katalog_saya/hapus_dicari/'+id_hapus,
            dataType: 'json',
            success: function(result) {
              console.log(result);
              // Alert.show("Berhasil Dihapus : <b>"+result.message+"</b>","success");
              // alert("Berhasil Dihapus "+result.message);
              // $.alert(result.message);

                if(result.code == 0)
                {
                    swal({
                        icon: "success",
                        closeOnClickOutside: true, //tutup dengan click area luar
                        closeOnEsc: true, // tutup dengan tombol esc
                        title: "Sukses", // judul
                        button: false, // button tidak ada
                        timer: 3000, // setting waktu alert
                        text: result.message // text
                    });
                    setTimeout(function(){
                        location.href = '<?php echo base_url();?>toko_saya/katalog_saya';
                    }, 2000);
                }
                else
                {
                    // alert("Gagal : "+result.message);
                    // Alert.show("Gagal : <b>"+result.message+"</b>","danger");
                    swal({
                        icon: "warning",
                        closeOnClickOutside: true,
                        closeOnEsc: true,
                        title: "Peringatan",
                        button: { // setting button
                            className: "tombol_red" // kasih nama class
                        },
                        text: result.message
                    });
                }

            }
        });

    }

</script>