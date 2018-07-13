
  <div class="wrapper">
    <header class="main-header">
      <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">F<b>G</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">FarmerGamer</span>
      </a>
        <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top" role="navigation">
        <div class="col-md-8 bb-alert alert alert-info" id="tk-alert" style="display:none;">
          <button type="button" class="close" aria-hidden="true" onClick="Alert.hide();">×</button>
          <span class="txtAlert">Hello world callback</span>
        </div>


       <!-- Sidebar toggle button-->
       <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
              <span class="hidden-xs"><font class='uppercase'><?php echo $_SESSION['tc_username']; ?></font></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                <p>
                  <font class='uppercase'><?php echo $_SESSION['tc_username']; ?></font>
                  <!-- <small>Member since Nov. 2012</small> -->
                </p>
              </li>
                  <li class="user-footer">
                    <div class="pull-left">
                      <!-- <a href="#" class="btn btn-default btn-flat">Profil</a> -->
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url();?>c_admin/admin/logout" class="btn btn-default btn-flat">Keluar</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <!-- <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a> -->
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <!-- <div class="pull-left image">
              <img src="<?php //echo base_url();?>assets/custom/images/logo/logo_farmergamer.png" class="img-circle" alt="User Image" />
            </div> -->
            <!-- <div class="pull-left info">
              <p><font class='uppercase'><?php //echo $_SESSION['tc_username']; ?></font></p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div> -->
            <div class="image" style="text-align: center!important;">
              <img src="<?php echo base_url();?>assets/custom/images/logo/logo_farmergamer.png" class="img-circle" alt="User Image" />
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li>
              <a href="<?php echo base_url();?>"><i class="fa fa-home"></i><span class="nav-label"> Home</span></a>
            </li>

            <li>
              <a href="<?php echo base_url();?>registrasi"><i class="fa fa-cubes"></i><span class="nav-label"> Jual Produk</span></a>
            </li>

            <li>
              <a href="<?php echo base_url();?>registrasi"><i class="glyphicon glyphicon-briefcase"></i><span class="nav-label"> Jual Jasa</span></a>
            </li>

            <li>
              <a href="<?php echo base_url();?>registrasi"><i class="fa fa-cube"></i><span class="nav-label"> Dicari Produk</span></a>
            </li>

            <li>
              <a href="<?php echo base_url();?>registrasi"><i class="fa fa-suitcase"></i><span class="nav-label"> Dicari Jasa</span></a>
            </li>
           
            <li>
              <a href="<?php echo base_url();?>registrasi"><i class="glyphicon glyphicon-globe"></i><span class="nav-label"> Tracking</span></a>
            </li>

          <li class="treeview">
            <a href="#"><i class="fa fa-cart-arrow-down"></i><span class="nav-label"> Transaksi</span><span class="fa arrow"></span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url();?>listpasien/umum"> Transaksi Pembayaran</a></li>
              <li><a href="<?php echo base_url();?>umum/kunjungan/daftar"> Transaksi Selesai</a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#"><i class="fa fa-sticky-note"></i><span class="nav-label"> Event</span><span class="fa arrow"></span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url();?>listpasien/umum"> List Event</a></li>
              <li><a href="<?php echo base_url();?>umum/kunjungan/daftar"> Registrasi Event</a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#"><i class="fa fa-book"></i> <span class="nav-label"> Laporan</span><span class="fa arrow"></span>
              <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url();?>laporan/penjualan"> Lap Jual Produk</a></li>
                <li><a href="<?php echo base_url();?>laporan/penjualan"> Lap Jual Jasa</a></li>
              </ul>
          </li>


          <li class="treeview">
            <a href="#"><i class="fa fa-user"></i><span class="nav-label"> Admin</span><span class="fa arrow"></span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url();?>admin/dokter/list_dokter"> User Management</a></li>
              <li><a href="<?php echo base_url();?>admin/dokter/list_dokter"> Daftar Game</a></li> 
              <!-- <li><a href="<?php //echo base_url();?>admin/dokter/list_dokter"> Daftar Item Game</a></li> --> 
              <li><a href="<?php echo base_url();?>admin/dokter/list_dokter"> Kategori Produk / Jasa</a></li> 
            </ul>
          </li>

          <li>
            <a href="<?php echo base_url();?>home"><i class="fa fa-link text-primary"></i><span class="nav-label text-primary"> Go To Site</span></a>
          </li>

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <?php echo $title;?>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
