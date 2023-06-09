<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facial</title>
</head>

<body>
    <img src="/img/CoverFacial.jpg" class="img-fluid" alt="...">
    <!-- jenis treatment -->
    <div class="container my-5 mx-9">
        <div class="row row-cols-1 row-cols-md-2">
            <?php foreach($treatments as $treatment) { ?>
                <div class="col mb-4">
                    <div class="card" style="width: 20rem;">
                        <img src="/img/facial basic.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $treatment->nama_treatment ?></h5>
                            <p class="card-text"><?= $treatment->desc_treatment ?></p>
                            <!-- <a href="/Detail/FacialBasic" class="card-link">Detail</a><br> -->
                            <br><button type="button" class="btn btn-secondary" disabled>Rp. <?= number_format($treatment->harga_treatment, 0, '', '.') ?></button>
                            <?php
                                $detail_url = explode('(', $treatment->nama_treatment)[0];
                                $detail_url = str_replace(' ', '-', trim($detail_url));
                            ?>
                            <a href="/home/Detail/<?= $detail_url ?>" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</body>

</html>