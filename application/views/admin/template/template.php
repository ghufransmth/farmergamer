<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>FarmerGamer - <?php echo $title;?></title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>assets/dist/css/ionicons.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>assets/plugins/iCheck/flat/_all.css" rel="stylesheet" type="text/css" />
  <!-- <link href="<?php echo base_url();?>assets/plugins/morris/morris.css" rel="stylesheet" type="text/css" /> -->
  <link href="<?php echo base_url();?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>assets/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap.css">
  <link href="<?php echo base_url();?>assets/timepicker/jquery.timepicker.css" rel="stylesheet" type="text/css">

  <style>
    .bb-alert{
      z-index:9999;
      position:absolute;
      width:100%;
      left: inherit;
      opacity: 1;
    }
    .txtAlert{
      font-weight:bold;
    }
    font.uppercase{
      text-transform: uppercase;
    }
  </style>
  <script src="<?php echo base_url();?>assets/plugins/jQuery/jquery.min.js"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
  <script src="<?php echo base_url();?>assets/plugins/jQueryUI/jquery-ui.min.js"></script>

  <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
  <!-- <script src="<?php echo base_url();?>assets/plugins/sparkline/jquery.sparkline.min.js"></script> -->
  <!-- <script src="<?php echo base_url();?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script> -->
  <!-- <script src="<?php echo base_url();?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script> -->
  <!-- <script src="<?php echo base_url();?>assets/plugins/knob/jquery.knob.js"></script> -->
  <script src="<?php echo base_url();?>assets/bower_components/moment/min/moment.min.js"></script>
  <!-- <script src="<?php echo base_url();?>assets/plugins/daterangepicker/daterangepicker.js"></script> -->
  <script src="<?php echo base_url();?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/fastclick/fastclick.js"></script>
  <script src="<?php echo base_url();?>assets/dist/js/app.min.js"></script>
  <script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>

  <link href="<?php echo base_url();?>assets/custom/select2/dist/css/select2.min.css" rel="stylesheet" />
  <script src="<?php echo base_url();?>assets/custom/select2/dist/js/select2.full.min.js"></script>
  <!-- <script src="<?php echo base_url();?>assets/plugins/input-mask/jquery.inputmask.js"></script> -->
  <!-- <script src="<?php echo base_url();?>assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script> -->
  <!-- <script src="<?php echo base_url();?>assets/plugins/input-mask/jquery.inputmask.extensions.js"></script> -->
  <script src="<?php echo base_url();?>assets/plugins/iCheck/icheck.min.js"></script>
  <!-- <script src="<?php echo base_url();?>assets/plugins/colorpicker/bootstrap-colorpicker.min.js"></script> -->
  <link href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
  <script src="<?php echo base_url();?>assets/timepicker/jquery.timepicker.min.js"></script>
  <script>
    var Alert = (function() {
      "use strict";
      var elem,
      hideHandler,
      that = {};
      that.init = function(options) {
        elem = $(options.selector);
      };

      that.show = function(text,type) {
        clearTimeout(hideHandler);
        $("#tk-alert").removeClass();
        $("#tk-alert").addClass("bb-alert alert alert-"+type);
        $("#tk-alert").find("span").html(text);
        $("#tk-alert").delay(200).fadeIn().delay(4000).fadeOut();
      };
      that.hide = function() {
        $("#tk-alert").hide();
      };
      return that;
    }());

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

    $(function() {
      Alert.init({
        "selector": "#tk-alert"
      });
    });
  </script>
</head>

  <body class="skin-blue sidebar-mini wysihtml5-supported fixed">


  <?php echo $_header;?>
  <?php echo $_content;?>
  <?php echo $_footer;?>

  </body>

</html>