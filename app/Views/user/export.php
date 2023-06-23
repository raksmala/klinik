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

    .user-table {
        margin-top: 1rem;
        border-collapse: collapse;
        border: 1px solid black;
    }

    .user-table thead th,
    .user-table tbody td {
        padding: 0.5rem;
        border-top: 1px solid black;
        border-bottom: 1px solid black;
    }

    .user-table th,
    .user-table td {
        padding: 0.5rem;
        border-right: 1px solid black;
    }
</style>

<table class="table center-table">
    <tbody>
        <tr>
            <td>LAPORAN DATA USER</td>
        </tr>
        <tr>
            <td>KLINIK ADIVA BEAUTY SKIN</td>
        </tr>
        <tr>
            <td>Green Pusaka Residence Blok A8, Jln. Rajawali, Maospati</td>
        </tr>
    </tbody>
</table>

<table class="table center-table user-table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Username</th>
            <th>Alamat</th>
            <th>No.Telepon</th>
            <th>Level User</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $key => $user) : ?>
            <tr>
                <td><?= ++$key ?>.</td>
                <td><?= $user['nama_lengkap'] ?></td>
                <td><?= $user['username'] ?></td>
                <td><?= $user['alamat'] ?></td>
                <td><?= $user['nomor_telepon'] ?></td>
                <td><?= $user['level_user'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>