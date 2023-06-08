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
                        <div class="container">
                            <div class="row">
                                <div class="col-4">
                                    <div class="card flex shadow mb-5">
                                        <div class="card-header">
                                            Laporan Harian
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label>Tanggal</label>
                                                <select name="tanggal" class="form-control">
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
                                                <select name="tanggal" class="form-control">
                                                    <option value="Jan">Januari</option>
                                                    <option value="Feb">Februari</option>
                                                    <option value="Mar">Maret</option>
                                                    <option value="Apr">April</option>
                                                    <option value="Mei">Mei</option>
                                                    <option value="Jun">Juni</option>
                                                    <option value="Jul">Juli</option>
                                                    <option value="Agus">Agustus</option>
                                                    <option value="Sep">September</option>
                                                    <option value="Okt">Oktober</option>
                                                    <option value="Nov">November</option>
                                                    <option value="Des">Desember</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label>Tahun</label>
                                                <select name="tanggal" class="form-control">
                                                    <option value="2023">2023</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2025">2025</option>
                                                </select>
                                            </div>

                                            <div class="col mt-3 mb-3 mx-3">
                                                <br><a href="#" class="btn btn-primary">Export PDF</a>
                                                <a href="#" class="btn btn-primary">Cetak Laporan</a>
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
                                                <select name="tanggal" class="form-control">
                                                    <option value="Jan">Januari</option>
                                                    <option value="Feb">Februari</option>
                                                    <option value="Mar">Maret</option>
                                                    <option value="Apr">April</option>
                                                    <option value="Mei">Mei</option>
                                                    <option value="Jun">Juni</option>
                                                    <option value="Jul">Juli</option>
                                                    <option value="Agus">Agustus</option>
                                                    <option value="Sep">September</option>
                                                    <option value="Okt">Oktober</option>
                                                    <option value="Nov">November</option>
                                                    <option value="Des">Desember</option>
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <label>Tahun</label>
                                                <select name="tanggal" class="form-control">
                                                    <option value="2023">2023</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2025">2025</option>
                                                </select>
                                            </div>

                                            <div class="col mt-3 mb-3 mx-3">
                                                <br><a href="#" class="btn btn-primary">Export PDF</a>
                                                <a href="#" class="btn btn-primary">Cetak Laporan</a>
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
                                                <select name="tanggal" class="form-control">
                                                    <option value="2023">2023</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2025">2025</option>
                                                </select>
                                            </div>

                                            <div class="col mt-6 mb-3 mx-3">
                                                <br><a href="#" class="btn btn-primary">Export PDF</a>
                                                <a href="#" class="btn btn-primary">Cetak Laporan</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
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

<?php $this->endSection(); ?>
</div>