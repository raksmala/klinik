<?php $this->extend('Admin/Master'); ?>

<?php $this->section('content'); ?>

<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-0 mt-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/Admin/Reservasi">Kembali</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Data Reservasi</li>
        </ol>
    </div>
    <div class="card mb-4">
        <form method="post" action="<?= base_url('Admin/Reservasi/update') . '/'. $dataReservasi['id_reservasi'] ?>">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Form Edit Data Reservasi</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Treatment" autofocus readonly disabled value="<?= $user['nama_lengkap'] ?>">
                </div>
                <div class="form-group">
                    <label for="nama_treatment">Nama Treatment</label>
                    <input type="text" class="form-control" name="nama_treatment" id="nama_treatment" placeholder="Nama Treatment" autofocus readonly disabled value="<?= $dataReservasi['nama_treatment'] ?>">
                </div>
                <div class="form-group">
                    <label for="status_reservasi">Status Reservasi</label>
                    <select class="form-control" name="status_reservasi" id="status_reservasi" required>
                        <option value="Dalam Proses" <?php if ($dataReservasi['status_reservasi'] == 'Dalam Proses') echo 'selected' ?>>Dalam Proses</option>
                        <option value="Proses" <?php if ($dataReservasi['status_reservasi'] == 'Proses') echo 'selected' ?>>Proses</option>
                        <option value="Selesai" <?php if ($dataReservasi['status_reservasi'] == 'Selesai') echo 'selected' ?>>Selesai</option>
                        <option value="Batal" <?php if ($dataReservasi['status_reservasi'] == 'Batal') echo 'selected' ?>>Batal</option>
                    </select>
                </div>

                <a href="<?= base_url('Admin/Reservasi') ?>" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    </form>
    <?= $this->endSection() ?>
    <!-- session set flashdata 'pesan' -->
    <script>
        <?php if (session()->getFlashdata('pesan')) : ?>
            toastr.success("<?= session()->getFlashdata('pesan') ?>")
        <?php endif; ?>
    </script>
    <?php $this->section('script'); ?>
    <?= $this->endSection() ?>