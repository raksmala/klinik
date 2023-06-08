<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Facial Skin Glass</title>
</head>

<body>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/Treatment/Facial">Facial Skin Glass</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail</li>
        </ol>
    </nav>
    <div class="container mx-9 my-5">
        <div class="flex flex-col p-5 bg-white shadow relative max-w-[592px]">
            <div class="row">
                <div class="col-sm-3">
                    <img src="/img/facial skin glass.jpeg" class="card-img" alt="...">
                </div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-8 col-sm-6">
                            <h5 class="card-title">FACIAL SKIN GLASS</h5>
                            <hr style="border-color: black;">
                            <p class="card-text">Prosedur facial yang cocok untuk semua jenis kulit dengan serum asam hyaluronat dan menggunakan alat Ultrasound.</p>
                        </div>
                        <div class="col-4 col-sm-6">
                            <h5 class="card-title">Tahap Perawatan</h5>
                            <hr style="border-color: black;">
                            <ol>
                                <li style="text-align:justify">Pembersihan kulit (Untuk menghilangkan kotoran, minyak berlebih, dan sel kulit mati yang dapat menyumbat pori-pori.)</li>
                                <li style="text-align:justify">Eksfoliasi (Untuk mengangkat sel kulit mati dan menjaga kulit wajah tetap lembut dan bersih)</li>
                                <li style="text-align:justify">Pemijatan (Mengangkat sel-sel kulit mati yang menumpuk pada permukaan kulit. )</li>
                                <li style="text-align:justify">Pengaplikasian Oksigen</li>
                                <li style="text-align:justify">Masker (Setelah ekstraksi, kulit akan diberi masker khusus yang dirancang untuk mengatasi masalah jerawat. )</li>
                                <li style="text-align:justify">Pelembap (Setelah masker diangkat, kulit akan diberi pelembap untuk menjaga kelembaban kulit dan mencegah kulit kering.)</li>
                            </ol>
                        </div>

                        <div class="col-8 col-sm-6">
                            <h5 class="card-title">Durasi Perawatan</h5>
                            <hr style="border-color: black;">
                            <p class="card-text">60 Menit</p>
                        </div>
                        <div class="col-4 col-sm-6">
                            <h5 class="card-title">Manfaat Perawatan</h5>
                            <hr style="border-color: black;">
                            <ul>
                                <li style="text-align:justify">Memberikan tampilan kulit wajah yang halus, bersinar, dan sehat</li>
                                <li style="text-align:justify">Menjaga kelembapan kulit wajah</li>
                                <li style="text-align:justify">Mengurangi tanda-tanda penuaan dini</li>
                                <li style="text-align:justify">Mengurangi kemunculan pori-pori besar</li>
                                <li style="text-align:justify">Mengurangi kemerahan dan membantu mengendalikan jerawat</li>
                            </ul>
                        </div>

                        <div class="col-8 col-sm-6">
                            <h5 class="card-title">Jangka Pengulangan Perawatan</h5>
                            <hr style="border-color: black;">
                            <p>1 bulan sekali</p>
                        </div>
                        <div class="col-4 col-sm-6">
                            <h5 class="card-title">Perhatian</h5>
                            <hr style="border-color: black;">
                            <ul>
                                <li style="text-align:justify">Sensasi terbakar atau kesemutan pada kulit wajah saat proses perawatan berlangsung</li>
                                <li style="text-align:justify">Setelah melakukan perawatan kulit wajah akan menjadi kemerahan</li>
                                <li style="text-align:justify">Efek saat proses dan setelah proses perawatan setiap individu berbeda-beda tergantung kondisi kulit wajah individu dan juga produk atau teknik yang digunakan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row detail-padding-price d-flex justify-content-center">
                <div class="col-md-8 my-5 text-center">
                    <br><button type="button" class="btn btn-secondary" disabled>Rp. 150.000</button>
                    <?php if (!empty(session()->logged_in)) { ?>
                        <a href="<?= base_url('Reservasi/RFacialSkin') ?>" class="btn btn-primary">Reservasi</a>
                    <?php } else { ?>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Reservasi
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan!</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p> Untuk melakukan Reservasi Treatment silahkan LOGIN terlebih dahulu!
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <a href="<?= base_url('/layout/login') ?>" class="btn btn-primary">Login</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>