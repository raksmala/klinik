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
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="startDate">Tanggal Awal</label>
                                        <input type="date" class="form-control" id="tanggal_awal" name="tanggal_awal">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="endDate">Tanggal Akhir</label>
                                        <input type="date" class="form-control" id="tanggal_akhir" name="tanggal_akhir">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="filter">Filter by Treatment:</label><br>
                                        <div class="row ml-3">
                                            <div class="form-check col-md-2">
                                                <input type="radio" class="form-check-input" id="filter_ya" name="filter" value="ya">
                                                <label class="form-check-label ml-1" for="filter_ya">Ya</label>
                                            </div>
                                            <div class="form-check col-md-2">
                                                <input type="radio" class="form-check-input" id="filter_tidak" name="filter" value="tidak" checked>
                                                <label class="form-check-label ml-1" for="filter_tidak">Tidak</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 treatment" style="display: none;">
                                    <div class="form-group">
                                        <label>Nama Treatment</label>
                                        <select class="form-control" name="nama_treatment" id="nama_treatment">
                                            <?php foreach ($treatment as $t) { ?>
                                                <option value="<?= $t->nama_treatment ?>"><?= $t->nama_treatment ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Export PDF</button>
                        </form>
                        <!-- <div class="container">
                            <div class="row">
                                <div class="col-4">
                                    <div class="card flex shadow mb-5">
                                        <div class="card-header">
                                            Laporan Harian
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label>Tanggal</label>
                                                <select name="harian_tanggal" class="form-control harian-tanggal">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label>Bulan</label>
                                                <select name="harian_bulan" class="form-control harian-bulan">
                                                    <option value="01">Januari</option>
                                                    <option value="02">Februari</option>
                                                    <option value="03">Maret</option>
                                                    <option value="04">April</option>
                                                    <option value="05">Mei</option>
                                                    <option value="06">Juni</option>
                                                    <option value="07">Juli</option>
                                                    <option value="08">Agustus</option>
                                                    <option value="09">September</option>
                                                    <option value="10">Oktober</option>
                                                    <option value="11">November</option>
                                                    <option value="12">Desember</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label>Tahun</label>
                                                <select name="harian_tahun" class="form-control harian-tahun">
                                                    <option value="2023">2023</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2025">2025</option>
                                                </select>
                                            </div>
                                            <input type="hidden" class="harian" name="harian" value="2023-01-01">

                                            <div class="col mt-3 mb-3 mx-3">
                                                <br><a href="Laporan/harian/laporan-pdf/2023-01-01" class="btn btn-primary export-url-harian" target="_blank">Export PDF</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card flex shadow mb-5">
                                        <div class="card-header">
                                            Laporan Bulanan
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label>Bulan</label>
                                                <select name="tanggal" class="form-control bulanan-bulan">
                                                    <option value="01">Januari</option>
                                                    <option value="02">Februari</option>
                                                    <option value="03">Maret</option>
                                                    <option value="04">April</option>
                                                    <option value="05">Mei</option>
                                                    <option value="06">Juni</option>
                                                    <option value="07">Juli</option>
                                                    <option value="08">Agustus</option>
                                                    <option value="09">September</option>
                                                    <option value="10">Oktober</option>
                                                    <option value="11">November</option>
                                                    <option value="12">Desember</option>
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <label>Tahun</label>
                                                <select name="tanggal" class="form-control bulanan-tahun">
                                                    <option value="2023">2023</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2025">2025</option>
                                                </select>
                                            </div>
                                            <input type="hidden" class="bulanan" name="bulanan" value="2023-01">

                                            <div class="col mt-3 mb-3 mx-3">
                                                <br><a href="Laporan/bulanan/laporan-pdf/2023-01" class="btn btn-primary export-url-bulanan" target="_blank">Export PDF</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card flex shadow mb-5">
                                        <div class="card-header">
                                            Laporan Tahunan
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label>Tahun</label>
                                                <select name="tanggal" class="form-control tahunan-tahun">
                                                    <option value="2023">2023</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2025">2025</option>
                                                </select>
                                            </div>
                                            <input type="hidden" class="tahunan" name="tahunan" value="2023">

                                            <div class="col mt-6 mb-3 mx-3">
                                                <br><a href="Laporan/tahunan/laporan-pdf/2023" class="btn btn-primary export-url-tahunan" target="_blank">Export PDF</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="card flex shadow mb-5">
                                        <div class="card-header">
                                            Laporan Per Treatment
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label>Nama Treatment</label>
                                                <select class="form-control nama-treatment" name="nama_treatment" id="nama_treatment">
                                                    <?php foreach ($treatment as $t) { ?>
                                                        <option value="<?= $t->nama_treatment ?>"><?= $t->nama_treatment ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                            <div class="col mt-3 mb-3 mx-3">
                                                <br><a href="Laporan/treatment/laporan-pdf/Facial-Basic" class="btn btn-primary export-url-treatment" target="_blank">Export PDF</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<?php $this->endSection(); ?>

<?php $this->section('script'); ?>
<script>
    $('#filter_ya').on('click', function() {
        if ($(this).is(':checked')) {
            $('.treatment').css('display', 'block');
        } else {
            $('.treatment').css('display', 'none');
        }
    });

    $('#filter_tidak').on('click', function() {
        if ($(this).is(':checked')) {
            $('.treatment').css('display', 'none');
        } else {
            $('.treatment').css('display', 'block');
        }
    });

    $('.harian-tanggal').on('change', function() {
        let harian = $('.harian').val();
        let explode = harian.split('-');

        let tanggal = $('.harian-tanggal').val();
        explode[2] = tanggal;

        let implode = explode.join('-');
        $('.harian').val(implode);
        $('.export-url-harian').attr('href', 'Laporan/harian/laporan-pdf/' + implode);
    });

    $('.harian-bulan').on('change', function() {
        let harian = $('.harian').val();
        let explode = harian.split('-');

        let bulan = $('.harian-bulan').val();
        explode[1] = bulan;

        let implode = explode.join('-');
        $('.harian').val(implode);
        $('.export-url-harian').attr('href', 'Laporan/harian/laporan-pdf/' + implode);
    });

    $('.harian-tahun').on('change', function() {
        let harian = $('.harian').val();
        let explode = harian.split('-');

        let tahun = $('.harian-tahun').val();
        explode[0] = tahun;

        let implode = explode.join('-');
        $('.harian').val(implode);
        $('.export-url-harian').attr('href', 'Laporan/harian/laporan-pdf/' + implode);
    });

    $('.bulanan-bulan').on('change', function() {
        let bulanan = $('.bulanan').val();
        let explode = bulanan.split('-');

        let bulan = $('.bulanan-bulan').val();
        explode[1] = bulan;

        let implode = explode.join('-');
        $('.bulanan').val(implode);
        $('.export-url-bulanan').attr('href', 'Laporan/bulanan/laporan-pdf/' + implode);
    });

    $('.bulanan-tahun').on('change', function() {
        let bulanan = $('.bulanan').val();
        let explode = bulanan.split('-');

        let tahun = $('.bulanan-tahun').val();
        explode[0] = tahun;

        let implode = explode.join('-');
        $('.bulanan').val(implode);
        $('.export-url-bulanan').attr('href', 'Laporan/bulanan/laporan-pdf/' + implode);
    });

    $('.tahunan-tahun').on('change', function() {
        let tahunan = $('.tahunan').val();
        let explode = tahunan.split('-');

        let tahun = $('.tahunan-tahun').val();
        explode[0] = tahun;

        let implode = explode.join('-');
        $('.tahunan').val(implode);
        $('.export-url-tahunan').attr('href', 'Laporan/tahunan/laporan-pdf/' + implode);
    });

    $('.nama-treatment').on('change', function() {
        let jenis = $('.nama-treatment').val();
        // explode ( and get first element
        let detail_url = jenis.split('(')[0];
        // trim space
        detail_url = detail_url.trim();
        // replace all space with -
        detail_url = detail_url.replace(/\s/g, '-');

        $('.export-url-treatment').attr('href', 'Laporan/treatment/laporan-pdf/' + detail_url);
    });
</script>
<?php $this->endSection(); ?>