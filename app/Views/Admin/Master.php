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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/template/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/css/vertical-layout-light/style.css">
    <!-- endinject -->

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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/3.5.1/select2.min.css" rel="stylesheet" />
    <style>
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            padding: 0px !important;
            margin: 0px !important;
        }

        div.dataTables_wrapper div.dataTables_length select {
            width: 50px !important;

        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <!-- <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="{{ asset ('admin/images/logo.svg') }}" class="mr-2" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset ('admin/images/logo-mini.svg') }}" alt="logo"/></a> -->
                <span class="app-brand-text demo menu-text fw-bolder ms-2 font-weight-bold">ADMIN KLINIK</span>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>

                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notifDropdown" href="#" data-toggle="dropdown">
                            <i class="icon-bell mx-0"></i>
                            <?php if (count($notifikasi) > 0) { ?>
                                <span class="count"></span>
                            <?php } ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notifDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Pemberitahuan</p>
                            <?php foreach ($notifikasi as $notif) { ?>
                                <a class="dropdown-item preview-item bg-info text-white" href="<?= base_url('Admin/Notifikasi') . '/' . $notif->id_notifikasi ?>">
                                    <p class="font-weight-light mb-0">
                                        <span class="font-weight-bold"><?= $notif->nama_lengkap ?></span> telah melakukan reservasi <span class="font-weight-bold"><?= $notif->nama_treatment ?></span>
                                    </p>
                                </a>
                            <?php } ?>
                        </div>
                    </li>
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
        <?= $this->include('Admin/Sidebar') ?>
        <?= $this->renderSection('content') ?>
    </div>
    </div>
    <!-- END LEFT SIDEBAR -->
    <!-- MAIN -->
    <!-- container-scroller -->

    <!-- End custom js for this page-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/3.5.1/select2.min.js" defer></script>

    <script>
        $(document).ready(function() {
            $('#tablesiswa').DataTable();
        });
    </script>

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

    <?= $this->renderSection('script') ?>
</body>

</html>