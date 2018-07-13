<section style="background-color: #F9F9F9">
    <div class="container" style="margin-top: 90px;padding-top: 70px;padding-bottom: 40px;">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                
                <div class="alert alert-info"><i class="fa fa-info-circle"></i> Pendaftaran pengguna baru...</div>

                <div class="panel panel-default">
                    <div class="panel-body">
                        
                                        <div class="row">

                                            <div class="col-xs-10 col-xs-offset-1">

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
                                                Sudah Mendaftar ? <a href="<?php echo base_url();?>home/login" style="color: #3B5998;">Sign In Sekarang</a>
                                            </div>
                                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>