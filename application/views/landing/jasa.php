<section class="page-section">
  <div class="container">
    <div class="row shop-single">
      <div class="col-md-9 woocommerce">
        <div class="row">
          <!-- shop images -->

          <div class="col-md-5 mb-md-20">
            <div class="shop-container align-center alt-2">
              <a href="<?= base_url('assets/img/jasa/akupuntur-front.jpg') ?>" class="lightbox mfp-image">
                <div class="shop-media big">
                  <div class="shop-img">
                    <img src="<?= base_url('assets/img/jasa/akupuntur-front.jpg') ?>" data-at2x="<?= base_url('assets/img/jasa/akupuntur-front.jpg') ?>" alt />
                  </div>
                </div>
              </a>
            </div>
          </div>

          <!-- /shop images -->

          <!-- shop description -->

          <div class="col-md-7 md-center">
            <h4 class="product-title font-alt">Akupuntur</h4>

            <p class="mt-10">
              Akupuntur adalah sebuah teknik pengobatan yang dilakukan dengan menusukkan jarum di titik-titik tertentu di tubuh untuk menstimulasi kerja organ. Terapi akupuntur sudah sejak dulu dipercaya bisa mengobati berbagai penyakit.
            </p>
            <h6 class="shop-single-title-small mb-10">More</h6>
            <div class="title-under alt font-alt">
              <a href="#">
                <h3>Refleksi</h3>
              </a>
              <div class="img-line">
                <img src="<?= base_url('assets/relish/images/lines/img-line-26.png'); ?>" data-at2x="<?= base_url('assets/relish/images/lines/img-line-26@2x.png'); ?>" alt />
              </div>
              <a href="#">
                <h3>Cupping</h3>
              </a>
              <div class="img-line">
                <img src="<?= base_url('assets/relish/images/lines/img-line-26.png'); ?>" data-at2x="<?= base_url('assets/relish/images/lines/img-line-26@2x.png'); ?>" alt />
              </div>
              <a href="#">
                <h3>Relaksasi</h3>
              </a>
              <br />
              <a href="#">
                <h3>Baby Spa</h3>
              </a>
            </div>
          </div>

          <!-- shop description -->
        </div>
        <hr class="mt-60 mb-60 alt-2" />

        <!-- shop grid or list -->

        <div class="group mt-40">
          <p class="result-count">Showing 1–9 of 50 results</p>
          <div id="list-grid">
            <div class="grid-view active" title="Switch to grid view">
              <i class="flaticon-squares-1"></i>
            </div>
            <!--
								-->
            <div class="list-view" title="Switch to list view">
              <i class="flaticon-squares-2"></i>
            </div>
          </div>
          <form class="woocommerce-ordering" method="get">
            <select name="orderby" class="orderby">
              <option value="menu_order">Sort by newness</option>
              <option value="popularity">Sort by popularity</option>
              <option value="rating">Sort by average rating</option>
              <option value="price">Sort by price: low to high</option>
              <option value="price-desc">
                Sort by price: high to low
              </option>
            </select>
          </form>
        </div>

        <!-- /shop grid or list -->

        <!-- message -->

        <div class="group mt-40">
          <strong class="text-danger">
            Pastikan Anda memilih terapis yang sama jika memesan lebih dari 1 layanan
          </strong>
        </div>

        <!-- /message -->

        <!-- shop products -->

        <div class="row mt-40 products">
          <?php foreach ($landing as $row) { ?>
            <!-- shop item -->
            <!-- start looping-->
            <div class="col-md-4 col-sm-4 mb-60">
              <div class="shop-container align-center alt-2">
                <a href="<?= base_url('resources/picture/layanan/' . $row->gambar); ?>" class="lightbox mfp-image">
                  <div class="shop-media">
                    <div class="shop-img">
                      <img src="<?= base_url('resources/picture/layanan/' . $row->gambar); ?>" data-at2x="<?= base_url('assets/relish/images/shop/img-1@2x.jpg'); ?>" alt />
                    </div>
                    <div class="label-new label-left font-alt">New</div>
                  </div>
                </a>
                <a href="#">
                  <h3 class="shop-title font-alt"><?php echo $row->nama; ?></h3>
                </a>
                <a href="#">
                  <font size="2">Terapis : <?php echo $row->terapis; ?></font>
                </a>
                <div class="shop-stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <div class="shop-price font-alt"><?php echo "Rp " . number_format($row->harga, 2, ",", "."); ?>
                  <span></span>
                </div>
                <p>
                  Phasellus tristique diam turpis, vitae rhoncus mi
                  ultricies vel
                </p>
                <a href="<?php echo base_url('cart/add/') . $row->iddetaillayanan; ?>" class="button small">Add to cart</a>
              </div>
            </div>
          <?php } ?>
          <!-- /shop item -->
          <!-- /stop looping -->

        </div>

        <!-- /shop products -->
      </div>
      <div class="col-md-3">
        <!-- widget search -->

        <aside class="widget-search">
          <h3>Search Products</h3>
          <?php echo form_open('landing/search'); ?>
          <label>
            <input type="search" class="form-control" placeholder="Search..." value="" name="keyword" title="Search for:" />
          </label>
          <button type="submit" class="search-submit">
            <i class="flaticon-search"></i>
          </button>
          <?php echo form_close() ?>
        </aside>

        <!-- /widget search -->
      </div>
    </div>
</section>

<hr class="mt-0 mb-0 alt-2" />
<?php echo $this->session->flashdata('status');?>