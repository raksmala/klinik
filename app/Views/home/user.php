<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <script>
        function validatePassword() {
            var password = document.getElementById("password").value;

            if(password == "") {
                return true;
            }

            if (password.length < 8) {
                alert("Password harus terdiri dari minimal 8 karakter!");
                return false;
            }

            if (!password.match(/[0-9]/) || !password.match(/[a-zA-Z]/)) {
                alert("Password harus terdiri dari ANGKA dan HURUF!");
                return false;
            }
        }
    </script>
</head>

<body>
    <style>
        .password-toggle {
            cursor: pointer;
            color: #000;
            font-size: 12px;
        }

        .password-text {
            color: #000;
            font-size: 12px;
        }
    </style>
    <br>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <form method="post" action="<?= base_url('home/user/profile/simpan') ?>/<?= session()->get('user_id') ?>" onsubmit="return validatePassword()">
                    <div class="flex flex-col p-5 bg-white shadow-lg relative max-w-[592px]">
                        <h2 class="text-xl md:text-4xl text-gray-800 mb-4">Profile</h2>
                        <hr style="border-color: black;">
                        <div class="flex mb-3">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Username</label>
                                <input class="form-control" type="text" placeholder="<?= session()->get('username') ?>" value="<?= session()->get('username') ?>" name="username" aria-label="input example">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Password</label>
                                <div style="margin-top:-10px">
                                    <span class="password-text">Kosongkan jika tidak ingin merubah</span>
                                </div>
                                <div class="password-wrapper">
                                    <input class="form-control" type="password" id="password" name="password" aria-label="input example">
                                    <span class="password-toggle" onclick="togglePasswordVisibility()">Lihat Password</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                                <input type="hidden" name="user_id" value="<?= session()->get('user_id') ?>">
                                <!-- input hidden of current path without base url -->
                                <input class="form-control" type="text" placeholder="<?= session()->get('nama_lengkap') ?>" value="<?= session()->get('nama_lengkap') ?>" name="nama_lengkap" aria-label="input example">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                                <input class="form-control" type="text" placeholder="<?= session()->get('alamat') ?>" value="<?= session()->get('alamat') ?>" name="alamat" aria-label="input example">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nomor Telepon</label>
                                <input class="form-control" type="text" placeholder="<?= session()->get('nomor_telepon') ?>" value="<?= session()->get('nomor_telepon') ?>" name="nomor_telepon" aria-label="input example">
                            </div>
                            <button type="submit" class="btn btn-primary btn-submit">Simpan Data</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div><br>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
</script>

</html>