<!DOCTYPE html>
<html>

<head>
    <title>Validasi Password</title>
    <script>
        function validatePassword() {
            var password = document.getElementById("password").value;
            var passwordConfirm = document.getElementById("password-confirm").value;

            if (password.length < 8) {
                alert("Password harus terdiri dari minimal 8 karakter!");
                return false;
            }

            if (!password.match(/[0-9]/) || !password.match(/[a-zA-Z]/)) {
                alert("Password harus terdiri dari ANGKA dan HURUF!");
                return false;
            }

            if (password != passwordConfirm) {
                alert("Password dan Konfirmasi Password harus sama!");
                return false;
            }

            var nomor_telepon = document.getElementById("nomor_telepon").value;

            // nomor_telepon should contains number only
            if (nomor_telepon.match(/^[0-9]+$/) == null) {
                alert("Nomor Telepon harus terdiri dari ANGKA!");
                return false;
            }

            if (!nomor_telepon.match(/^(08|628)/)) {
                alert("Nomor Telepon harus diawali dengan 08 atau 628!");
                return false;
            }

            if (nomor_telepon.length < 10) {
                alert("Nomor Telepon harus terdiri dari minimal 10 karakter!");
                return false;
            }

            return true;
        }
    </script>
</head>

<body>
    <style>
        .password-toggle,
        .password-confirm-toggle {
            cursor: pointer;
            color: #000;
            font-size: 12px;
        }
    </style>
    <section class="vh-300 bg-image" style="background-image: url('https://www.seekpng.com/png/full/6-64122_png-pictures.png');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100 my-5">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center">REGISTRASI</h2>
                                <p class="text-center mb-4">Silahkan isi form dibawah ini dengan benar!</p>
                                <form action='<?= base_url('simpanRegister') ?>' method="post" onsubmit="return validatePassword()">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="nama">Nama Lengkap
                                        </label>
                                        <input type="text" id="nama_lengkap" class="form-control" placeholder="Nama Lengkap" name="nama" autofocus required oninvalid="this.setCustomValidity('Masukkan Nama Lengkap Anda')" oninput="this.setCustomValidity('Masukkan Nama Lengkap Anda')" onchange="this.setCustomValidity('')" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="username">Username
                                        </label>
                                        <input type="text" id="username" class="form-control" placeholder="Username" name="username" autofocus required oninvalid="this.setCustomValidity('Masukkan Username Anda')" oninput="this.setCustomValidity('Masukkan Username Anda')" onchange="this.setCustomValidity('')" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="password">Password</label>
                                        <div class="password-wrapper">
                                            <input type="password" id="password" class="form-control" placeholder="Password" name="password" autofocus required onchange="this.setCustomValidity('')" />
                                            <span class="password-toggle" onclick="togglePasswordVisibility()">Lihat Password</span>
                                        </div>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="password">Konfirmasi Password</label>
                                        <div class="password-wrapper">
                                            <input type="password" id="password-confirm" class="form-control"placeholder="Konfirmasi Password" name="password-confirm" autofocus required onchange="this.setCustomValidity('')" />
                                            <span class="password-confirm-toggle" onclick="togglePasswordConfirmVisibility()">Lihat Password</span>
                                        </div>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="alamat">Alamat
                                        </label>
                                        <input type="text" id="alamat" class="form-control" placeholder="Alamat" name="alamat" autofocus required oninvalid="this.setCustomValidity('Masukkan Alamat Anda')" oninput="this.setCustomValidity('Masukkan Alamat Anda')" onchange="this.setCustomValidity('')" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="nomor telepon">No. Telephone
                                        </label>
                                        <input type="text" id="nomor_telepon" class="form-control" placeholder="Masukkan No. Telephone Anda" name="nomor telepon" autofocus required oninvalid="this.setCustomValidity('Masukkan No.Telephone Anda')" oninput="this.setCustomValidity('Masukkan No.Telephone Anda')" onchange="this.setCustomValidity('')" />
                                    </div>
                                    <!-- <div class="d-flex justify-content-center">
                                    <a href="/layout/login" class="btn btn-primary">Registrasi</a>
                                </div> -->
                                    <button type="submit" class="btn btn-primary">Registrasi</button>

                                    <p class="text-center text-muted mt-5 mb-0">Sudah punya Akun? <a href="/layout/login" class="fw-bold text-body"><u>Login Disini</u></a></p>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="app/public/assets/js/script.js"></script>
<script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById("password");
        var passwordToggle = document.querySelector(".password-toggle");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            passwordToggle.innerHTML = "Sembunyikan Password";
        } else {
            passwordInput.type = "password";
            passwordToggle.innerHTML = "Lihat Password";
        }
    }

    function togglePasswordConfirmVisibility() {
        var passwordConfirmInput = document.getElementById("password-confirm");
        var passwordConfirmToggle = document.querySelector(".password-confirm-toggle");

        if (passwordConfirmInput.type === "password") {
            passwordConfirmInput.type = "text";
            passwordConfirmToggle.innerHTML = "Sembunyikan Password";
        } else {
            passwordConfirmInput.type = "password";
            passwordConfirmToggle.innerHTML = "Lihat Password";
        }
    }
</script>

</html>