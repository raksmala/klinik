<style>
    @page {
        size: landscape;
    }

    .center-table,
    .right-table {
        width: 100%;
        table-layout: fixed;
    }

    .center-table tr {
        text-align: center;
    }

    .right-table tr {
        text-align: right;
    }

    .center-table td {
        vertical-align: middle;
        width: 100%;
    }

    .keterangan-table {
        margin-top: 2rem;
    }

    .reservasi-table {
        margin-top: 1rem;
        border-collapse: collapse;
        border: 1px solid black;
    }

    .ttd-table {
        margin-top: 2rem;
    }

    .reservasi-table thead th,
    .reservasi-table tbody td {
        padding: 0.5rem;
        border-top: 1px solid black;
        border-bottom: 1px solid black;
    }

    .reservasi-table th,
    .reservasi-table td {
        padding: 0.5rem;
        border-right: 1px solid black;
    }

    .ttd {
        vertical-align: top;
        height: 100px;
    }
</style>

<table class="table center-table">
    <tbody>
        <tr>
            <td>LAPORAN RESERVASI TREATMENT</td>
        </tr>
        <tr>
            <td>KLINIK ADIVA BEAUTY SKIN</td>
        </tr>
        <tr>
            <td>Green Pusaka Residence Blok A8, Jln. Rajawali, Maospati</td>
        </tr>
    </tbody>
</table>

<table class="table keterangan-table">
    <tbody>
        <tr>
            <td>Treatment</td>
            <td>:</td>
            <td><?= $treatment ?></td>
        </tr>
        <tr>
            <td>Periode</td>
            <td>:</td>
            <td><?= $periode ?></td>
        </tr>
    </tbody>
</table>

<table class="table center-table reservasi-table">
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
        <?php foreach ((array) $dataReservasi as $key => $reservasi) { ?>
            <tr>
                <td><?= ++$key ?>.</td>
                <td><?= $reservasi->tgl_reservasi ?></td>
                <td><?= $reservasi->sesi_reservasi ?></td>
                <td><?= $reservasi->nama_lengkap ?></td>
                <td><?= $reservasi->nomor_telepon ?></td>
                <td><?= $reservasi->alamat ?></td>
                <td><?= $reservasi->nama_treatment ?></td>
                <td><?= $reservasi->total ?></td>
                <td><?= $reservasi->status_reservasi ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<table class="table right-table ttd-table">
    <tbody>
        <tr>
            <td>Maospati, .................. <?= date('Y') ?></td>
        </tr>
        <tr>
            <td class="ttd">Owner Klinik Adiva Beauty Skin</td>
        </tr>
        <tr>
            <td>Dr. Puji Hastuti</td>
        </tr>
    </tbody>
</table>