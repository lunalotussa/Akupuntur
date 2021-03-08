<section class="small-section alt-color" id="jasa">
  <div class="container align-center">
    <h3 class="section-title bottom-line font-alt">
      Pembayaran Anda sedang dikonfirmasi.
    </h3>
    <div class="col-md-10 col-md-offset-1">
      <p>
        Pembayaran Anda sedang dikonfirmasi oleh Admin.
        <a href="<?= base_url('cart/history'); ?>"><u>Klik disini</u></a>
        untuk melihat status konfirmasi.
        <br>
        Atau hubungi kami melalui kontak dibawah ini.
      </p>
    </div>
  </div>
</section>

<!-- Kontak section -->
<section class="page-section" id="kontak">
  <div class="container align-center">
    <h3 class="section-title bottom-line font-alt">
      Hubungi Kami<span>Any Questions?</span>
    </h3>
    <div class="row">
      <!-- contact offices -->

      <div class="col-md-6 col-lg-4 mb-md-30">
        <div class="contact-offices">
          <h4 class="contact-title font-alt">Kantor Kami</h4>
          <div class="img-line">
            <img src="images/lines/img-line-40.png" data-at2x="images/lines/img-line-40@2x.png" alt />
          </div>
          <p>
            Kami berlokasi di Malang
          </p>
        </div>
      </div>

      <!-- /contact offices -->

      <!-- contact form -->

      <div class="col-md-6 col-lg-4 mb-md-30">
        <div class="contact-forms">
          <h4 class="contact-title font-alt">Hubungi Kami</h4>
          <div class="img-line">
            <img src="images/lines/img-line-40.png" data-at2x="images/lines/img-line-40@2x.png" alt />
          </div>
          <div class="email_server_responce"></div>
          <form action="php/contacts-process.php" id="contact-form" class="contact-form form mt-10" method="post">
            <input id="name" name="name" type="text" value="" size="30" aria-required="true" placeholder="Nama" class="input-md form-control" />
            <input id="email" name="email" type="text" value="" size="30" aria-required="true" placeholder="Email" class="input-md form-control" />
            <textarea id="message" name="message" cols="45" rows="8" aria-required="true" placeholder="Pesan" class="input-md form-control mb-20"></textarea>
            <button class="button small" name="submit" type="submit">
              Submit
            </button>
          </form>
        </div>
      </div>

      <!-- /contact form -->

      <!-- contact follow -->

      <div class="col-md-12 col-lg-4">
        <div class="contact-follow">
          <h4 class="contact-title font-alt">Kontak Kami</h4>
          <div class="img-line">
            <img src="images/lines/img-line-40.png" data-at2x="images/lines/img-line-40@2x.png" alt />
          </div>
          <p>
            785 Carriage Drive, Jacksonville<br />
            Beach, FL 32250
          </p>
          <p>
            <a href="tel:203-284-2818">203-284-2818</a> <br />
            <a href="tel:203-284-2818">203-284-2818</a>
          </p>
          <p class="mail">
            <a href="mailto:info@your-site.com">info@your-site.com</a>,
            <br />
            <a href="mailto:sales@your-site.com">sales@your-site.com</a>
          </p>
          <h4 class="contact-title font-alt">Follow Us</h4>
          <div class="contact-soc">
            <a href="#">
              <i class="flaticon-social"></i>
            </a>
            <a href="#">
              <i class="flaticon-social-5"></i>
            </a>
            <a href="#">
              <i class="flaticon-social-4"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- /contact follow -->
    </div>
  </div>
</section>
<!-- /Kontak section -->

<hr class="mt-0 mb-0 alt-2" />