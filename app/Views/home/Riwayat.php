<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Before & After</title>
</head>

<body>
    <img src="/img/riwayat.png" class="img-fluid" alt="...">
    
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Username</th>
                    <th scope="col">Treatment</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Sesi</th>
                    <th scope="col">Yang harus dibayar</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($reservasi as $key => $res) { ?>
                    <tr>
                        <th scope="row"><?= ++$key ?></th>
                        <td><?= $res->username ?></td>
                        <td><?= $res->nama_treatment ?></td>
                        <td><?= $res->tgl_reservasi ?></td>
                        <td><?= $res->sesi_reservasi ?></td>
                        <td>Rp. <?= number_format($res->total, 0, '', '.') ?></td>
                        <td><?= $res->status_pembayaran ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    
</body>
</html>