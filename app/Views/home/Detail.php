<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Chemical Peeling</title>
</head>

<body>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/Treatment/Chemical">Chemical Peeling</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail</li>
        </ol>
    </nav>
    <div class="container mx-9 my-5">
        <div class="flex flex-col p-5 bg-white shadow relative max-w-[592px]">
            <div class="row">
                <div class="col-sm-3">
                    <img src="/img/basic facial.jpg" class="card-img" alt="...">
                </div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-8 col-sm-6">
                            <h5 class="card-title"><?= $detail->nama_treatment ?></h5>
                            <hr style="border-color: black;">
                            <p class="card-text"><?= $detail->desc_treatment ?></p>
                        </div>
                        <div class="col-4 col-sm-6">
                            <h5 class="card-title">Tahap Perawatan</h5>
                            <hr style="border-color: black;">
                            <ol>
                                <?php foreach (json_decode($detail->tahap_treatment) as $tahap) { ?>
                                    <li style="text-align:justify"><?= $tahap ?></li>
                                <?php } ?>
                            </ol>
                        </div>

                        <div class="col-8 col-sm-6">
                            <h5 class="card-title">Durasi Perawatan</h5>
                            <hr style="border-color: black;">
                            <p class="card-text"><?= $detail->durasi_treatment ?> Menit</p>
                        </div>
                        <div class="col-4 col-sm-6">
                            <h5 class="card-title">Manfaat Perawatan</h5>
                            <hr style="border-color: black;">
                            <ul>
                                <?php foreach (json_decode($detail->manfaat_treatment) as $manfaat) { ?>
                                    <li style="text-align:justify"><?= $manfaat ?></li>
                                <?php } ?>
                            </ul>
                        </div>

                        <div class="col-8 col-sm-6">
                            <h5 class="card-title">Jangka Pengulangan Perawatan</h5>
                            <hr style="border-color: black;">
                            <p><?= $detail->jangka_ulang_treatment ?></p>
                        </div>
                        <div class="col-4 col-sm-6">
                            <h5 class="card-title">Perhatian</h5>
                            <hr style="border-color: black;">
                            <ul>
                                <?php foreach (json_decode($detail->perhatian) as $perhatian) { ?>
                                    <li style="text-align:justify"><?= $perhatian ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row detail-padding-price d-flex justify-content-center">
                <div class="col-md-8 my-5 text-center">
                    <br><button type="button" class="btn btn-secondary" disabled>Rp. <?= number_format($detail->harga_treatment, 0, '', '.') ?></button>
                    <?php if (!empty(session()->logged_in)) {
                        $detail_url = explode('(', $detail->nama_treatment)[0];
                        $detail_url = str_replace(' ', '-', trim($detail_url));
                    ?>
                        <a href="<?= base_url('/home/Reservasi') . '/' . $detail_url ?>" class="btn btn-primary">Reservasi</a>
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