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
            data: {
                id_terapis: '<?= $tera_who?>',
                tanggal: e.target.value
            },
            success: function(result) {
                alert(result);
                select = document.getElementById('jam-penggunaan').innerHTML = result;
                console.log(result);
                select.appendChild(result);
            },
            error: function(result) {
                alert('msg');
            }
        });
  }
}
</script>