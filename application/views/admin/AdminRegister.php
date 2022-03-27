<body class="">
    <title>
        Register
    </title>

    <main class=" main-content mt-0">
        <section class="min-vh-100 mb-8">
            <div class="page-header align-items-start min-vh-50 pt-0 pb-11 m-3 border-radius-lg bg-gradient-primary">
                <span class="mask bg-gradient opacity-6"></span>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 text-center mx-auto">
                            <h1 class="text-white mb-2 mt-5">Selamat Datang!</h1>
                            <p class="text-lead text-white">Buat akun baru Kamu Sekarang!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row mt-lg-n11 mt-md-n11 mt-n10">
                    <div class="col-xl-5 col-lg-10 col-md-10 mx-auto">
                        <div class="card z-index-0">
                            <div class="card-header text-center pt-3 pb-0">
                                <h5 class="text-primary">Registrasi</h5>
                                <p>Masukan Data diri dengan lengkap</p>
                            </div>
                            <div class="card-body">
                                <form class="user" method="post" action="<?= base_url('admin/AdminRegister'); ?>">
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control form-control-user" id="nama" name="nama" value="<?= set_value('nama'); ?>" placeholder="Masukan Nama Lengkap">
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small> '); ?>
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control form-control-user" id="email" name="email" value="<?= set_value('email'); ?>" placeholder="Masukkan Alamat Email">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                            <?= form_error('password1', '<small class="text-danger pl-3">', '</small> '); ?>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulang Password">
                                            <?= form_error('password2', '<small class="text-danger pl-3">', '</small> '); ?>
                                        </div>
                                    </div>
                                    <div class="text-center mb-3">
                                        <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Daftar</button>
                                    </div>
                                    <p class="text-sm mt-3 mb-0 text-primary">Sudah punya akun? <a href="<?= base_url('auth') ?>" class="text-primary font-weight-bolder">Masuk</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
</body>