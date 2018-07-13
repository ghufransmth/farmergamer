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
                        <li class="active"><span style="color: #db4a39;font-family:latoregular;">Profil Saya</span></li>
                    </ol>

                    <!-- <h4 class="text-center" style="color: #565656;font-size: 25px;transform: scale(.9,1);font-family: sans-serif;text-transform: uppercase;">Profil Saya</h4>
                    <div class="separator"></div> -->

                </div>
            </div>
                
            <!-- <div class="row">
                <div class="col-md-10 col-md-offset-1">

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-body text-center">
                                <img src="<?php //echo base_url();?>assets/custom/images/image_user/<?php //echo $user['image'];?>" alt="Picture User" style="width:100%;height:auto;max-width: 200px;max-height: 300px;min-width: 50px;min-height: 50px;">
                            </div>
                            <div class="panel-footer">
                                <a href="" class="btn btn-primary btn-block">Ubah Foto Profil</a>
                            </div>                      
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">                     
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="text-right"><a class="btn btn-primary">Ubah Profil</a></div>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="control-label">Username :</label>
                                    <div style="padding: 5px 15px;border: 2px solid rgba(0, 0, 0, 0.1);border-radius: 4px;height:46px;"><?php //echo ucwords($user['username']);?></div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Email :</label>
                                    <div style="padding: 5px 15px;border: 2px solid rgba(0, 0, 0, 0.1);border-radius: 4px;height:46px;"><?php //echo $user['email'];?></div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Nama Depan :</label>
                                    <div style="padding: 5px 15px;border: 2px solid rgba(0, 0, 0, 0.1);border-radius: 4px;height:46px;"><?php //echo ucwords($user['nama_depan']);?></div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Nama Belakang :</label>
                                    <div style="padding: 5px 15px;border: 2px solid rgba(0, 0, 0, 0.1);border-radius: 4px;height:46px;"><?php //echo ucwords($user['nama_belakang']);?></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div> -->

            <div class="row">
                <!-- <div class="col-md-10 col-md-offset-1"> -->

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-body text-center">
                                <img src="<?php echo base_url();?>assets/custom/images/image_user/<?php echo $user['image'];?>" alt="Picture User" style="width:100%;height:auto;max-width: 200px;max-height: 300px;min-width: 50px;min-height: 50px;">
                            </div>
                            <div class="panel-footer">
                                <a href="<?php echo base_url();?>user/profil_saya/ubah_gambar" class="btn btn-primary btn-block"><i class="icon-edit" style="color: #fff;"></i> Ubah Gambar Akun</a>
                            </div>                      
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">                     
                        <div class="panel panel-default">
                            <div class="panel-heading col-sm-12" style="margin-bottom: 10px;">
                                <div class="col-sm-4 text-left" style="color: #777;"><i class="fa fa-user"></i> Profil Saya</div>
                                <div class="col-sm-8 text-right"><a class="btn btn-primary" href="<?php echo base_url();?>user/profil_saya/ubah_profil"><i class="icon-edit" style="color:#fff;"></i>Ubah Profil</a></div>
                            </div>
                            <!-- <div class="panel-body" style="border-left: 5px solid #1C3F94;"> -->
                            <div class="panel-body">

                                <!-- <div class="form-horizontal"> -->

                                    <!-- <div class="text-center col-md-12" style="padding: 20px;"><div class="col-sm-12" style="color: #777;border-left:3px solid #1C3F94!important;border: 1px solid #ddd;padding: 5px;"><i class="fas fa-id-card"></i> Info Akun</div></div> -->
                                    <div class="text-center col-md-12" style="padding: 20px;"><div class="col-sm-12" style="color: #777;border-left:0!important;border-right:0!important;border: 1px solid #ddd;padding: 5px;"><i class="fas fa-id-card"></i> Info Akun</div></div>

                                    <div class="form-group" style="padding: 0 20px;">
                                        <label class="col-sm-4 control-label" style="color: #999;">
                                            Username
                                        </label>
                                        <div class="col-sm-8" style="color: #333;">
                                            <label class="control-label" style="font-weight: normal!important;"><?php echo ucwords($user['username']);?></label>
                                        </div>
                                    </div>

                                    <div class="form-group" style="padding: 0 20px;">
                                        <label class="col-sm-4 control-label" style="color: #999;">
                                            Email
                                        </label>
                                        <div class="col-sm-8" style="color: #333;">
                                            <label class="control-label" style="font-weight: normal!important;"><?php echo $user['email'];?></label>
                                        </div>
                                    </div>

                                    <div class="form-group" style="padding: 0 20px;">
                                        <label class="col-sm-4 control-label" style="color: #999;">
                                            Nama Depan
                                        </label>
                                        <div class="col-sm-8" style="color: #333;">
                                            <label class="control-label" style="font-weight: normal!important;"><?php if($user['nama_depan'] != ""){ echo ucwords($user['nama_depan']);}else{echo "--Tidak Tersedia--";}?></label>
                                        </div>
                                    </div>

                                    <div class="form-group" style="padding: 0 20px;">
                                        <label class="col-sm-4 control-label" style="color: #999;">
                                            Nama Belakang
                                        </label>
                                        <div class="col-sm-8" style="color: #333;">
                                            <label class="control-label" style="font-weight: normal!important;"><?php if($user['nama_belakang'] != ""){echo ucwords($user['nama_belakang']);}else{echo "--Tidak Tersedia--";}?></label>
                                        </div>
                                    </div>

                                <!-- </div> -->

                            </div>

                            <!-- <hr> -->
                            <!-- <div class="panel-body" style="border-left: 5px solid red;"> -->
                            <div class="panel-body">
                                <!-- <div class="text-center col-md-12" style="padding-bottom: 20px;"><div class="col-sm-12" style="color: #777;border-left:3px solid red!important;border: 1px solid #ddd;padding:5px;"><i class="fas fa-address-book"></i> Tentang Saya</div></div> -->
                                <div class="text-center col-md-12" style="padding-bottom: 20px;"><div class="col-sm-12" style="color: #777;border-left:0!important;border-right:0!important;border: 1px solid #ddd;padding:5px;"><i class="fas fa-address-book"></i> Tentang Saya</div></div>

                                <div class="form-group" style="padding: 0 20px;">
                                    <label class="col-sm-4 control-label" style="color: #999;">
                                        Nomor Telepon
                                    </label>
                                    <div class="col-sm-8" style="color: #333;">
                                        <label class="control-label" style="font-weight: normal!important;"><?php if($user['nomor_telepon'] != ""){echo $user['nomor_telepon'];}else{echo "--Tidak Tersedia--";}?></label>
                                    </div>
                                </div>
                                <div class="form-group" style="padding: 0 20px;">
                                    <label class="col-sm-4 control-label" style="color: #999;">
                                         Alamat
                                    </label>
                                    <div class="col-sm-8" style="color: #333;">
                                        <label class="control-label" style="font-weight: normal!important;"><?php if($user['alamat'] != ""){echo $user['alamat'];}else{echo "--Tidak Tersedia--";}?></label>
                                    </div>
                                </div>
                                <div class="form-group" style="padding: 0 20px;">
                                    <label class="col-sm-4 control-label" style="color: #999;">
                                         Tanggal Lahir
                                    </label>
                                    <div class="col-sm-8" style="color: #333;">
                                        <label class="control-label" style="font-weight: normal!important;"><?php if($user['tgl_lahir'] != ""){echo date('d F Y', strtotime($user['tgl_lahir']));}else{echo "--Tidak Tersedia--";}?></label>
                                    </div>
                                </div>
                                <div class="form-group" style="padding: 0 20px;">
                                    <label class="col-sm-4 control-label" style="color: #999;">
                                         Negara
                                    </label>
                                    <div class="col-sm-8" style="color: #333;">
                                        <label class="control-label" style="font-weight: normal!important;"><?php if($user['negara'] != ""){echo $user['negara'];}else{echo "--Tidak Tersedia--";}?></label>
                                    </div>
                                </div>
                                <div class="form-group" style="padding: 0 20px;">
                                    <label class="col-sm-4 control-label" style="color: #999;">
                                         Game Favorit
                                    </label>
                                    <div class="col-sm-8" style="color: #333;">
                                        <label class="control-label" style="font-weight: normal!important;">
                                            <?php 
                                            if($user['game_favorit'] != "")
                                            {
                                                $gf=json_decode($user['game_favorit']);
                                                for($i=0;$i<sizeof($gf);$i++)
                                                {
                                                    echo ucwords($gf[$i]).', ';
                                                }
                                            }
                                            else
                                            {
                                                echo "--Tidak Tersedia--";
                                            }
                                            ?>
                                            
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- <hr> -->
                            <!-- <div class="panel-body" style="border-left: 5px solid red;"> -->
                            <div class="panel-body">
                                <!-- <div class="text-center col-md-12" style="padding-bottom: 20px;"><div class="col-sm-12" style="color: #777;border-left:3px solid red!important;border: 1px solid #ddd;padding:5px;"><i class="fas fa-address-book"></i> Tentang Saya</div></div> -->
                                <div class="text-center col-md-12" style="padding-bottom: 20px;"><div class="col-sm-12" style="color: #777;border-left:0!important;border-right:0!important;border: 1px solid #ddd;padding:5px;"><i class="icon-flag2"></i> Tentang Toko</div></div>

                                <div class="form-group" style="padding: 0 20px;">
                                    <label class="col-sm-4 control-label" style="color: #999;">
                                        Deskripsi Toko
                                    </label>
                                    <div class="col-sm-8" style="color: #333;">
                                        <label class="control-label" style="font-weight: normal!important;"><?php if($user['deskripsi_toko'] != ""){echo $user['deskripsi_toko'];}else{echo "--Tidak Tersedia--";}?></label>
                                    </div>
                                </div>
                            </div>

                            <!-- <hr> -->
                            <!-- <div class="panel-body" style="border-left: 5px solid #5cb85c;"> -->
                            <div class="panel-body">

                                <!-- <div class="text-center col-md-12" style="padding-bottom: 20px;"><div class="col-sm-12" style="color: #777;border-left:3px solid #5cb85c!important;border: 1px solid #ddd;padding:5px;"><i class="icon-game-controller"></i> Info Game<div style="font-style: italic;color:firebrick;font-size: 12px;">*Wajib isi Untuk Pesanan & Pengiriman</div></div></div> -->
                                <!-- <div class="text-center col-md-12" style="padding-bottom: 20px;"><div class="col-sm-12" style="color: #777;border-left:0!important;border-right:0!important;border: 1px solid #ddd;padding:5px;"><i class="icon-game-controller"></i> Info Game<div style="font-style: italic;color:firebrick;font-size: 12px;">*Wajib isi Untuk Pesanan & Pengiriman</div></div></div> -->
                                <div class="text-center col-md-12" style="padding-bottom: 20px;"><div class="col-sm-12" style="color: #777;border-left:0!important;border-right:0!important;border: 1px solid #ddd;padding:5px;"><i class="icon-game-controller"></i> Info Game<div style="font-style: italic;color:firebrick;font-size: 12px;">*Wajib isi sebagai Penjual / Promotor</div></div></div>

                                <!-- <div class="form-group">
                                    <label class="col-sm-4 control-label" style="color: #999;">
                                        ID Dalam Game
                                    </label>
                                    <div class="col-sm-8" style="color: #333;">
                                        <label class="control-label">Tidak Tersedia</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" style="color: #999;">
                                         Game yang Dimainkan
                                    </label>
                                    <div class="col-sm-8" style="color: #333;">
                                        <label class="control-label">Tidak Tersedia</label>
                                    </div>
                                </div> --> 

                                <div class="form-group" style="padding: 0 20px;">
                                <!-- <label class="col-sm-12 control-label" style="color:#999;">Game yang Dimainkan & ID Game</label> -->
                                <label class="col-sm-12 control-label" style="color:#999;">ID / Nickname pada Game</label>
                                <div class="table-responsive col-sm-12">
                                    <table class="table table-bordered table-hover">
                                        <thead style="background: #e9e9e9;color: #777;">
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>ID / Nickname</th>
                                                <th>Nama Game</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $number=1;foreach($game_char as $key100 => $value100):?>
                                            <!-- <?php //if($value100['id_ingame'] != "" && $value100['nama_game'] != ""):?> -->
                                            <tr>
                                                <td class="text-center"><?php echo $number;?></td>
                                                <td><?php echo $value100['id_ingame'];?></td>
                                                <td><?php echo $value100['nama_game'];?></td>
                                            </tr>
                                            <!-- <?php //endif;?> -->
                                            <?php $number++;endforeach;?>
                                            <?php echo $kosong;?>
                                        </tbody>
                                    </table>
                                </div>
                                </div>

                            </div>


                        </div>
                    </div>

                <!-- </div> -->
            </div>


    </div>
    </section>