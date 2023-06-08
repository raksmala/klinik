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
        <form method="post" action="<?= base_url('adminTreatment/simpan') ?>">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Treatment</h6>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="nama_treatment">Nama Treatment</label>
                        <input type="text" class="form-control" name="nama_treatment" id="nama_treatment" placeholder="nama_treatment" autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="jenis_treatment">Jenis Treatment</label>
                        <input type="text" class="form-control" name="jenis_treatment" id="janis_treatment" placeholder="jenis_treatment" autofocus required>
                    </div>
                    <button type="button" class="btn btn-danger">Batal</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </form>
    </div>
    </form>
    <?= $this->endSection() ?>