        <style type="text/css">
            /*ATUR RESPONSIVE*/
            @media screen and (max-width: 768px) {
              .dropdown {
                width:100%!important;
                text-align: center!important;
              }
              .responsive
              {
                width: 165px!important;
              }
            }

            /*UNTUK EDIT HOVER & FOCUS PADA DROPDOWN BOOTSTRAP*/
            .dropdown-menu>li>a:hover, .dropdown-menu>li>a:focus
            {
                background-color: transparent!important;
            }
            .dd_hover:hover, .dd_hover:focus
            {
                background-color: #f5f5f5!important;

            }
        </style>

        <nav>
            <div class="container">
                <div class="nav-top clearfix">
                    <!-- <div class="logo">
                        <a  href="javascript:void" class="navbar-brand"><img src="<?php //echo base_url();?>/assets/custom/images/logo-farmergamer.png" alt="Logo"/></a>
                    </div> -->

                    <!-- <div class="logo">
                        <a  href="javascript:void" class="navbar-brand" style="width:170px;margin-top: -10px;"><img src="<?php //echo base_url();?>/assets/custom/images/lg-atas-fg.png" alt="Logo"/></a>
                    </div> -->

                    <!-- <div class="logo">
                        <a  href="javascript:void" class="navbar-brand" style="width: 250px;margin-top: -15px;"><img src="<?php //echo base_url();?>/assets/custom/images/lg-atas-fg.png" alt="Logo" height="75px"/></a>
                    </div> -->

                    <div class="logo">
                        <a  href="javascript:void" class="navbar-brand responsive" style="width: 250px;margin-top: -13px;"><img src="<?php echo base_url();?>/assets/custom/images/logo/lg-fix-1.png" alt="Logo farmergamer1" height="69px" style="width: 100%;"/></a>
                    </div>

                    <?php if(!isset($_SESSION['tc_username'])):?>
                    <div class="head_top_social pull-right">
                        <ul class="list-inline">
                           <!--  <li><a href="" class="link_berita"><i class="fa fa-facebook"></i>FarmerGamer</a></li> -->
                           <!-- <li><button class="btn-success">Download Mobile App <i class="fa fa-caret-down"></i></button></li> -->
                            <li><a href="" class="text-primary">Cek Status Pesanan</a></li>
                            <li><a href="" class="text-danger"><i class="fa fa-phone"></i>+6281326314314</a></li>
                            <li class="top_socail">
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                                <a href=""><i class="fa fa-instagram"></i></a>
                            </li>
                            <li><a href="" data-toggle="modal" data-target="#modalSignin" style="color: #5cb85c;font-weight: bold;"><i class="fas fa-user-circle" style="color: #5cb85c;"></i>Akun Saya</a></li>

                        </ul>
                    </div>
                    <?php else:?>
                    <div class="head_top_social pull-right">
                        <ul class="list-inline">
                            <li><a href="" class="text-primary">Cek Status Pesanan</a></li>
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" style="color: red;font-weight: bold;">Produk / Jasa Saya&nbsp;<i class="fa fa-caret-down" style="font-size: 12px;color: #777;"></i></a>
                                <ul class="dropdown-menu">
                                    <li style="border: none;padding: 7px;border-bottom: 1px solid #eee;margin-top: -5px;" class="dd_hover">
                                        <a href="<?php echo base_url();?>">Katalog Saya</a>
                                    </li>
                                    <li style="border: none;padding: 7px;border-bottom: 1px solid #eee;margin-top: -5px;" class="dd_hover">
                                        <a href="<?php echo base_url();?>dijual/tambah_produk_jasa">Tambah Dijual</a>
                                    </li>
                                    <li style="border: none;padding: 7px;border-bottom: 1px solid #eee;margin-top: -5px;" class="dd_hover">
                                        <a href="<?php echo base_url();?>dibeli/tambah_produk_jasa">Tambah Dibeli</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- <li><a href="javascript:void(0)" style="color: #5cb85c;font-weight: bold;text-transform: uppercase;"><i class="fas fa-user-circle" style="color: #5cb85c;"></i><?php //echo $_SESSION['tc_username'];?>&nbsp;<i class="fa fa-caret-down"></i></a></li> -->
                            <li class="dropdown">
                                <!-- <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" style="color: #5cb85c;font-weight: bold;text-transform: uppercase;"><i class="fas fa-user-circle" style="color: #5cb85c;"></i><?php //echo $_SESSION['tc_username'];?>&nbsp;<i class="fa fa-caret-down" style="font-size: 12px;color: #777;"></i></a> -->
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" style="color: #5cb85c;font-weight: bold;text-transform: uppercase;"><?php echo $_SESSION['tc_username'];?>&nbsp;<i class="fa fa-caret-down" style="font-size: 12px;color: #777;"></i></a>
                                <ul class="dropdown-menu">
                                    <li style="border: none;padding: 7px;border-bottom: 1px solid #eee;margin-top: -5px;" class="dd_hover"><a href="<?php echo base_url();?>home/logout">Keluar</a></li>
                                    <li style="border: none;padding: 7px;" class="dd_hover"><a href="#">Profil Saya</a></li>
                                    <li style="border: none;padding: 7px;" class="dd_hover"><a href="#">Pengaturan</a></li>
                                    <li style="border: none;padding: 7px;" class="dd_hover"><a href="#">Bantuan</a></li>
                                    <!-- <li style="background-color: #f52828;border: none;padding: 7px;margin-bottom: -5px!important;"><a href="<?php //echo base_url();?>home/logout" style="color: white;"><i class="fa fa-sign-out" style="color: white;"></i> Keluar</a></li> -->
                                    <!-- <li style="border: none;padding: 7px;"><a href="<?php //echo base_url();?>home/logout"><i class="fa fa-sign-out"></i> Keluar</a></li> -->
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <?php endif;?>

                    <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
                        <span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i>
                    </button>

                </div>
            </div>

            <div class="main-nav navbar-collapse collapse">
                <div class="container">

                    <!-- <div class="minilogo">
                        <a  href="javascript:void" class="navbar-brand"><img src="<?php //echo base_url();?>/assets/custom/images/logo2-farmergamer.png" alt="Logo" style="margin-top: -15px;"/></a>
                    </div> -->

                    <!-- <div class="minilogo">
                        <a  href="javascript:void" class="navbar-brand"><img src="<?php //echo base_url();?>/assets/custom/images/lg-farmergamer.png" alt="Logo" style="margin-top: -15px;"/></a>
                    </div> -->

                    <div class="minilogo">
                        <a  href="javascript:void" class="navbar-brand"><img src="<?php echo base_url();?>/assets/custom/images/logo/lg-fix-2.png" alt="Logo farmergamer2" style="margin-top: -15px;border-right: 1px #ccc solid;border-left: 1px #ccc solid;border-bottom: 2px #ccc solid;"/></a>
                    </div>

                    <ul class="nav nav-justified">
                        <li><a class="<?php if($this->uri->segment(1) == "c_main" || $this->uri->segment(1) == ""){echo "active";}?>" href="<?php echo base_url();?>c_main"><i class="fa fa-home" style="font-size: 20px;color: #fff;"></i></a></li>
                        <li><a href="<?php echo base_url();?>dijual" class="<?php if($this->uri->segment(1) == "dijual"){echo "active";}?>">Jual Produk</a></li>
                        <li><a href="<?php echo base_url();?>dijual" class="<?php if($this->uri->segment(1) == "dijual"){echo "active";}?>">Jual Jasa</a></li>
                        <!-- <li><a href="<?php //echo base_url();?>dijual" class="<?php //if($this->uri->segment(1) == "dijual"){echo "active";}?>">Transaksi Aman</a></li> -->
                        <li><a href="<?php echo base_url();?>dijual" class="<?php if($this->uri->segment(1) == "dijual"){echo "active";}?>">Beli Produk</a></li>
                        <li><a href="<?php echo base_url();?>dijual" class="<?php if($this->uri->segment(1) == "dijual"){echo "active";}?>">Beli Jasa</a></li>
                        <li class="has-dropdown">
                            <a href="javascript:void" class="<?php if($this->uri->segment(1) == "event"){echo "active";}?>">Event&nbsp;<i class="fa fa-caret-down" style="color: #f5f5f5;font-size: 12px;"></i></a>
                            <ul class="dropdown" style="display:none;">
                                <li><div class="col-md-offset-1"><a href="<?php echo base_url();?>panduan/panduan_transaksi_aman">Event FarmerGamer</a></div></li>
                                <li><div class="col-md-offset-1"><a href="<?php echo base_url();?>panduan/daftar_game">Pendaftaran Event</a></div></li>
                            </ul>
                        </li>
                        <li class="has-dropdown">
                            <a href="javascript:void" class="<?php if($this->uri->segment(1) == "panduan"){echo "active";}?>">Panduan&nbsp;<i class="fa fa-caret-down" style="color: #f5f5f5;font-size: 12px;"></i></a>
                            <ul class="dropdown" style="display:none;">
                                <li><div class="col-md-offset-1"><a href="<?php echo base_url();?>panduan/panduan_transaksi_aman">Transaksi Aman</a></div></li>
                                <li><div class="col-md-offset-1"><a href="<?php echo base_url();?>panduan/panduan_transaksi_aman">Cara Pesan</a></div></li>
                                <li><div class="col-md-offset-1"><a href="<?php echo base_url();?>panduan/panduan_transaksi_aman">Cara Pembayaran</a></div></li>
                                <li><div class="col-md-offset-1"><a href="<?php echo base_url();?>panduan/panduan_transaksi_aman">Cara Pengembalian Dana</a></div></li>
                                <li><div class="col-md-offset-1"><a href="<?php echo base_url();?>panduan/daftar_game">Daftar Game</a></div></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url();?>dijual" class="<?php if($this->uri->segment(1) == "dijual"){echo "active";}?>"><i class="fa fa-shopping-cart" style="color: white;font-size: 20px;"></i></a></li>

                        <!-- <li><a href="<?php //echo base_url();?>berita" class="<?php //if($this->uri->segment(1) == "berita"){echo "active";}?>">Berita</a></li> -->
                        <!-- <li class="has-dropdown">
                            <a href="javascript:void" class="<?php //if($this->uri->segment(1) == "kpr"){echo "active";}?>">KPR</a>
                            <ul class="dropdown" style="display: none;">
                                <li><div class="col-md-offset-1"><a href="<?php //echo base_url();?>kpr/informasi_kpr">Informasi KPR</a></div></li>
                                <li><div class="col-md-offset-1"><a href="<?php //echo base_url();?>kpr/simulasi_kpr">Simulasi KPR</a></div></li>
                            </ul>
                        </li>
                        <li class="has-dropdown">
                            <a href="javascript:void" class="<?php //if($this->uri->segment(1) == "korporasi"){echo "active";}?>">Korporasi</a>
                            <ul class="dropdown" style="display: none;">
                                <li><div class="col-md-offset-1"><a href="<?php //echo base_url();?>korporasi/tentang_kami">Tentang Kami</a></div></li>
                                <li><div class="col-md-offset-1"><a href="<?php //echo base_url();?>korporasi/visi_misi">Visi & Misi</a></div></li>
                                <li><div class="col-md-offset-1"><a href="<?php //echo base_url();?>korporasi/kontak_kami">Kontak Kami</a></div></li>
                            </ul>
                        </li> -->
                        
                        <!-- <li><a href="<?php //echo base_url();?>disewakan" class="<?php //if($this->uri->segment(1) == "disewakan"){echo "active";}?>">Disewakan</a></li>
                        <li><a href="<?php //echo base_url();?>terjual" class="<?php //if($this->uri->segment(1) == "terjual"){echo "active";}?>">Terjual</a></li>
                        <li><a href="<?php //echo base_url();?>tersewa" class="<?php //if($this->uri->segment(1) == "tersewa"){echo "active";}?>">Tersewa</a></li> -->
                    </ul>
                        
                </div>
            </div>
        </nav>

                        <!-- Modal Signin -->
                        <div class="mymodalcontentarea modal fade bs-example-modal-lg" id="modalSignin" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                            <div class="modal-dialog modal-md">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">

                                            <div class="col-xs-10 col-xs-offset-1">

                                                <h4 style="color: #565656;font-family: 'latolight';font-weight: bold;">Selamat Datang</h4>

                                                <button class="btn-block" style="margin-bottom: 15px;background-color: #3B5998"><i class="fa fa-facebook" style="background-color: #fff;color: #3B5998;padding-right: 5px;padding-left: 5px;"></i> <span style="color: #fff;">Masuk Dengan Facebook</span></button>

                                                <div class="row" style="margin-bottom: 15px;">
                                                    <div class="col-xs-5">
                                                        <hr style="border-top: 1px solid #CECECE;margin: 8px 0;">
                                                    </div>
                                                    <div class="col-xs-2"> 
                                                    <span style="color: #CECECE;background-color: #FFF;display: block;position: relative;margin: -4px 0;" class="text-center">
                                                        <strong>ATAU</strong>
                                                    </span>
                                                    </div>
                                                    <div class="col-xs-5">
                                                        <hr style="border-top: 1px solid #CECECE;margin: 8px 0;">
                                                    </div>
                                                </div>

                                                <div class="form-group has-feedback">
                                                    <input type="text" id="username1" name="username1" class="form-control" placeholder="Email atau ID">
                                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                                </div>
                                                <div class="form-group has-feedback">
                                                    <input type="password" id="password1" name="password1" class="form-control" placeholder="Kata Sandi">
                                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-xs-10 col-xs-offset-1">
                                                <div class="col-xs-6">
                                                    <div class="row">
                                                        <div class="pull-left">
                                                            <button class="btn-block btn-info" id="signin" type="submit">Masuk</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pull-right">
                                                    <a href="" style="color: #3B5998;">Lupa Password?</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-10 col-xs-offset-1 text-center">
                                                <div class="col-xs-12">
                                                    <div class="row">
                                                        <hr style="border-top: 1px solid #CECECE;margin: 15px 0;">
                                                    </div>
                                                </div>
                                                Pengguna Baru ? <a href="" style="color: #3B5998;" data-toggle="modal" data-target="#modalDaftar" data-dismiss="modal">Daftar GRATIS Sekarang</a>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- <div class="modal-footer">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div> -->

                                </div>
                            </div>

                        </div>


                        <!-- Modal Daftar Akun Baru -->
                        <div class="mymodalcontentarea modal fade bs-example-modal-lg" id="modalDaftar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                            <div class="modal-dialog modal-md">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        
                                    </div>

                                    <div class="modal-body">
                                        <div class="row">

                                            <div class="col-xs-10 col-xs-offset-1">

                                                <h4 style="color: #565656;font-family: 'latolight';font-weight: bold;">Selamat Datang</h4>
                                                <span id="gagal"></span>

                                                <button class="btn-block" style="margin-bottom: 15px;background-color: #3B5998"><i class="fa fa-facebook" style="background-color: #fff;color: #3B5998;padding-right: 5px;padding-left: 5px;"></i> <span style="color: #fff;">Daftar Dengan Facebook</span></button>

                                                <div class="row" style="margin-bottom: 15px;">
                                                    <div class="col-xs-5">
                                                        <hr style="border-top: 1px solid #CECECE;margin: 8px 0;">
                                                    </div>
                                                    <div class="col-xs-2"> 
                                                        <span style="color: #CECECE;background-color: #FFF;display: block;position: relative;margin: -4px 0;" class="text-center">
                                                            <strong>ATAU</strong>
                                                        </span>
                                                    </div>
                                                    <div class="col-xs-5">
                                                        <hr style="border-top: 1px solid #CECECE;margin: 8px 0;">
                                                    </div>
                                                </div>

                                                <div class="form-group has-feedback">
                                                    <input type="text" id="username_daftar" name="username_daftar" class="form-control" placeholder="Masukkan Username" >
                                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                                </div>
                                                <div class="form-group has-feedback">
                                                    <input type="text" id="email" name="email" class="form-control" placeholder="Masukkan Email">
                                                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                                </div>
                                                <div class="form-group has-feedback">
                                                    <input type="password" id="password_daftar" name="password_daftar" class="form-control" placeholder="Masukkan Kata Sandi">
                                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                </div>

                                                <div class="col-xs-6">
                                                    <div class="row">
                                                        <div class="form-group has-feedback">
                                                            <input type="text" id="nama_depan" name="nama_depan" class="form-control" placeholder="Nama Depan">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-6">
                                                    <div class="row">
                                                        <div class="form-group has-feedback">
                                                            <input type="text" id="nama_belakang" name="nama_belakang" class="form-control" placeholder="Nama Belakang">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-xs-10 col-xs-offset-1">
                                                
                                                <button class="btn-block btn-info" id="daftar" onclick="insertData();">Daftar</button>
                            
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-10 col-xs-offset-1 text-center">
                                                <div class="col-xs-12">
                                                    <div class="row">
                                                        <hr style="border-top: 1px solid #CECECE;margin: 15px 0;">
                                                    </div>
                                                </div>
                                                Sudah Mendaftar ? <a href="" style="color: #3B5998;" data-toggle="modal" data-target="#modalSignin" data-dismiss="modal">Sign In Sekarang</a>
                                            </div>
                                        </div>

                                    </div>

                                    
                                </div>
                            </div>

                        </div>

