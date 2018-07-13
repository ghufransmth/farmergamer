<style type="text/css">

    /*REMOVE SPINNER FROM INPUT NUMBER*/
    input[type=number]::-webkit-inner-spin-button, 
    input[type=number]::-webkit-outer-spin-button { 
        -webkit-appearance: none; /* for chrome */
        -moz-appearance: none; /* for firefox*/
        appearance: none;
        margin: 0; 
    }
    input[type=number] {
        -moz-appearance: textfield; /* for firefox*/
    }

    /*ATUR RESPONSIVE*/
    @media all and (max-width: 768px) {
        .foto-responsive {
            max-height: 70px;
            max-width: 70px;
        }      
    }

</style>

<section style="background-color: #F9F9F9;padding-bottom:5px;">
    <div class="container" style="margin-top: 50px;padding-top: 70px;margin-bottom: 40px;">
        <div class="row">
            <div class="col-md-10 col-md-offset-1" style="margin-top: 25px;">

            	<div class="panel panel-default">
            	<div class="panel-body" style="background-color: #ffffff;">

		            <!-- <div style="color: cornflowerblue;font-size: 20px;">Transaksi Berhasil</div> -->
                <div style="color: cornflowerblue;font-size: 20px;">Info Pembayaran</div>

		            <!-- <div style="color: #757575;margin-bottom: 10px;">Silahkan Melakukan Pembayaran <span style="font-weight:bold;">(Max. 2x24 jam)</span></div> -->
                <div style="margin-bottom: 10px;" class="alert alert-info">
                  Silahkan melakukan pembayaran sebelum tanggal <span style="font-weight: bold;"><?php echo date("d-m-Y", strtotime("+1 days", strtotime($hsl['tgl_transaksi'])));?></span>. Bila tidak, pesanan akan dibatalkan secara otomatis.
                  <br><span style="font-size: 12px;">Waktu Pesanan <?php echo date("d-m-Y", strtotime($hsl['tgl_transaksi']));?> <?php echo $hsl['waktu_transaksi'];?></span>
                </div>

		            <div style="border: 1px solid #EAEAEA;padding: 15px;margin-bottom: 10px;" class="text-center">Kode Pembayaran<br>
		            <!-- <span style="font-size: 25px;letter-spacing: 3px;">T99999</span> -->
		            <span style="font-size: 25px;letter-spacing: 3px;"><?php echo $hsl['kode_pembayaran'];?></span>
		            </div>

		            <div style="border: 1px solid #EAEAEA;padding: 15px;">
			            <p>Bank BCA : a/n Rizky Adrianto ...........</p>
			            <p>Bank MANDIRI : a/n Rizky Adrianto .................</p>
			            <p>Bank BNI : a/n Rizky Adrianto .................</p>
			            <p>Bank BRI : a/n Rizky Adrianto .................</p>
		            </div>

                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 10px;">
                    <a class="btn btn-primary btn-block pull-right" href="<?php echo base_url();?>daftar_belanja">Ok!</a>
                  </div>
                </div>

	            </div>

            </div>
        </div>
    </div>
</section>