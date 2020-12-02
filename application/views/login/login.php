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
            <h1 class="title has-text-weight-bold font-family-philosopher has-text-success">
              Selamat Datang
            </h1>
            <h2 class="subtitle font-family-philosopher is-hidden-desktop has-text-white">
              The Perfect Blend of Technique & Relaxation
            </h2>
            <!-- Form -->
            <form action="<?= base_url(); ?>" method="POST">
              <div class="field">
                <label class="label g-has-text-white-on-medium">Email</label>
                <div class="control">
                  <input class="input is-success" name="email" type="email" placeholder="Your Email" />
                </div>
              </div>
              <div class="field">
                <label class="label g-has-text-white-on-medium">Password</label>
                <div class="control has-icons-right">
                  <input class="input is-success" name="password" type="password" placeholder="Your Password" />
                  <span class="icon is-small is-right mr-2">
                    <span>Show</span>
                  </span>
                </div>
              </div>
              <div class="field">
                <div class="control">
                  <button type="submit" name="login" class="button is-success is-fullwidth has-text-white has-text-weight-medium">
                    Masuk
                  </button>
                </div>
              </div>
            </form>
            <!-- End Form -->
            <p class="has-text-grey has-text-centered mt-6 g-has-text-white-on-medium">
              Pengguna Baru, Silahkan
              <a href="<?= base_url('regisCustomer'); ?>" class="has-text-success">Daftar</a>
            </p>
            <p class="has-text-grey has-text-centered mt-1 g-has-text-white-on-medium">
              Daftar klinik terapi Anda
              <a href="<?= base_url('regisTerapis'); ?>" class="has-text-success">Disini</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>