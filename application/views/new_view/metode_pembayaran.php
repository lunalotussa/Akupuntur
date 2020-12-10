<section class="page-section">
    <div class="container">
        <div class="row shop-single">
            <div class="col-md-12">
                <div class="row mb-30">
                    <!-- shop description -->

                    <div class="col-md-12">
                        <h4 class="product-title font-alt">
                            Pilih Metode Pembayaran
                        </h4>
                    </div>

                    <!-- shop description -->
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <form>
                            <div class="form-group">
                                <label for="inputTanggal">Pilih Hari</label>
                                <input type="date" class="form-control" id="inputTanggal" />
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <form>
                            <div class="form-group">
                                <label for="inputJam">Pilih Jam</label>
                                <input type="time" class="form-control" id="inputJam" />
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Transfer Bank</label>
                        </div>
                        <div class="input-group mb-10">
                            <span class="input-group-addon">
                                <input type="radio" name="bank" aria-label="bank" />
                            </span>
                            <input type="text" class="form-control" value="Bank BCA" readonly style="cursor: default" />
                        </div>
                        <div class="input-group mb-10">
                            <span class="input-group-addon">
                                <input type="radio" name="bank" />
                            </span>
                            <input type="text" class="form-control" value="Bank Mandiri" readonly style="cursor: default" />
                        </div>
                        <div class="input-group mb-30">
                            <span class="input-group-addon">
                                <input type="radio" name="bank" />
                            </span>
                            <input type="text" class="form-control" value="Bank BNI" readonly style="cursor: default" />
                        </div>
                        <a href="<?= base_url('dummy/upload_pembayaran') ?>" class="button small">Pesan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>