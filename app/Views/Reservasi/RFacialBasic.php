<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservasi</title>
    <style>
        input[type="date"]::-webkit-inner-spin-button,
        input[type="date"]::-webkit-clear-button {
            display: none;
        }

        /* Style Checkbox */
        .custom-checkbox {
            display: inline-block;
            position: relative;
            padding: 0;
            cursor: pointer;
        }

        .custom-checkbox .custom-checkbox-input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        .custom-checkbox .custom-checkbox-label {
            display: inline-block;
            padding: 0.5rem 1rem;
            border: 1px solid #1E90FF;
            border-radius: 0.25rem;
            transition: background-color 0.3s ease-in-out;
        }

        .custom-checkbox .custom-checkbox-label.disabled {
            background-color: #e9ecef;
            color: #6c757d;
            cursor: not-allowed;
        }

        .custom-checkbox .custom-checkbox-input:checked~.custom-checkbox-label,
        .custom-checkbox .custom-checkbox-input:hover~.custom-checkbox-label {
            background-color: #1E90FF;
            color: #fff;
        }
    </style>
</head>

<body>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/Detail/FacialBasic">Facial Basic</a></li>
            <li class="breadcrumb-item active" aria-current="page">Reservasi</li>
        </ol>
    </nav>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="flex flex-col p-5 bg-white shadow-lg relative max-w-[592px]">
                    <h5 class=" text-sm md:text-base text-gray-600 mb-2">Perawatan terpilih</h5>
                    <div class="container">
                        <div class="row flex shadow">
                            <div class="col-4 p-0">
                                <img src="/img/facial basic.jpg" class="img-fluid" alt="...">
                            </div>
                            <div class="col-8 my-3">
                                <h4 class="text-base md:text-lg text-gray-800 font-bold">Facial Basic</h4>
                                <p class="text-sm md:text-base mb-auto line-clamp-4">Jenis perawatan kulit wajah dasar yang bertujuan untuk membersihkan dan merawat kulit wajah secara menyeluruh.</p><strong>Rp. 55.000</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-6">
                <form method="post" action="<?= base_url('Reservasi/simpan') ?>">
                    <div class="flex flex-col p-5 bg-white shadow-lg relative max-w-[592px]">
                        <h2 class="text-xl md:text-4xl text-gray-800 mb-4">Reservasi</h2>
                        <hr style="border-color: black;">
                        <div class="flex mb-3">
                            <div class="form-floating mb-3">
                                <h6>Pilih Tanggal</h6>
                                <input type="date" id="tanggal" name="tanggal" min="<?= date('Y-m-d', strtotime('+0 days')) ?>" max="<?= date('Y-m-d', strtotime('+10 days')) ?>" required>
                            </div>
                            <h6>Sesi Treatment</h6>
                            <p><small>(Pilih Salah Satu Sesi Treatment yang Masih Tersedia)</small></p>
                            <div class="container">
                                <div class="row mx-6 my-3">
                                    <div class="col-6 col-sm-5">
                                        <label class="custom-checkbox">
                                            <input class="custom-checkbox-input js-checkbox" type="checkbox" name="jam" value="08.00 - 10.00" data-max="3">
                                            <span class="custom-checkbox-label">08:00 - 10:00</span>
                                        </label>

                                    </div>
                                    <div class="col-6 col-sm-5">
                                        <label class="custom-checkbox">
                                            <input class="custom-checkbox-input js-checkbox" type="checkbox" name="jam" value="10.00 - 12.00" data-max="3">
                                            <span class="custom-checkbox-label">10:00 - 12:00</span>
                                        </label>
                                    </div>

                                    <!-- Force next columns to break to new line at md breakpoint and up -->
                                    <div class="w-100 d-none d-md-block my-2 mx-2"></div>

                                    <div class="col-6 col-sm-5">
                                        <label class="custom-checkbox">
                                            <input class="custom-checkbox-input js-checkbox" type="checkbox" name="jam" value="12.45 - 15.00" data-max="3">
                                            <span class="custom-checkbox-label">12:45 - 15:00</span>
                                        </label>
                                    </div>
                                    <div class="col-6 col-sm-5">
                                        <label class="custom-checkbox">
                                            <input class="custom-checkbox-input js-checkbox" type="checkbox" name="jam" value="15.00 - 17.00" data-max="3">
                                            <span class="custom-checkbox-label">15:00 - 17:00</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                                <input type="hidden" name="user_id" value="<?= session()->get('user_id') ?>">
                                <!-- input hidden of current path without base url -->
                                <input type="hidden" name="return_url" value="<?= $_SERVER['REQUEST_URI'] ?>">
                                <input class="form-control" type="text" placeholder="<?= session()->get('nama_lengkap') ?>" value="<?= session()->get('nama_lengkap') ?>" name="nama_lengkap" aria-label="Disabled input example" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                                <input class="form-control" type="text" placeholder="<?= session()->get('alamat') ?>" value="<?= session()->get('alamat') ?>" name="alamat" aria-label="Disabled input example" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nomor Telepon</label>
                                <input class="form-control" type="text" placeholder="<?= session()->get('nomor_telepon') ?>" value="<?= session()->get('nomor_telepon') ?>" name="nomor_telepon" aria-label="Disabled input example" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Treatment</label>
                                <input class="form-control" type="text" placeholder="Facial Basic" value="Facial Basic" id="nama_treatment" name="nama_treatment" aria-label="Disabled input example" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Total Yang Harus Dibayar</label>
                                <input class="form-control" type="text" placeholder="Rp 55.000" value="Rp 55.000" name="total" aria-label="Disabled input example" readonly>
                            </div>
                        </div>
                        <a href="/Treatment/Facial" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary">Kirim Reservasi</button>
                    </div>
                </form>
            </div>
        </div>
    </div><br>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('#tanggal').on('change', function() {
        const tanggal = $(this).val();
        const treatment = $('#nama_treatment').val();
        $.ajax({
            url: "<?= base_url('Reservasi/cek-sesi') ?>",
            type: "POST",
            data: {
                tanggal: tanggal,
                treatment: treatment,
            },
            dataType: "JSON",
            success: function(data) {
                const groupedData = data.reduce((acc, curr) => {
                    const sesi = curr.sesi_reservasi;
                    acc[sesi] = (acc[sesi] || 0) + 1;
                    return acc;
                }, {});

                $('.js-checkbox').each(function() {
                    const sesi = $(this).val();

                    if(groupedData[sesi] === parseInt($(this).data('max'))) {
                        $(this).prop('disabled', true);
                        $(this).next().addClass('disabled');
                    } else {
                        $(this).prop('disabled', false);
                        $(this).next().removeClass('disabled');
                    }
                });
            }
        });
    });
</script>

</html>