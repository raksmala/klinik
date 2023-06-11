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
            <th>ID Treatment</th>
            <th>Nama Treatment</th>
            <th>Jenis Treatment</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($dataTreatment as $treatment) : ?>
            <tr>
                <td><?= $treatment->id_treatment ?></td>
                <td><?= $treatment->nama_treatment ?></td>
                <td><?= $treatment->jenis_treatment ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>