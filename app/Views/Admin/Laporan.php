<?php $this->extend('Admin/Master'); ?>

<?php $this->section('content'); ?>
<!-- Modal -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Laporan Reservasi</p><br>
                        <form method="POST" action="/Admin/Laporan/export">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="filter">Filter by</label><br>
                                        <div class="row ml-3">
                                            <div class="form-check col-md-2">
                                                <input type="radio" class="form-check-input" id="filter_tanggal" name="filter" value="tanggal" checked>
                                                <label class="form-check-label ml-1" for="filter_tanggal">Tanggal</label>
                                            </div>
                                            <div class="form-check col-md-2">
                                                <input type="radio" class="form-check-input" id="filter_treatment" name="filter" value="treatment">
                                                <label class="form-check-label ml-1" for="filter_treatment">Treatment</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 tanggal">
                                    <div class="form-group">
                                        <label for="startDate">Tanggal Awal</label>
                                        <input type="date" class="form-control" id="tanggal_awal" name="tanggal_awal">
                                    </div>
                                </div>
                                <div class="col-md-3 tanggal">
                                    <div class="form-group">
                                        <label for="endDate">Tanggal Akhir</label>
                                        <input type="date" class="form-control" id="tanggal_akhir" name="tanggal_akhir">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 treatment" style="display: none;">
                                    <div class="form-group">
                                        <label>Nama Treatment</label>
                                        <select name="nama_treatment" id="nama_treatment">
                                            <?php foreach ($treatment as $t) { ?>
                                                <option value="<?= $t->nama_treatment ?>"><?= $t->nama_treatment ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Export PDF</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>

<?php $this->section('script'); ?>
<script>
    $(document).ready(function() {
        $('.dropdown-toggle').dropdown();

        $('#nama_treatment').select2();
    });

    $('#filter_treatment').on('click', function() {
        if ($(this).is(':checked')) {
            $('.treatment').css('display', 'block');
            $('.tanggal').css('display', 'none');
        } else {
            $('.treatment').css('display', 'none');
            $('.tanggal').css('display', 'block');
        }
    });

    $('#filter_tanggal').on('click', function() {
        if ($(this).is(':checked')) {
            $('.treatment').css('display', 'none');
            $('.tanggal').css('display', 'block');
        } else {
            $('.treatment').css('display', 'block');
            $('.tanggal').css('display', 'none');
        }
    });
</script>
<?php $this->endSection(); ?>