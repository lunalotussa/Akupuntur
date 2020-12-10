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
                            Lakukan pembayaran sebelum 24 November 2020, 19.00 WIB.
                            Upload bukti pembayaran, sesuai bank yang dipilih
                        </p>
                        <p>
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            23 jam 22 menit
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <small><strong>Tagihan yang harus dibayar</strong></small>
                        <div class="row">
                            <div class="col-md-4">
                                <h2>Rp. 75.000</h2>
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
                            <p class="g-pad-y">3 Pelanggan dalam 1 minggu</p>
                        </div>
                        <div class="col-md-4">
                            <p class="g-pad-y">Akupuntur</p>
                        </div>
                        <div class="col-md-4">
                            <p class="g-pad-y">Rp. 75.000</p>
                        </div>
                    </div>
                </div>

                <div class="row mt-40">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-5">
                                <form>
                                    <div class="form-group">
                                        <label for="inputFile">Upload Bukti Pembayaran</label>
                                        <input type="file" class="form-control" id="inputFile" />
                                    </div>
                                    <div class="form-group">
                                        <label for="inputRekening">No Rekening</label>
                                        <input type="text" class="form-control" id="inputRekening" placeholder="No Rekening" />
                                    </div>
                                    <div class="form-group">
                                        <label for="inputNamaBank">Nama Bank</label>
                                        <input type="text" class="form-control" id="inputNamaBank" placeholder="Nama Bank" />
                                    </div>
                                    <div class="form-group">
                                        <label for="inputCabangBank">Unit/Cabang Bank</label>
                                        <input type="text" class="form-control" id="inputCabangBank" placeholder="Unit/Cabang Bank" />
                                    </div>
                                    <a href="<?= base_url('dummy/pembayaran_selesai') ?>" class="button small">
                                        Upload
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>