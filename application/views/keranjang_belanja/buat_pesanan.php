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

<style type="text/css">
    
    /* Base for label styling */
    [type="checkbox"]:not(:checked),
    [type="checkbox"]:checked {
      position: absolute;
      left: -9999px;
    }
    [type="checkbox"]:not(:checked) + label,
    [type="checkbox"]:checked + label {
      position: relative;
      padding-left: 1.95em;
      cursor: pointer;
    }

    /* checkbox aspect */
    [type="checkbox"]:not(:checked) + label:before,
    [type="checkbox"]:checked + label:before {
      content: '';
      position: absolute;
      left: 0; top: -10px;
      width: 1.25em; height: 1.25em; /* atur tinggi dan lebar kotak checkbox */
      border: 2px solid #ccc;
      background: #fff;
      border-radius: 4px;
      box-shadow: inset 0 1px 3px rgba(0,0,0,.1);
    }
    /* checked mark aspect */
    [type="checkbox"]:not(:checked) + label:after,
    [type="checkbox"]:checked + label:after {
      content: '✔';
      position: absolute;
      top: -0.3em; left: .19em; /* atur letak gambar centang nya */
      font-size: 1.0em;
      line-height: 0.8;
      color: #09ad7e;
      transition: all .2s;
      font-family: Helvetica, Arial, sans-serif;
    }
    /* checked mark aspect changes */
    [type="checkbox"]:not(:checked) + label:after {
      opacity: 0;
      transform: scale(0);
    }
    [type="checkbox"]:checked + label:after {
      opacity: 1;
      transform: scale(1);
    }
    /* disabled checkbox */
    [type="checkbox"]:disabled:not(:checked) + label:before,
    [type="checkbox"]:disabled:checked + label:before {
      box-shadow: none;
      border-color: #bbb;
      background-color: #ddd;
    }
    [type="checkbox"]:disabled:checked + label:after {
      color: #999;
    }
    [type="checkbox"]:disabled + label {
      color: #aaa;
    }
    /* accessibility */
    [type="checkbox"]:checked:focus + label:before,
    [type="checkbox"]:not(:checked):focus + label:before {
      border: 2px dotted #09ad7e;
    }

    /* hover style just for information */
    label:hover:before {
      border: 2px solid #09ad7e!important;
    }

</style>

