<section class="page-section">
    <div class="container">
        <div class="row shop-cart">
            <div class="col-md-12">
                <h3 class="cart-title font-alt">Cart</h3>
                <a href="<?= base_url('landing/jasa'); ?>" class="button small right mt-20">Back to shopping</a>

                <!-- shop cart table -->
                <?php foreach($belanja as $row){?>
                <table class="table shopping-cart-table mb-50">
                    <tbody>
                        <tr class="font-alt">
                            <th>Product</th>
                            <th>Price</th>
                            <th>Duration</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td>
                                <div class="shop-img">
                                    <img src="<?= base_url('assets/relish/images/shop/mini-img-9.jpg'); ?>" data-at2x="<?= base_url('assets/relish/images/shop/mini-img-9@2x.jpg'); ?>" alt>
                                </div>
                                <a href="shop-single-item.html" class="shop-cart-name"><?php echo $row->nama; ?></a>
                            </td>
                            <td>
                            <?php echo $row->harga; ?>
                            </td>
                            <td>
                                <?php echo $row->durasi; ?>
                            </td>
                            <td><?php echo $row->nama; ?></td>
                            <td>
                                <a href="#">
                                    <i class="fa fa-times"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5">
                                <div class="shopping-table-bot">
                                    <!-- <div class="left clearfix">
                                        <form action="#" class="form">
                                            <input class="mb-0 mb-xs-10 input-sm" style="width: 170px;" type="text" pattern=".{3,100}" required="">
                                            <button type="submit" class="button small">Aply Coupon</button>
                                        </form>
                                    </div> -->
                                    <div class="right">
                                        <!-- <a href="#" class="button button-border small">Update cart</a> -->
                                        <a href="checkout/" class="button button-border small">Proceed to Chekout</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <?php }?>
                <!-- /shop cart table -->

                <div class="sep-lane mb-60 mt-60"><span><img src="<?= base_url('assets/relish/images/lines/img-line-0.png'); ?>" data-at2x="<?= base_url('assets/relish/images/lines/img-line-0@2x.png'); ?>" alt></span></div>
            </div>

        </div>
    </div>
    </div>
</section>