<section class="section g-fullheight g-bg-hijau p-0">
  <div class="columns is-vcentered g-fullheight">
    <div class="column g-bg-hero-login g-fullheight is-hidden-touch">
      <p class="has-text-right font-family-philosopher has-text-white is-size-5 mr-3 g-pos-bottom">
        The Perfect Blend of Technique & Relaxation
      </p>
    </div>
    <div class="column">
      <div class="columns is-centered">
        <div class="column is-half">
          <div class="container p-2">
            <div class="field is-grouped">
              <div class="control">
                <a href="<?= base_url(); ?>" class="has-text-dark has-text-weight-bold g-has-text-white-on-medium">&lt; Back</a>
              </div>
            </div>
            <h1 class="title has-text-weight-bold font-family-philosopher has-text-success">
              Daftar Customer
            </h1>
            <div class="notification is-danger">
              <button class="delete"></button>
              Akun sudah terdaftar.
            </div>
            <!-- Form -->
            <?= form_open('user/addCust'); ?>
            <div class="field">
              <label class="label g-has-text-white-on-medium">Nama Lengkap</label>
              <div class="control">
                <input type="hidden" name="hak_akses" value="Customer">
                <input class="input is-success" name="nama" type="text" placeholder="Masukkan Nama Lengkap" />
              </div>
            </div>
            <div class="field">
              <label class="label g-has-text-white-on-medium">Email</label>
              <div class="control">
                <input class="input is-success" name="email" type="email" placeholder="Masukkan Email" />
              </div>
            </div>
            <div class="field">
              <label class="label g-has-text-white-on-medium">Password</label>
              <div class="control has-icons-right">
                <input class="input is-success" name="password" type="password" placeholder="Masukkan Password" />
                <span class="icon is-small is-right mr-2">
                  <span>Show</span>
                </span>
              </div>
            </div>
            <div class="field is-grouped">
              <div class="control is-expanded">
                <label class="checkbox g-has-text-white-on-medium">
                  <input type="checkbox" />
                  Saya setuju dengan syarat & ketentuan
                </label>
              </div>
            </div>
            <div class="field mt-5">
              <div class="control">
                <button type="submit" name="login" class="button is-success is-fullwidth has-text-white has-text-weight-medium">
                  Daftar
                </button>
              </div>
            </div>
            <?= form_close(); ?>
            <!-- End Form -->
            <p class="has-text-grey has-text-centered mt-6 g-has-text-white-on-medium">
              Sudah Punya
              <a href="<?= base_url('login'); ?>" class="has-text-success">Akun?</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>