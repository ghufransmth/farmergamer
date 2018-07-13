<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>FarmerGamer - <?php echo $title;?></title>
        <!-- META NAME DESCRIPTION , CONTENT BAGUS UNTUK GOOGLE SEO -->
        <meta name="description" content="Portal Jual Beli Produk / Jasa Dalam Game Pertama di Dunia, Dengan Transaksi Jual Beli Dalam Game Dapat Menghasilkan Uang">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <!--  <link rel="apple-touch-icon" href="apple-touch-icon.png"> -->
         <link rel="shortcut icon" href="<?php echo base_url('assets/custom/images/ico/favicon.ico');?>">

        <!-- JQuery -->
        <script src="<?php echo base_url();?>/assets/custom/js/vendor/jquery-1.11.2.min.js"></script>
        <!-- <script src="<?php //echo base_url();?>assets/custom/js/jQuery/jquery-2.2.3.min.js"></script> -->
        <!-- <script src="<?php //echo base_url();?>assets/custom/js/jQuery/jquery.min.js"></script> -->

        <!-- SELECT2 -->
        <link href="<?php echo base_url();?>assets/custom/select2/dist/css/select2.min.css" rel="stylesheet" />
        <script src="<?php echo base_url();?>assets/custom/select2/dist/js/select2.full.min.js"></script>

        <link rel="stylesheet" href="<?php echo base_url();?>/assets/custom/css/navmenu/styles.css">
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/custom/css/portfolio.jquery.css">
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/custom/css/fonticons.css">
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/custom/fonts/stylesheet.css">
        <!-- <link rel="stylesheet" href="<?php //echo base_url();?>/assets/custom/css/font-awesome.min.css"> -->
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/custom/css/bootstrap.min.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->

        <!-- FONT-AWESOME-5.0.8 -->
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/custom/font-awesome-5.0.8/css/fontawesome-all.min.css">

        <!-- SWEET ALERT -->
        <script src="<?php echo base_url();?>/assets/custom/sweetalert/sweetalert.min.js"></script>
        <style>
            .swal-text
            {
                font-weight: bold;
                font-size: 20px;
                font-family: sans-serif;
            }
            .tombol_red
            {
                background: firebrick;
            }
            .tombol_red:focus
            {
                background: firebrick;
            }
        </style>
        <!-- END SWEET ALERT -->

        <!-- JQUERY-CONFIRM-V3.3.2 -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/custom/jquery-confirm-v3.3.2/jquery-confirm.min.css">
        <script src="<?php echo base_url();?>assets/custom/jquery-confirm-v3.3.2/jquery-confirm.min.js"></script>
        <!-- JQUERY-CONFIRM-V3.3.2 -->
        
        <!-- DATATABLES -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap.css">
        <!-- <link href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" /> -->

        <!--For Plugins external css-->
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/custom/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/custom/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/custom/css/responsive.css" />

        <!-- MIX WITH OTHER STYLE -->
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/custom/css/mix/animate.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/custom/css/mix/icomoon.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/custom/css/mix/style.css" />

        <script src="<?php echo base_url();?>/assets/custom/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <style type="text/css">
            .scrollup{
                height: 50px;
                width: 50px;
                display: table-cell;
                vertical-align: middle;
                display:none;
            }
            .scrollup.tampil
            {
                display:block;
            }
        </style>

        <!-- LOADING LINE SEPERTI YOUTUBE -->
        <script src="<?php echo base_url();?>/assets/custom/js/nanobar.min.js"></script>
        <script>
            $(function () {
                var options1 = {
                  target: document.getElementById('myDivId'),
                  id: 'loading-line-nanobar'
                };

                var nanobar1 = new Nanobar(options1);

                // size bar 100% and and finish
                nanobar1.go(100);
            });
        </script>
        <style type="text/css">
            .nanobar .bar
            {
                /*background: hsl(0, 100%, 50%);*/
                /*background: rgba(240, 173, 78, 0.8);*/
                /*background: #333;*/

                /*background: rgba(51, 51, 51, 0.7);*/
                background: #303F9F;
                height: 2px;
            }
        </style>

        <!-- END LOADING LINE SEPERTI YOUTUBE -->

        <!-- CONFIRM MODAL -->

          <script>

            var Confirm = (function() {
              "use strict";
              var elem,
              hideHandler,
              that = {};
                that.show = function(text,option,action) {
                clearTimeout(hideHandler);
                    $('#konfirmModal').find('.modal-body').html(text);
                    $('#konfirmModal').find('#hapus').html(option);
                    $('#konfirmModal').find('#hapus').attr('onClick', action);
                    $('#konfirmModal').modal({show:true});
                };
                return that;
            }());

          </script>

          <!-- END CONFIRM MODAL -->
          
    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">

        <div id="loading-line-nanobar"></div>
        <?php echo $_header;?>
        <?php echo $_content;?>
        <?php echo $_footer;?>
        <!-- START SCROLL TO TOP  -->

        <div class="scrollup">
            <!-- <a href="#"><i class="fa fa-chevron-up"></i></a> -->
            <a href="#"><i class="icon-arrow-up"></i></a>
        </div>


        <!-- #KonfirmModal -->
        <div id="konfirmModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Konfirmasi</h4>
              </div>
              <div class="modal-body">
                <p>
                </p>
              </div>
              <div class="modal-footer">
                <button type="button" id="hapus" class="btn btn-primary" data-dismiss="modal">Hapus</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal --><!-- /#KonfirmModal -->


        <script src="<?php echo base_url();?>/assets/custom/js/vendor/bootstrap.min.js"></script>

        <script src="<?php echo base_url();?>/assets/custom/js/jquery.easypiechart.min.js"></script>
        <script src="<?php echo base_url();?>/assets/custom/js/portfolio.jquery.js"></script>
        <script src="<?php echo base_url();?>/assets/custom/js/jquery.mixitup.min.js"></script>
        <script src="<?php echo base_url();?>/assets/custom/js/jquery.easing.1.3.js"></script>
        <script src="<?php echo base_url();?>/assets/custom/js/jquery.slicknav.min.js"></script>
        <!--This is link only for gmaps-->
        <!-- <script src="http://maps.google.com/maps/api/js"></script>
        <script src="<?php //echo base_url();?>/assets/custom/js/gmaps.min.js"></script> -->
        <!-- <script>
            var map = new GMaps({
                el: '.ourmaps',
                scrollwheel: false,
                lat: -12.043333,
                lng: -77.028333
            });
        </script> -->

        <script src="<?php echo base_url();?>/assets/custom/js/plugins.js"></script>
        <script src="<?php echo base_url();?>/assets/custom/js/main.js"></script>

        <!-- SMOOTHSCROLL -->
        <!-- <script src="<?php //echo base_url();?>/assets/custom/js/SmoothScroll.min.js"></script> -->

        <!-- UNITEGALLERY -->
        <script type='text/javascript' src='<?php echo base_url();?>assets/custom/unitegallery/js/ug-common-libraries.js'></script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/custom/unitegallery/js/ug-functions.js'></script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/custom/unitegallery/js/ug-thumbsgeneral.js'></script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/custom/unitegallery/js/ug-thumbsstrip.js'></script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/custom/unitegallery/js/ug-touchthumbs.js'></script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/custom/unitegallery/js/ug-panelsbase.js'></script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/custom/unitegallery/js/ug-strippanel.js'></script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/custom/unitegallery/js/ug-gridpanel.js'></script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/custom/unitegallery/js/ug-thumbsgrid.js'></script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/custom/unitegallery/js/ug-tiles.js'></script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/custom/unitegallery/js/ug-tiledesign.js'></script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/custom/unitegallery/js/ug-avia.js'></script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/custom/unitegallery/js/ug-slider.js'></script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/custom/unitegallery/js/ug-sliderassets.js'></script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/custom/unitegallery/js/ug-touchslider.js'></script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/custom/unitegallery/js/ug-zoomslider.js'></script> 
        <script type='text/javascript' src='<?php echo base_url();?>assets/custom/unitegallery/js/ug-video.js'></script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/custom/unitegallery/js/ug-gallery.js'></script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/custom/unitegallery/js/ug-lightbox.js'></script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/custom/unitegallery/js/ug-carousel.js'></script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/custom/unitegallery/js/ug-api.js'></script>

        <link rel='stylesheet' href='<?php echo base_url();?>assets/custom/unitegallery/css/unite-gallery.css' type='text/css' />
        
        <script type='text/javascript' src='<?php echo base_url();?>assets/custom/unitegallery/themes/compact/ug-theme-compact.js'></script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/custom/unitegallery/themes/default/ug-theme-default.js'></script>
        <link rel='stylesheet' href='<?php echo base_url();?>assets/custom/unitegallery/themes/default/ug-theme-default.css' type='text/css' />
        <!-- END UNITEGALLERY -->

    </body>
</html>
