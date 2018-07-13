<!-- SCRIPT UNTUK BOOTSTRAP-FILEINPUT -->
<script src="<?php echo base_url();?>assets/custom/bootstrap-fileinput/fileinput.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/custom/bootstrap-fileinput/fileinput.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/custom/bootstrap-fileinput/fileinput-rtl.min.css">
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
</style>

<section class="tambahDijual" id="tambahDijual">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <ol class="breadcrumb">
                    <li><i class="fas fa-cube" style="color: #0D3542;"></i><span style="color: #db4a39;font-family:latoregular;"> Produk - Jasa Saya</span></li>
                    <li><?php echo anchor($this->uri->segment(1),'Katalog Saya','style="color:#db4a39;text-decoration: underline;"');?></li>
                    <li class="active"><a href="javascript:void(0)" onclick="td();" style="color: #db4a39;text-decoration: underline;font-weight: bold;">Tambah Dijual</a></li>
                </ol>

                <div class="text-center" style="color: #565656;font-size: 25px;transform: scale(.9,1);font-family: sans-serif;"><?php echo $title;?></div>
                <div class="separator"></div>
                <!-- <h5><?php //echo $title;?></h5> -->
                <div class="row">
                    <div class="col-md-3">
                        
                    </div>
                    <!-- <div class="col-md-10 col-md-offset-1"> -->
                    <div class="col-md-9">

                        <div class="panel panel-default" style="background-color: #F8F8F8;">
                            <div class="panel-body" style="padding: 33px;">
                                <!-- <form class="form-horizontal" method="post" id="inputdata0"> -->
                                <form id="inputdata0" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Kd. Dijual</label>
                                            <input type="text" class="form-control" name="kd_dijual" id="kd_dijual" value="<?php echo $kd_awal;?>" readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Username</label>
                                            <input type="text" class="form-control" value="<?php echo $usernm;?>" style="text-transform: uppercase;" readonly>
                                            <input type="hidden" name="id_user" id="id_user" value="<?php echo $idnya;?>">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Jenis Dijual</label>
                                            <select class="form-control select2" name="jenis_jual" id="jenis_jual" style="background: #fff;">
                                                <option value="produk">Produk</option>
                                                <option value="jasa">Jasa</option>
                                            </select>
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
                                            rows="2" cols="30" maxlength="100"></textarea>
                                            <div id="chars1" style="text-align: right;">0 / 100 Karakter</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="control-label">Nama Game</label>
                                            <select class="form-control select2" name="id_game" id="id_game" style="background: #fff;">
                                                <option value="RO Return">RO Return</option>
                                                <option value="RF Return">RF Return</option>
                                                <option value="RF Return">Blade N Soul</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="control-label">Nama Produk / Jasa</label>
                                            <input type="text" name="nama_jual" id="nama_jual" class="form-control" style="background: #fff;" placeholder="Masukkan Nama Produk / Jasa Dijual">
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="control-label">Jumlah</label>
                                            <input type="number" name="jml" id="jml" class="form-control" style="background: #fff;">
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
                                            rows="4" cols="30" maxlength="250"></textarea>
                                            <div id="chars2" style="text-align: right;">0 / 250 Karakter</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Kategori Produk / Jasa <span class="text-danger" style="font-size: 12px;font-style: italic;">*Dapat Memilih Lebih Dari 1 (satu)</span></label>
                                            <select class="form-control select2" multiple name="kategori" id="kategori" style="background: #fff;">
                                                <option value="gold">Gold</option>
                                                <option value="equipment">Equipment</option>
                                                <option value="lainnya">Lainnya</option>
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
                                                <input type="number" name="hrg_satuan" id="hrg_satuan" class="form-control" style="background: #fff;" onkeypress="total_1();">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Diskon <span class="text-danger" style="font-size: 12px;font-style: italic;">*Dapat Dikosongkan</span></label>
                                            <div class="input-group">
                                                <input type="number" name="disc" id="disc" class="form-control" style="background: #fff;" onkeypress="total_2();">
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
                                                <input type="number" class="form-control" name="hrg_diskon" id="hrg_diskon" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="row">
                                    <!-- <hr style="border: 1px #eee solid;"> -->

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Gambar <span class="text-danger" style="font-size: 12px;font-style: italic;">*Opsional & Dapat Upload Lebih Dari 1 (satu) Gambar</span></label>
                                            <!-- <input type="file" name="gambar" id="gambar" multiple class="file" data-show-upload="false" data-show-caption="true"> -->
                                            <input type="file" name="gambar[]" id="gambar" multiple>
                                        </div>
                                    </div>
                                </div>

                            </form>

                                <div class="form-group">
                                    <button class="btn-success btn-lg" onclick="insertData();"><i class="glyphicon glyphicon-hdd"></i> Simpan</button>
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
    //         location.href='<?php //echo base_url();?>katalog_saya/index';
    //     });
    // });

    function td(){
        location.href = '<?php echo base_url();?>katalog_saya/tambah_dijual';
    }

    function kembali(){
        location.href = '<?php echo base_url();?>katalog_saya';
    }

    // function kd_jual(){

        $(function(){
            $("#jenis_jual").change(function(){
            // $("#jenis_jual").on("ready change",function(){
            var valkd=$("#jenis_jual").val();
            
            $.ajax({
                url:"<?php echo site_url('katalog_saya/cari_kdjual');?>",
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
    //     Confirm.show("Anda yakin menyimpan data?","Simpan","insertData()");
    // }

    function insertData(){
        // var files = $('#gambar')[0].files;
        // var error = '';
        // var form_data = new FormData();
        // for(var count = 0; count<files.length; count++)
        // {
        //     var name = files[count].name;
        //     var extension = name.split('.').pop().toLowerCase();
        //     if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
        //     {
        //         error += "Invalid " + count + " Image File"
        //     }
        //     else
        //     {
        //         form_data.append("gambar[]", files[count]);
        //     }
        // }

        var data = {
            kd_dijual   : $("#kd_dijual").val(),
            id_user     : $("#id_user").val(),
            jenis_jual  : $("#jenis_jual").val(),
            jdl         : $("#jdl").val(),
            id_game     : $("#id_game").val(),
            nama_jual   : $("#nama_jual").val(),
            jml         : $("#jml").val(),
            kategori    : $("#kategori").val(),
            ket         : $("#ket").val(),
            hrg_satuan  : $("#hrg_satuan").val(),
            disc        : $("#disc").val(),
            hrg_diskon  : $("#hrg_diskon").val(),
            // gambar      : form_data
            gambar      : $("#gambar").val()
        };
        console.log(data.gambar);
        $.ajax({
            url: '<?php echo base_url();?>katalog_saya/insert_dijual',
            data: data,
            method: 'POST',
            dataType: 'json',
            // processData: false,
            // contentType: false,
            // cache: false,
            // crossDomain: true,
            // contentType: 'application/json; charset=utf-8',
            success: function(result) {
                console.log(result);

                if(result.code==0){
                    $( '#inputdata0' ).each(function(){
                      this.reset();
                    });
                    alert("Sukses : <b>"+result.message+"</b>","success");

                }else{
                    alert("Gagal : <b>"+result.message+"</b>","error");
                }
            }

        });
        // setTimeout(function() {
        //             location.href = '<?php //echo base_url();?>pharm/dokter/list/';
        //         }, 2000);
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

    $(document).on("ready", function() {
        $("#gambar").fileinput({
            uploadUrl:  "<?php echo base_url();?>assets/custom/images/image_dijual/",
            uploadAsync: false,
            overwriteInitial: false,
            showUpload: false, // hide upload button
            minFileCount: 1,
            maxFileCount: 5,
            initialPreviewAsData: true // identify if you are sending preview data only and not the markup
        });
    });
</script>