<section style="background-color: #F9F9F9;padding-bottom:5px;">
    <div class="container" style="margin-top: 50px;padding-top: 70px;margin-bottom: 40px;">
        <div class="row">
            <div class="col-md-8 col-md-offset-2" style="margin-top: 25px;">

	            <?php
	               	foreach ($_SESSION["cart_item"] as $item)
	               	{
		                $result[] = $this->db->select("*")->from("dijual")->join("users","users.id_user = dijual.id_user")->where("id_dijual", $item["id_dijual"])->get()->row_array();

		                $arr_iduser[] = $item['id_user'];
		        	}

	                // var_dump($result);
	                // var_dump($arr_iduser);

	                $id_user_unique = (array_unique($arr_iduser)); // Remove duplicate values from an array
	                // var_dump($id_user_unique);

	                //$a=array("a"=>"red","b"=>"green","c"=>"red");
					//print_r(array_unique($a));
	                
	            ?>
		            
		        <?php 		   
		        	$item_total = 0;
	            	$no = 1;
	            	$arr_index = 0;
	            	$arr_index2 = 0;
		        	foreach($id_user_unique as $hsl):
		            
		        ?>
		        <div class="panel panel-default" style="margin-top:-10px;">
		         	<div class="panel-heading" style="background-color: #ffffff;">
		        		<div>
		        			<input type="checkbox" name="check_user<?php echo $no;?>" id="check_user<?php echo $hsl;?>" checked onclick="check_all(<?php echo $no;?>);" value="<?php echo $arr_index2;?>">
		        			<label for="check_user<?php echo $hsl;?>"></label>

		        			<input type="hidden" name="id_penjual<?php echo $hsl;?>" id="id_penjual<?php echo $hsl;?>" value="<?php echo $hsl;?>">
		        			<!-- cari username dari tabel user dengan id_user didapat dari session -->
		        			<?php $lihat = $this->db->select("*")->from("users")->where("id_user",$hsl)->get()->row_array();?>
		        			<img class="img-circle" src="<?php echo base_url();?>assets/custom/images/image_user/<?php echo $lihat['image'];?>" style="height:35px;width:35px;">
		        			<?php echo ucwords($lihat['username']);?>
		        		</div>
		        		<div style="right:0;position: absolute;margin-top: -30px;padding-right: 45px;">
		        			<span style="color: #A1A1A1;cursor:pointer;">Ubah</span>
		        		</div>
	        		</div>

	        		<?php
	        			// cek id user jika sama dengan id user dari session maka akan dilakukan perulangan
		        		foreach($result as $val):
		        			if($val['id_user'] == $hsl):
			             		$ambil_foto = json_decode($val["foto"],true);
		                		$foto = $ambil_foto[0];
	        		;?>
		            <div class="panel-body">

		            	<!-- <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
		            		<input type="checkbox" name="">
		            	</div> -->

	        			<div class="col-lg-3 col-md-3 col-sm-5 col-xs-5">
	        			<!-- <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4"> -->
	        				<input type="checkbox" name="check_item<?php echo $no;?>" id="check_item<?php echo $val['id_dijual'];?>" checked onclick="count_subTotal_check();" value="<?php echo $arr_index;?>">
	        				<label for="check_item<?php echo $val['id_dijual'];?>"></label>

	        				<!-- <img src="<?php //echo base_url();?>assets/custom/images/image_dijual/<?php //echo $foto;?>" title="Cart FG <?php //echo $no;?>" style="height:100px;width:100px;min-height:70px;min-width:70px;"> -->
	        				<img src="<?php echo base_url();?>assets/custom/images/image_dijual/<?php echo $foto;?>" title="Cart FG <?php echo $no;?>" style="height:100px;width:100px;" class="foto-responsive">
	        			</div>

	        			<div class="col-lg-9 col-md-9 col-sm-7 col-xs-7">
	        			<!-- <div class="col-lg-9 col-md-9 col-sm-7 col-xs-7"> -->
			                <h6><?php echo wordwrap($val['judul'],30,"<br>\n",true);?></h6>
			                <input type="hidden" id="idJual_<?php echo $val['id_dijual'];?>" value="<?php echo $val['id_dijual'];?>">

			                <div style="margin-top: -10px;margin-bottom: 5px;color: green;">Rp
			                	<?php 
			                		if($val['harga'] == $val['harga_diskon'])
			                		{
			                			$hrg = $val['harga'];
			                		}
			                		else
			                		{
			                			$hrg = $val['harga_diskon'];
			                		}
			                		echo number_format($hrg,0,',','.');
			                	?>
			                </div>
			                <input type="hidden" name="hrg_<?php echo $val['id_dijual'];?>" id="hrg_<?php echo $val['id_dijual'];?>" value="<?php echo $hrg;?>">
			                <div style="margin-top: -10px;margin-bottom: 5px;">Stok : <?php echo $val['jumlah'];?></div>
			                <div class="input-group col-md-4">
				                <span class="input-group-addon btn btn-success" onclick="spinner_kurang(<?php echo $val['id_dijual'];?>);">-</span>
				                
				                <!-- ambil dari session & kondisi jika sesuai id_dijual -->
				                <input type="number" 
				                value="<?php 
				                	foreach($_SESSION['cart_item'] as $val2){
				                		if($val2['id_dijual'] == $val['id_dijual']){
				                			$jml = $val2['jumlah'];
				                			echo $jml;
				                		}
				                	}?>" 
				                class="form-control text-center" min="1" max="<?php echo $val['jumlah'];?>"
				                id="qty_<?php echo $val['id_dijual'];?>" onfocus="validasi_spinner_number(<?php echo $val['id_dijual'];?>,<?php echo $val['jumlah'];?>);" required/>

				                <span class="input-group-addon btn btn-success" onclick="spinner_tambah(<?php echo $val['id_dijual'];?>,<?php echo $val['jumlah'];?>);">+</span>

			                </div>
			           			                			                
		                </div>
		            </div><hr>
		            <?php
		            		$arr_index++;
		            		$item_total += ($hrg*$jml);
		            		endif;
		            	endforeach;
		            ?>

		             <div class="panel-footer" style="background-color: #ffffff;margin-top: -20px;">
		             	<div class="form-group">
		             		<label for="tulis_pesan">Pesan</label>
		             		<textarea class="form-control" placeholder="Silahkan tinggalkan pesan..." id="tulis_pesan<?php echo $hsl;?>"></textarea>
		             	</div>
		             </div>
		        </div>                       
		        <?php 
		        	$no++;
		            // $item_total += ($item["harga"]*$item["jumlah"]);
		            // $item_total += ($hrg*$val["jumlah"]);
		        	$arr_index2++;
		        	endforeach;
		        ?>
	           
		         
		        <div class="row">
			        <div class="col-md-12">
				        <div class="pull-right" id="sub_tt">
					        <span style="font-weight: bold;">Sub Total : </span><span style="color: green;font-size:20px;">Rp<?php echo number_format($item_total,0,',','.');?></span>&nbsp;&nbsp;&nbsp;&nbsp;
				            <button class="btn btn-success" onclick="preInsert();">Checkout</button>
			            </div>
		            </div>
	            </div>

	            <!-- DATA ID PEMBELI -->
	            <input type="hidden" name="id_pembeli" id="id_pembeli" value="<?php echo $_SESSION['tc_id_user'];?>">
	            <!-- END DATA ID PEMBELI -->

            </div>
        </div>
    </div>
