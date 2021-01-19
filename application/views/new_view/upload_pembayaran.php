<section class="page-section">
    <div class="container">
        <div class="row shop-single">
            <div class="col-md-12">
                <div class="row mb-30">
                    <!-- shop description -->

                    <div class="col-md-12">
                        <h4 class="product-title font-alt">Bayar</h4>
                    </div>

                    <!-- shop description -->
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <p>
                            Lakukan pembayaran sesuai dengan nominal yang tertulis Upload bukti pembayaran,
                            transfer ke rekening di bawah
                        </p>
                        <!-- <p> <i class="fa fa-clock-o" aria-hidden="true"></i> 23 jam 22 menit </p>
                        -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <small>
                        <?= var_dump($detail)?>
                            <strong>Tagihan yang harus dibayar</strong>
                        </small>
                        <div class="row">
                            <div class="col-md-4">
                                <h2>IDR
                                    <?= $bayar[0]->total_harga?></h2>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="<?= base_url('assets/img/bca-logo.png'); ?>" alt="BCA"/>
                                    </div>

                                    <div class="col-md-4">
                                        <small>Bank BCA (Akupuntur Indonesia)</small>
                                        <br/>
                                        <h6>731 025 2527</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr/>

                <div class="container">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Durasi</th>
                                <th scope="col">Layanan</th>
                                <th scope="col">Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row g-bg-hijau g-border-radius g-text-white">
                        <div class="col-md-4">
                            <p class="g-pad-y"><?= $bayar[0]->lama?>
                                Menit</p>
                        </div>
                        <div class="col-md-4">
                            <p class="g-pad-y"><?= $bayar[0]->nama?></p>
                        </div>
                        <div class="col-md-4">
                            <p class="g-pad-y">IDR
                                <?= $bayar[0]->total_harga?></p>
                        </div>
                    </div>
                </div>
                <div class="row mt-40">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-5">
                                <?php echo form_open_multipart('cart/transaksi/'.$bayar[0]->no_transaksi); ?>
                                <div class="form-group">
                                    <label for="inputFile">Upload Bukti Pembayaran</label>
                                    <input
                                        type="file"
                                        name="bukti"
                                        class="form-control"
                                        id="inputFile"
                                        value="<?php echo $this->input->post('bukti'); ?>"
                                        required="true"/>
                                </div>
                                <div class="form-group">
                                    <label for="inputRekening">No Rekening</label>
                                    <input
                                        type="number"
                                        name="rekening"
                                        class="form-control"
                                        id="inputRekening"
                                        placeholder="No Rekening"
                                        value="<?php echo $this->input->post('rekening'); ?>"
                                        required="true"/>
                                </div>
                                <!-- <div class="form-group"> <label for="inputNamaBank">Nama Bank</label>
                                <input type="text" name="bank" class="form-control" id="inputNamaBank"
                                placeholder="Nama Bank" value="<?php echo $this->input->post('bank'); ?>"
                                required="true" /> </div> <div class="form-group"> <label
                                for="inputCabangBank">Unit/Cabang Bank</label> <input type="text"
                                name="CabangBank" class="form-control" id="inputCabangBank"
                                placeholder="Unit/Cabang Bank" value="<?php echo
                                $this->input->post('CabangBank'); ?>" required="true"/> </div> -->
                                <input
                                    type="hidden"
                                    name="idTransaksi"
                                    value="<?php echo $bayar[0]->no_transaksi ?>">
                                <button class="button small">
                                    Upload
                                </button>
                                <?= form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>