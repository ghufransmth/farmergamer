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
    /*@media all and (max-width: 768px) {
        .foto-responsive {
            max-height: 70px;
            max-width: 70px;
        }      
    }*/

    .actived, .act:hover
    {
    	color:steelblue;
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

    /*EFEK WARNA GRADASI UNTUK ICON STAR FONT AWESOME*/
    /*.pick
    {
    	color:gold!important;
    }*/
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

<style> 
.kolom-4 {
    -webkit-column-count: 3; /* Chrome, Safari, Opera */
    -moz-column-count: 3; /* Firefox */
    column-count: 4;

    -webkit-column-gap: 40px; /* Chrome, Safari, Opera */
    -moz-column-gap: 40px; /* Firefox */
    column-gap: 40px;

    -webkit-column-rule: 4px double #ff00ff; /* Chrome, Safari, Opera */
    -moz-column-rule: 4px double #ff00ff; /* Firefox */
    column-rule: 4px double #ff00ff;
}
</style>

<!-- <section style="background-image: url('<?php //echo base_url();?>assets/custom/images/wallpaper.jpg');background-repeat: repeat-x;"> -->
<!-- <section style="background:linear-gradient(to right, rgba(90, 122, 173, 0.8509803921568627), #5a7aad);"> -->
<section style="background:linear-gradient(rgba(189, 185, 185, 0.2), rgba(189, 185, 185, 0.3));">
	<div class="container" style="margin-top: 30px;padding-top: 90px;margin-bottom: 40px;">
		<div class="row">
			<div class="col-md-12">
        		<!-- <div class="row cardDaftarBelanja"> -->
        		<div class="row">
	        		<div class="col-md-3 act">
		        		<div class="panel" style="cursor:pointer;" onclick="toggle_btn('belumBayar');">
			        		<div class="panel-body actived" id="belumBayar">
			        			<div class="text-center"><i class="fa fa-money" style="font-size: 25px;"></i></div>
			        			<div class="text-center">Belum Bayar <span id="hitung_belumBayar">(0)</span></div>
			        		</div>
		        		</div>
	        		</div>
	        		<div class="col-md-3 act">
		        		<div class="panel" style="cursor:pointer;" onclick="toggle_btn('pengiriman');">
			        		<div class="panel-body" id="pengiriman">
			        			<div class="text-center"><i class="fa fa-truck" style="font-size: 25px;"></i></div>
			        			<div class="text-center">Pengiriman <span id="hitung_pengiriman">(0)</span></div>
			        		</div>
		        		</div>
	        		</div>
	        		<div class="col-md-3 act">
		        		<div class="panel" style="cursor:pointer;" onclick="toggle_btn('selesai');">
			        		<div class="panel-body" id="selesai">
			        			<div class="text-center"><i class="fa fa-check-circle" style="font-size: 25px;"></i></div>
			        			<div class="text-center">Selesai <span id="hitung_selesai">(0)</span></div>
			        		</div>
		        		</div>
	        		</div>
	        		<div class="col-md-3 act">
		        		<div class="panel" style="cursor:pointer;" onclick="toggle_btn('pengembalian');">
			        		<div class="panel-body" id="pengembalian">
			        			<div class="text-center"><i class="fa fa-minus-square-o" style="font-size: 25px;"></i></div>
			        			<div class="text-center">Pengembalian <span id="hitung_pengembalian">(0)</span></div>
			        		</div>
		        		</div>
	        		</div>

	        		<!-- <div class="col-md-12 act">
		        		<div class="panel" style="cursor:pointer;" onclick="toggle_btn('belumBayar');">
			        		<div class="panel-body actived" id="belumBayar">
			        			<div class="text-center"><i class="fa fa-money" style="font-size: 25px;"></i></div>
			        			<div class="text-center">Belum Bayar <div id="hitung_belumBayar" style="font-size:12px;color:#C1C1C1;">(0)</div></div>
			        		</div>
		        		</div>
	        		</div>
	        		<div class="col-md-12 act">
		        		<div class="panel" style="cursor:pointer;" onclick="toggle_btn('pengiriman');">
			        		<div class="panel-body" id="pengiriman">
			        			<div class="text-center"><i class="fa fa-truck" style="font-size: 25px;"></i></div>
			        			<div class="text-center">Pengiriman <div id="hitung_pengiriman" style="font-size:12px;color:#C1C1C1;">(0)</div></div>
			        		</div>
		        		</div>
	        		</div>
	        		<div class="col-md-12 act">
		        		<div class="panel" style="cursor:pointer;" onclick="toggle_btn('selesai');">
			        		<div class="panel-body" id="selesai">
			        			<div class="text-center"><i class="fa fa-check-circle" style="font-size: 25px;"></i></div>
			        			<div class="text-center">Selesai <div id="hitung_selesai" style="font-size:12px;color:#C1C1C1;">(0)</div></div>
			        		</div>
		        		</div>
	        		</div>
	        		<div class="col-md-12 act">
		        		<div class="panel" style="cursor:pointer;" onclick="toggle_btn('pengembalian');">
			        		<div class="panel-body" id="pengembalian">
			        			<div class="text-center"><i class="fa fa-minus-square-o" style="font-size: 25px;"></i></div>
			        			<div class="text-center">Pengembalian <div id="hitung_pengembalian" style="font-size:12px;color:#C1C1C1;">(0)</div></div>
			        		</div>
		        		</div>
	        		</div>
	        		<div class="col-md-12 act">
		        		<div class="panel" style="cursor:pointer;" onclick="toggle_btn('pengembalian');">
			        		<div class="panel-body" id="pengembalian">
			        			<div class="text-center"><i class="fa fa-times-circle-o" style="font-size: 25px;"></i></div>
			        			<div class="text-center">Dibatalkan <div id="hitung_pengembalian" style="font-size:12px;color:#C1C1C1;">(0)</div></div>
			        		</div>
		        		</div>
	        		</div> -->

	        		<!-- <div class="col-md-2 act">
		        		<div class="panel" style="cursor:pointer;" onclick="toggle_btn('belumBayar');">
			        		<div class="panel-body actived" id="belumBayar">
			        			<div class="text-center"><i class="fa fa-money" style="font-size: 25px;"></i></div>
			        			<div class="text-center">Belum Bayar <div id="hitung_belumBayar" style="font-size:12px;color:#C1C1C1;">(0)</div></div>
			        		</div>
		        		</div>
	        		</div>
	        		<div class="col-md-2 act">
		        		<div class="panel" style="cursor:pointer;" onclick="toggle_btn('pengiriman');">
			        		<div class="panel-body" id="pengiriman">
			        			<div class="text-center"><i class="fa fa-truck" style="font-size: 25px;"></i></div>
			        			<div class="text-center">Pengiriman <div id="hitung_pengiriman" style="font-size:12px;color:#C1C1C1;">(0)</div></div>
			        		</div>
		        		</div>
	        		</div>
	        		<div class="col-md-2 act">
		        		<div class="panel" style="cursor:pointer;" onclick="toggle_btn('selesai');">
			        		<div class="panel-body" id="selesai">
			        			<div class="text-center"><i class="fa fa-check-circle" style="font-size: 25px;"></i></div>
			        			<div class="text-center">Selesai <div id="hitung_selesai" style="font-size:12px;color:#C1C1C1;">(0)</div></div>
			        		</div>
		        		</div>
	        		</div>
	        		<div class="col-md-2 act">
		        		<div class="panel" style="cursor:pointer;" onclick="toggle_btn('pengembalian');">
			        		<div class="panel-body" id="pengembalian">
			        			<div class="text-center"><i class="fa fa-minus-square-o" style="font-size: 25px;"></i></div>
			        			<div class="text-center">Pengembalian <div id="hitung_pengembalian" style="font-size:12px;color:#C1C1C1;">(0)</div></div>
			        		</div>
		        		</div>
	        		</div>
	        		<div class="col-md-2 act">
		        		<div class="panel" style="cursor:pointer;" onclick="toggle_btn('pengembalian');">
			        		<div class="panel-body" id="pengembalian">
			        			<div class="text-center"><i class="fa fa-times-circle-o" style="font-size: 25px;"></i></div>
			        			<div class="text-center">Dibatalkan <div id="hitung_pengembalian" style="font-size:12px;color:#C1C1C1;">(0)</div></div>
			        		</div>
		        		</div>
	        		</div> -->

	        		<!-- <div class="col-md-4">
		        		<div class="panel" style="cursor:pointer;" onclick="toggle_btn('belumBayar');">
			        		<div class="panel-body actived" id="belumBayar">
			        			<div class="text-center"><i class="fa fa-money" style="font-size: 25px;"></i></div>
			        			<div class="text-center">Belum Bayar <span id="hitung_belumBayar">(0)</span></div>
			        		</div>
		        		</div>
	        		</div>
	        		<div class="col-md-4">
		        		<div class="panel" style="cursor:pointer;" onclick="toggle_btn('pengiriman');">
			        		<div class="panel-body" id="pengiriman">
			        			<div class="text-center"><i class="fa fa-truck" style="font-size: 25px;"></i></div>
			        			<div class="text-center">Pengiriman <span id="hitung_pengiriman">(0)</span></div>
			        		</div>
		        		</div>
	        		</div>
	        		<div class="col-md-4">
		        		<div class="panel" style="cursor:pointer;" onclick="toggle_btn('selesai');">
			        		<div class="panel-body" id="selesai">
			        			<div class="text-center"><i class="fa fa-check-circle" style="font-size: 25px;"></i></div>
			        			<div class="text-center">Selesai <span id="hitung_selesai">(0)</span></div>
			        		</div>
		        		</div>
	        		</div>
	        		<div class="col-md-6">
		        		<div class="panel" style="cursor:pointer;" onclick="toggle_btn('pengembalian');">
			        		<div class="panel-body" id="pengembalian">
			        			<div class="text-center"><i class="fa fa-minus-square-o" style="font-size: 25px;"></i></div>
			        			<div class="text-center">Pengembalian <span id="hitung_pengembalian">(0)</span></div>
			        		</div>
		        		</div>
	        		</div>
	        		<div class="col-md-6">
		        		<div class="panel" style="cursor:pointer;" onclick="toggle_btn('pengembalian');">
			        		<div class="panel-body" id="pengembalian">
			        			<div class="text-center"><i class="fa fa-times-circle-o" style="font-size: 25px;"></i></div>
			        			<div class="text-center">Dibatalkan <span id="hitung_pengembalian">(0)</span></div>
			        		</div>
		        		</div>
	        		</div> -->

        		</div>
        	</div>
		</div>
	</div>
</section>

<section style="background-color: #F9F9F9;padding-bottom:5px;">
    <!-- <div class="container" style="margin-top: 50px;padding-top: 70px;margin-bottom: 40px;"> -->
    <div class="container" style="margin-top: -40px;padding-top: 0;margin-bottom: 40px;">
        <div class="row">

        	<!-- <div class="col-md-12">
        		<div class="row">
	        		<div class="col-md-3">
		        		<div class="panel" style="cursor:pointer;">
			        		<div class="panel-body">
			        			<div class="text-center"><i class="fa fa-save" style="font-size: 25px;"></i></div>
			        			<div class="text-center">Belum Bayar</div>
			        		</div>
		        		</div>
	        		</div>
	        		<div class="col-md-3">
		        		<div class="panel" style="cursor:pointer;">
			        		<div class="panel-body">
			        			<div class="text-center"><i class="fa fa-send" style="font-size: 25px;"></i></div>
			        			<div class="text-center">Pengiriman</div>
			        		</div>
		        		</div>
	        		</div>
	        		<div class="col-md-3">
		        		<div class="panel" style="cursor:pointer;">
			        		<div class="panel-body">
			        			<div class="text-center"><i class="fa fa-check" style="font-size: 25px;"></i></div>
			        			<div class="text-center">Selesai</div>
			        		</div>
		        		</div>
	        		</div>
	        		<div class="col-md-3">
		        		<div class="panel" style="cursor:pointer;">
			        		<div class="panel-body">
			        			<div class="text-center"><i class="fa fa-trash" style="font-size: 25px;"></i></div>
			        			<div class="text-center">Pengembalian</div>
			        		</div>
		        		</div>
	        		</div>
        		</div>
        	</div> -->

        	<!-- <div class="col-md-12">

	        	<div class="kolom-4">
	        		Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.
	        	</div>

        	</div> -->

        	<!-- <div class="col-md-12">
	        		<span style="display: inline-block;background: black;border: 1px solid green;height: 5em;width: calc(25%)">
						<div class="panel" style="height: inherit;">
							<div class="panel-body" style="height: inherit;">
								aaa
							</div>
						</div>
	        		</span>
	        		<span style="display: inline-block;background: black;border: 1px solid green;height: 5em;width: calc(25%)">
						<div class="text-center" style="height:inherit;">aaaaa</div>
	        		</span>
	        		<span style="display: inline-block;background: black;border: 1px solid green;height: 5em;width: calc(25%)">
						<div class="panel" style="height: inherit;">
							<div class="panel-body" style="height: inherit;">
								aaa
							</div>
						</div>
	        		</span>
	        		<span style="display: inline-block;background: black;border: 1px solid green;height: 5em;width: calc(25%)">
						<div class="panel" style="height: inherit;">
							<div class="panel-body" style="height: inherit;">
								aaa
							</div>
						</div>
	        		</span>
        	</div> -->


        	<!-- BELUM DIRUBAH -->
            <!-- <div class="col-md-12" style="margin-top: 25px;">

            	<?php 
	            	//foreach($hsl as $result):
	            	// echo $result->id_transaksi."</br>";
	           	?>
            	<div class="panel">
	            	<div class="panel-body" style="background-color: #ffffff;">

			            <div style="color: cornflowerblue;font-size: 20px;">Transaksi Berhasil</div>
			            <div style="color: #757575;margin-bottom: 10px;">Silahkan Melakukan Pembayaran <span style="font-weight:bold;">(Max. 2x24 jam)</span></div>

			            <div style="border-top: 1px solid #EAEAEA;padding: 15px;margin-bottom: 5px;" class="text-center">Kode Pembayaran<br>
			            <span style="font-size: 25px;letter-spacing: 3px;"><?php //echo $result->kode_pembayaran;?></span>
			            </div>

			            <div style="border-top: 1px solid #EAEAEA;border-bottom: 1px solid #EAEAEA;padding: 15px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				            <?php 
				            	//$query1 = $this->db->select("*")->from("transaksi_dijual")->join("dijual","dijual.id_dijual = transaksi_dijual.id_dijual")->where("transaksi_dijual.id_transaksi",$result->id_transaksi)->get()->result();
				            	//$total = 0;
				            	//$jml_item = 0;
				            	//foreach($query1 as $value)
				            	{
				            		//if($value->harga == $value->harga_diskon)
				            		{
				            			//$hrg = $value->harga;
				            		}
				            		//else
				            		{
				            			//$hrg = $value->harga_diskon;
				            		}
				            		//$total += ($value->quantity*$hrg);
				            		//$jml_item += $value->quantity;
				            	}
				            	// echo "<div style='color:#c9c9c9;float:left'>".$jml_item." Item</div>";
				            	// echo "<div style='font-weight:bold;float:right'>Total Pembayaran: <span style='color:green;'>Rp".number_format($total,0,',','.')."</span></div>";	

				            	//echo "<div class='pull-left' style='color:#C9C9C9;'>".$jml_item." Item</div>";
				            	//echo "<div class='pull-right' style='font-weight:bold;'>Total Pembayaran: <span style='color:green;'>Rp".number_format($total,0,',','.')."</span></div>";			            	
				            ;?>
			            </div>

			            <div style="margin-top: 5px;padding: 15px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			            	<div class="pull-left">Bayar Sebelum <?php //echo date("d-m-Y", strtotime("+1 days", strtotime($result->tgl_transaksi)));?></div>
			            	<button class="btn btn-danger pull-right">Bayar Sekarang</button>
			            </div>

		            </div>
	            </div>
	            <?php
	            	//endforeach;	
	            ;?>

           	</div> -->
           	<!-- END BELUM DIRUBAH -->

           	<div id="tampil"></div>

        </div>
    </div>
</section>

<script>
	
	function loadDataBelumBayar(args) {
        //code
        $("#tampil").load("<?php echo base_url();?>daftar_belanja/tampil_belumBayar");
    }
    loadDataBelumBayar();

    function loadDataPengiriman(args) {
        //code
        $("#tampil").load("<?php echo base_url();?>daftar_belanja/tampil_pengiriman");
    }

    function loadDataSelesai(args) {
        //code
        $("#tampil").load("<?php echo base_url();?>daftar_belanja/tampil_selesai");
    }

    function loadDataPengembalian(args) {
        //code
        $("#tampil").load("<?php echo base_url();?>daftar_belanja/tampil_pengembalian");
    }

    // UNTUK JUMLAH YANG DITAMPILKAN PADA FITUR BELUM BAYAR
    function countDataBelumBayar(args) {
        //code
        $("#hitung_belumBayar").load("<?php echo base_url();?>daftar_belanja/count_belumBayar");
    }
    countDataBelumBayar();

    // UNTUK JUMLAH YANG DITAMPILKAN PADA FITUR PENGIRIMAN
    function countDataPengiriman(args) {
        //code
        $("#hitung_pengiriman").load("<?php echo base_url();?>daftar_belanja/count_pengiriman");
    }
    countDataPengiriman();

    // UNTUK JUMLAH YANG DITAMPILKAN PADA FITUR SELESAI
    function countDataSelesai(args) {
        //code
        $("#hitung_selesai").load("<?php echo base_url();?>daftar_belanja/count_selesai");
    }
    countDataSelesai();

    // UNTUK JUMLAH YANG DITAMPILKAN PADA FITUR PENGEMBALIAN
    function countDataPengembalian(args) {
        //code
        $("#hitung_pengembalian").load("<?php echo base_url();?>daftar_belanja/count_pengembalian");
    }
    countDataPengembalian();

    function toggle_btn(param) {
        switch(param)
        {
            case "belumBayar":
              	loadDataBelumBayar();
                $("#belumBayar").addClass("actived");
                $("#pengiriman").removeClass("actived");
                $("#selesai").removeClass("actived");
                $("#pengembalian").removeClass("actived");
            break;
            case "pengiriman":
                loadDataPengiriman();
                $("#belumBayar").removeClass("actived");
                $("#pengiriman").addClass("actived");
                $("#selesai").removeClass("actived");
                $("#pengembalian").removeClass("actived");
            break;
            case "selesai":
                loadDataSelesai();
                $("#belumBayar").removeClass("actived");
                $("#pengiriman").removeClass("actived");
                $("#selesai").addClass("actived");
                $("#pengembalian").removeClass("actived");
            break;
            case "pengembalian":
                loadDataPengembalian();
                $("#belumBayar").removeClass("actived");
                $("#pengiriman").removeClass("actived");
                $("#selesai").removeClass("actived");
                $("#pengembalian").addClass("actived");
            break;
        }
    }

    // function modal_konfirmasiPembayaran(kd_pembayaran){
        
    //     $.confirm({
    //     	columnClass: 'col-md-8 col-md-offset-2',
    //         title: 'Konfirmasi Pembayaran!',
    //         // content: '<div class="form-group">Kode Pembayaran :<span style="font-weight:bold;color:green;">'+kd_pembayaran+'</span></div><div class="form-group"><label class="control-label">No.Rekening</label><input class="form-control" placeholder="No Rekening" type="text"></div><div class="form-group"><label class="control-label">Atas Nama</label><input class="form-control" placeholder="Atas Nama" type="text"></div><div class="form-group"><label class="control-label">Nominal Pembayaran</label><input class="form-control" placeholder="Nominal Pembayaran" type="number"></div><div class="form-group"><label class="control-label">Bukti Transfer</label><input class="form-control" type="file"></div>',
    //         content: '<div class="form-group text-center" style="border-bottom: 1px solid #e9e9e9;border-top: 1px solid #e9e9e9;padding:5px;"><div style="font-weight:bold;">Kode Pembayaran</div><div style="font-weight:bold;color:green;font-size:20px;letter-spacing:1px;">'+kd_pembayaran+'</div></div><div class="form-group"><label class="control-label">Transfer kepada:</label><select class="form-control"><option>aaaa</option></select></div><div class="form-group"><label class="control-label">Transfer dari:</label><input class="form-control" placeholder="Bank" type="text"><input class="form-control" placeholder="No.Rek Anda" type="text"><input class="form-control" placeholder="A/n Anda" type="text"></div><div class="form-group"><label class="control-label">Bukti Transfer:</label><input class="form-control" type="file"></div>',
    //         type: 'blue',
    //         escapeKey: 'Batal',
    //         backgroundDismiss: false,
    //         buttons: {   
    //             Ok: {
    //                 btnClass: 'btn-primary text-white',
    //                 keys: ['enter'],
    //                 action: function(){
    //                     // hapusFavorit(id_favorit,id_dijual);
    //                 }
    //             },
    //             Batal: {
    //             	btnClass: 'btn-red'
    //                 // btnClass:'btn-red',
    //                 // action:function(){

    //                 //     swal({
    //                 //         icon: "error",
    //                 //         closeOnClickOutside: true, //tutup dengan click area luar
    //                 //         closeOnEsc: true, // tutup dengan tombol esc
    //                 //         title: "Konfirmasi Pembayaran Dibatalkan!", // judul
    //                 //         button: false, // button tidak ada
    //                 //         timer: 3000, // setting waktu alert
    //                 //         text: " " // text
    //                 //     });

    //                 // }
    //             }

    //         }
    //     });

    // }

    function modal_konfirmasiPembayaran(id_pembayaran){
        
   		var data = {
            idPembayaran : +id_pembayaran
        };

   		$.confirm({
   			columnClass: 'col-md-8 col-md-offset-2',
   			type: 'blue',
   			escapeKey: 'Batal',
		    backgroundDismiss: false,
		    content: function () {
		        var self = this;
		        return $.ajax({
		            url: '<?php echo base_url();?>daftar_belanja/modal_konfirmasiPembayaran',
		            dataType: 'json',
		            method: 'post',
		            data: data
		        }).done(function (response) {
		            // self.setContent('Description: ' + response.judul);
		            // self.setContentAppend('<br>Version: ' + response.harga);
		            self.setContent(response.konten);
		        }).fail(function(){
		            self.setContent('Something went wrong.');
		        }).always(function(){
		            // self.setContentAppend('<div>Always!</div>');
		            self.setTitle("Konfirmasi Pembayaran!");
		        });
		    },
		    buttons: {   
		    	Ok: {
		       		btnClass: 'btn-primary text-white',
		            keys: ['enter'],
		            action: function(){
		                // hapusFavorit(id_favorit,id_dijual);
		            }
		        },
		        Batal: {
		            btnClass: 'btn-red'		                    
		        }

		    }

		});

    }

   //  function modal_penilaian(id_transaksi,id_penjual){
        
   //      var data = {
   //          pembayaran : +id_pembayaran,
   //          penjual    : +id_penjual
   //      };

   //      $.ajax({
   //          url: '<?php //echo base_url();?>daftar_belanja/tampil_penilaian',
   //          data: data,
   //          method: 'POST',
   //          dataType: 'json',
   //          // crossDomain: true,
   //          // contentType: 'application/json; charset=utf-8',
   //          success: function(result) {

		 //        $.confirm({
		 //        	columnClass: 'col-md-8 col-md-offset-2',
		 //            title: 'Beri Penilaian!',
		 //            content: '<div class="form-group text-center" style="border-bottom: 1px solid #e9e9e9;border-top: 1px solid #e9e9e9;padding:5px;"><div style="font-weight:bold;">Kode Pembayaran</div><div style="font-weight:bold;color:green;font-size:20px;letter-spacing:1px;">'+id_penjual+'</div></div><div class="form-group"><label class="control-label">Transfer kepada:</label><select class="form-control"><option>aaaa</option></select></div><div class="form-group"><label class="control-label">Transfer dari:</label><input class="form-control" placeholder="Bank" type="text"><input class="form-control" placeholder="No.Rek Anda" type="text"><input class="form-control" placeholder="A/n Anda" type="text"></div><div class="form-group"><label class="control-label">Bukti Transfer:</label><input class="form-control" type="file"></div>',
		 //            type: 'green',
		 //            escapeKey: 'Batal',
		 //            backgroundDismiss: false,
		 //            buttons: {   
		 //                Ok: {
		 //                    btnClass: 'btn-primary text-white',
		 //                    keys: ['enter'],
		 //                    action: function(){
		 //                        // hapusFavorit(id_favorit,id_dijual);
		 //                    }
		 //                },
		 //                Batal: {
		 //                	btnClass: 'btn-red'
		 //                    // btnClass:'btn-red',
		 //                    // action:function(){

		 //                    //     swal({
		 //                    //         icon: "error",
		 //                    //         closeOnClickOutside: true, //tutup dengan click area luar
		 //                    //         closeOnEsc: true, // tutup dengan tombol esc
		 //                    //         title: "Beri Penilaian Dibatalkan!", // judul
		 //                    //         button: false, // button tidak ada
		 //                    //         timer: 3000, // setting waktu alert
		 //                    //         text: " " // text
		 //                    //     });

		 //                    // }
		 //                }

		 //            }
		 //        });


			// }

   //      });

   //  }

    function modal_penilaian(id_transaksi,id_penjual){
        
   		var data = {
            idTransaksi : +id_transaksi,
            idPenjual    : +id_penjual
        };

   		$.confirm({
   			columnClass: 'col-md-8 col-md-offset-2',
   			type: 'blue',
   			escapeKey: 'Batal',
		    backgroundDismiss: false,
		    content: function () {
		        var self = this;
		        return $.ajax({
		            url: '<?php echo base_url();?>daftar_belanja/modal_penilaian',
		            dataType: 'json',
		            method: 'post',
		            data: data
		        }).done(function (response) {
		            // self.setContent('Description: ' + response.judul);
		            // self.setContentAppend('<br>Version: ' + response.harga);
		            self.setContent(response.konten);
		        }).fail(function(){
		            self.setContent('Something went wrong.');
		        }).always(function(){
		            // self.setContentAppend('<div>Always!</div>');
		            self.setTitle("Beri Penilaian!");
		        });
		    },
		    buttons: {   
		    	Ok: {
		       		btnClass: 'btn-primary text-white',
		            keys: ['enter'],
		            action: function(){
		                // hapusFavorit(id_favorit,id_dijual);
		                preInsert('insert');
		            }
		        },
		        Batal: {
		            btnClass: 'btn-red'		                    
		        }

		    }

		});

    }

    function modal_lihatPenilaian(id_transaksi,id_penjual){
        
   		var data = {
            idTransaksi : +id_transaksi,
            idPenjual    : +id_penjual
        };

   		$.confirm({
   			columnClass: 'col-md-8 col-md-offset-2',
   			type: 'green',
   			escapeKey: 'Batal',
		    backgroundDismiss: false,
		    content: function () {
		        var self = this;
		        return $.ajax({
		            url: '<?php echo base_url();?>daftar_belanja/modal_lihatPenilaian',
		            dataType: 'json',
		            method: 'post',
		            data: data
		        }).done(function (response) {
		            // self.setContent('Description: ' + response.judul);
		            // self.setContentAppend('<br>Version: ' + response.harga);
		            self.setContent(response.konten);
		        }).fail(function(){
		            self.setContent('Something went wrong.');
		        }).always(function(){
		            // self.setContentAppend('<div>Always!</div>');
		            self.setTitle("Lihat Penilaian!");
		        });
		    },
		    buttons: {   
		    	Ubah: {
		       		btnClass: 'btn-success text-white',
		            keys: ['enter'],
		            action: function(){
		                // hapusFavorit(id_favorit,id_dijual);
		                preInsert('edit');
		            }
		        },
		        Batal: {
		            btnClass: 'btn-red'		                    
		        }

		    }

		});

    }

    // $(function(){
    // 	<?php //if($_SESSION['tc_id_user'] == 1):?>
    // 	preInsert();
    // 	<?php //endif;?>
    // })

    // TOMBOL JAWABAN UNTUK TESTIMONI
    function testimoni_button(jawaban,index)
    {
    	var testimoni = $("#testimoni"+index).val();
    	if(testimoni == "")
    	{
	    	switch(jawaban)
	    	{
	    		case "pengiriman":
	    			$("#testimoni"+index).val(testimoni+="Kecepatan Pengiriman Sangat Baik.");
	    		break;
	    		case "harga":
	    			$("#testimoni"+index).val(testimoni+="Harga Item Sangat Baik.");
	    		break;
	    		case "respon":
	    			$("#testimoni"+index).val(testimoni+="Respon Penjual Sangat Baik.");
	    		break;
	    	}
	    }
	    else
	    {	
	    	switch(jawaban)
	    	{
	    		case "pengiriman":
	    			$("#testimoni"+index).val(testimoni+=" Kecepatan Pengiriman Sangat Baik.");
	    		break;
	    		case "harga":
	    			$("#testimoni"+index).val(testimoni+=" Harga Item Sangat Baik.");
	    		break;
	    		case "respon":
	    			$("#testimoni"+index).val(testimoni+=" Respon Penjual Sangat Baik.");
	    		break;
	    	}
	    }
    }


    // UNTUK HOVER ICON STAR
 //    $(function(){
	//     // $("#rating_1").hover(function(){
	//     //     $("#rating_1").css("color", "#f5f50ef7");
	//     // }, function(){
	//     //     $("#rating_1").css("color", "#f5f50ef7");
	//     // });

	//     $("#rating_1").mouseenter(function(){
	//         $(this).css("color", "#f5f50ef7!important");
	//     }).mouseleave(function(){
	//     	$(this).css("color", "#333");
	//     });

	// });

	// function toggle_rating(nilai,index)
	// {
	// 	$("#rating_1"+index).mouseenter(function(){
	//         $(this).css("color", "#f5f50ef7!important");
	//     }).mouseleave(function(){
	//     	$(this).css("color", "#333");
	//     });
	// }

	// function toggle_rating(nilai,index)
	// {
	//  	switch(nilai)
	//  	{
	//  		case "1":
	// 		 	$("#rating_1"+index).addClass("pick");
	// 		 	$("#rating_2"+index).removeClass("pick");
	// 		 	$("#rating_3"+index).removeClass("pick");
	// 		 	$("#rating_4"+index).removeClass("pick");
	// 		 	$("#rating_5"+index).removeClass("pick");
	// 		 	$("#ket_rating"+index).text("Tidak Baik");
	// 		 	$("#value_rating"+index).val(nilai);
	// 		break;
	// 		case "2":
	// 			$("#rating_1"+index).addClass("pick");
	// 		 	$("#rating_2"+index).addClass("pick");
	// 		 	$("#rating_3"+index).removeClass("pick");
	// 		 	$("#rating_4"+index).removeClass("pick");
	// 		 	$("#rating_5"+index).removeClass("pick");
	// 		 	$("#ket_rating"+index).text("Kurang Baik");
	// 		 	$("#value_rating"+index).val(nilai);
	// 		break;
	// 		case "3":
	// 			$("#rating_1"+index).addClass("pick");
	// 		 	$("#rating_2"+index).addClass("pick");
	// 		 	$("#rating_3"+index).addClass("pick");
	// 		 	$("#rating_4"+index).removeClass("pick");
	// 		 	$("#rating_5"+index).removeClass("pick");
	// 		 	$("#ket_rating"+index).text("Standar");
	// 		 	$("#value_rating"+index).val(nilai);
	// 		break;
	// 		case "4":
	// 			$("#rating_1"+index).addClass("pick");
	// 		 	$("#rating_2"+index).addClass("pick");
	// 		 	$("#rating_3"+index).addClass("pick");
	// 		 	$("#rating_4"+index).addClass("pick");
	// 		 	$("#rating_5"+index).removeClass("pick");
	// 		 	$("#ket_rating"+index).text("Baik");
	// 		 	$("#value_rating"+index).val(nilai);
	// 		break;
	// 		case "5":
	// 			$("#rating_1"+index).addClass("pick");
	// 		 	$("#rating_2"+index).addClass("pick");
	// 		 	$("#rating_3"+index).addClass("pick");
	// 		 	$("#rating_4"+index).addClass("pick");
	// 		 	$("#rating_5"+index).addClass("pick");
	// 		 	$("#ket_rating"+index).text("Sangat Baik");
	// 		 	$("#value_rating"+index).val(nilai);
	// 		break;
	//  	}
	// }

	function toggle_rating(nilai,index)
	{
	 	switch(nilai)
	 	{
	 		case "1":
			 	$("#rating_1"+index).addClass("gradient-icon-actived");
			 	$("#rating_1"+index).removeClass("gradient-icon");
			 	$("#rating_2"+index).addClass("gradient-icon");
			 	$("#rating_2"+index).removeClass("gradient-icon-actived");
			 	$("#rating_3"+index).addClass("gradient-icon");
			 	$("#rating_3"+index).removeClass("gradient-icon-actived");
			 	$("#rating_4"+index).addClass("gradient-icon");
			 	$("#rating_4"+index).removeClass("gradient-icon-actived");
			 	$("#rating_5"+index).addClass("gradient-icon");
			 	$("#rating_5"+index).removeClass("gradient-icon-actived");
			 	$("#ket_rating"+index).text("Tidak Baik");
			 	$("#value_rating"+index).val(nilai);
			break;
			case "2":
				$("#rating_1"+index).addClass("gradient-icon-actived");
				$("#rating_1"+index).removeClass("gradient-icon");
			 	$("#rating_2"+index).addClass("gradient-icon-actived");
			 	$("#rating_2"+index).removeClass("gradient-icon");
			 	$("#rating_3"+index).addClass("gradient-icon");
			 	$("#rating_3"+index).removeClass("gradient-icon-actived");
			 	$("#rating_4"+index).addClass("gradient-icon");
			 	$("#rating_4"+index).removeClass("gradient-icon-actived");
			 	$("#rating_5"+index).addClass("gradient-icon");
			 	$("#rating_5"+index).removeClass("gradient-icon-actived");
			 	$("#ket_rating"+index).text("Kurang Baik");
			 	$("#value_rating"+index).val(nilai);
			break;
			case "3":
				$("#rating_1"+index).addClass("gradient-icon-actived");
				$("#rating_1"+index).removeClass("gradient-icon");
			 	$("#rating_2"+index).addClass("gradient-icon-actived");
			 	$("#rating_2"+index).removeClass("gradient-icon");
			 	$("#rating_3"+index).addClass("gradient-icon-actived");
			 	$("#rating_3"+index).removeClass("gradient-icon");
			 	$("#rating_4"+index).addClass("gradient-icon");
			 	$("#rating_4"+index).removeClass("gradient-icon-actived");
			 	$("#rating_5"+index).addClass("gradient-icon");
			 	$("#rating_5"+index).removeClass("gradient-icon-actived");
			 	$("#ket_rating"+index).text("Standar");
			 	$("#value_rating"+index).val(nilai);
			break;
			case "4":
				$("#rating_1"+index).addClass("gradient-icon-actived");
				$("#rating_1"+index).removeClass("gradient-icon");
			 	$("#rating_2"+index).addClass("gradient-icon-actived");
			 	$("#rating_2"+index).removeClass("gradient-icon");
			 	$("#rating_3"+index).addClass("gradient-icon-actived");
			 	$("#rating_3"+index).removeClass("gradient-icon");
			 	$("#rating_4"+index).addClass("gradient-icon-actived");
			 	$("#rating_4"+index).removeClass("gradient-icon");
			 	$("#rating_5"+index).addClass("gradient-icon");
			 	$("#rating_5"+index).removeClass("gradient-icon-actived");
			 	$("#ket_rating"+index).text("Baik");
			 	$("#value_rating"+index).val(nilai);
			break;
			case "5":
				$("#rating_1"+index).addClass("gradient-icon-actived");
				$("#rating_1"+index).removeClass("gradient-icon");
			 	$("#rating_2"+index).addClass("gradient-icon-actived");
			 	$("#rating_2"+index).removeClass("gradient-icon");
			 	$("#rating_3"+index).addClass("gradient-icon-actived");
			 	$("#rating_3"+index).removeClass("gradient-icon");
			 	$("#rating_4"+index).addClass("gradient-icon-actived");
			 	$("#rating_4"+index).removeClass("gradient-icon");
			 	$("#rating_5"+index).addClass("gradient-icon-actived");
			 	$("#rating_5"+index).removeClass("gradient-icon");
			 	$("#ket_rating"+index).text("Sangat Baik");
			 	$("#value_rating"+index).val(nilai);
			break;
	 	}
	}

	function preInsert(action)
	{
		var arr_dt = [];
        var no_urut = 0;
        var indexnya = 0;
        $('input[id^="value_rating"]').each(function() {

        	if($("input[id^='value_rating']").eq(indexnya).val() != "")
        	{
	            arr_dt[no_urut] = {
	                "value_rating" : $("input[id^='value_rating']").eq(indexnya).val(),
	                "testimoni" : $("textarea[id^='testimoni']").eq(indexnya).val(),
	                "id_trans" : $("input[id^='id_trans']").eq(indexnya).val(),
	                "id_jual" : $("input[id^='id_jual']").eq(indexnya).val(),
	                "id_pembeli" : $("input[id^='id_pembeli']").eq(indexnya).val(),
	                "id_penjual" : $("input[id^='id_penjual']").eq(indexnya).val()
	            };
	           	no_urut++;
	           	indexnya++;
	           	return arr_dt;
       		}
       		else
       		{
       			arr_dt = "";
       			return false;
       		}

        });
        // console.log(arr_dt);

        if(arr_dt == "")
        {
        	
        	swal({
		        icon: "warning",
		        closeOnClickOutside: true, //tutup dengan click area luar
		        closeOnEsc: true, // tutup dengan tombol esc
		        title: "Masukkan Rating Dahulu!", // judul
		        button: false, // button tidak ada
		        timer: 3000, // setting waktu alert
		       	text: " " // text
		    });

        }
        else
        {
        	var data = {
	            cek   : JSON.stringify(arr_dt),
	            aksi  : action
	        };
	        console.log(data);
        	
	        $.ajax({
	            url: '<?php echo base_url();?>daftar_belanja/proses_penilaian',
	            data: data,
	            method: 'POST',
	            dataType: 'json',
	            // crossDomain: true,
	            // contentType: 'application/json; charset=utf-8',
	            success: function(result) {
	                console.log(result);

	                if(result.code==0)
	                {	                    
	                	swal({
					        icon: "success",
					        closeOnClickOutside: true, //tutup dengan click area luar
					        closeOnEsc: true, // tutup dengan tombol esc
					        title: "Berhasil Dinilai!", // judul
					        button: false, // button tidak ada
					        timer: 3000, // setting waktu alert
					       	text: " " // text
					    });
					    loadDataSelesai();
	                }
	                else
	                {
	                   	swal({
					        icon: "error",
					        closeOnClickOutside: true, //tutup dengan click area luar
					        closeOnEsc: true, // tutup dengan tombol esc
					        title: "Gagal Dinilai!", // judul
					        button: false, // button tidak ada
					        timer: 3000, // setting waktu alert
					       	text: " " // text
					    });
	                }
	            }
	            // },
	            // error: function(result2){
	            //     console.log(result2);
	            //     if(result2.code = 1)
	            //     {
	            //         
	            //     }
	            // }

	        });
	        // setTimeout(function() {
	        //     location.href = '<?php //echo base_url();?>daftar_belanja';
	        // }, 2500);


        }
	}

</script>