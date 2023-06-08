<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Facial Anti Acne</title>
</head>

<body>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/Treatment/Facial">Facial Anti Acne</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail</li>
        </ol>
    </nav>
    <div class="container mx-9 my-5">
        <div class="flex flex-col p-5 bg-white shadow relative max-w-[592px]">
            <div class="row">
                <div class="col-sm-3">
                    <img src="/img/facial anti acne.png" class="card-img" alt="...">
                </div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-8 col-sm-6">
                            <h5 class="card-title">FACIAL ANTI ACNE</h5>
                            <hr style="border-color: black;">
                            <p class="card-text">Perawatan wajah yang bertujuan untuk mengatasi dan mencegah timbulnya jerawat pada kulit wajah.</p>
                        </div>
                        <div class="col-4 col-sm-6">
                            <h5 class="card-title">Tahap Perawatan</h5>
                            <hr style="border-color: black;">
                            <ol>
                                <li style="text-align:justify">Pembersihan kulit (Untuk menghilangkan kotoran, minyak berlebih, dan sel kulit mati yang dapat menyumbat pori-pori.)</li>
                                <li style="text-align:justify">Steaming (Untuk membuka pori-pori dan memudahkan pengeluaran kotoran dan minyak yang tersumbat.)</li>
                                <li style="text-align:justify">Pemijatan (Kulit akan dipijat dengan lembut untuk memperbaiki sirkulasi darah dan meningkatkan elastisitas kulit.)</li>
                                <li style="text-align:justify">Peeling (Mengangkat sel-sel kulit mati yang menumpuk pada permukaan kulit. )</li>
                                <li style="text-align:justify">Ekstraksi (Untuk menghilangkan komedo dan jerawat yang sudah matang.)</li>
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
                                <li style="text-align:justify">Membersihkan kulit wajah</li>
                                <li style="text-align:justify">Menghilangkan jerawat</li>
                                <li style="text-align:justify">Mencerahkan kulit wajah</li>
                                <li style="text-align:justify">Meremajakan kulit</li>
                                <li style="text-align:justify">Mencegah penuaan dini</li>
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
                    <br><button type="button" class="btn btn-secondary" disabled>Rp. 75.000</button>
                    <?php if (!empty(session()->logged_in)) { ?>
                        <a href="<?= base_url('Reservasi/RFacialAcne') ?>" class="btn btn-primary">Reservasi</a>
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