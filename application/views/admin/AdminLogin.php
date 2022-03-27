<body class="">
    <title>
        Login
    </title>
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->
                <nav class="navbar card card-frame blur blur-rounded top-5 z-index-5 shadow-primary position-absolute  py-2 start-4 end-4  col-xl-8 col-lg-8 col-md-8 mx-auto bg-gradient-primary">
                    <div class="container-fluid col-xl-5 col-lg-5 col-md-5 mx-auto ">
                        <h5 class=" font-weight-bolder text-white">
                            Aplikasi Data Perjalanan
                        </h5>
                    </div>
            </div>
        </div>
        <main class="main-content  mt-0">
            <section>
                <div class="page-header min-vh-60">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-5 col-lg-10 col-md-10 mx-auto">
                                <div class="card card-plain mt-8 shadow-lg my-6 mx-auto ">
                                    <div class="card-header pb-0 text-left">
                                        <h3 class="font-weight-bolder text-primary text-gradient">Selamat Datang</h3>
                                        <p class="mb-0">Masukan Identitas Anda untuk Masuk</p>
                                    </div>
                                    <div class="card-body">
                                        <?= $this->session->flashdata('pesan'); ?>
                                        <form class="user" method="post" action="<?= base_url('admin'); ?>">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Masukan Alamat Email" value="<?= set_value('email'); ?>">
                                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>

                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="text-center mb-3">
                                                <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Masuk</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center pt-0 px-lg-2 ">
                                        <p class=" text-sm mx-auto">
                                            Belum Punya Akun?
                                            <a href="<?= base_url('admin/AdminRegister'); ?>" class="text-primary text-gradient font-weight-bold">Daftar</a>
                                        </p>
                                        <p class="text-sm mb-0 text-primary">Masuk sebagai Pengguna
                                            <a href="<?= base_url('auth') ?>" class="text-primary font-weight-bolder">Masuk</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            </mai>
</body>