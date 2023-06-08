<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <table>
        <tr>
            <th>ID Treatment</th>
            <th>Nama Treatment</th>
            <th>Jenis Treatment</th>
        </tr>
        <?php foreach ($dataTreatment as $treatment) : ?>
            <tr>
                <td><?= $treatment->id_treatment ?></td>
                <td><?= $treatment->nama_treatment ?></td>
                <td><?= $treatment->jenis_treatment ?></td>
            </tr>
        <?php endforeach; ?>

    </table>
</body>

</html>