<style>
    /*ATUR BREADCRUMB DARI BOOTSTRAP*/
    ol.breadcrumb li+li:before {
        padding: 8px;
        color: grey;
        content: ">";
    }

    /*ATUR RESPONSIVE*/
    /*@media all and (max-width: 768px) {
        .foto-responsive {
            width:100%!important;
            text-align: center!important;
            margin-bottom:0!important;
        }      
    }*/

    /*EFEK WARNA GRADASI UNTUK ICON STAR FONT AWESOME*/
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

    <section style="background-color: #F9F9F9;padding-bottom:5px;">
    <?php if(!isset($_SESSION['tc_id_user'])):?>
    <div class="container" style="margin-top: 90px;padding-top: 70px;margin-bottom: 40px;">
    <?php else:?>
    <div class="container" style="margin-top: 50px;padding-top: 70px;margin-bottom: 40px;">
    <?php endif;?>
            
            <div class="row">
                <div class="col-md-12">

                    <ol class="breadcrumb" style="background-color: transparent;border: 0;padding: 0;">
                        <li><span style="color: #db4a39;font-family:latoregular;">FarmerGamer</span></li>
                        <li><span style="color: #db4a39;font-family:latoregular;">User</span></li>
                        <li class="active"><span style="color: #db4a39;font-family:latoregular;">Rating Saya</span></li>
                    </ol>

                    <h4 class="text-center" style="color: #565656;font-size: 25px;transform: scale(.9,1);font-family: sans-serif;text-transform: uppercase;">Rating Saya</h4>
                    <div class="separator"></div>

                </div>
            </div>
                
            <div id="tampil"></div>

    </div>
    </section>

<script>
    
    function loadData(args) {
      //code
      $("#tampil").load("<?php echo base_url();?>user/rating_saya/tampil_rating");
    }
    loadData();

</script>