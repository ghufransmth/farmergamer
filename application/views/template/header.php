        <style type="text/css">
            /*ATUR RESPONSIVE*/
            @media screen and (max-width: 768px) {
              .dropdown {
                width:100%!important;
                text-align: center!important;
              }
              .cart-dd {
                width:100%!important;
                text-align: center!important;
              }
              .responsive
              {
                width: 165px!important;
              }
            }
            .scrl{
                overflow-y:auto;
                height:250px;
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

        <!-- NAV SEBELUM LOGIN -->
        <?php if(!isset($_SESSION['tc_username'])):?>
        <nav style="height:auto!important;">
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
                            <!-- <li><div><input type="text" name="" placeholder="Cari.." style="border-radius: 20px;border: 1px solid grey;padding: 0 15px 0 15px;height: 40px;"></div></li> -->
                        </ul>
                    </div>

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

                    <!-- <div class="minilogo" style="background: white;z-index: 999;margin-top: -15px;">
                        <a  href="javascript:void" class="navbar-brand"><img src="<?php //echo base_url();?>/assets/custom/images/logo/logo_farmergamer2.png" alt="Logo farmergamer2" style="height:100%;width:100%;"/></a>
                    </div> -->

                    <!-- <div class="minilogo">
                        <a  href="javascript:void" class="navbar-brand"><img src="<?php //echo base_url();?>/assets/custom/images/logo/lg-fix-2.png" alt="Logo farmergamer2" style="margin-top: -15px;border-right: 1px #ccc solid;border-left: 1px #ccc solid;border-bottom: 2px #ccc solid;"/></a>
                    </div> -->

                    <!-- <div class="minilogo" style="border: 2px solid #ccc;margin-top: -13px;height: 90%;">
                        <a  href="javascript:void" class="navbar-brand">
                            <img src="<?php //echo base_url();?>/assets/custom/images/logo/logo_farmergamer.png" alt="Logo farmergamer2" style="margin-top: 9px;height: 50%;text-align: left"/>
                            <div style="color: #fff;margin-top: -23px;text-align: right;font-size: 29px;font-weight: bold;font-family: sans-serif;transform: scaleX(0.5);">FarmerGamer</div>
                        </a>
                    </div> -->

                    <div class="minilogo">
                        <a  href="javascript:void" class="navbar-brand">
                            <img src="<?php echo base_url();?>/assets/custom/images/logo/logo_farmergamer.png" alt="Logo farmergamer2" style="margin-top: -3px;height: 50%;text-align: left"/>
                            <div style="color: #fff;margin-top: -23px;text-align: right;font-size: 29px;font-weight: bold;font-family: sans-serif;transform: scaleX(0.5);">FarmerGamer</div>
                            <!-- NB: Transform: scale untuk atur tinggi font -->
                        </a>
                    </div>

                    <ul class="nav nav-justified">
                        <li><a class="<?php if($this->uri->segment(1) == "c_main" || $this->uri->segment(1) == ""){echo "active";}?>" href="<?php echo base_url();?>c_main"><i class="fa fa-home" style="font-size: 19px;color: #fff;"></i></a></li>
                        <li><a href="<?php echo base_url();?>dijual/produk" class="<?php if($this->uri->segment(1) == "dijual" && $this->uri->segment(2) == "produk"){echo "active";}?>">Jual Produk</a></li>
                        <li><a href="<?php echo base_url();?>dijual/jasa" class="<?php if($this->uri->segment(1) == "dijual" && $this->uri->segment(2) == "jasa"){echo "active";}?>">Jual Jasa</a></li>
                        <!-- <li><a href="<?php //echo base_url();?>dijual" class="<?php //if($this->uri->segment(1) == "dijual"){echo "active";}?>">Transaksi Aman</a></li> -->
                        <li><a href="<?php echo base_url();?>dicari/produk" class="<?php if($this->uri->segment(1) == "dicari" && $this->uri->segment(2) == "produk"){echo "active";}?>">Dicari Produk</a></li>
                        <li><a href="<?php echo base_url();?>dicari/jasa" class="<?php if($this->uri->segment(1) == "dicari" && $this->uri->segment(2) == "jasa"){echo "active";}?>">Dicari Jasa</a></li>
                        <li class="has-dropdown">
                            <a href="javascript:void" class="<?php if($this->uri->segment(1) == "event"){echo "active";}?>">Event&nbsp;<i class="fa fa-caret-down" style="color: #f5f5f5;font-size: 12px;"></i></a>
                            <ul class="dropdown" style="display:none;">
                                <li><div class="col-md-offset-1"><a href="<?php echo base_url();?>panduan/panduan_transaksi_aman">Event FarmerGamer</a></div></li>
                                <!-- <li><div class="col-md-offset-1"><a href="<?php //echo base_url();?>panduan/daftar_game">Pendaftaran Event</a></div></li> -->
                                <li><div class="col-md-offset-1"><a href="<?php echo base_url();?>panduan/daftar_game">Galeri Event</a></div></li>
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
                        <li class="cart-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="fa fa-shopping-cart" style="color: #fff;font-size: 19px;"></i>
                                <span id="count_cart"></span>
                            </a>
                            <ul class="cart-dd" style="display: none;">
                                <li><div id="cart-item"></div></li>
                            </ul>
                        </li>

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
<!-- END NAV SEBELUM LOGIN -->
        
        <!-- NAV SETELAH LOGIN -->
        <?php else:?>
        <nav style="height: auto!important">
            <div class="container">
                <div class="nav-top-2 clearfix">

                    <div class="logo" style="margin-bottom: -15px;">
                        <a  href="javascript:void" class="navbar-brand">
                            <img src="<?php echo base_url();?>/assets/custom/images/logo/logo_farmergamer.png" alt="Logo farmergamer2" style="margin-top: 0;height: 50%;text-align: left"/>
                            <div style="margin-top: -22px;text-align: right;font-size: 29px;font-weight: bold;font-family: sans-serif;transform: scaleX(0.5);"><span style="color:#3949AB;">Farmer</span><span style="color:red;">Gamer</span></div>
                            <!-- NB: Transform: scale untuk atur tinggi font -->
                        </a>
                    </div>

                    <!-- <div class="pull-right">
                        <a class="fa fa-bell" href="#" style="color: #333;font-size: 20px;"><span class="badge" style="margin-top: -5px!important;font-size: 8px;color: white;background: red;position: absolute;">1</span></a>         
                    </div> -->

                    <div class="pull-right" style="margin-top: -10px;">
                        <a class="cd-search-trigger" href="#cd-search" style="color: black;"> <span></span></a>
                    </div>

                    <div class="head_top_social pull-right" style="height: 37px;">
                        <ul class="list-inline">
                            <li><a href="" style="color: red;"><i class="fa fa-cube" style="color:red;"></i>Cek Status Pesanan</a></li>
                            <li><a href="<?php echo base_url();?>daftar_belanja" class="text-primary" style="font-weight: bold;"><i class="fas fa-shopping-bag text-primary"></i>Daftar Belanja</a></li>
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" style="color: red;font-weight: bold;"><i class="far fa-building" style="color: red;"></i>Toko Saya&nbsp;<i class="fa fa-caret-down" style="font-size: 12px;color: #777;"></i></a>
                                <ul class="dropdown-menu">
                                    <li style="border: none;padding: 7px;border-bottom: 1px solid #eee;margin-top: -5px;" class="dd_hover">
                                        <a href="<?php echo base_url();?>toko_saya/pesanan_pembeli"><i class="icon-paper" style="font-size: 17px;"></i> Pesanan Pembeli</a>
                                    </li>
                                    <li style="border: none;padding: 7px;margin-top: -5px;" class="dd_hover">
                                        <a href="<?php echo base_url();?>toko_saya/katalog_saya"><i class="icon-clipboard" style="font-size: 17px;"></i> Katalog Saya</a>
                                    </li>
                                    <li style="border: none;padding: 7px;margin-top: -5px;" class="dd_hover">
                                        <a href="<?php echo base_url();?>toko_saya/katalog_saya/tambah_dijual"><i class="fa fa-plus-circle" style="font-size: 17px;"></i> Tambah Dijual</a>
                                    </li>
                                    <li style="border: none;padding: 7px;margin-top: -5px;" class="dd_hover">
                                        <a href="<?php echo base_url();?>toko_saya/katalog_saya/tambah_dicari"><i class="fa fa-plus-circle" style="font-size: 17px;"></i> Tambah Dicari</a>
                                    </li>
                                    <li style="border: none;padding: 7px;margin-top: -5px;" class="dd_hover">
                                        <a href="<?php echo base_url();?>toko_saya/katalog_saya/tambah_event"><i class="fa fa-plus-circle" style="font-size: 17px;"></i> Tambah Event</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="" class="text-primary"><i class="fas fa-comments text-primary"></i>Chat</a></li>

                            <!-- <li><a href="javascript:void(0)" style="color: #5cb85c;font-weight: bold;text-transform: uppercase;"><i class="fas fa-user-circle" style="color: #5cb85c;"></i><?php //echo $_SESSION['tc_username'];?>&nbsp;<i class="fa fa-caret-down"></i></a></li> -->
                            <li class="dropdown">
                                <!-- <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" style="color: #5cb85c;font-weight: bold;text-transform: uppercase;"><i class="fas fa-user-circle" style="color: #5cb85c;"></i><?php //echo $_SESSION['tc_username'];?>&nbsp;<i class="fa fa-caret-down" style="font-size: 12px;color: #777;"></i></a> -->
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" style="color: #5cb85c;font-weight: bold;text-transform: uppercase;"><?php echo $_SESSION['tc_username'];?>&nbsp;<i class="fa fa-caret-down" style="font-size: 12px;color: #777;"></i></a>
                                <ul class="dropdown-menu">
                                    <!-- <li style="border: none;padding: 7px;margin-top: -5px;" class="dd_hover"><a href="<?php //echo base_url();?>favorit/index/<?php //echo $_SESSION['tc_id_user'];?>/<?php //echo url_title($_SESSION['tc_username']);?>"><i class="fa fa-heart" style="font-size: 17px;"></i> Favorit</a></li> -->
                                    <li style="border: none;padding: 7px;margin-top: -5px;" class="dd_hover"><a href="<?php echo base_url();?>user/favorit"><i class="fa fa-heart" style="font-size: 17px;"></i> Favorit</a></li>
                                    <li style="border: none;padding: 7px;margin-top: -5px;" class="dd_hover"><a href="<?php echo base_url();?>user/rating_saya"><i class="fas fa-star" style="font-size: 15px;"></i> Rating Saya</a></li>
                                    <li style="border: none;padding: 7px;margin-top: -5px;" class="dd_hover"><a href="#"><i class="fa fa-history" style="font-size: 17px;"></i> Riwayat Belanja</a></li>
                                    <li style="border: none;padding: 7px;border-top: 1px solid #eee;" class="dd_hover"><a href="<?php echo base_url();?>user/profil_saya"><i class="fa fa-user" style="font-size: 17px;"></i> Profil Saya</a></li>
                                    <li style="border: none;padding: 7px;" class="dd_hover"><a href="#"><i class="fa fa-cog" style="font-size: 17px;"></i> Pengaturan</a></li>
                                    <li style="border: none;padding: 7px;" class="dd_hover"><a href="#"><i class="fa fa-question-circle" style="font-size: 17px;"></i> Bantuan</a></li>
                                    <li style="border: none;padding: 7px;border-top: 1px solid #eee;" class="dd_hover"><a href="<?php echo base_url();?>home/logout" style="color:firebrick;font-weight: inherit;"><i class="fas fa-power-off" style="font-size: 17px;color: firebrick;"></i> Keluar</a></li>
                                    <!-- <li style="background-color: #f52828;border: none;padding: 7px;margin-bottom: -5px!important;"><a href="<?php //echo base_url();?>home/logout" style="color: white;"><i class="fa fa-sign-out" style="color: white;"></i> Keluar</a></li> -->
                                    <!-- <li style="border: none;padding: 7px;"><a href="<?php //echo base_url();?>home/logout"><i class="fa fa-sign-out"></i> Keluar</a></li> -->
                                </ul>
                            </li>

                            <!-- <li><a class="search_trigger" href="#cd-search" style="color: #0D3542;"><i class="fa fa-search" style="color: #0D3542;"></i></a></li> -->
                            <!-- <li><a class="cd-search-trigger" href="#cd-search" style="color: black;"> <span></span></a></li> -->

                            <li><a class="fa fa-bell" href="#" style="color: #333333eb;font-size: 20px;"></a></li>
                        </ul>
                    </div>

                     <!-- SEARCH -->
                    <!-- <div class="cd-main-header">
                        <ul class="cd-header-buttons">
                            <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
                        </ul> -->
                        <!-- cd-header-buttons -->
                    <!-- </div> -->

                    <div id="cd-search" class="cd-search">
                        <form action="#" method="post">
                            <input name="Search" type="search" placeholder="Telusuri..." autofocus>
                        </form>
                    </div>
                    <!-- END SEARCH -->

                    <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button" style="margin-top: -10px!important;">
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
                        <!-- <a  href="javascript:void" class="navbar-brand"><img src="<?php //echo base_url();?>/assets/custom/images/logo/lg-fix-2.png" alt="Logo farmergamer2" style="margin-top: -15px;border-right: 1px #ccc solid;border-left: 1px #ccc solid;border-bottom: 2px #ccc solid;"/></a> -->
                        <!-- <a href="#" class="navbar-brand" style="text-align: center;background-color: rgba(0,0,0,0.21);margin-top: -15px;"><div style="font-size: 20px;color: white;padding-top: 15px;">FarmerGamer</div></a> -->
                        <!-- <a href="#" class="navbar-brand" style="text-align: center;background-color: rgba(0,0,0,0.21);margin-top: -15px;"><i class="fa fa-bars" style="font-size: 25px;color: white;padding-top: 15px;"></i></a> -->
                        <!-- <a href="#" class="navbar-brand" style="text-align: center;margin-top: -15px;"><i class="fa fa-bars" style="font-size: 25px;color: white;padding-top: 15px;"></i> <div style="position:relative;margin-top: -23px!important;margin-right:-75px!important;color: white;font-size: 15px;">MENU</div></a> -->

                        <!-- <a href="javascript:void(0)" class="navbar-brand" style="text-align: left;margin-top: -17px;" onclick="openNav();"><i class="fa fa-bars" style="font-size: 20px;color: white;padding-top: 19px;"> MENU</i></a> -->
                        <a href="#" class="navbar-brand" style="text-align: left;margin-top: -20px;" data-toggle="modal" data-target="#mySideNav"><i class="fa fa-bars" style="font-size: 20px;color: white;padding-top: 19px;"> MENU</i></a>
                    </div>

                    <ul class="nav nav-justified">
                        <li><a class="<?php if($this->uri->segment(1) == "home" || $this->uri->segment(1) == ""){echo "active";}?>" href="<?php echo base_url();?>home"><i class="fa fa-home" style="font-size: 19px;color: #fff;"></i></a></li>
                        <li><a href="<?php echo base_url();?>dijual/produk" class="<?php if($this->uri->segment(1) == "dijual" && $this->uri->segment(2) == "produk"){echo "active";}?>">Jual Produk</a></li>
                        <li><a href="<?php echo base_url();?>dijual/jasa" class="<?php if($this->uri->segment(1) == "dijual" && $this->uri->segment(2) == "jasa"){echo "active";}?>">Jual Jasa</a></li>
                        <li><a href="<?php echo base_url();?>dicari/produk" class="<?php if($this->uri->segment(1) == "dicari" && $this->uri->segment(2) == "produk"){echo "active";}?>">Dicari Produk</a></li>
                        <li><a href="<?php echo base_url();?>dicari/jasa" class="<?php if($this->uri->segment(1) == "dicari" && $this->uri->segment(2) == "jasa"){echo "active";}?>">Dicari Jasa</a></li>
                        <li class="has-dropdown">
                            <a href="javascript:void(0)" class="<?php if($this->uri->segment(1) == "event"){echo "active";}?>">Event&nbsp;<i class="fa fa-caret-down" style="color: #f5f5f5;font-size: 12px;"></i></a>
                            <ul class="dropdown" style="display:none;">
                                <li><div class="col-md-offset-1"><a href="<?php echo base_url();?>panduan/panduan_transaksi_aman">Event FarmerGamer</a></div></li>
                                <!-- <li><div class="col-md-offset-1"><a href="<?php //echo base_url();?>panduan/daftar_game">Pendaftaran Event</a></div></li> -->
                                <li><div class="col-md-offset-1"><a href="<?php echo base_url();?>panduan/daftar_game">Galeri Event</a></div></li>
                            </ul>
                        </li>
                        <li class="has-dropdown">
                            <a href="javascript:void(0)" class="<?php if($this->uri->segment(1) == "panduan"){echo "active";}?>">Panduan&nbsp;<i class="fa fa-caret-down" style="color: #f5f5f5;font-size: 12px;"></i></a>
                            <ul class="dropdown" style="display:none;">
                                <li><div class="col-md-offset-1"><a href="<?php echo base_url();?>panduan/panduan_transaksi_aman">Transaksi Aman</a></div></li>
                                <li><div class="col-md-offset-1"><a href="<?php echo base_url();?>panduan/panduan_transaksi_aman">Cara Pesan</a></div></li>
                                <li><div class="col-md-offset-1"><a href="<?php echo base_url();?>panduan/panduan_transaksi_aman">Cara Pembayaran</a></div></li>
                                <li><div class="col-md-offset-1"><a href="<?php echo base_url();?>panduan/panduan_transaksi_aman">Cara Pengembalian Dana</a></div></li>
                                <li><div class="col-md-offset-1"><a href="<?php echo base_url();?>panduan/daftar_game">Daftar Game</a></div></li>
                            </ul>
                        </li>
                        <li class="cart-dropdown">
                            <a href="javascript:void(0)" class="<?php if($this->uri->segment(1) == "keranjang_belanja"){echo "active";}?>">
                                <i class="fa fa-shopping-cart" style="color: #fff;font-size: 19px;"></i>
                                <span id="count_cart"></span>
                            </a>
                            <ul class="cart-dd" style="display:none;">
                                <li><div id="cart-item"></div></li>
                            </ul>
                        </li>
                    </ul>
                        
                </div>
            </div>
        </nav>

        <?php endif;?>
        <!-- END NAV SETELAH LOGIN -->


                        <!-- Modal Signin -->
                        <div class="mymodalcontentarea modal fade bs-example-modal-lg" id="modalSignin" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                            <div class="modal-dialog modal-md">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: #fff;">
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

                                                <form>
                                                <div class="form-group has-feedback">
                                                    <input type="text" id="username1" name="username1" class="form-control" placeholder="Email atau Username">
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
                                                </form>

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
                                    <div class="modal-header" style="background-color: #fff;">
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

    <!-- SIDE NAV -->
    <!-- <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a  href="javascript:void" class="navbar-brand responsive" style="width: 250px;margin-top: -13px;"><img src="<?php //echo base_url();?>/assets/custom/images/logo/lg-fix-1.png" alt="Logo farmergamer1" height="69px" style="width: 100%;"/></a>
      <a href="#"><?php //echo $_SESSION['tc_username'];?> <i class="glyphicon glyphicon-chevron-down"></i></a>
      <a href="#">Produk / Jasa Saya <i class="glyphicon glyphicon-chevron-down"></i></a>
      <a href="#">Cek Status Pesanan</a>
    </div> -->
    <!-- END SIDE NAV -->

    <!-- Modal -->
    <div class="modal left fade" id="mySideNav" tabindex="-1" role="dialog" aria-labelledby="mySideNavLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
                    <!-- <h4 class="modal-title" id="myModalLabel">Left Sidebar</h4> -->
                    <a  href="javascript:void" style="width: 250px;margin-top: -13px;"><img src="<?php echo base_url();?>/assets/custom/images/logo/logo_farmergamer2.png" alt="Logo farmergamer1" height="75px" style="width: 100%;"/></a>
                </div>

                <div class="modal-body">
                    <ul>
                        <li style="padding: 5px;"><div style="text-align: center"><input type="text" name="" placeholder="Cari..." style="border-radius: 20px;border: 1px solid seagreen;padding: 0 15px 0 15px;height: 40px;width: 100%;" autofocus></div></li>

                        <li><hr></li>
                        <li style="padding: 5px;" class="dd_hover"><a href="#" style="font-size: 21px;color: #333333eb;"><div style="width: 100%;"><i class="fa fa-bell" style="color: #333333eb;"></i> Notifikasi</div></a></li>

                        <li><hr></li>
                        <!-- <li style="padding: 5px;" class="dd_hover"><div style="color: #5cb85c;text-transform: uppercase;font-size: 21px;"><?php //echo $_SESSION['tc_username'];?></div></li> -->
                        <li style="padding: 5px;" class="dd_hover"><a href="<?php echo base_url();?>user/favorit" style="color: #696969;font-size: 19px;font-weight: inherit;"><div style="width: 100%;"><i class="fa fa-heart" style="font-size: 17px;"></i> Favorit</div></a></li>
                        <!-- <li style="padding: 5px;" class="dd_hover"><a href="<?php //echo base_url();?>favorit/index/<?php //echo $_SESSION['tc_id_user'];?>/<?php //echo url_title($_SESSION['tc_username']);?>" style="color: #696969;font-size: 19px;font-weight: inherit;"><div style="width: 100%;"><i class="fa fa-heart" style="font-size: 17px;"></i> Favorit</div></a></li> -->
                        <li style="padding: 5px;" class="dd_hover"><a href="<?php echo base_url();?>user/rating_saya" style="color: #696969;font-size: 19px;font-weight: inherit;"><div style="width: 100%;"><i class="fas fa-star" style="font-size: 15px;"></i> Rating Saya</div></a></li>
                        <li style="padding: 5px;" class="dd_hover"><a href="#" style="color: #696969;font-size: 19px;font-weight: inherit;"><div style="width: 100%;"><i class="fa fa-history" style="font-size: 17px;"></i> Riwayat Belanja</div></a></li>
                        <li style="padding: 5px;" class="dd_hover"><a href="<?php echo base_url();?>user/profil_saya" style="color: #696969;font-size: 19px;font-weight: inherit;"><div style="width: 100%;"><i class="fa fa-user" style="font-size: 17px;"></i> Profil Saya</div></a></li>
                        <li style="padding: 5px;" class="dd_hover"><a href="#" style="color: #696969;font-size: 19px;font-weight: inherit;"><div style="width: 100%;"><i class="fa fa-cog" style="font-size: 17px;"></i> Pengaturan</div></a></li>
                        <li style="padding: 5px;" class="dd_hover"><a href="#" style="color: #696969;font-size: 19px;font-weight: inherit;"><div style="width: 100%;"><i class="fa fa-question-circle" style="font-size: 17px;"></i> Bantuan</div></a></li>
                        <li style="padding: 5px;" class="dd_hover"><a href="<?php echo base_url();?>home/logout" style="color: firebrick;font-weight: inherit;font-size: 19px;"><div style="width: 100%;"><i class="fas fa-power-off" style="font-size: 17px;color: firebrick;"></i> Keluar</div></a></li>

                        <li><hr></li>
                        <li style="padding: 5px;" class="dd_hover"><a href="#" style="font-size: 21px;" class="text-primary"><div style="width: 100%;"><i class="fas fa-comments text-primary"></i> Chat</div></a></li>

                        <li><hr></li>
                        <!-- <li style="padding: 5px;" class="dd_hover"><div style="font-size: 21px;color: red;">Produk / Jasa Saya</div></li> -->
                        <li style="padding: 5px;" class="dd_hover"><a href="<?php echo base_url();?>toko_saya/pesanan_pembeli" style="color: #696969;font-size: 19px;font-weight: inherit;"><div style="width: 100%;"><i class="icon-paper" style="font-size: 17px;"></i> Pesanan Pembeli</div></a></li>
                        <li style="padding: 5px;" class="dd_hover"><a href="<?php echo base_url();?>toko_saya/katalog_saya" style="color: #696969;font-size: 19px;font-weight: inherit;"><div style="width: 100%;"><i class="icon-clipboard" style="font-size: 17px;"></i> Katalog Saya</div></a></li>
                        <li style="padding: 5px;" class="dd_hover"><a href="<?php echo base_url();?>toko_saya/katalog_saya/tambah_dijual" style="color: #696969;font-size: 19px;font-weight: inherit;"><div style="width: 100%;"><i class="fa fa-plus-circle" style="font-size: 17px;"></i> Tambah Dijual</div></a></li>
                        <li style="padding: 5px;" class="dd_hover"><a href="<?php echo base_url();?>toko_saya/katalog_saya/tambah_dicari" style="color: #696969;font-size: 19px;font-weight: inherit;"><div style="width: 100%;"><i class="fa fa-plus-circle" style="font-size: 17px;"></i> Tambah Dicari</div></a></li>
                        <li style="padding: 5px;" class="dd_hover"><a href="<?php echo base_url();?>toko_saya/katalog_saya/tambah_event" style="color: #696969;font-size: 19px;font-weight: inherit;"><div style="width: 100%;"><i class="fa fa-plus-circle" style="font-size: 17px;"></i> Tambah Event</div></a></li>

                        <li><hr></li>
                        <li style="padding: 5px;" class="dd_hover"><a href="#" style="font-size: 21px;" class="text-primary"><div style="width: 100%;"><i class="fas fa-shopping-bag text-primary"></i> Daftar Belanja</div></a></li>

                        <li><hr></li>
                        <li style="padding: 5px;" class="dd_hover"><a href="#" style="font-size: 21px;color:red;"><div style="width: 100%;"><i class="fa fa-cube" style="color:red;"></i> Cek Status Pesanan</div></a></li>
                    </ul>
                </div>

            </div><!-- modal-content -->
        </div><!-- modal-dialog -->
    </div><!-- modal -->

<script>

// SIDE NAV
// function openNav() {
//     document.getElementById("mySidenav").style.width = "250px";
// }

// function closeNav() {
//     document.getElementById("mySidenav").style.width = "0";
// }
// END SIDE NAV

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
            // if(result < 10){
              location.href = '<?php echo base_url();?>home';
            // }
            // else{
            //   location.href = '<?php //echo base_url();?>tc/input';
            // }
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


    // UNTUK LOAD JUMLAH ITEM YANG ADA DI KERANJANG
    function loadCountCart() {
        $("#count_cart").load("<?php echo base_url();?>home/count_cart");
    }

    // UNTUK PROSES CART
    function prosesCart(action,product_code) {
        var queryString = "";
        if(action != "") {
            switch(action) {
                case "add":
                    queryString = 'action='+action+'&code='+ product_code+'&quantity='+$("#qty_"+product_code).val();
                break;
                case "remove":
                    queryString = 'action='+action+'&code='+ product_code;
                break;
                case "empty":
                    queryString = 'action='+action;
                break;
            }    
        }
        jQuery.ajax({
            url: "<?php echo base_url();?>home/proses_cart",
            data:queryString,
            type: "POST",
            success:function(data){
                $("#cart-item").html(data);
                loadCountCart();
                if(action != "") {
                    switch(action) {
                        case "add":
                            $("#add_"+product_code).hide();
                            $("#added_"+product_code).show();
                        break;
                        case "remove":
                            $("#add_"+product_code).show();
                            $("#added_"+product_code).hide();
                        break;
                        case "empty":
                            $(".btnAddAction").show();
                            $(".btnAdded").hide();
                        break;
                    }    
                }
            },
            error:function (){}
        });
    }

    $(function(){
        prosesCart("","");
    });

    function buatPesanan(idnya)
    {
        location.href= "<?php echo base_url();?>keranjang_belanja/buat_pesanan/"+idnya;
    }



</script>