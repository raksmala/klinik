<?php $this->extend('Admin/Master'); ?>

<?php $this->section('content'); ?>
<!-- Modal -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Data User</p>
                        <div class="col-auto">
                            <!-- <a href="/siswa/exportexcel" class="btn btn-primary my-3" target="_blank">Download File Excel</a>
                            <a href="/siswa/importexcel" class="btn btn-secondary my-3" data-toggle="modal" data-target="#exampleModal">Upload Data User</a>
                            <a href="siswa/exportpdf" class="btn btn-info my-3" target="_blank">Download File Pdf</a> -->
                            <div class="row">
                                <div class="col-12">
                                    <a href="<?= base_url('user/create') ?>" class="bi bi-plus blue-color float-right"></a>
                                </div>
                                <div class="table-responsive">
                                    <table id="tablesiswa" class="display expandable-table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>User ID</th>
                                                <th>Nama Lengkap</th>
                                                <th>Username</th>
                                                <th>Alamat</th>
                                                <th>No.Telepon</th>
                                                <th>Level User</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($Users as $user) : ?>
                                                <tr>
                                                    <td><?= $user['user_id'] ?></td>
                                                    <td><?= $user['nama_lengkap'] ?></td>
                                                    <td><?= $user['username'] ?></td>
                                                    <td><?= $user['alamat'] ?></td>
                                                    <td><?= $user['no_telepon'] ?></td>
                                                    <td><?= $user['level_user'] ?></td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <button class="btn btn-primary" type="button">Edit</button>
                                                            <button class="btn btn-danger" type="button">Hapus</button>
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
    <!-- <script>
        $('.delete').click(function() {
            var siswaid = $(this).attr('data-id');
            swal({
                    title: "Yakin?",
                    text: "Kamu akan menghapus data siswa dengan NIM " + siswaid + " ? ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "siswa/delete/" + siswaid,
                            swal("Data Berhasil Di Hapus!", {
                                icon: "success",
                            });
                    } else {
                        swal("DATA TIDAK JADI DI HAPUS!");
                    }
                });
        });
    </script> -->
    <!-- <script>
        @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}")
        @endif
    </script> -->
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <?php $this->endSection(); ?>
</div>

<?php $this->endSection(); ?>

<?php $this->section('script'); ?>
<script>
    $(document).ready(function() {
        $('.dropdown-toggle').dropdown();
    });
</script>
<?php $this->endSection(); ?>