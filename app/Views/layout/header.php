<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adiva Beauty Skin</title>
    <style>
        /* Custom page CSS
-------------------------------------------------- */
        /* Not required for template or sticky footer method. */

        main>.container {
            padding: 60px 15px 0;
        }

        .footer {
            background-color: #f5f5f5;
        }

        .footer>.container {
            padding-right: 15px;
            padding-left: 15px;
        }

        code {
            font-size: 80%;
        }
    </style>
</head>

<body class="d-flex flex-column">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><b>ADIVA BEAUTY SKIN</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/home/klinik">Klinik</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/home/treatment" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Treatment
                        </a>
                        <ul class="dropdown-menu">
                            <?php
                            if (isset($jenis_treatment)) {
                                foreach ($jenis_treatment as $row) {
                                    // replace space with dash (-)
                                    $url = str_replace(' ', '-', $row);
                                    echo '<li><a class="dropdown-item" href="/home/Treatment/' . $url . '">' . $row . '</a></li>';
                                }
                            }
                            ?>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/home/BeforeAfter">Before & After</a>
                    </li>
                    <li class="nav-item">
                        <?php if (!empty(session()->logged_in)) { ?>
                            <a class="nav-link" href="/home/Riwayat">Riwayat Reservasi</a>
                        <?php } ?>
                    </li>
                </ul>

                <div class="d-flex" role="login">
                    <?php if (!empty(session()->logged_in) && session()->get('level_user') == 'Pelanggan') { ?>
                        <!-- <div class="alert alert-warning mr-2 align-items-center" role="alert">
                            <div class="alert-body d-flex align-items-center height-3">
                                <i data-feather="info" class="me-20"></i>
                                <span><?= session()->get('pesan') ?></span>
                            </div>
                        </div> -->
                        <br>
                        <!-- Button trigger modal -->
                        <div class="d-grid gap-2 d-md-block">
                            <a href="/home/user/profile" class="btn btn-outline-dark" disabled>
                                <span><?= session()->get('pesan') ?></span>
                            </a>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Logout
                            </button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan!</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p> Apakah anda yakin ingin keluar ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <a href="<?= base_url('logout') ?>" class="btn btn-primary">Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } else { ?>
                        <a href="<?= base_url('layout/login') ?>" class="btn btn-primary">Login</a>
                    <?php } ?>
                </div>
            </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>