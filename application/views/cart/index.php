<section class="page-section">
    <div class="container">
        <div class="row shop-cart">
            <div class="col-md-12">
                <h3 class="cart-title font-alt">Cart</h3>
                <a href="<?= base_url('landing/jasa'); ?>" class="button small right mt-20">Back to shopping</a>
                <?php $totalHarga = 0; ?>
                <!-- shop cart table -->
                <?= form_open('cart/pay'); ?>
                <table class="table shopping-cart-table mb-50">
                    <tbody>
                        <tr class="font-alt">
                            <th>Choose</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Duration</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                        <?php 
                        $io = 0;
                        foreach ($belanja as $row) { ?>
                            <tr>
                                <td>
                                    <input type="checkbox" name="selcheck[]" value="<?= $row->id_chart; ?>" <?php if($io=0){echo "required";} ?>>
                                </td>
                                <td>
                                    <figure class="shop-img image">
                                        <img src="<?= base_url('resources/picture/layanan/'.$row->gambar); ?>" data-at2x="<?= base_url('assets/relish/images/shop/mini-img-9@2x.jpg'); ?>" height=90 widht=90 alt>
                                    </figure>
                                    <a href="shop-single-item.html" class="shop-cart-name"><?php echo $row->nama; ?></a>
                                </td>
                                <td>
                                    <?php echo "IDR " . $row->harga; ?>
                                </td>
                                <td>
                                    <?php echo $row->durasi; ?>
                                </td>
                                <td><?php echo "IDR " . $row->harga; ?></td>
                                <td>
                                    <a href="<?php echo base_url('cart/remove/') . $row->id_chart; ?>">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php
                            $io += 1;
                        } ?>
                        <tr>
                            <td colspan="7">
                                <div class="shopping-table-bot">
                                    <div class="left clearfix">
                                        <div class="form">
                                            <label for="tanggal-penggunaan">Tanggal penggunaan </label>
                                            <input id="tanggal-penggunaan" name="date" class="mb-0 mb-xs-10 input-sm button-border" style="width: 170px;" type="date" required>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <!-- <a href="#" class="button button-border small">Update cart</a> -->
                                        <button class="button button-border small">Proceed to Chekout</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <?= form_close(); ?>
                <!-- /shop cart table -->

                <div class="sep-lane mb-60 mt-60"><span><img src="<?= base_url('assets/relish/images/lines/img-line-0.png'); ?>" data-at2x="<?= base_url('assets/relish/images/lines/img-line-0@2x.png'); ?>" alt></span></div>
            </div>

        </div>
    </div>
    </div>
</section>