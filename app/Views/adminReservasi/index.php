<?php $this->extend('Admin/Master'); ?>

<?php $this->section('content'); ?>
<!-- Modal -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Data Reservasi</p>
                        <div class="col-auto">
                            <a href="Reservasi/laporan-pdf" class="btn btn-info my-3" target="_blank">Export File Pdf</a>
                            <div class="row">
                                <div class="col-12">
                                    <a href="<?= base_url('user/create') ?>" class="bi bi-plus blue-color float-right"></a>
                                </div>
                                <div class="table-responsive">
                                    <table id="tablesiswa" class="display expandable-table" style="width:100%">
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
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($dataReservasi as $key => $reservasi) : ?>
                                                <tr>
                                                    <td><?= ++$key ?>.</td>
                                                    <td><?= $reservasi->tgl_reservasi ?></td>
                                                    <td><?= $reservasi->sesi_reservasi ?></td>
                                                    <td><?= $reservasi->nama_lengkap ?></td>
                                                    <td><?= $reservasi->nomor_telepon ?></td>
                                                    <td><?= $reservasi->alamat ?></td>
                                                    <td><?= $reservasi->nama_treatment ?></td>
                                                    <td><?= $reservasi->total ?></td>
                                                    <td><?= $reservasi->status_pembayaran ?></td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <a href="<?= base_url('/Admin/Reservasi/edit') . '/' . $reservasi->id_reservasi ?>" class="btn btn-primary" type="button">Edit</a>
                                                            <button class="btn btn-danger batal-reservasi" type="button" data-toggle="modal" data-target="#batal-reservasi" data-id="<?= $reservasi->id_reservasi ?>">Hapus</button>
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

    <!-- Modal -->
    <div class="modal fade" id="batal-reservasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan!</h1>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p> Apakah anda yakin ingin menghapus dan membatalkan reservasi?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <a href="<?= base_url('/Admin/Reservasi/batal') ?>" class="btn btn-primary konfirmasi-batal">Konfirmasi</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.batal-reservasi').on('click', function() {
            const id_reservasi = $(this).data('id');
            $('.konfirmasi-batal').attr('href', '<?= base_url('/Admin/Reservasi/batal') ?>/' + id_reservasi);
        });
    </script>
    <!-- session set flashdata 'pesan' -->
    <script>
        <?php if (session()->getFlashdata('pesan')) : ?>
            toastr.success("<?= session()->getFlashdata('pesan') ?>")
        <?php endif; ?>
    </script>
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