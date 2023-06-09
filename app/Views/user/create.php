<?php $this->extend('Admin/Master'); ?>

<?php $this->section('content'); ?>

<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-0 mt-3">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/user">Kembali</a></li>
      <li class="breadcrumb-item active" aria-current="page">Tambah Data User</li>
    </ol>
  </div>
  <div class="card mb-4">
    <form method="post" action="<?= base_url('user/store') ?>">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data User</h6>
      </div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="nama_lengkap" autofocus required>
          </div>
          <div class="form-group">
            <label for="username">username</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="username" autofocus required>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="password" minlength="8" autofocus requiredoninvalid="this.setCustomValidity('Password Minimal 8 Karakter')" oninput="this.setCustomValidity('Password Minimal 8 Karakter')" onchange="this.setCustomValidity('')">
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" autofocus required>
          </div>
          <div class="form-group">
            <label for="nomor_telepon">No. Telepon</label>
            <input type="text" class="form-control" name="nomor_telepon" id="nomor_telepon" placeholder="nomor_telepon" autofocus required>
          </div>
          <div class="form-group">
            <label for="level_user">Level User</label>
            <div class="col-xs-10">
              <select name="level_user" id="level_user">
                <option value="admin">Admin</option>
                <option value="pelanggan">Pelanggan</option>
              </select>
            </div>
          </div>

          <a href="<?= base_url('Admin/User') ?>" class="btn btn-danger">Cancel</a>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </form>
  </div>
  </form>
  <?= $this->endSection() ?>