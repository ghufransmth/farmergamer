<!-- SCRIPT UNTUK BOOTSTRAP-FILEINPUT -->
<script src="<?php echo base_url();?>assets/custom/bootstrap-fileinput/fileinput.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/custom/bootstrap-fileinput/fileinput.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/custom/bootstrap-fileinput/fileinput-rtl.min.css">
<!-- <script src="<?php //echo base_url();?>assets/custom/bootstrap-fileinput/js/plugins/sortable.min.js"></script>
<script src="<?php //echo base_url();?>assets/custom/bootstrap-fileinput/js/plugins/purify.min.js"></script>
<script src="<?php //echo base_url();?>assets/custom/bootstrap-fileinput/js/plugins/piexif.min.js"></script> -->

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
    /*@media all and (max-width: 768px) {
        .foto-responsive {
            width:100%!important;
            text-align: center!important;
            margin-bottom:0!important; 
        }      
    }*/

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

    /*CSS IMAGE UNTUK UPLOAD*/
    .css-img-hidden
    {
        display: none;
    }

    .css-img-upload img
    {
        width: 90px;
        min-height: 90px;
        cursor: pointer;
    }

</style>

    <section style="background-color: #F9F9F9;padding-bottom:5px;">
    <?php if(!isset($_SESSION['tc_id_user'])):?>
    <div class="container" style="margin-top: 90px;padding-top: 70px;margin-bottom: 40px;">
    <?php else:?>
    <div class="container" style="margin-top: 50px;padding-top: 70px;margin-bottom: 40px;">
    <?php endif;?>
            
            <div class="row">
                <div class="col-md-12">

                    <!-- <ol class="breadcrumb" style="background-color: transparent;border: 0;padding: 0;">
                        <li><span style="color: #db4a39;font-family:latoregular;">FarmerGamer</span></li>
                        <li><span style="color: #db4a39;font-family:latoregular;">User</span></li>
                        <li class="active"><span style="color: #db4a39;font-family:latoregular;">Profil Saya</span></li>
                        <li class="active"><span style="color: #db4a39;font-family:latoregular;">Ubah Profil</span></li>
                    </ol> -->

                    <!-- <h4 class="text-center" style="color: #565656;font-size: 25px;transform: scale(.9,1);font-family: sans-serif;text-transform: uppercase;">Profil Saya</h4>
                    <div class="separator"></div> -->

                </div>
            </div>

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">

                        <div class="panel-heading" style="color: #777;">
                        Ubah Gambar Akun
                        </div>
                        <div class="panel-body">

                            <div class="form-horizontal col-md-8 col-md-offset-2">

                                <!-- <div class="form-group">
                                    <label class="control-label">Gambar <span class="text-danger" style="font-size: 12px;font-style: italic;">*Ukuran File Maximal 100kb</span></label> -->
                                    <!-- <input type="file" name="gambar" id="gambar" class="file" data-show-upload="false" data-show-caption="true"> -->
                                    <!-- <input type="file" name="gambar" id="gambar">
                                </div> -->

                                <div class="form-group">
                                    <label class="control-label">Gambar <span class="text-danger" style="font-size: 12px;font-style: italic;">*Ukuran File Maximal 100kb</span>
                                    </label>
                                    <div class="col-md-12 text-center css-img-upload">
                                        <label for="imgInp">
                                        <img id="blah" src="<?php echo base_url();?>assets/custom/images/image_user/<?php echo $user['image'];?>" alt="your image" class="img-circle"/>
                                        </label>
                                    </div>
                                    <div class="col-md-12 css-img-hidden"><input type='file' id="imgInp" class="form-control"/></div>
                                </div>

                                <input type="hidden" name="userid" id="userid" value="<?php echo $user['id_user'];?>">
                                <input type="hidden" name="namauser" id="namauser" value="<?php echo $user['username'];?>">

                                <div class="form-group">
                                    <label class="col-sm-2 control-label"></label>
                                    <div class="col-sm-10">
                                        <button class="btn btn-default pull-right" onclick="kembali();" style="margin-left: 5px;">Kembali</button>
                                        <button class="btn btn-success pull-right" onclick="preInsert();">Ubah</button>    
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

        function kembali()
        {
            location.href= "<?php echo base_url();?>user/profil_saya";
        }


        // $(document).on("ready", function() {

        //     var krajeeGetCount = function(id) {
        //         var cnt = $('#' + id).fileinput('getFilesCount');
        //         // return cnt === 0 ? 'You have no files remaining.' :
        //         return cnt === 0 ? 'Kamu Tidak Memiliki Gambar Lagi.' :
        //             // 'You have ' +  cnt + ' file' + (cnt > 1 ? 's' : '') + ' remaining.';
        //             'Tersisa ' +  cnt + ' Gambar.';
        //     };

        //     $("#gambar").fileinput({
        //         showUpload: false, // hide upload button
        //         minFileCount: 0,
        //         maxFileCount: 5,
        //         maxFileSize: 100, // 100kb

        //         overwriteInitial: false, 
        //         validateInitialCount: true, // tambahan (to include initial preview file count (server uploaded files) in validating minFileCount and maxFileCount)
        //         initialPreview: [
                    
        //             '<?php //echo base_url();?>assets/custom/images/image_user/<?php //echo $user['image'];?>'
                    
        //         ],
        //         initialPreviewAsData: true, // PENTING !! identify if you are sending preview data only and not the markup
        //         //initialCaption: '<?php //foreach($ambil_gambar AS $abc){echo $abc;}?>', //ini caption untuk nama nya disebelah pemilihan browser
        //         initialPreviewFileType: 'image', // image is the default and can be overridden in config below
        //         // initialPreviewConfig: [ //setinggan lebih lanjut initial preview
        //         //     {
        //         //         caption: "<?php //echo $user['image'];?>",
        //         //         url: "<?php //echo base_url();?>toko_saya/katalog_saya/hapus_gambar/<?php //echo $pic2;?>/<?php //echo $jual['id_dijual'];?>",
        //         //         size : "<?php //echo filesize('./assets/custom/images/image_dijual/'.$user['image']);?>", // fungsi php filesize untuk cari ukuran dari file
        //         //         key : 1
        //         //     }
                    
        //         // ],
        //         initialPreviewShowDelete: true,
        //         // purifyHtml: true,
        //         // browseOnZoneClick: true,
        //         showClose: true,
        //         showRemove: true,
        //         allowedFileExtensions: ["jpg", "png", "gif"]

        //     });


        // });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }
        
        $("#imgInp").change(function(){
            readURL(this);
        });

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
                        // action: function(){
                        //     swal({
                        //         icon: "error",
                        //         closeOnClickOutside: true, //tutup dengan click area luar
                        //         closeOnEsc: true, // tutup dengan tombol esc
                        //         title: "Gagal", // judul
                        //         button: false, // button tidak ada
                        //         timer: 3000, // setting waktu alert
                        //         text: "Batal Mengubah Data!" // text
                        //     });

                        // }
                    }

                }
            });
            
        }

        function insertData(){
            var files = $('#imgInp')[0].files;
            // var namabaru = files.filename + "new";
            var form_data = new FormData();

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
                    form_data.append("image[]", files[count]);
                    // form_data.append("image[]", files[count], namabaru[count]);
                }
            }

            form_data.append('userid',$("#userid").val());
            form_data.append('namauser',$("#namauser").val());

            console.log(form_data);
            console.log(files);

            $.ajax({
                url: '<?php echo base_url();?>user/profil_saya/proses_ubah_gambar',
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
                            closeOnClickOutside: false, //tutup dengan click area luar
                            closeOnEsc: false, // tutup dengan tombol esc
                            title: result.message, // judul
                            button: false, // button tidak ada
                            timer: 3000, // setting waktu alert
                            text: ' ' // text
                        });

                        setTimeout(function(){
                            location.href = '<?php echo base_url();?>user/profil_saya';
                        }, 2000);

                    }
                    else
                    {
                        // alert("Gagal : "+result.message);
                        // Alert.show("Gagal : <b>"+result.message+"</b>","danger");
                        swal({
                            icon: "warning",
                            closeOnClickOutside: false,
                            closeOnEsc: false,
                            title: result.message,
                            button: { // setting button
                                className: "tombol_red" // kasih nama class
                            },
                            //button: false, // button tidak ada
                            //timer: 3000, // setting waktu alert
                            text: ' '
                        });

                    }


                }

            });


        }


    </script>