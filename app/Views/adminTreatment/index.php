<?php $this->extend('Admin/Master'); ?>

<?php $this->section('content'); ?>
<!-- Modal -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Data Treatment</p>
                        <div class="col-auto">
                            <a href="Treatment/laporan-pdf" class="btn btn-info my-3" target="_blank">Export File Pdf</a>
                            <div class="row">
                                <div class="col-12">
                                    <a href="<?= base_url('adminTreatment/create') ?>" class="bi bi-plus blue-color float-right"></a>
                                </div>
                                <div class="table-responsive">
                                    <table id="tablesiswa" class="display expandable-table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Treatment</th>
                                                <th>Jenis Treatment</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($dataTreatment as $key => $treatment) : ?>
                                                <tr>
                                                    <td><?= ++$key ?>.</td>
                                                    <td><?= $treatment->nama_treatment ?></td>
                                                    <td><?= $treatment->jenis_treatment ?></td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <a href="<?= base_url('treatment/edit/' . $treatment->id_treatment) ?>" class="btn btn-warning btn-sm ">Edit</a>
                                                            <a href="<?= base_url('treatment/delete/' . $treatment->id_treatment) ?>" class="btn btn-danger btn-sm delete" onclick="return confirm('Apakah anda yakin ingin menghapus treatment ini?')">Hapus</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                    <!-- {{-- {{ $siswa->links()  }} --}} -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</div>
<!-- page-body-wrapper ends -->

<?php $this->endSection(); ?>

<?php $this->section('script'); ?>
<script>
    $(document).ready(function() {
        $('.dropdown-toggle').dropdown();
    });
</script>
<?php $this->endSection(); ?>