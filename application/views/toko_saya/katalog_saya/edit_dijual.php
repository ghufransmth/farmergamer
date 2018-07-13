<!-- SCRIPT UNTUK BOOTSTRAP-FILEINPUT -->
<script src="<?php echo base_url();?>assets/custom/bootstrap-fileinput/fileinput.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/custom/bootstrap-fileinput/fileinput.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/custom/bootstrap-fileinput/fileinput-rtl.min.css">
<!-- <script src="<?php //echo base_url();?>assets/custom/bootstrap-fileinput/js/plugins/sortable.min.js"></script>
<script src="<?php //echo base_url();?>assets/custom/bootstrap-fileinput/js/plugins/purify.min.js"></script>
<script src="<?php //echo base_url();?>assets/custom/bootstrap-fileinput/js/plugins/piexif.min.js"></script> -->

<!-- load the third party plugin assets (jquery-confirm) -->
<!-- <link href="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css" rel="stylesheet" type="text/css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script> -->
<!-- <link rel="stylesheet" href="<?php //echo base_url();?>assets/custom/jquery-confirm-v3.3.2/jquery-confirm.min.css">
<script src="<?php //echo base_url();?>assets/custom/jquery-confirm-v3.3.2/jquery-confirm.min.js"></script> -->

<style>
    .krajee-default .file-upload-indicator
    {
        bottom: -16px;
        left: -3px;
    }
    .krajee-default.file-preview-frame
    {
        width: 30%;
    }

    .krajee-default .file-drag-handle
    {
        display:none;
    }

</style>
<!-- END SCRIPT UNTUK BOOTSTRAP-FILEINPUT -->

