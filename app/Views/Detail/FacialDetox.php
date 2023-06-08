<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Facial Oksigen Detox</title>
</head>

<body>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/Treatment/Facial">Facial Oksigen Detox</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail</li>
        </ol>
    </nav>
    <div class="container mx-9 my-5">
        <div class="flex flex-col p-5 bg-white shadow relative max-w-[592px]">
            <div class="row">
                <div class="col-sm-3">
                    <img src="/img/facial oksigen detox.jpg" class="card-img" alt="...">
                </div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-8 col-sm-6">
                            <h5 class="card-title">FACIAL OKSIGEN DETOX</h5>
                            <hr style="border-color: black;">
                            <p class="card-text">Prosedur facial yang cocok untuk semua jenis kulit dengan mengkombinasikan rangkaian produk oksigen dengan teknologi ultra sound.</p>
                        </div>
                        <div class="col-4 col-sm-6">
                            <h5 class="card-title">Tahap Perawatan</h5>
                            <hr style="border-color: black;">
                            <ol>
                                <li style="text-align:justify">Pembersihan kulit (Untuk menghilangkan kotoran, minyak berlebih, dan sel kulit mati yang dapat menyumbat pori-pori.)</li>
                                <li style="text-align:justify">Eksfoliasi (Untuk mengangkat sel kulit mati dan menjaga kulit wajah tetap lembut dan bersih.)</li>
                                <li style="text-align:justify">Oksigenasi (Dapat membantu meningkatkan sirkulasi darah dan memperbaiki pertukaran oksigen di dalam sel-sel kulit.)</li>
                                <li style="text-align:justify">Detoksifikasi (Dapat membantu menghilangkan racun atau bahan kimia berbahaya dari kulit.)</li>
                                <li style="text-align:justify">Hidrasi (Memberikan hidrasi pada kulit dengan menggunakan pelembap atau krim perawatan yang sesuai dengan jenis kulit.)</li>
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
                                <li style="text-align:justify">Menghilangkan minyak berlebih pada kulit</li>
                                <li style="text-align:justify">Menghilangkan komedo</li>
                                <li style="text-align:justify">Menyamarkan pori-pori</li>
                                <li style="text-align:justify">Memperbaiki struktur kulit</li>
                                <li style="text-align:justify">Melembapkan dan menghidrasi kulit</li>
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
                                <li style="text-align:justify">Dapat menyebabkan iritasi dan kemerahan pada kulit wajah.</li>
                                <li style="text-align:justify">Dapat menimbulkan bekas luka pada kulit wajah</li>
                                <li style="text-align:justify">Efek saat proses dan setelah proses perawatan setiap individu berbeda-beda tergantung kondisi kulit wajah individu dan juga produk atau teknik yang digunakan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row detail-padding-price d-flex justify-content-center">
                <div class="col-md-8 my-5 text-center">
                    <br><button type="button" class="btn btn-secondary" disabled>Rp. 90.000</button>
                    <?php if (!empty(session()->logged_in)) { ?>
                        <a href="<?= base_url('Reservasi/RFacialDetox') ?>" class="btn btn-primary">Reservasi</a>
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