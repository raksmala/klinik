<style>
    @page {
        size: landscape;
    }

    .center-table {
        width: 100%;
        table-layout: fixed;
    }

    .center-table tr {
        text-align: center;
    }

    .center-table td {
        vertical-align: middle;
        width: 100%;
    }
</style>

<table class="table center-table">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal Reservasi</th>
            <th>Sesi Reservasi</th>
            <th>Nama Lengkap</th>
            <th>Nomor Telepon</th>
            <th>Alamat</th>
            <th>Treatment</th>
            <th>Total Pembayaran</th>
            <th>Status Pembayaran</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($dataReservasi as $key => $reservasi) : ?>
            <tr>
                <td><?= ++$key ?>.</td>
                <td><?= $reservasi->tgl_reservasi ?></td>
                <td><?= $reservasi->sesi_reservasi ?></td>
                <td><?= $reservasi->nama_lengkap ?></td>
                <td><?= $reservasi->nomor_telepon ?></td>
                <td><?= $reservasi->alamat ?></td>
                <td><?= $reservasi->nama_treatment ?></td>
                <td><?= $reservasi->total ?></td>
                <td><?= $reservasi->status_pembayaran ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>