</section>

<script>

	        function spinner_tambah(id_dijual,stk)
            {   
                var jt = $("#qty_"+id_dijual).val();
                if(jt < stk)
                {
                    var tambah_jt = (jt*1)+1;
                    $("#qty_"+id_dijual).val(tambah_jt);
                    count_subTotal_check();
                }
                
            }

            function spinner_kurang(id_dijual)
            {
                var jtransaksi = $("#qty_"+id_dijual).val();
                if(jtransaksi > 1)
                {
                    var kurang_jt = (jtransaksi*1)-1;
                    $("#qty_"+id_dijual).val(kurang_jt);
                    count_subTotal_check();
                }
                else
                {
                    $("#qty_"+id_dijual).val(jtransaksi);
                }
                
            }
            
            // // form validasi client side untuk insert
            function validasi_spinner_number(id_dijual,stk)
            {

                $("#qty_"+id_dijual).keyup(function(e){
                    var key = (e.which) ? e.which : e.keyCode;
                    if( key == 13 ){ filterLeads(e) }

                    var jml_t = $("#qty_"+id_dijual).val();
                    if(jml_t < 1 || jml_t > stk)
                    {
                        $("#qty_"+id_dijual).val("");
                        // return false;
                    }
                    // console.log(jml_t)
                    count_subTotal_check();
                });

            }

        	// COBA HOLDCLICK
            // function holdclick_kurang(id_dijual){
	    	// var interval;
			// 	$('#krg').on("vmousedown", function () {
			// 	    interval = setInterval(function(){
			// 	        var number = $('#qty_'+id_dijual).val();
			// 	     $('#qty_'+id_dijual).val(parseInt(number) + 1)
			// 	    }, 100);
				    
			// 	});
			// 	$('#krg').on("vmouseup", function () {
			// 	   clearInterval(interval);
			// 	});
			// }

			// // SUB TOTAL DINAMIS
			// function count_subTotal()
			// {
			// 	var hitung=0,
			// 	    num = 0;

			// 	$('input[id^="qty_"]').each(function() {
			// 		var qty = $('input[id^="qty_"]').eq(num).val();
			// 		var hrg = $('input[id^="hrg_"]').eq(num).val();
			// 		hitung += (hrg*qty);
			// 		num++;
			// 	});

			// 	$("#sub_tt").html('<span style="font-weight: bold;">Sub Total : </span><span style="color: green;font-size:20px;">Rp'+addCommas(hitung)+'</span>&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-success">Checkout</button>');
			// 	// console.log(hitung);
			// }
			// // count_subTotal();

			// FUNGSI UNTUK ITEM CENTANG AKAN DIHITUNG TOTALNYA
			function count_subTotal_check()
			{
				var hitung=0;

				$('input[id^="check_item"]:checked').each(function() {
					var arr_index = $(this).val(); // index array yang didapat dari value dari checkbox
					var	qty = $('input[id^="qty_"]').eq(arr_index).val();
					var	hrg = $('input[id^="hrg_"]').eq(arr_index).val();
					hitung += (hrg*qty);
					// arr_index++;
					// console.log(hrg);
				});

				$("#sub_tt").html('<span style="font-weight: bold;">Sub Total : </span><span style="color: green;font-size:20px;">Rp'+addCommas(hitung)+'</span>&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-success" onclick="preInsert();">Checkout</button>');
				// console.log($('input[id^="check_item"]:checked').length);
			}

			// FUNGSI JS UNTUK NUMBER FORMAT THOUSAND SEPARATOR
			function addCommas(nStr)
			{
				nStr += '';
				x = nStr.split('.');
				x1 = x[0];
				x2 = x.length > 1 ? '.' + x[1] : '';
				var rgx = /(\d+)(\d{3})/;
				while (rgx.test(x1)) {
					x1 = x1.replace(rgx, '$1' + '.' + '$2');
				}
				return x1 + x2;
			}

			// FUNGSI CENTANG SEMUA JIKA CEK PADA NAMA PENJUAL
			function check_all(nomer)
			{
				// // if($('input[id^="check_user"]:checked'))
				// // if($('input[id^="check_user"]').is('checked'))
				// // if($('input[name^="check_user'+nomer+'"]').prop('checked'))
				// if($('input[name^="check_user'+nomer+'"]').prop('checked'))
				// {
				// 	var a = $('input[name^="check_item'+nomer+'"]').attr('checked','');
				// 	// $('input:checkbox').not(this).prop('checked', this.checked);
				// 	// $('input[name^="check_item'+nomer+'"]').not(this).prop('checked', this.checked);
				// }
				// else
				// {
				// 	var a = $('input[name^="check_item'+nomer+'"]').removeAttr('checked');
				// }
				// console.log(a);

				// $('input[id^="check_user"]').click(function () {
				$('input[name^="check_user'+nomer+'"]').change(function () {
				    $('input[name^="check_item'+nomer+'"]').not(this).prop('checked', this.checked);
				    count_subTotal_check();
				});
				
			}

			// $(function(){
			// 	$('input[id^="check_user"]').click(function () {
			// 	    $('input[id^="check_item"]').not(this).prop('checked', this.checked);
			// 	});
			// });


			function preInsert(){
        
		        $.confirm({
		            title: 'Konfirmasi!',
		            content: 'Anda Yakin Melakukan Transaksi?',
		            type: 'green',
		            escapeKey: 'Tidak',
		            backgroundDismiss: false,
		            buttons: {   
		                Ya: {
		                    btnClass: 'btn-primary text-white',
		                    keys: ['enter'],
		                    action: function(){
		                        insertData();
		                    }
		                },
		                Tidak: {
		                    btnClass:'btn-red',
		                    action:function(){

		                        swal({
		                            icon: "error",
		                            closeOnClickOutside: true, //tutup dengan click area luar
		                            closeOnEsc: true, // tutup dengan tombol esc
		                            title: "Transaksi Dibatalkan!", // judul
		                            button: false, // button tidak ada
		                            timer: 3000, // setting waktu alert
		                            text: " " // text
		                        });

		                    }
		                }

		            }
		        });

		    }

			// function insertData(){
		 //        var arr_dt = [];
		 //        var arr_dt2 = [];
		 //        var no_urut = 0;
		 //        var no_urut2 = 0;
		 //        $('input[id^="check_item"]:checked').each(function() {

		 //           var tes_index = $(this).val(); // pake index berdasarkan value dari input yang dicek

		 //           // //cari stok akhir
		 //           // var sAwal = $('input[id^="stok"]').eq(tes_index).val();
		 //           // var jm = $("input[id^='jumlah_obat']").eq(tes_index).val();
		 //           // var sAkhir = sAwal - jm;

		 //            arr_dt[no_urut] = {
		 //                "idDijual" : $('input[id^="idJual_"]').eq(tes_index).val(),
		 //                "quantity" : $("input[id^='qty_']").eq(tes_index).val()
		 //            };
		 //           no_urut++;
		 //           return arr_dt;
		 //        });
		 //        // console.log(arr_dt);

		 //        $('input[id^="check_user"]:checked').each(function() {

		 //           var index_t = $(this).val();

		 //            arr_dt2[no_urut2] = {
		 //                "idPenjual" : $('input[id^="id_penjual"]').eq(index_t).val(),
		 //                "tulisPesan" : $("textarea[id^='tulis_pesan']").eq(index_t).val()
		 //            };
		 //           no_urut2++;
		 //           return arr_dt2;
		 //        });

		 //        var data = {
		 //            cek   : JSON.stringify(arr_dt),
		 //            cek2 : JSON.stringify(arr_dt2),
		 //            idPembeli : $('#id_pembeli').val()
		 //        };
		 //        console.log(data);

		 //        $.ajax({
		 //            url: '<?php //echo base_url();?>keranjang_belanja/checkout',
		 //            data: data,
		 //            method: 'POST',
		 //            dataType: 'json',
		 //            // crossDomain: true,
		 //            // contentType: 'application/json; charset=utf-8',

		 //            success: function(result) {
		 //                // console.log(result);

		 //                if(result.code==0)
		 //                {
		 //                    swal({
		 //                        icon: "success",
		 //                        closeOnClickOutside: true, //tutup dengan click area luar
		 //                        closeOnEsc: true, // tutup dengan tombol esc
		 //                        title: "Transaksi Sukses", // judul
		 //                        button: false, // button tidak ada
		 //                        timer: 3000, // setting waktu alert
		 //                        text: result.message // text
		 //                    });

		 //                    // console.log(result.last_id);
		 //                    setTimeout(function(){
		 //                        location.href = '<?php //echo base_url();?>keranjang_belanja/transaksi/'+result.last_id+'/<?php //echo $_SESSION['tc_id_user'];?>';
		 //                    }, 2000);

		 //                }
		 //                else
		 //                {
		 //                    swal({
		 //                        icon: "warning",
		 //                        closeOnClickOutside: true,
		 //                        closeOnEsc: true,
		 //                        title: "Peringatan",
		 //                        button: { // setting button
		 //                            className: "tombol_red" // kasih nama class
		 //                        },
		 //                        text: result.message
		 //                    });
		 //                }


		 //            }
		 //            // },
		 //            // error: function(result2){
		 //            //     // console.log(result2);
		 //            //     // if(result2.code = 1)
		 //            //     // {
		 //            //     //     Alert.show("Gagal : <b>"+result2.message+"</b>", "error");
		 //            //     // }
		 //            // }

		 //        });
		 //                // setTimeout(function() {
		 //                //     location.href = '<?php //echo base_url();?>keranjang_belanja/transaksi';
		 //                // }, 2500);
		 //    }


		 	function insertData(){
		        var arr_dt = [];
		        var arr_dt2 = [];
		        var no_urut = 0;
		        var no_urut2 = 0;
		        $('input[id^="check_item"]:checked').each(function() {

		           var tes_index = $(this).val(); // pake index berdasarkan value dari input yang dicek

		           // //cari stok akhir
		           // var sAwal = $('input[id^="stok"]').eq(tes_index).val();
		           // var jm = $("input[id^='jumlah_obat']").eq(tes_index).val();
		           // var sAkhir = sAwal - jm;

		            arr_dt[no_urut] = {
		                "idDijual" : $('input[id^="idJual_"]').eq(tes_index).val(),
		                "hrg_beli" : $('input[id^="hrg_"]').eq(tes_index).val(),
		                "quantity" : $("input[id^='qty_']").eq(tes_index).val()
		            };
		           no_urut++;
		           return arr_dt;
		        });
		        // console.log(arr_dt);

		        $('input[id^="check_user"]:checked').each(function() {

		           var index_t = $(this).val();

		            arr_dt2[no_urut2] = {
		                "idPenjual" : $('input[id^="id_penjual"]').eq(index_t).val(),
		                "tulisPesan" : $("textarea[id^='tulis_pesan']").eq(index_t).val()
		            };
		           no_urut2++;
		           return arr_dt2;
		        });

		        var data = {
		            cek   : JSON.stringify(arr_dt),
		            cek2 : JSON.stringify(arr_dt2),
		            idPembeli : $('#id_pembeli').val()
		        };
		        console.log(data);

		        $.ajax({
		            url: '<?php echo base_url();?>keranjang_belanja/checkout',
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
		                        title: "Transaksi Sukses", // judul
		                        button: false, // button tidak ada
		                        timer: 3000, // setting waktu alert
		                        text: result.message // text
		                    });

		                    // console.log(result.last_id);
		                    setTimeout(function(){
		                        location.href = '<?php echo base_url();?>keranjang_belanja/transaksi/'+result.last_id+'/<?php echo $_SESSION['tc_id_user'];?>';
		                    }, 2000);

		                }
		                else
		                {
		                    swal({
		                        icon: "warning",
		                        closeOnClickOutside: true,
		                        closeOnEsc: true,
		                        title: "Peringatan",
		                        button: { // setting button
		                            className: "tombol_red" // kasih nama class
		                        },
		                        text: result.message
		                    });
		                }


		            }
		            // },
		            // error: function(result2){
		            //     // console.log(result2);
		            //     // if(result2.code = 1)
		            //     // {
		            //     //     Alert.show("Gagal : <b>"+result2.message+"</b>", "error");
		            //     // }
		            // }

		        });
		                // setTimeout(function() {
		                //     location.href = '<?php //echo base_url();?>keranjang_belanja/transaksi';
		                // }, 2500);
		    }

</script>