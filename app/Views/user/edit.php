<?php $this->extend('Admin/Master'); ?>

<?php $this->section('content'); ?>

<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-0 mt-3">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/Admin/User">Kembali</a></li>
      <li class="breadcrumb-item active" aria-current="page">Edit Data User</li>
    </ol>
  </div>
  <div class="card mb-4">
    <form method="post" action="<?= base_url('user/update/' . $user['user_id']) ?>">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Form Edit Data User</h6>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="nama_lengkap">Nama Lengkap</label>
          <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="nama_lengkap" value="<?= $user['nama_lengkap'] ?>" autofocus required>
        </div>
        <div class="form-group">
          <label for="username">username</label>
          <input type="text" class="form-control" name="username" id="username" placeholder="username" value="<?= $user['username'] ?>" autofocus required>
        </div>
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?= $user['alamat'] ?>" autofocus required>
        </div>
        <div class="form-group">
          <label for="nomor_telepon">No. Telepon</label>
          <input type="text" class="form-control" name="nomor_telepon" id="nomor_telepon" placeholder="nomor_telepon" value="<?= $user['nomor_telepon'] ?>" autofocus required>
        </div>
        <div class="form-group">
          <label for="level_user">Level User</label>
          <div class="col-xs-10">
            <select name="level_user" id="level_user">
              <option value="admin" value="<?= $user['level_user'] == 'admin' ? 'selected' : '' ?>">Admin</option>
              <option value="pelanggan" value="<?= $user['level_user'] == 'pelanggan' ? 'selected' : '' ?>">Pelanggan</option>
            </select>
          </div>
        </div>

        <a href="<?= base_url('Admin/User') ?>" class="btn btn-danger">Cancel</a>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
  </form>
  <?= $this->endSection() ?>