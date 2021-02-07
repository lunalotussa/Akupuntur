<section class="page-section">
    <div class="container">
        <div class="row shop-cart">
            <div class="col-md-12">
                <h3 class="cart-title font-alt">Cart</h3>
                <a href="<?= base_url('landing/jasa'); ?>" class="button small right mt-20">Back to shopping</a>
                <?php $totalHarga = 0;
                ?>
                <!-- shop cart table -->
                <?= form_open('cart/pay'); 
                
                var_dump($cus);?>
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
                        $durasi = 0;
                        foreach ($belanja as $row) { 
                            $id_terapis = $row->id_terapis;
                            ?>
                            <tr>
                                <td>
                                    <input type="checkbox" name="selcheck[]" checked value="<?= $row->id_chart; ?>" <?php if ($io = 0) {
                                                                                                                        echo "required";
                                                                                                                    } ?>>
                                </td>
                                <td>
                                    <figure class="shop-img image">
                                        <img src="<?= base_url('resources/picture/layanan/' . $row->gambar); ?>" data-at2x="<?= base_url('assets/relish/images/shop/mini-img-9@2x.jpg'); ?>" height=90 width=90 alt>
                                    </figure>
                                    <a href="#" class="shop-cart-name"><?php echo $row->nama; ?></a>
                                </td>
                                <td>
                                    <?php echo "IDR " . $row->harga; ?>
                                </td>
                                <td>
                                    <?php echo $row->durasi;
                                    $temp = explode(" ", $row->durasi);
                                    $durasi += $temp[0];
                                    ?>
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
                                        <div class="form" style="margin-bottom: 20px;">
                                            <label for="tanggal-penggunaan">Tanggal penggunaan </label>
                                            <input id="tanggal-penggunaan" name="date" class="mb-0 mb-xs-10 input-sm button-border" style="width: 170px;" type="date" onchange="handler(event);" required>
                                        </div>
                                        <div class="form">
                                            <label for="jam-penggunaan">Jam penggunaan </label>
                                            <!-- <input id="jam-penggunaan" name="jam_mulai" class="mb-0 mb-xs-10 input-sm button-border" style="width: 170px;" type="time" min="08:00:00" max="17:00" required> -->
                                            <select name="jam_mulai" id="jam-penggunaan" class="mb-0 mb-xs-10 input-sm button-border">
                                                <option value="08:00">08:00</option>
                                                <option value="08:30">08:30</option>
                                                <option value="09:00">09:00</option>
                                                <option value="09:30">09:30</option>
                                                <option value="10:00">10:00</option>
                                                <option value="10:30">10:30</option>
                                                <option value="11:00">11:00</option>
                                                <option value="11:30">11:30</option>
                                                <option value="12:00">12:00</option>
                                                <option value="12:30">12:30</option>
                                                <option value="13:00">13:00</option>
                                                <option value="13:30">13:30</option>
                                                <option value="14:00">14:00</option>
                                                <option value="14:30">14:30</option>
                                                <option value="15:00">15:00</option>
                                                <option value="15:30">15:30</option>
                                                <option value="16:00">16:00</option>
                                                <option value="16:30">16:30</option>
                                                <option value="17:00">17:00</option>
                                            </select>
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
                <input type="hidden" value="<?= $durasi ?>" name="jam_selesai">
                <?= form_close(); ?>
                <!-- /shop cart table -->

                <div class="sep-lane mb-60 mt-60"><span><img src="<?= base_url('assets/relish/images/lines/img-line-0.png'); ?>" data-at2x="<?= base_url('assets/relish/images/lines/img-line-0@2x.png'); ?>" alt></span></div>
            </div>

        </div>
    </div>
    </div>
</section>
<script>

var id_terapis = '<?= $tera_who?>';

function handler(e){
  
  if (id_terapis = ''){
      //do nothing
  }else {
    alert(e.target.value);

    $.ajax({
            type: "POST",
            url: "<?php echo base_url('cart/getTimeAjax');?>",
            dataType: "html",
            data: {
                id_terapis: '<?= $tera_who?>',
                tanggal: e.target.value
            },
            success: function(result) {
                alert(result);
                console.log(result);
            },
            error: function(result) {
                alert('msg');
            }
        });
  }
}
</script>