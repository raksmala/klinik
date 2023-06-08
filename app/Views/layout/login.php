<!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
  <style>
    .background-radial-gradient {
      background-color: #ffffff;
    }

    #radius-shape-1 {
      height: 220px;
      width: 220px;
      top: -60px;
      left: -130px;
      background: radial-gradient(#fadadd, #ef98aa);
      overflow: hidden;
    }

    #radius-shape-2 {
      border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
      bottom: -60px;
      right: -110px;
      width: 300px;
      height: 300px;
      background: radial-gradient(#fadadd, #ef98aa);
      overflow: hidden;
    }
  </style>

  <div class="container px-4 py-5 px-md-5 text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: #ef98aa;">
          WEBSITE KLINIK<br />
          <span style="color: #ef98aa;">-ADIVA BEAUTY SKIN-</span>
        </h1>
        <p class="mb-4 opacity-70" style="color: #000000;">
          Silahkan LOGIN terlebih dahulu sebelum melakukan Reservasi Treatment!
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
            <form class="auth-login-form mt-2" action="<?= base_url('cekLogin') ?>" method="POST">
              <?php if (session()->getFlashData('pesan')) : ?>
                <div class="alert alert-warning" role="alert">
                  <div class="alert-body d-flex align-items-center">
                    <i data-feather="info" class="me-50"></i>
                    <span><?= session()->getFlashdata('pesan') ?></span>
                  </div>
                </div>
              <?php endif; ?>

              <?php if (session()->getFlashData('error')) : ?>
                <div class="alert alert-danger" role="alert">
                  <div class="alert-body d-flex align-items-center">
                    <i data-feather="info" class="me-50"></i>
                    <span><?= session()->getFlashdata('error') ?></span>
                  </div>
                </div>
              <?php endif; ?>

              <h3 class="mb-5 text-center">LOGIN</h3>
              <div class="form-outline mb-4">
                <label class="form-label" for="form3Example1cg">Username
                </label>
                <input type="text" id="username" name="Username" class="form-control" placeholder="Username" autofocus required oninvalid="this.setCustomValidity('Masukkan Username Anda')" oninput="this.setCustomValidity('Masukkan Username Anda')" onchange="this.setCustomValidity('')" />
              </div>

              <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4cg">Password</label>
                <input type="password" id="password" name="Password" class="form-control" minlength="8" placeholder="Password" autofocus required oninvalid="this.setCustomValidity('Password Minimal 8 Karakter')" oninput="this.setCustomValidity('Password Minimal 8 Karakter')" onchange="this.setCustomValidity('')" />
              </div>

              <!-- Submit button -->
              <button class="btn btn-primary w-100 mt-2" tabindex="4">LOGIN</button>

              <!-- Register buttons -->
              <div class="text-center">
                <p>Belum punya Akun? <a href="/layout/register">Register</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->

<script>

</script>