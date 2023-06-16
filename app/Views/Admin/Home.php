<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Klinik</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/vendors/feather/feather.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/template/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url() ?>/template/images/favicon.png" />

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url() ?>/fontawesome/css/all.min.css">
    <!-- overlayScrollbars -->
    <!-- <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css"> -->
    <!-- Theme style -->
    <!-- <link rel="stylesheet" href="dist/css/adminlte.min.css"> -->
    <link rel="shortcut icon" href="{{ asset ('admin/images/favicon.png') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <!-- <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="images/logo.svg" class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo" /></a> -->
                <span class="app-brand-text demo menu-text fw-bolder ms-2 font-weight-bold">ADMIN KLINIK</span>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>

                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a class="dropdown-item" href="<?= base_url('logout') ?>">
                            <i class="ti-power-off text-primary"></i>
                            Logout
                        </a>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/Admin/Home">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Admin/User">
                            <i class="icon-head menu-icon"></i>
                            <span class="menu-title">Data User</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Admin/Treatment">
                            <i class="icon-paper menu-icon"></i>
                            <span class="menu-title">Data Treatment</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Admin/Reservasi">
                            <i class="icon-paper menu-icon"></i>
                            <span class="menu-title">Data Reservasi</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Admin/Laporan">
                            <i class="icon-bar-graph menu-icon"></i>
                            <span class="menu-title">Laporan</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="row">
                                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                                    <h3 class="font-weight-bold">Selamat Datang, Admin!</h3>
                                    <h6 class="font-weight-normal mb-0">Klinik Adiva Beauty Skin</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 grid-margin">
                            <div class="card tale-bg">
                                <div class="card mt-auto">
                                    <img src="/img/ruangDepan.jpeg" class="object-fit-cover border rounded">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin transparent">
                            <div class="row">
                                <div class="col-md-6 mb-4 stretch-card transparent">
                                    <div class="card card-tale">
                                        <div class="card-body">
                                            <p class="mb-4">Data User</p>
                                            <p class="fs-30 mb-2"><?= $totalUser ?></p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4 stretch-card transparent">
                                    <div class="card card-dark-blue">
                                        <div class="card-body">
                                            <p class="mb-4">Data Treatment</p>
                                            <p class="fs-30 mb-2"><?= $totalTreatment ?></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                                    <div class="card card-light-blue">
                                        <div class="card-body">
                                            <p class="mb-4">Data Reservasi</p>
                                            <p class="fs-30 mb-2"><?= $totalReservasi ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-12 stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Reservasi Baru (Dalam Proses)</h4>
                                            <ul class="list-group">
                                                <?php foreach($reservasiDalamProses as $listReservasi) { ?>
                                                    <li class="list-group-item"><?= $listReservasi->nama_lengkap ?> - <?= $listReservasi->nama_treatment ?></li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <footer class="footer">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023 Adiva Beauty Skin | All rights reserved.</span>
                        </div>
                    </footer>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->

        <!-- plugins:js -->
        <script src="<?= base_url() ?>/template/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="<?= base_url() ?>/template/vendors/chart.js/Chart.min.js"></script>
        <script src="<?= base_url() ?>/template/vendors/datatables.net/jquery.dataTables.js"></script>
        <script src="<?= base_url() ?>/template/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
        <script src="<?= base_url() ?>/template/js/dataTables.select.min.js"></script>

        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="<?= base_url() ?>/template/js/off-canvas.js"></script>
        <script src="<?= base_url() ?>/template/js/hoverable-collapse.js"></script>
        <script src="<?= base_url() ?>/template/js/template.js"></script>
        <script src="<?= base_url() ?>/template/js/settings.js"></script>
        <script src="<?= base_url() ?>/template/js/todolist.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="<?= base_url() ?>/template/js/dashboard.js"></script>
        <script src="<?= base_url() ?>/template/js/Chart.roundedBarCharts.js"></script>
        <!-- End custom js for this page-->
</body>

</html>