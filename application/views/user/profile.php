<div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg bg-transparent shadow-none position-absolute px-4 w-100 z-index-2">
        <div class="container-fluid py-1">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-0 ps-2 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="text-white opacity-5" href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Profile</li>
                </ol>
                <h6 class="text-white font-weight-bolder ms-2">Profile</h6>
            </nav>
            <div class="collapse navbar-collapse me-md-0 me-sm-4 mt-sm-0 mt-2" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Type here...">
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid">
        <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('<?= base_url('assets/') ?>img/curved-images/curved0.jpg'); background-position-y: 50%;">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
        <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="<?= base_url('assets/') ?>img/id.gif" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <?php foreach ($profile as $p) : ?>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1font-weight-bold text-primary">
                                <?= $p['nama']; ?>
                            </h5>
                        </div>
                    </div>

            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12 col-xl-4">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h6 class="mb-0">Profile Information</h6>
                            </div>
                            <div class="col-md-4 text-end">
                                <a href="javascript:;">
                                    <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <ul class="list-group">
                            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full Name: </strong> <?= $p['nama']; ?></li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Nomor Induk Kependudukan: </strong> <?= $p['nik']; ?></li>

                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">tgllahir: </strong> <?= $p['tgllahir']; ?></li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">jeniskel: </strong> <?= $p['jeniskel']; ?></li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email: </strong> <?= $p['email']; ?></li>

                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Alamat:</strong> <?= $p['alamat']; ?></li>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>