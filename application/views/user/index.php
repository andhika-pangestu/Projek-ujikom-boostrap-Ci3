<body class="g-sidenav-show  bg-gray-100">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                </ol>
                <h3 class="font-weight-bolder text-info">Selamat Datang <?= $this->session->userdata('nama'); ?></3>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                </div>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a href="<?= base_url('auth/logout') ?>" class="nav-link text-body font-weight-bold px-0">
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

    <div class="col-lg-11 mb-lg-3">
        <div class="card ">
            <div class="card-body pt-3">
                <div class="row">
                    <div class="col-lg-7 ">
                        <div>
                            <h1 class=" font-weight-bolder mb-4 pt-2">Ayo Peduli dengan Diri Kamu!</h1>
                            <p class="mb-5">Peduli dengan diri dengan menggunakan aplikasi Data Perjalanan Kami</p>
                            <button type="submit" class="btn bg-gradient-info w-50"><a href="https://covid19.go.id/faskesvaksin" class="text-white">informasi Vaksinasi</a></button>
                            <button type="submit" class="btn bg-gradient-info w-50"><a href="<?= base_url('dashboard/dataperjalanan') ?>" class="text-white">Isi Data Perjalanan kamu</a></button>

                        </div>
                    </div>
                    <div class="col-lg ms-18 text-center  mt-lg-12 ">
                        <div>
                            <img src="<?= base_url('assets/') ?>img/safe.png" class="position-absolute h-100 w-37 top-0 d-lg-block d-none" alt="waves">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card col-lg-11 mb-lg-5">
        <div class="card bg-dark ">
            <div class="card-body ">
                <h2 class="card-title d-block text-info">
                    Tentang kami
                </h2>
                <p class="card-description mb-4 text-white">
                    aplikasi yang dikembangkan untuk membantu instansi pemerintah terkait dalam melakukan pelacakan untuk menghentikan penyebaran Coronavirus Disease (COVID-19).

                    Aplikasi ini mengandalkan partisipasi masyarakat untuk saling membagikan data lokasinya saat bepergian agar penelusuran riwayat kontak dengan penderita COVID-19 dapat dilakukan.

                    Pengguna aplikasi ini juga akan mendapatkan notifikasi jika berada di keramaian atau berada di zona merah, yaitu area atau kelurahan yang sudah terdata bahwa ada orang yang terinfeksi COVID-19 positif atau ada Pasien Dalam Pengawasan.
                </p>
            </div>

        </div>
    </div>
    <div class="col-12 mt-4">
        <div class="card col-lg-11 mb-lg-3">
            <div class="card-header pb-0 p-3">
                <h3 class="mb-1 text-border text-dark">Kami Peduli dengan Kamu</h3>
            </div>
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-xl-4 col-md-7 mb-xl-0 mb-5">
                        <div class="card card-blog card-plain">
                            <div class="position-relative">
                                <a class="d-block shadow-xl border-radius-xl">
                                    <img src="<?= base_url('assets/') ?>img/stayhome.png" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                </a>
                            </div>
                            <div class="card-body px-1 pb-0">
                                <a href="javascript:;">
                                    <h5 class="text-info text-bold">
                                        Membantu Pelacakan untuk Menghentikan Penyebaran COVID-19
                                    </h5>
                                </a>
                                <p class="mb-4 text-sm">
                                    Dengan mengaktifkan lokasi, Anda akan membantu instansi pemerintah terkait dalam melakukan pelacakan untuk menghentikan penyebaran Coronavirus Disease (COVID-19).
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                        <div class="card card-blog card-plain">
                            <div class="position-relative">
                                <a class="d-block shadow-xl border-radius-xl">
                                    <img src="<?= base_url('assets/') ?>img/working.png" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                                </a>
                            </div>
                            <div class="card-body px-1 pb-0">
                                <a href="javascript:;">
                                    <h5 class="text-info text-bold">
                                        Informasi Zonasi dan Notifikasi Keramaian
                                    </h5>
                                </a>
                                <p class="mb-4 text-sm">
                                    Anda akan mendapatkan infomasi area zonasi persebaran COVID-19 (merah, kuning, hijau) sesuai dengan lokasi yang Anda pilih dan mendapatkan notifikasi jika Anda berada di keramaian.
                                </p>
                                <div class="d-flex align-items-center justify-content-between">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 mb-xl-0 mb-5">
                        <div class="card card-blog card-plain">
                            <div class="position-relative">
                                <a class="d-block shadow-xl border-radius-xl">
                                    <img src="<?= base_url('assets/') ?>img/doctor.png" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                </a>
                            </div>
                            <div class="card-body px-1 pb-0">
                                <p class="text-gradient text-dark mb-2 text-sm">Project #3</p>
                                <a href="javascript:;">
                                    <h5 class="text-info text-bold">
                                        Pemeriksaan Kesehatan
                                    </h5>
                                </a>
                                <p class="mb-4 text-sm">
                                    Jika Anda memerlukan bantuan tenaga kesehatan, Anda bisa menggunakan fitur Telepon Dokter untuk melakukan pemeriksaan kesehatan mandiri dan berkonsultasi dengan tenaga kesehatan terkait kondisi kesehatan Anda.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>