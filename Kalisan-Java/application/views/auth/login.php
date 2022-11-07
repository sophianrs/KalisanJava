<div class="container" ;>

    <!-- Outer Row -->
    <div class=" row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <!-- image login -->
                        <div class="col-lg-6 d-none d-lg-block">
                            <img src="<?php echo base_url('assets/img/profile/bg-kopi.png') ?>" alt="..." class="img-circle" width="450" height="700"></a>
                        </div>
                        <div class="col-lg-6" style="align-items:center; align-self:center;">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4 font-weight-bold">Sistem Informasi Inventaris Barang Berbasis Website</h1>
                                    <h1 class="h4 text-gray-900 mb-4 font-weight-bold">KEDAI KOPI KALISAN JAVA</h1>
                                </div>
                                <hr>

                                <?= $this->session->flashdata('message'); ?>

                                <!-- FORM LOGIN -->
                                <form class="user" method="post" action="<?= base_url('Auth/index'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Masukan Alamat Email" value="<?= set_value('email') ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?></small>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Masukkan Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?></small>
                                    </div>
                                    <button type="submit" class="btn btn-user btn-block" style="background: #130F30; border:#; color:white; ">
                                        Login
                                    </button>
                                </form>
                                <hr>
                                <!-- <div class="text-center">
                                    <a class="small" href="forgot-password.html">Lupa Password?</a>
                                </div> -->
                                <!-- <div class="text-center">
                                    <a class="small" href="<?= base_url('auth/registration') ?>">Buat Akun!</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>