<style>
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
    .select2-container--default .select2-selection--multiple .select2-selection__choice 
    {
        background-color: rgba(0,0,0,0.41);
        color: whitesmoke;
    }
    .select2-container--default .select2-selection--multiple .select2-selection__choice__remove 
    {
        color: whitesmoke;
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
    
</style>

<section class="editDijual" id="editDijual">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- <ol class="breadcrumb" style="background-color: rgb(248, 248, 248);border: 0;"> -->
                <ol class="breadcrumb" style="background-color: transparent;border: 0;padding: 0;">
                    <li><i class="far fa-building" style="color: #555;"></i><span style="color: #555;font-size:15px;font-family:latoregular;"> Toko Saya</span></li>
                    <li><?php echo anchor('toko_saya/'.$this->uri->segment(2),'Katalog Saya','style="color: #555;font-size:15px;"');?></li>
                    <li class="active"><a href="javascript:void(0)" onclick="halaman_ini();" style="color: #555;font-size:15px;">Edit Dijual</a></li>
                </ol>

                <div class="text-center" style="color: #565656;font-size: 25px;transform: scale(.9,1);font-family: sans-serif;text-transform: uppercase;"><?php echo $title;?> - <?php echo $jual['kd_dijual'];?></div>
                <div class="separator"></div>
                <!-- <h5><?php //echo $title;?></h5> -->
                <div class="row">
                    <div class="col-md-3">
                        
                    </div>
                    <!-- <div class="col-md-10 col-md-offset-1"> -->
                    <div class="col-md-9">

                        <div class="panel panel-default" style="background-color: #FFFFFF;box-shadow: 0 1px 1px rgba(0,0,0,0.1);border:1px solid #ECECEC;">
                            <div class="panel-body" style="padding: 33px;">
                                <!-- <form class="form-horizontal" method="post" id="inputdata0"> -->
                                <!-- <form id="inputdata0" method="post" enctype="multipart/form-data"> -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Kd. Dijual</label>
                                            <input type="text" class="form-control" name="kd_dijual" id="kd_dijual" value="<?php echo $jual['kd_dijual'];?>" readonly>
                                            <input type="hidden" id="id_dijual" value="<?php echo $jual['id_dijual'];?>">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Username</label>
                                            <input type="text" class="form-control" value="<?php echo $jual['username'];?>" style="text-transform: uppercase;" readonly>
                                            <input type="hidden" name="id_user" id="id_user" value="<?php echo $jual['id_user'];?>">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Jenis Dijual</label>
                                            <!-- <select class="form-control select2" name="jenis_jual" id="jenis_jual" style="background: #fff;">
                                                <option value="<?php //echo $jual['jenis_dijual'];?>"><?php //echo ucwords($jual['jenis_dijual']);?></option>
                                                <option value="<?php //if($jual['jenis_dijual'] == "produk"){echo "jasa";}elseif($jual['jenis_dijual'] == "jasa"){echo "produk";}?>"><?php //if($jual['jenis_dijual'] == "produk"){echo "Jasa";}elseif($jual['jenis_dijual'] == "jasa"){echo "Produk";}?></option>
                                            </select> -->
                                            <input type="text" class="form-control" readonly value="<?php echo ucwords($jual['jenis_dijual']);?>">
                                            <input type="hidden" name="jenis_jual" id="jenis_jual" class="form-control" value="<?php echo $jual['jenis_dijual'];?>">
                                        </div>
                                    </div>

                                    <!-- <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Judul</label>
                                            <input type="text" class="form-control" style="background: #fff;">
                                        </div>
                                    </div> -->
                                    
                                    
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Judul</label>
                                            <!-- <input type="text" class="form-control" style="background: #fff;" placeholder="Masukkan Judul Mengenai Produk / Jasa"> -->
                                            <textarea class="form-control" style="background: #fff;" placeholder="Masukkan Judul Mengenai Produk / Jasa" id="jdl" name="jdl"
                                            rows="2" cols="30" maxlength="100"><?php echo $jual['judul'];?></textarea>
                                            <div id="chars1" style="text-align: right;"><?php echo strlen($jual['judul']);?> / 100 Karakter</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="control-label">Nama Game</label>
                                            <select class="form-control select2" name="id_game" id="id_game" style="background: #fff;">
                                                <option value="<?php echo $jual['id_game'];?>"><?php echo $jual['nama_game'];?></option>
                                                <?php 
                                                    $cari_lainnya = $this->db->select("*")->from("list_game")->where_not_in('id_game', $jual['id_game'])->get();
                                                    foreach($cari_lainnya->result() AS $val99)
                                                    {
                                                        echo "<option value='".$val99->id_game."'>".$val99->nama_game."</option>";
                                                    }
                                                ;?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="control-label">Nama Produk / Jasa</label>
                                            <input type="text" name="nama_jual" id="nama_jual" class="form-control" style="background: #fff;" placeholder="Masukkan Nama Produk / Jasa Dijual" value="<?php echo $jual['nama_dijual'];?>">
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="control-label">Jumlah</label>
                                            <input type="number" name="jml" id="jml" class="form-control" style="background: #fff;" value="<?php echo $jual['jumlah'];?>" onkeypress="validasi_jml()">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Keterangan</label>
                                            <!-- <textarea class="form-control" style="background: #fff;" name="ket" id="ket" placeholder="Masukkan Keterangan Tambahan Mengenai Produk / Jasa"
                                            onkeyup="countChar(this)" rows="4" cols="30" maxlength="250"></textarea> -->
                                            <textarea class="form-control" style="background: #fff;" name="ket" id="ket" placeholder="Masukkan Keterangan Tambahan Mengenai Produk / Jasa"
                                            rows="4" cols="30" maxlength="250"><?php echo $jual['keterangan'];?></textarea>
                                            <div id="chars2" style="text-align: right;"><?php echo strlen($jual['keterangan']);?> / 250 Karakter</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Kategori Produk / Jasa <span class="text-danger" style="font-size: 12px;font-style: italic;">*Dapat Memilih Lebih Dari 1 (satu)</span></label>
                                            <select class="form-control select2" multiple name="kategori" id="kategori" style="background: #fff;width: 100%;">
                                                <?php
                                                    $kat=json_decode($jual['kategori']);
                                                    for($i=0;$i<sizeof($kat);$i++){
                                                        echo '<option value="'.ucwords($kat[$i]).'" selected="selected">';
                                                        echo ''.ucwords($kat[$i]).'</option>';
                                                    }
                                                ?>

                                                <?php 
                                                    $cari_kategori = $this->db->select("*")->from("kategori_item")->where_not_in('nama_kategori', $kat)->get();
                                                    foreach($cari_kategori->result() AS $val90)
                                                    {
                                                        echo "<option value='".$val90->nama_kategori."'>".$val90->nama_kategori."</option>";
                                                    }
                                                ?>

                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Harga Satuan</label>
                                            <div class="input-group">
                                                <!-- <span class="input-group-addon" style="background-color: rgba(65, 105, 225, 0.9);color: #fff;">Rp. </span> -->
                                                <span class="input-group-addon" style="background-color: #494949;color: #fff;">Rp. </span>
                                                <input type="number" name="hrg_satuan" id="hrg_satuan" class="form-control" style="background: #fff;" onkeypress="total_1();validasi_hsatuan();" value="<?php echo $jual['harga'];?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Diskon <span class="text-danger" style="font-size: 12px;font-style: italic;">*Dapat Dilewati</span></label>
                                            <div class="input-group">
                                                <input type="number" name="disc" id="disc" class="form-control" style="background: #fff;" onkeypress="total_2();validasi_disc();" value="<?php echo $jual['diskon'];?>">
                                                <!-- <span class="input-group-addon" style="background-color: rgba(65, 105, 225, 0.9);color: #fff;">%</span> -->
                                                <span class="input-group-addon" style="background-color: #494949;color: #fff;">%</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Harga Diskon</label>
                                            <div class="input-group">
                                                <!-- <span class="input-group-addon" style="background-color: rgba(65, 105, 225, 0.9);color: #fff;">Rp.</span> -->
                                                <span class="input-group-addon" style="background-color: #494949;color: #fff;">Rp.</span>
                                                <input type="number" class="form-control" name="hrg_diskon" id="hrg_diskon" readonly value="<?php echo $jual['harga_diskon'];?>">
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="row">
                                    <!-- <hr style="border: 1px #eee solid;"> -->

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Gambar <span class="text-danger" style="font-size: 12px;font-style: italic;">*Opsional & Dapat Upload Max 5 Gambar</span></label>
                                            <!-- <input type="file" name="gambar" id="gambar" multiple class="file" data-show-upload="false" data-show-caption="true"> -->
                                            <input type="file" name="gambar" id="gambar" multiple>
                                        </div>
                                    </div>
                                </div>

                            <!-- </form> -->

                                <div class="form-group">
                                    <button class="btn-success btn-lg" onclick="preInsert();" id="btnSubmit"><i class="glyphicon glyphicon-hdd"></i> Simpan</button>
                                    <button class="btn-default btn-lg" onclick="kembali();">Kembali</button>
                                </div>

                            
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
</section>


<script>
    // $(function(){
    //     $("#kembali").on("click",function(){
    //         location.href='<?php //echo base_url();?>toko_saya/katalog_saya/index';
    //     });
    // });

    // MEMBUAT MIN & MAX INPUT NUMBER
    $(function(){
        $("#disc").attr({
            "max" : 100,
            "min" : 0
        });

        $("#hrg_satuan").attr({
            "min" : 0
        });

        $("#jml").attr({
            "min" : 0
        });
    })
    // END MEMBUAT MIN & MAX INPUT NUMBER

    // form validasi client side untuk insert
    function validasi_disc(){

        $("#disc").keyup(function(e){
            var key = (e.which) ? e.which : e.keyCode;
            if( key == 13 ){ filterLeads(e) }

            var diskon = $("#disc").val();
            if(diskon < 0 || diskon > 100)
            {
                
                $("#disc").val("0");
                // return false;
                    
            }
            // console.log(diskon);


        });

    }

    function validasi_hsatuan(){

        $("#hrg_satuan").keyup(function(e){
            var key = (e.which) ? e.which : e.keyCode;
            if( key == 13 ){ filterLeads(e) }

            var hrg = $("#hrg_satuan").val();
            if(hrg < 0)
            {
                
                $("#hrg_satuan").val("0");
                // return false;
                    
            }
            // console.log(hrg);


        });

    }

    function validasi_jml(){

        $("#jml").keyup(function(e){
            var key = (e.which) ? e.which : e.keyCode;
            if( key == 13 ){ filterLeads(e) }

            var jml = $("#jml").val();
            if(jml < 0)
            {
                
                $("#jml").val("0");
                // return false;
                    
            }
            // console.log(hrg);


        });

    }
    // end form validasi client side untuk insert

    function halaman_ini(){
        location.href = '<?php echo base_url();?>toko_saya/katalog_saya/edit_dijual/<?php echo $this->uri->segment(4);?>/<?php echo $this->uri->segment(5);?>';
    }

    function kembali(){
        location.href = '<?php echo base_url();?>toko_saya/katalog_saya';
    }

    // function kd_jual(){

        $(function(){
            $("#jenis_jual").change(function(){
            // $("#jenis_jual").on("ready change",function(){
            var valkd=$("#jenis_jual").val();
            
            $.ajax({
                url:"<?php echo site_url('toko_saya/katalog_saya/cari_kdjual');?>",
                type:"POST",
                data:"value_kd="+valkd, //data: "name="+nama variable
                cache:false,
                success:function(html){ //event success
                    var val_hsl = $("#kd_dijual").val(html); //selector dengan nama mirip seperti ...
                    console.log(val_hsl);
                    
                }
            })
            console.log(valkd);

            })
        });
            
    // }

    // function preInsert(){
    //     Confirm.show("Anda yakin mengubah data?","Simpan","insertData()");
    // }

    function preInsert(){

        $.confirm({
            title: 'Konfirmasi!',
            content: 'Anda Yakin Mengubah Data?',
            type: 'green',
            escapeKey: 'Batal',
            backgroundDismiss: false,
            buttons: {   
                Simpan: {
                    btnClass: 'btn-primary text-white',
                    keys: ['enter'],
                    action: function(){
                        insertData();
                    }
                },
                Batal: {
                    btnClass:'btn-red',
                    action: function(){
                        swal({
                            icon: "error",
                            closeOnClickOutside: true, //tutup dengan click area luar
                            closeOnEsc: true, // tutup dengan tombol esc
                            title: "Gagal", // judul
                            button: false, // button tidak ada
                            timer: 3000, // setting waktu alert
                            text: "Batal Mengubah Data!" // text
                        });

                    }
                }

            }
        });

    }

    // function insertData(){

    //     var data = {
    //         kd_dijual   : $("#kd_dijual").val(),
    //         id_user     : $("#id_user").val(),
    //         jenis_jual  : $("#jenis_jual").val(),
    //         jdl         : $("#jdl").val(),
    //         id_game     : $("#id_game").val(),
    //         nama_jual   : $("#nama_jual").val(),
    //         jml         : $("#jml").val(),
    //         kategori    : $("#kategori").val(),
    //         ket         : $("#ket").val(),
    //         hrg_satuan  : $("#hrg_satuan").val(),
    //         disc        : $("#disc").val(),
    //         hrg_diskon  : $("#hrg_diskon").val(),
    //         // gambar      : form_data
    //         gambar      : $("#gambar").val()
    //     };
    //     console.log(data.gambar);
    //     $.ajax({
    //         url: '<?php //echo base_url();?>toko_saya/katalog_saya/insert_dijual',
    //         data: data,
    //         method: 'POST',
    //         dataType: 'json',
    //         // processData: false,
    //         // contentType: false,
    //         // cache: false,
    //         // crossDomain: true,
    //         // contentType: 'application/json; charset=utf-8',
    //         success: function(result) {
    //             console.log(result);

    //             if(result.code==0){
    //                 $( '#inputdata0' ).each(function(){
    //                   this.reset();
    //                 });
    //                 alert("Sukses : <b>"+result.message+"</b>","success");

    //             }else{
    //                 alert("Gagal : <b>"+result.message+"</b>","error");
    //             }
    //         }

    //     });
    //     // setTimeout(function() {
    //     //             location.href = '<?php //echo base_url();?>pharm/dokter/list/';
    //     //         }, 2000);
    // }

    function insertData(){
        var files = $('#gambar')[0].files;
        var error = '';
        var form_data = new FormData();

        // if(files.length>0)
        // {
            for(var count = 0; count<files.length; count++)
            {
                var name = files[count].name;
                var extension = name.split('.').pop().toLowerCase();
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
                {
                    error += "Invalid " + count + " Image File"
                }
                else
                {
                    
                    form_data.append("gambar[]", files[count]);
                }
            }
        // }
        // else
        // {
        //     form_data.append("gambar[]", $("#gambar").val());
        // }

        form_data.append('id_dijual',$("#id_dijual").val());
        form_data.append('kd_dijual',$("#kd_dijual").val());
        form_data.append('id_user',$("#id_user").val());
        form_data.append('jenis_jual',$("#jenis_jual").val());
        form_data.append('jdl',$("#jdl").val());
        form_data.append('id_game',$("#id_game").val());
        form_data.append('nama_jual',$("#nama_jual").val());
        form_data.append('jml',$("#jml").val());
        form_data.append('kategori',$("#kategori").val());
        form_data.append('ket',$("#ket").val());
        form_data.append('hrg_satuan',$("#hrg_satuan").val());
        form_data.append('disc',$("#disc").val());
        form_data.append('hrg_diskon',$("#hrg_diskon").val());

        // var abc = $("#kategori").val();
        // console.log(abc);

        console.log(form_data);
        console.log(files);
        // console.log($("#gambar").val());

        if(error == '')
        {
        $.ajax({
            url: '<?php echo base_url();?>toko_saya/katalog_saya/proses_edit_dijual',
            data: form_data,
            method: 'POST',
            dataType: 'json',
            processData: false, //penting untuk input file
            contentType: false,
            // cache: false,
            enctype: 'multipart/form-data',
            // crossDomain: true,
            // contentType: 'application/json; charset=utf-8',
            success: function(result) {
                console.log(result);

                // disabled the submit button
                // $("#btnSubmit").prop("disabled", true);

                if(result.code==0)
                {
                    // $( '#inputdata0' ).each(function(){
                    //   this.reset();
                    // });
                    // alert("Sukses : "+result.message);
                    // Alert.show("Sukses : <b>"+result.message+"</b>","success");

                    swal({
                        icon: "success",
                        closeOnClickOutside: true, //tutup dengan click area luar
                        closeOnEsc: true, // tutup dengan tombol esc
                        title: "Input Sukses", // judul
                        button: false, // button tidak ada
                        timer: 3000, // setting waktu alert
                        text: result.message // text
                    });

                    setTimeout(function(){
                        location.href = '<?php echo base_url();?>toko_saya/katalog_saya/edit_dijual/<?php echo $this->uri->segment(4);?>/<?php echo $this->uri->segment(5);?>';
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
        else
        {
            alert(error);
        }

    }

    function total_1(index){

        $("#hrg_satuan").keyup(function(e){ // eq berfungsi ambil element berdasarkan indexnya
            var key = (e.which) ? e.which : e.keyCode;
            if( key == 13 ){ filterLeads(e) }

            var valharga=$("#hrg_satuan").val();
            var valdiskon=$("#disc").val();

            var valtotal = (valdiskon/100)*valharga;
            var valtotal2 = (valharga*1)-(valtotal*1);
            $("#hrg_diskon").val(valtotal2); //selector dengan nama mirip seperti ...

            console.log(valharga);
            console.log(valdiskon);

        });

    }

    function total_2(index){

        $("#disc").keyup(function(e){ // eq berfungsi ambil element berdasarkan indexnya
            var key = (e.which) ? e.which : e.keyCode;
            if( key == 13 ){ filterLeads(e) }

            var valharga=$("#hrg_satuan").val();
            var valdiskon=$("#disc").val();

            var valtotal = (valdiskon/100)*valharga;
            var valtotal2 = (valharga*1)-(valtotal*1);
            $("#hrg_diskon").val(valtotal2); //selector dengan nama mirip seperti ...

            console.log(valharga);
            console.log(valdiskon);

        });

    }

    // function countChar(val) {
    //     var len = val.value.length;
    //     if (len >= 250) {
    //       val.value = val.value.substring(0, 250);
    //     } else {
    //       // $('#charNum').text(500 - len );
    //       $('#charNum').text(0 + len +" / "+ 250 +" Karakter");
    //     }
    // };

    // HITUNG KARAKTER PADA TEXTAREA
    $(function(){
        var maxLength = 100;
        $('#jdl').keyup(function() {
        // $('#jdl').on('ready keyup', function(){
          var hitung = $(this).val().length;
          var hitung2 = 0 + hitung;
          $('#chars1').text(hitung2+ " / " + 100 +" Karakter");
        });
    });

    $(function(){
        var maxLength = 250;
        $('#ket').keyup(function() {
          var hitung = $(this).val().length;
          var hitung2 = 0 + hitung;
          $('#chars2').text(hitung2+ " / " + 250 +" Karakter");
        });
    });

    // $(document).on("ready", function() {
    //     $("#gambar").fileinput({
    //         uploadUrl:  "<?php //echo base_url();?>assets/custom/images/image_dijual/",
    //         uploadAsync: false,
    //         overwriteInitial: false,
    //         showUpload: false, // hide upload button
    //         minFileCount: 1,
    //         maxFileCount: 5,
    //         initialPreviewAsData: true // identify if you are sending preview data only and not the markup
    //     });
    // });

    $(document).on("ready", function() {

        var krajeeGetCount = function(id) {
            var cnt = $('#' + id).fileinput('getFilesCount');
            // return cnt === 0 ? 'You have no files remaining.' :
            return cnt === 0 ? 'Kamu Tidak Memiliki Gambar Lagi.' :
                // 'You have ' +  cnt + ' file' + (cnt > 1 ? 's' : '') + ' remaining.';
                'Tersisa ' +  cnt + ' Gambar.';
        };

        $("#gambar").fileinput({
            showUpload: false, // hide upload button
            minFileCount: 0,
            maxFileCount: 5,
            maxFileSize: 100, // 100kb

            overwriteInitial: false, 
            validateInitialCount: true, // tambahan (to include initial preview file count (server uploaded files) in validating minFileCount and maxFileCount)
            initialPreview: [
                // "<img class='file-preview-image' style='height:160px;' src='<?php //echo base_url('assets/img/produk/'.$tampil['gambar']);?>'>",
                // '<?php //echo base_url();?>assets/custom/images/image_dijual/72.jpg',
                // '<?php //echo base_url();?>assets/custom/images/image_dijual/72.jpg'

                <?php foreach($ambil_gambar AS $pic1):?>
                <?php if($pic1 != "no_image.jpg"):?>
                '<?php echo base_url();?>assets/custom/images/image_dijual/<?php echo $pic1;?>',
                // "<img class='file-preview-image' id='img<?php //echo $number_img;?>' src='<?php //echo base_url();?>assets/custom/images/image_dijual/<?php //echo $pic1;?>'>",
                <?php endif;?>
                <?php endforeach;?>
            ],
            initialPreviewAsData: true, // PENTING !! identify if you are sending preview data only and not the markup
            //initialCaption: '<?php //foreach($ambil_gambar AS $abc){echo $abc;}?>', //ini caption untuk nama nya disebelah pemilihan browser
            initialPreviewFileType: 'image', // image is the default and can be overridden in config below
            initialPreviewConfig: [ //setinggan lebih lanjut initial preview
                <?php $num=1;foreach($ambil_gambar AS $pic2):?>
                {
                    caption: "<?php echo $pic2;?>",
                    // url: "<?php //echo base_url();?>assets/custom/images/image_dijual/<?php //echo $pic2;?>",
                    // url : "/site/file-delete",
                    // url: "<?php //echo base_url();?>toko_saya/katalog_saya/proses_edit_dijual",
                    url: "<?php echo base_url();?>toko_saya/katalog_saya/hapus_gambar/<?php echo $pic2;?>/<?php echo $jual['id_dijual'];?>",
                    // size: <?php //echo $fsize;?>,
                    size : "<?php echo filesize('./assets/custom/images/image_dijual/'.$pic2);?>", // fungsi php filesize untuk cari ukuran dari file
                    key : "<?php echo $num;?>"
                },
                <?php $num++;endforeach;?>
                // {caption: "<?php //foreach($tes2 AS $abc){echo $abc;}?>"}

            //{caption: "<?php //echo $tampil['gambar'];?>", width: "200px", url: "<?php //echo base_url('assets/img/produk/'.$tampil['gambar']);?>'>"} //caption merupakan jdl dibawah gambar
            //     {caption: "Desert.jpg", size: 827000, width: "120px", url: "/file-upload-batch/2", key: 1},
            //     {caption: "Lighthouse.jpg", size: 549000, width: "120px", url: "/file-upload-batch/2", key: 2}, 
            //     {type: "video", size: 375000, filetype: "video/mp4", caption: "KrajeeSample.mp4", url: "/file-upload-batch/2", key: 3}, 
            //     {type: "pdf", size: 8000, caption: "About.pdf", url: "/file-upload-batch/2", key: 4},
            //     {type: "text", size: 1430, caption: "LoremIpsum.txt", url: "/file-upload-batch/2", key: 5}, 
            //     {type: "html", size: 3550, caption: "LoremIpsum.html", url: "/file-upload-batch/2", key: 6}
            ],
            initialPreviewShowDelete: true,
            // purifyHtml: true,
            // browseOnZoneClick: true,
            showClose: true,
            showRemove: true,
            allowedFileExtensions: ["jpg", "png", "gif"]


            // previewZoomButtonClasses: {
            //     prev: 'btn btn-navigate',
            //     next: 'btn btn-navigate',
            //     toggleheader: 'btn btn-kv btn-default btn-outline-secondary',
            //     fullscreen: 'btn btn-kv btn-default btn-outline-secondary',
            //     borderless: 'btn btn-kv btn-default btn-outline-secondary',
            //     close: 'btn btn-kv btn-default btn-outline-secondary'
            // }

        //});

        }).on('filebeforedelete', function() {
            return new Promise(function(resolve, reject) {
                $.confirm({
                    // title: 'Confirmation!',
                    title: 'Konfirmasi!',
                    // content: 'Are you sure you want to delete this file?',
                    content: 'Anda Yakin Menghapus Gambar Ini?',
                    type: 'red',
                    escapeKey: 'cancel',
                    backgroundDismiss: false,
                    buttons: {   
                        ok: {
                            btnClass: 'btn-primary text-white',
                            keys: ['enter'],
                            action: function(){
                                resolve();
                            }
                        },
                        cancel: function(){
                            // $.alert('File deletion was aborted! ' + krajeeGetCount('gambar'));
                            $.alert('Batal Menghapus Gambar! ' + krajeeGetCount('gambar'));
                        }
                    }
                });
            });
        }).on('filedeleted', function() {
            setTimeout(function() {
                // $.alert('File deletion was successful! ' + krajeeGetCount('gambar'));
                $.alert('Sukses Menghapus Gambar! ' + krajeeGetCount('gambar'));
            }, 900);
        });

            // .on('filesuccessremove', function(event, id) {
            //     if (some_processing_function(id)) {
            //        console.log('Uploaded thumbnail successfully removed');
            //     } else {
            //         return false; // abort the thumbnail removal
            //     }
            // });

            // $('#gambar').on('filedeleted', function(event, key, jqXHR, data) {
            //     console.log('Key = ' + key);
            // });

            // $("#gambar").fileinput('clear').on("click",function(){
            //     var filesCount = $('#gambar').fileinput('getFilesCount');
            //     var valhapus = $("#hapus_file").val(filesCount);
            //     console.log(valhapus);
            // })

                    //INI BENAR BISA HITUNG JUMLAH FILES
            // $("#gambar").on("click", function(){
            //     filesCount = $('#gambar').fileinput('getFilesCount');
            //     var valhapus = $("#hapus_file").val(filesCount);
            //     console.log(valhapus);
            // })


    });


</script>