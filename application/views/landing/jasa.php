<section class="page-section">
  <div class="container">
    <div class="row shop-single">
      <div class="col-md-9 woocommerce">
        <div class="row">
          <!-- shop images -->

          <div class="col-md-5 mb-md-20">
            <div class="shop-container align-center alt-2">
              <a href="<?= base_url('assets/relish/images/shop/big-img-1@2x.jpg'); ?>" class="lightbox mfp-image">
                <div class="shop-media big">
                  <div class="shop-img">
                    <img src="<?= base_url('assets/relish/images/shop/big-img-1.jpg'); ?>" data-at2x="<?= base_url('assets/relish/images/shop/big-img-1@2x.jpg'); ?>" alt />
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
              Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Illum reiciendis, eos aliquid maxime esse repellat neque.
              Pariatur tempore minus, sit distinctio temporibus adipisci
              sequi laborum iure et aliquid placeat necessitatibus!
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

        <!-- shop products -->

        <div class="row mt-40 products">
         <?php foreach($landing as $row) { ?>
          <!-- shop item --><!-- start looping-->
          <div class="col-md-4 col-sm-4 mb-60">
            <div class="shop-container align-center alt-2">
              <a href="<?= base_url('assets/relish/images/shop/img-1@2x.jpg'); ?>" class="lightbox mfp-image">
                <div class="shop-media">
                  <div class="shop-img">
                    <img src="<?= base_url('assets/relish/images/shop/img-1.jpg'); ?>" data-at2x="<?= base_url('assets/relish/images/shop/img-1@2x.jpg'); ?>" alt />
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
              <div class="shop-price font-alt"><?php echo "Rp ".number_format($row->harga, 2, ",", "."); ?>
              <span></span></div>
              <p>
                Phasellus tristique diam turpis, vitae rhoncus mi
                ultricies vel
              </p>
              <a href="<?php echo base_url('cart/add/').$row->iddetaillayanan; ?>" class="button small">Add to cart</a>
            </div>
          </div>
        <?php }?>
          <!-- /shop item --> <!-- /stop looping -->
          
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

        <!-- widget filter -->

        <aside class="widget-filter">
          <h3>Filter by price</h3>
          <form method="get" action="#">
            <div class="price_slider_wrapper">
              <div class="price_slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false">
                <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                <a class="ui-slider-handle ui-state-default ui-corner-all" href="#"><span class="from"></span></a>
                <a class="ui-slider-handle ui-state-default ui-corner-all" href="#"><span class="to"></span></a>
                <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
              </div>
              <div class="price_slider_amount">
                <input type="text" id="min_price" name="min_price" value="" data-min="2" placeholder="Min price" style="display: none" />
                <input type="text" id="max_price" name="max_price" value="" data-max="35" placeholder="Max price" style="display: none" />
                <div class="price_label">
                  Price: <span class="from">Rp 75000</span><span> - </span><span class="to">Rp 200000</span>
                </div>
                <input type="hidden" name="post_type" value="product" />
              </div>
              <button type="submit" class="button small right">
                Filter
              </button>
            </div>
          </form>
        </aside>

        <!-- /widget filter -->

        <!-- widget selers -->

        <aside class="widget-selers">
          <h3>Best Selers</h3>
          <div class="widget-slider-2 nav-alt-1">
            <div class="slider-item">
              <article class="clearfix">
                <div class="product">
                  <img src="<?= base_url('assets/relish/images/shop/mini/img-2.jpg'); ?>" data-at2x="<?= base_url('assets/relish/images/shop/mini/img-2@2x.jpg'); ?>" alt />
                </div>
                <h4>Crème De La Mer</h4>
                <div class="shop-stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <p>$44.99</p>
              </article>
              <article class="clearfix">
                <div class="product">
                  <img src="<?= base_url('assets/relish/images/shop/mini/img-2.jpg'); ?>" data-at2x="<?= base_url('assets/relish/images/shop/mini/img-2@2x.jpg'); ?>" alt />
                </div>
                <h4>MB Foot Wash</h4>
                <div class="shop-stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <p>$59.99</p>
              </article>
              <article class="clearfix">
                <div class="product">
                  <img src="<?= base_url('assets/relish/images/shop/mini/img-2.jpg'); ?>" data-at2x="<?= base_url('assets/relish/images/shop/mini/img-2@2x.jpg'); ?>" alt />
                </div>
                <h4>KAI Face Butter</h4>
                <div class="shop-stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <p>$29.99</p>
              </article>
            </div>
            <div class="slider-item">
              <article class="clearfix">
                <div class="product">
                  <img src="<?= base_url('assets/relish/images/shop/mini/img-2.jpg'); ?>" data-at2x="<?= base_url('assets/relish/images/shop/mini/img-2@2x.jpg'); ?>" alt />
                </div>
                <h4>Crème De La Mer</h4>
                <div class="shop-stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <p>$44.99</p>
              </article>
              <article class="clearfix">
                <div class="product">
                  <img src="<?= base_url('assets/relish/images/shop/mini/img-2.jpg'); ?>" data-at2x="<?= base_url('assets/relish/images/shop/mini/img-2@2x.jpg'); ?>" alt />
                </div>
                <h4>MB Foot Wash</h4>
                <div class="shop-stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <p>$59.99</p>
              </article>
              <article class="clearfix">
                <div class="product">
                  <img src="<?= base_url('assets/relish/images/shop/mini/img-2.jpg'); ?>" data-at2x="<?= base_url('assets/relish/images/shop/mini/img-2@2x.jpg'); ?>" alt />
                </div>
                <h4>KAI Face Butter</h4>
                <div class="shop-stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <p>$29.99</p>
              </article>
            </div>
          </div>
        </aside>

        <!-- /widget selers -->

        <!-- widget banner -->

        <aside class="widget-banner align-center">
          <article class="clearfix">
            <div class="product">
              <img src="<?= base_url('assets/relish/images/shop/mini/img-8.jpg'); ?>" data-at2x="<?= base_url('assets/relish/images/shop/mini/img-8@2x.jpg'); ?>" alt />
            </div>
            <span class="font-alt">-20%</span>
            <div class="font-alt">
              Valentine's Day
              <div>
                <div class="img-line">
                  <img src="<?= base_url('assets/relish/images/lines/img-line-26.png'); ?>" data-at2x="<?= base_url('assets/relish/images/lines/img-line-26@2x.png'); ?>" alt />
                </div>
              </div>
            </div>
            <p>Coupon Code: 12345</p>
          </article>
        </aside>

        <!-- /widget banner -->
      </div>
    </div>
  </div>
</section>

<hr class="mt-0 mb-0 alt-2" />