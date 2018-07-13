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
                <div class="col-md-12">
                    <div class="panel panel-default">

                        <div class="panel-heading" style="color: #777;">
                        Ubah Profil Saya
                        </div>
                        <div class="panel-body">

                            <div class="form-horizontal col-md-8 col-md-offset-2">

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="username" id="username" class="form-control" readonly value="<?php echo $user['username'];?>">
                                        <input type="hidden" name="idusr" id="idusr" value="<?php echo $user['id_user'];?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="email99" id="email99" class="form-control" readonly value="<?php echo $user['email'];?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Nama Depan</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nama_depan99" id="nama_depan99" class="form-control" value="<?php echo $user['nama_depan'];?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Nama Belakang</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nama_belakang99" id="nama_belakang99" class="form-control" value="<?php echo $user['nama_belakang'];?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Nomor Telepon</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nomor_telepon" id="nomor_telepon" class="form-control"
                                        value="<?php if($user['nomor_telepon'] != ""){echo $user['nomor_telepon'];}else{echo "";}?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="alamat" id="alamat"><?php if($user['alamat'] != ""){echo $user['alamat'];}else{echo "";}?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <?php
                                            if($user['tgl_lahir'] != "")
                                            {
                                                $tgl = date("d", strtotime($user['tgl_lahir']));
                                                $bln = date("m", strtotime($user['tgl_lahir']));
                                                if($bln == 01)
                                                {
                                                    $nama_bln = "Januari";
                                                }
                                                elseif($bln == 02)
                                                {
                                                    $nama_bln = "Februari";
                                                }
                                                elseif($bln == 03)
                                                {
                                                    $nama_bln = "Maret";
                                                }
                                                elseif($bln == 04)
                                                {
                                                    $nama_bln = "April";
                                                }
                                                elseif($bln == 05)
                                                {
                                                    $nama_bln = "Mei";
                                                }
                                                elseif($bln == 06)
                                                {
                                                    $nama_bln = "Juni";
                                                }
                                                elseif($bln == 07)
                                                {
                                                    $nama_bln = "Juli";
                                                }
                                                elseif($bln == 08)
                                                {
                                                    $nama_bln = "Agustus";
                                                }
                                                elseif($bln == 09)
                                                {
                                                    $nama_bln = "September";
                                                }
                                                elseif($bln == 10)
                                                {
                                                    $nama_bln = "Oktober";
                                                }
                                                elseif($bln == 11)
                                                {
                                                    $nama_bln = "November";
                                                }
                                                else
                                                {
                                                    $nama_bln = "Desember";
                                                }
                                                $thn = date("Y", strtotime($user['tgl_lahir']));
                                            }
                                            else
                                            {
                                                $tgl = "";
                                                $bln = "";
                                                $nama_bln = "";
                                                $thn = "";
                                            }

                                        ;?>
                                        <div class="col-md-3">
                                            <select class="form-control select2-tanggal" name="tanggal" id="tanggal" style="width: 100%;">
                                                <!-- <option value="<?php //echo $tgl;?>"><?php //echo $tgl;?></option> -->
                                                <option></option>
                                                <option value="01" <?php if($tgl=="01"){echo "selected";}?>>01</option>       
                                                <option value="02" <?php if($tgl=="02"){echo "selected";}?>>02</option>       
                                                <option value="03" <?php if($tgl=="03"){echo "selected";}?>>03</option>       
                                                <option value="04" <?php if($tgl=="04"){echo "selected";}?>>04</option>       
                                                <option value="05" <?php if($tgl=="05"){echo "selected";}?>>05</option>       
                                                <option value="06" <?php if($tgl=="06"){echo "selected";}?>>06</option>       
                                                <option value="07" <?php if($tgl=="07"){echo "selected";}?>>07</option>       
                                                <option value="08" <?php if($tgl=="08"){echo "selected";}?>>08</option>       
                                                <option value="09" <?php if($tgl=="09"){echo "selected";}?>>09</option>       
                                                <option value="10" <?php if($tgl=="10"){echo "selected";}?>>10</option>       
                                                <option value="11" <?php if($tgl=="11"){echo "selected";}?>>11</option>       
                                                <option value="12" <?php if($tgl=="12"){echo "selected";}?>>12</option>       
                                                <option value="13" <?php if($tgl=="13"){echo "selected";}?>>13</option>       
                                                <option value="14" <?php if($tgl=="14"){echo "selected";}?>>14</option>       
                                                <option value="15" <?php if($tgl=="15"){echo "selected";}?>>15</option>       
                                                <option value="16" <?php if($tgl=="16"){echo "selected";}?>>16</option>       
                                                <option value="17" <?php if($tgl=="17"){echo "selected";}?>>17</option>       
                                                <option value="18" <?php if($tgl=="18"){echo "selected";}?>>18</option>       
                                                <option value="19" <?php if($tgl=="19"){echo "selected";}?>>19</option>       
                                                <option value="20" <?php if($tgl=="20"){echo "selected";}?>>20</option>       
                                                <option value="21" <?php if($tgl=="21"){echo "selected";}?>>21</option>       
                                                <option value="22" <?php if($tgl=="22"){echo "selected";}?>>22</option>       
                                                <option value="23" <?php if($tgl=="23"){echo "selected";}?>>23</option>       
                                                <option value="24" <?php if($tgl=="24"){echo "selected";}?>>24</option>       
                                                <option value="25" <?php if($tgl=="25"){echo "selected";}?>>25</option>       
                                                <option value="26" <?php if($tgl=="26"){echo "selected";}?>>26</option>       
                                                <option value="27" <?php if($tgl=="27"){echo "selected";}?>>27</option>       
                                                <option value="28" <?php if($tgl=="28"){echo "selected";}?>>28</option>       
                                                <option value="29" <?php if($tgl=="29"){echo "selected";}?>>29</option>       
                                                <option value="30" <?php if($tgl=="30"){echo "selected";}?>>30</option>       
                                                <option value="31" <?php if($tgl=="31"){echo "selected";}?>>31</option> 
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <select class="form-control select2-bulan" name="bulan" id="bulan" style="width: 100%;">
                                                <!-- <option value="<?php //echo $bln;?>"><?php //echo $nama_bln;?></option> -->
                                                <option></option>
                                                <option value="01" <?php if($bln=="01"){echo "selected";}?>>Januari</option>
                                                <option value="02" <?php if($bln=="02"){echo "selected";}?>>Februari</option>
                                                <option value="03" <?php if($bln=="03"){echo "selected";}?>>Maret</option>
                                                <option value="04" <?php if($bln=="04"){echo "selected";}?>>April</option>
                                                <option value="05" <?php if($bln=="05"){echo "selected";}?>>Mei</option>
                                                <option value="06" <?php if($bln=="06"){echo "selected";}?>>Juni</option>
                                                <option value="07" <?php if($bln=="07"){echo "selected";}?>>Juli</option>
                                                <option value="08" <?php if($bln=="08"){echo "selected";}?>>Agustus</option>
                                                <option value="09" <?php if($bln=="09"){echo "selected";}?>>September</option>
                                                <option value="10" <?php if($bln=="10"){echo "selected";}?>>Oktober</option>
                                                <option value="11" <?php if($bln=="11"){echo "selected";}?>>November</option>
                                                <option value="12" <?php if($bln=="12"){echo "selected";}?>>Desember</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control select2-tahun" name="tahun" id="tahun" style="width: 100%;">
                                                <!-- <option value="<?php //echo $thn;?>"><?php //echo $thn;?></option> -->
                                                <option></option>
                                                <?php
                                                    $x = 1930;
                                                    $y = date('Y');
                                                    for($a=$x;$a<$y;$a++):
                                                ?>
                                                <option value="<?php echo $a;?>" <?php if($a == $thn){echo "selected";}?>><?php echo $a;?></option>
                                                <?php endfor;?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Negara</label>
                                    <div class="col-sm-10">
                                        <!-- <input type="text" name="negara" id="negara" class="form-control" value="<?php //if($user['negara'] != ""){echo $user['negara'];}else{echo "";}?>"> -->
                                        <select class="form-control js-example-data-array" name="negara" id="negara" style="width: 100%;">
                                            <option selected="selected"><?php echo $user['negara'];?></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Deskripsi Toko</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="deskripsi_toko" id="deskripsi_toko"><?php if($user['deskripsi_toko'] != ""){echo $user['deskripsi_toko'];}else{echo "";}?></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Game Favorit</label>
                                    <div class="col-sm-10">
                                        
                                        <select class="form-control select2" multiple="multiple" name="game_favorit" id="game_favorit" style="width:100%;">
                                            <?php if($user['game_favorit'] != ""):?>
                                            <?php

                                                $gf=json_decode($user['game_favorit']);
                                                for($i=0;$i<sizeof($gf);$i++){
                                                    echo '<option value="'.ucwords($gf[$i]).'" selected="selected">';
                                                    echo ''.ucwords($gf[$i]).'</option>';
                                                }

                                            ?>
                                            
                                            <?php 
                                                $cari_game_fav = $this->db->select("*")->from("list_game")->where_not_in('nama_game', $gf)->get();
                                                foreach($cari_game_fav->result() AS $val100)
                                                {
                                                    echo "<option value='".$val100->nama_game."'>".$val100->nama_game."</option>";
                                                }
                                            ?>
                                            <?php else:?>
                                                <?php foreach($list_game as $game_fv):?>
                                                    <option value="<?php echo $game_fv->nama_game;?>"><?php echo $game_fv->nama_game;?></option>
                                                <?php endforeach;?>
                                            <?php endif;?>
                                        </select>
                                        
                                    </div>
                                </div>

                                <hr>
                                
                                <div class="alert alert-info"><i class="fa fa-info-circle"></i> Sebagai Penjual / Promotor, ID / Nickname pada Game wajib diisi !</div>

                                <!-- <div class="form-group">
                                    <label class="col-sm-2 control-label">ID Game</label>
                                    <div class="col-sm-10">
                                        <button class="btn btn-primary"><i class="fa fa-plus"></i> Tambah ID Game</button>
                                    </div>
                                </div> -->

                                <button class="btn btn-primary" style="margin-bottom: 20px;" id="tambahIDG"><i class="fa fa-plus"></i> Tambah ID Game</button>

                                <!-- <div class="form-group">
                                    <label class="col-sm-2 control-label"></label>
                                    <div class="col-sm-5">
                                        <input type="text" name="" class="form-control" placeholder="ID / Nickname Anda pada Game">
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" name="" class="form-control" placeholder="Nama Game">
                                    </div>
                                </div> -->

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead style="background: #e9e9e9;color: #777;">
                                            <tr>
                                                <th>#</th>
                                                <th>ID / Nickname pada Game</th>
                                                <th>Nama Game</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody id="formtambah">
                                            <?php if($user['info_game'] != ""):?>
                                            <?php $nmr=1;foreach($game_char as $kuncinya => $nilainya):?>
                                            <tr>
                                                <td><?php echo $nmr.".";?></td>
                                                <td><input type="text" name="id_ingame<?php echo $nmr;?>" id="id_ingame<?php echo $nmr;?>" class="form-control" placeholder="ID / Nickname Anda pada Game" value="<?php echo $nilainya['id_ingame'];?>"></td>
                                                <td>
                                                    <select class="form-control select2-nama_game" style="width: 100%;" name="nm_game" id="nm_game">
                                                        <option selected="selected" value="<?php echo $nilainya['nama_game'];?>"><?php echo $nilainya['nama_game'];?></option>
                                                        <?php 
                                                            $cari_infogame = $this->db->select("*")->from("list_game")->where_not_in('nama_game', $nilainya['nama_game'])->get();
                                                            foreach($cari_infogame->result() AS $val150)
                                                            {
                                                                echo "<option value='".$val150->nama_game."'>".$val150->nama_game."</option>";
                                                            }
                                                        ?>
                                                    </select>
                                                </td>
                                                <td><button href="javascript:void(0)" title="Hapus" class="del_idgame btn btn-danger btn-sm"><i class="fa fa-remove" style="padding-right:3px;padding-left:3px;"></i></button></td>
                                            </tr>
                                            <?php $nmr++;endforeach;?>
                                            <?php else:?>
                                            <tr>
                                                <td>1.</td>
                                                <td><input type="text" name="id_ingame1" id="id_ingame1" class="form-control" placeholder="ID / Nickname Anda pada Game"></td>
                                                <td>
                                                    <select class="form-control select2-nama_game" style="width: 100%;" name="nm_game" id="nm_game">
                                                        <option value=""></option>
                                                        <?php 
                                                            foreach($list_game AS $val_lg)
                                                            {
                                                                echo "<option value='".$val_lg->nama_game."'>".$val_lg->nama_game."</option>";
                                                            }
                                                        ?>
                                                    </select>
                                                </td>
                                                <td><button href="javascript:void(0)" title="Hapus" class="del_idgame btn btn-danger btn-sm"><i class="fa fa-remove" style="padding-right:3px;padding-left:3px;"></i></button></td>
                                            </tr>
                                            <?php endif;?>
                                        </tbody>
                                    </table>
                                </div>
                                
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

        var scntDiv = $('#formtambah');
        var i = $('tbody tr').length+1;
        var id_ingame = 1;
        var nm_ingame = 1;
        $('#tambahIDG').on('click', function() {
            $('<tr><td>'+i+'.</td><td><input type="text" name="id_ingame'+id_ingame+'" id="id_ingame'+id_ingame+'" class="form-control" placeholder="ID / Nickname Anda pada Game"></td><td><select class="form-control select2-nama_game2" style="width: 100%;" name="nm_game'+nm_ingame+'" id="nm_game'+nm_ingame+'"><option value=""></option><?php foreach($list_game as $val_listgame):?><option value="<?php echo $val_listgame->nama_game;?>"><?php echo $val_listgame->nama_game;?></option><?php endforeach;?></select></td><td><button href="javascript:void(0)" title="Hapus" class="del_idgame btn btn-danger btn-sm"><i class="fa fa-remove" style="padding-right:3px;padding-left:3px;"></i></button></td></tr>').appendTo(scntDiv);
            i++;
            id_ingame++;
            nm_ingame++;
            $('.select2-nama_game2').select2({
                minimumResultsForSearch: Infinity,
                allowClear: true,
                placeholder: "Pilih Game",
                tags: true
            });
            return false;
        });

        $(scntDiv).on('click', '.del_idgame', function() {
            $(this).parent().parent().empty();
            i--;
            id_ingame--;
            nm_ingame--;
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
            // var tes = $("input[id^='id_ingame']").length;
            // console.log(tes);
        }

        function insertData()
        {

            var tp = [];
            var noo = 0;
            $("input[id^='id_ingame']").each(function() { //each merupakan perulangan foreach
                tp[noo] = {
                    "id_ingame":$("input[id^='id_ingame']").eq(noo).val(),
                    "nama_game":$("select[id^='nm_game']").eq(noo).val()
                };
                noo++;
            });
            
            var data = {
                nomor_telepon   : $("#nomor_telepon").val(),
                alamat          : $("#alamat").val(),
                tanggal         : $("#tanggal").val(),
                bulan           : $("#bulan").val(),
                tahun           : $("#tahun").val(),
                negara          : $("#negara").val(),
                deskripsi_toko  : $("#deskripsi_toko").val(),
                game_favorit    : $("#game_favorit").val(),
                ingame          : JSON.stringify(tp),
                idusr           : $("#idusr").val()
            };
            console.log(tp);
            console.log(data);
            $.ajax({
                url: '<?php echo base_url();?>user/profil_saya/proses_ubah_profil',
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
                            title: "Berhasil Diubah!", // judul
                            button: false, // button tidak ada
                            timer: 3000, // setting waktu alert
                            text: " " // text
                        });

                        // setTimeout(function(){
                        //     location.href = '<?php //echo base_url();?>user/profil_saya/ubah_profil';
                        // }, 2000);

                    }
                    else
                    {
                        swal({
                            icon: "warning",
                            closeOnClickOutside: true,
                            closeOnEsc: true,
                            title: "Gagal Diubah!",
                            // button: { // setting button
                            //     className: "tombol_red" // kasih nama class
                            // },
                            button: false,
                            timer: 3000,
                            text: " "
                        });
                    }

                }

            });
                    setTimeout(function() {
                        location.href = '<?php echo base_url();?>user/profil_saya/ubah_profil';
                    }, 2000);
        }

    </script>