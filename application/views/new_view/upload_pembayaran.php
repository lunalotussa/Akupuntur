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
                <?php foreach($bayar as $pay){?>
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            Lakukan pembayaran sesuai dengan nominal yang tertulis
                            Upload bukti pembayaran, transfer ke rekening di bawah
                        </p>
                        <!-- <p>
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            23 jam 22 menit
                        </p> -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <small><strong>Tagihan yang harus dibayar</strong></small>
                        <div class="row">
                            <div class="col-md-4">
                                <h2>IDR <?= $pay->total_harga?></h2>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="<?= base_url('assets/img/bca-logo.png'); ?>" alt="BCA" />
                                    </div>

                                    <div class="col-md-4">
                                        <small>Bank BCA (Akupuntur Indonesia)</small> <br />
                                        <h6>731 025 2527</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr />

                <div class="container">
                    <div class="row g-bg-hijau g-border-radius g-text-white">
                        <div class="col-md-4">
                            <p class="g-pad-y"><?= $pay->lama?></p>
                        </div>
                        <div class="col-md-4">
                            <p class="g-pad-y"><?= $pay->nama?></p>
                        </div>
                        <div class="col-md-4">
                            <p class="g-pad-y">IDR <?= $pay->total_harga?></p>
                        </div>
                    </div>
                </div>
                <?php }?>
                <div class="row mt-40">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-5">
                                <?= form_open('cart/transaksi'); ?>
                                    <div class="form-group">
                                        <label for="inputFile">Upload Bukti Pembayaran</label>
                                        <input type="file" name="bukti" class="form-control" id="inputFile" />
                                    </div>
                                    <div class="form-group">
                                        <label for="inputRekening">No Rekening</label>
                                        <input type="text" name="rekening" class="form-control" id="inputRekening" placeholder="No Rekening" />
                                    </div>
                                    <div class="form-group">
                                        <label for="inputNamaBank">Nama Bank</label>
                                        <input type="text" name="bank" class="form-control" id="inputNamaBank" placeholder="Nama Bank" />
                                    </div>
                                    <div class="form-group">
                                        <label for="inputCabangBank">Unit/Cabang Bank</label>
                                        <input type="text" class="form-control" id="inputCabangBank" placeholder="Unit/Cabang Bank" />
                                    </div>
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