<?php $this->extend('Admin/Master'); ?>

<?php $this->section('content'); ?>

<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-0 mt-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/Admin/Treatment">Kembali</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Data Treatment</li>
        </ol>
    </div>
    <div class="card mb-4">
        <form method="post" action="<?= base_url('adminTreatment/simpan') ?>" enctype="multipart/form-data">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Treatment</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="nama_treatment">Nama Treatment</label>
                    <input type="text" class="form-control" name="nama_treatment" id="nama_treatment" placeholder="Nama Treatment" autofocus required>
                </div>
                <div class="form-group">
                    <label for="jenis_treatment">Jenis Treatment</label>
                    <select class="form-control" name="jenis_treatment" id="jenis_treatment" required>
                        <option value="" disabled>-- Pilih Jenis Treatment --</option>
                        <option value="Facial">Facial</option>
                        <option value="Chemical Peeling">Chemical Peeling</option>
                        <option value="Laser">Laser</option>
                        <option value="Glowing Glass Skin">Glowing Glass Skin</option>
                        <option value="Body Treatment">Body Treatment</option>
                        <option value="Hair Treatment">Hair Treatment</option>
                        <option value="Other Treatment">Other Treatment</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="gambar_treatment">Gambar Treatment</label>
                    <input type="file" class="form-control" name="gambar_treatment" id="gambar_treatment" placeholder="Gambar Treatment" required accept="image/*">
                </div>
                <div class="form-group">
                    <label for="desc_treatment">Deskripsi Treatment</label>
                    <textarea class="form-control" name="desc_treatment" id="desc_treatment" rows="5" placeholder="Deskripsi Treatment" required></textarea>
                </div>
                <div class="form-group">
                    <label for="harga_treatment">Harga Treatment</label>
                    <input type="number" class="form-control" name="harga_treatment" id="harga_treatment" placeholder="Harga Treatment" min="0" step="1000" required>
                </div>
                <div class="form-group">
                    <label for="durasi_treatment">Durasi Treatment</label>
                    <input type="number" class="form-control" name="durasi_treatment" id="durasi_treatment" placeholder="Durasi Treatment (Menit)" min="0" step="1" required>
                </div>
                <div class="form-group">
                    <label for="jangka_ulang_treatment">Jangka Pengulangan Treatment</label>
                    <input type="text" name="jangka_ulang_treatment" id="jangka_ulang_treatment" class="form-control" placeholder="Jangka Pengulangan Treatment" required>
                </div>
                <div class="form-group">
                    <label for="sesi_treatment">Maksimal Sesi 08.00 - 10.00</label>
                    <input type="number" class="form-control" name="sesi_treatment_1" id="sesi_treatment_1" placeholder="Maksimal Sesi Treatment" min="0" step="1" required>
                </div>
                <div class="form-group">
                    <label for="sesi_treatment">Maksimal Sesi 10.00 - 12.00</label>
                    <input type="number" class="form-control" name="sesi_treatment_2" id="sesi_treatment_2" placeholder="Maksimal Sesi Treatment" min="0" step="1" required>
                </div>
                <div class="form-group">
                    <label for="sesi_treatment">Maksimal Sesi 12.45 - 15.00</label>
                    <input type="number" class="form-control" name="sesi_treatment_3" id="sesi_treatment_3" placeholder="Maksimal Sesi Treatment" min="0" step="1" required>
                </div>
                <div class="form-group">
                    <label for="sesi_treatment">Maksimal Sesi 15.00 - 17.00</label>
                    <input type="number" class="form-control" name="sesi_treatment_4" id="sesi_treatment_4" placeholder="Maksimal Sesi Treatment" min="0" step="1" required>
                </div>
                <div class="form-group tahap-treatment">
                    <label for="tahap_treatment">Tahap Treatment</label>
                    <button class="btn btn-success float-right tambah-tahap" type="button" id="add_tahap_treatment"><i class="fas fa-plus"></i></button>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="tahap_treatment[]" id="tahap_treatment" placeholder="Tahap Treatment" required>
                    </div>
                </div>
                <div class="form-group manfaat-treatment">
                    <label for="manfaat_treatment">Manfaat Treatment</label>
                    <button class="btn btn-success float-right tambah-manfaat" type="button" id="add_manfaat_treatment"><i class="fas fa-plus"></i></button>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="manfaat_treatment[]" id="manfaat_treatment" placeholder="Manfaat Treatment" required>
                    </div>
                </div>
                <div class="form-group perhatian">
                    <label for="perhatian">Perhatian</label>
                    <button class="btn btn-success float-right tambah-perhatian" type="button" id="add_perhatian"><i class="fas fa-plus"></i></button>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="perhatian[]" id="perhatian" placeholder="Perhatian" required>
                    </div>
                </div>

                <a href="<?= base_url('Admin/Treatment') ?>" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    </form>
    <?= $this->endSection() ?>


    <?php $this->section('script'); ?>
    <script>
        // tahap treatment
        $('.tambah-tahap').on('click', function() {
            $('.tahap-treatment').append('<div class="input-group mb-3"><input type="text" class="form-control" name="tahap_treatment[]" id="tahap_treatment" placeholder="Tahap Treatment" required><div class="input-group-append"><button class="btn btn-danger hapus-tahap" type="button"><i class="fas fa-minus"></i></button></div></div>');
        });

        $('.tahap-treatment').on('click', '.hapus-tahap', function() {
            $(this).parents('.input-group').remove();
        });

        // manfaat treatment
        $('.tambah-manfaat').on('click', function() {
            $('.manfaat-treatment').append('<div class="input-group mb-3"><input type="text" class="form-control" name="manfaat_treatment[]" id="manfaat_treatment" placeholder="Manfaat Treatment" required><div class="input-group-append"><button class="btn btn-danger hapus-manfaat" type="button"><i class="fas fa-minus"></i></button></div></div>');
        });

        $('.manfaat-treatment').on('click', '.hapus-manfaat', function() {
            $(this).parents('.input-group').remove();
        });

        // perhatian
        $('.tambah-perhatian').on('click', function() {
            $('.perhatian').append('<div class="input-group mb-3"><input type="text" class="form-control" name="perhatian[]" id="perhatian" placeholder="Perhatian" required><div class="input-group-append"><button class="btn btn-danger hapus-perhatian" type="button"><i class="fas fa-minus"></i></button></div></div>');
        });

        $('.perhatian').on('click', '.hapus-perhatian', function() {
            $(this).parents('.input-group').remove();
        });
    </script>
    <?= $this->endSection() ?>