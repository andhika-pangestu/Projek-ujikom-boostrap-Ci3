<body class="g-sidenav-show  bg-gray-100">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                </ol>
                <h3 class="font-weight-bolder text-info text-gradient">Selamat Datang <?= $this->session->userdata('nama'); ?></3>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                </div>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a href="<?= base_url('auth') ?>" class="nav-link text-body font-weight-bold px-0">
                            <img src="<?= base_url('assets/') ?>img/user.png" width="16px" height="16px"></img>
                            <span class="d-sm-inline d-none text-info">Sign In</span>
                        </a>
                    </li>
                    <li class="nav-item px-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0">
                            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <!-- form data perjalanan -->
    <div class="container-fluid py-4">
        <div class="card z-index-0">
            <div class="card-header text-left pt-5 pb-0">
                <h5 class="text-gradient-primary">Masukan Data Perjalanan</h5>
                <p>Masukan data perjalanan dengan benar</p>
            </div>
            <div class="card-body">
                <?= $this->session->flashdata('pesan'); ?>
                <form class="user" method="post" action="<?= base_url('dashboard/report'); ?>">
                    <div class="form-group mb-3">
                        <a>Masukan Tanggal </a>
                        <input type="date" class="form-control form-control-user" id="tanggal" name="tanggal" value="<?= set_value('tanggal'); ?>">
                        <?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class=" form-group mb-3">
                        <a>Masukan Jam </a>
                        <input type="time" class="form-control form-control-user" id="jam" name="jam" value="<?= set_value('jam'); ?>">
                        <?= form_error('jam', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class=" form-group mb-3">
                        <input type="text" class="form-control form-control-user" id="lokasi" name="lokasi" value="<?= set_value('Lokasi'); ?>" placeholder=" Masukkan Lokasi">
                        <?= form_error('lokasi', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group mb-3">
                        <input type="number" class="form-control form-control-user" id="suhu_tubuh" name="suhu_tubuh" value="<?= set_value('suhu_tubuh'); ?>" placeholder=" Masukkan Suhu Tubuh">
                        <?= form_error('suhu_tubuh', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div>
                        <button type="submit" class="btn bg-gradient-info w-100 my-4 mb-2">Simpan</button>
                    </div>
                </form>
            </div>
        </div>


        </main>
        <div class="fixed-plugin">
            <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
                <i class="fa fa-cog py-2"> </i>
            </a>
            <div class="card shadow-lg ">
                <div class="card-header pb-0 pt-3 ">
                    <div class="float-start">
                        <h5 class="mt-3 mb-0">konfigurasi Aplikasi Data Perjalanan</h5>
                        <p>Lihat pilihan</p>
                    </div>
                    <div class="float-end mt-4">
                        <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                            <i class="fa fa-close"></i>
                        </button>
                    </div>
                    <!-- End Toggle Button -->
                </div>
                <hr class="horizontal dark my-1">
                <div class="card-body pt-sm-3 pt-0">
                    <!-- Sidebar Backgrounds -->
                    <div>
                        <h6 class="mb-0">Sidebar Colors</h6>
                    </div>
                    <a href="javascript:void(0)" class="switch-trigger background-color">
                        <div class="badge-colors my-2 text-start">
                            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
                            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
                            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
                            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
                            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
                            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
                        </div>
                    </a>
                    <!-- Sidenav Type -->
                    <div class="mt-3">
                        <h6 class="mb-0">Tipe SideNav</h6>
                        <p class="text-sm">Pilih dua tipe Berbeda.</p>
                    </div>
                    <div class="d-flex">
                        <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
                        <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
                    </div>
                    <p class="text-sm d-xl-none d-block mt-2">Kamu bisa Mmengubah tampilan.</p>
                    <!-- Navbar Fixed -->
                    <div class="mt-3">
                        <h6 class="mb-0">Navbar Fixed</h6>
                    </div>
                    <div class="form-check form-switch ps-0">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
                    </div>
                    <hr class="horizontal dark my-sm-4">
                </div>
            </div>
        </div>

</body>