<?php $this->extend('Admin/Master'); ?>

<?php $this->section('content'); ?>
<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Data User</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/vendors/feather/feather.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url() ?>/template/images/favicon.png" />
</head>

<body>
    <h1>Data User</h1>
    <ul class="navbar-nav mr-2">
        <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
                <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                    <span class="input-group-text" id="search">
                        <i class="icon-search"></i>
                    </span>
                </div>
                <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
        </li>
    </ul>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
        Add Contact
    </button>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Nama Lengkap</th>
                                <th>Username</th>
                                <th>Alamat</th>
                                <th>No.Telepon</th>
                                <th>Level User</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($user as $row) : ?>
                                <tr>
                                    <td><?= $row['user_id'] ?></td>
                                    <td><?= $row['nama_lengkap'] ?></td>
                                    <td><?= $row['username'] ?></td>
                                    <td><?= $row['alamat'] ?></td>
                                    <td><?= $row['nomor_telepon'] ?></td>
                                    <td><?= $row['level_user'] ?></td>
                                    <td>
                                        <div class="d-grid gap-2 d-md-block">
                                            <button class="btn btn-primary" type="button">Edit</button>
                                            <button class="btn btn-danger" type="button">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <nav aria-label="...">
        <ul class="pagination">
            <li class="page-item disabled">
                <a class="page-link">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active" aria-current="page">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
    <!-- partial:../../partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023 Adiva Beauty Skin | All rights reserved.</span>
        </div>
    </footer>
    <!-- partial -->
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?= base_url() ?>/template/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= base_url() ?>/template/js/off-canvas.js"></script>
    <script src="<?= base_url() ?>/template/js/hoverable-collapse.js"></script>
    <script src="<?= base_url() ?>/template/js/template.js"></script>
    <script src="<?= base_url() ?>/template/js/settings.js"></script>
    <script src="<?= base_url() ?>/template/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->
</body>

</html>
<?php $this->endSection(); ?>