<script>
    
$("#signin").on("click",function(event){
    event.preventDefault();
    var data = {
      username : $("#username1").val(),
      password : $("#password1").val()
    };
    $.ajax({
      url: '<?php echo base_url();?>c_login/proses',
      data: data,
      method: 'POST',
      // dataType: 'json',
      // crossDomain: true,
      //   contentType: 'application/json; charset=utf-8',
        success: function(result) {
          console.log(result);
          // Alert.show("Sukses : <b>"+result+"</b>","success");
          if(result >= 1){
            if(result < 10){
              location.href = '<?php echo base_url();?>home';
            }
            else{
              location.href = '<?php echo base_url();?>tc/input';
            }
          }else{
             alert("Username / password salah");
          }
          

        },
        error: function(xhr){
          alert(JSON.stringify(xhr));
        }
      });

});
    
    function cek_daftar(user,pass){
        event.preventDefault();
        var data = {
          username : user,
          password : pass
        };
        console.log(user);
        console.log(pass);
        $.ajax({
          url: '<?php echo base_url();?>c_login/proses',
          data: data,
          method: 'POST',
          // dataType: 'json',
          // crossDomain: true,
          //   contentType: 'application/json; charset=utf-8',
            success: function(result) {
              console.log(result);
              // Alert.show("Sukses : <b>"+result+"</b>","success");
              if(result >= 1){
                    location.href = '<?php echo base_url();?>home';
              }else{
                    alert("Username / password salah");
              }
            },
            error: function(xhr){
              alert(JSON.stringify(xhr));
            }
          });

    };

    function insertData(){
        var us = $("#username_daftar").val();
        var pw = $("#password_daftar").val();

        var data = {
            username     : $("#username_daftar").val(),
            email    : $("#email").val(),
            password   : $("#password_daftar").val(),
            nama_depan      : $("#nama_depan").val(),
            nama_belakang      : $("#nama_belakang").val()
        };
        console.log(data);
        $.ajax({
            url: '<?php echo base_url();?>home/proses_daftar',
            data: data,
            method: 'POST',
            dataType: 'json',
            // crossDomain: true,
            // contentType: 'application/json; charset=utf-8',
            success: function(result) {
                console.log(result);

                if(result.code==0){
                    $( '#inputdata0' ).each(function(){
                      this.reset();
                    });
                    // Alert.show("Sukses : <b>"+result.message+"</b>","success");
                    alert("Sukses : <b>"+result.message+"</b>","success");
                    cek_daftar(us,pw);

                }else{
                    // Alert.show("Gagal : <b>"+result.message+"</b>","error");
                    alert("Gagal : "+result.message,"error");
                }
            }

        });
        // setTimeout(function() {
        //     // location.href = '<?php //echo base_url();?>masuk_pendaftaran/'+us+'/'+pw;
        //     location.href = '<?php //echo base_url();?>home/index';
        // }, 2000);
    }

</script>