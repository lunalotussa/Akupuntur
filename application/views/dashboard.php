<div class="columns">
    <div class="column is-one-third">
        <div class="card">
            <div class="card-header">
                <p class="card-header-title">Informasi Akun</p>
            </div>
            <div class="card-content">
                <div class="media">
                    <div class="media-content">
                        <p class="title is-4"><?= $nama; ?></p>
                        <p class="subtitle is-6 has-text-grey"><?= $email; ?></p>
                    </div>
                </div>

                <div class="content">
                    <p>
                        Role : <?= $hak_akses; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="column is-one-third">
        <?php
        if ($hak_akses == "Admin") {
            $sql = "SELECT * FROM admin WHERE id_user=$id_user";
            $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $id_admin = $row->id_admin;
        ?>

                    <div class="card">
                        <div class="card-header">
                            <p class="card-header-title">Quick Access</p>
                        </div>
                        <div class="card-content">
                            <div class="content is-medium">
                                <p>
                                    <span>Layanan</span>
                                    <div class="field is-grouped">
                                        <p class="control">
                                            <a href="<?= base_url('layanan/index'); ?>" class="tag is-info">Lihat Daftar Layanan</a>
                                        </p>
                                        <p class="control">
                                            <a href="<?= base_url('layanan/add'); ?>" class="tag is-success">Tambah Daftar Layanan</a>
                                        </p>
                                    </div>
                                    <div class="field is-grouped">
                                        <p class="control">
                                            <a href="<?= base_url('DetailLayanan/listDetailLayanan'); ?>" class="tag is-info">Lihat Layanan Terapis</a>
                                        </p>
                                    </div>

                                </p>
                                <p>
                                    <span>Verifikasi</span>
                                    <div class="field is-grouped">
                                        <p class="control">
                                            <a href="<?= base_url('terapi/index'); ?>" class="tag is-info">Verifikasi Terapis</a>
                                        </p>
                                        <p class="control">
                                            <a href="<?= base_url('Cart/list_verifikasi_pembayaran')?>" class="tag is-info">Verifikasi Pembayaran</a>
                                        </p><br>
                                    </div>

                                     <div class="field is-grouped">
                                        <p class="control">
                                            <a href="<?= base_url('Cart/list_verifikasi_pemesanan')?>" class="tag is-info">Verifikasi Pemesanan</a>
                                        </p><br>
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>

                <?php }
            }
        } elseif ($hak_akses == "Customer") {
            $sql = "SELECT * FROM customer WHERE id_user=$id_user";
            $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $id_customer = $row->id_customer;
                ?>

                    <div class="card">
                        <div class="card-header">
                            <p class="card-header-title">Quick Access</p>
                        </div>
                        <div class="card-content">
                            <div class="content is-medium">
                                <p>
                                    <span>Layanan</span>
                                    <div class="field is-grouped">
                                        <p class="control">
                                            <a href="<?php echo site_url('Cart/detail_list'); ?>" class="tag is-info">Booking Layanan</a>
                                        </p>
                                    </div>

                                </p>
                            </div>
                        </div>
                    </div>

                    <?php
                }
            }
        } elseif ($hak_akses == "Terapis") {
            $sql = "SELECT * FROM terapis WHERE id_user=$id_user";
            $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $id_terapis = $row->id_terapis;
                    $status     = $row->status;
                    if ($status == 1) {
                    ?>
                        <div class="card">
                            <div class="card-header">
                                <p class="card-header-title">Quick Access</p>
                            </div>
                            <div class="card-content">
                                <div class="content is-medium">
                                    <p>
                                        <span>Layanan</span>
                                        <div class="field is-grouped">
                                            <p class="control">
                                                <a href="<?php echo site_url('DetailLayanan/index'); ?>" class="tag is-info">Lihat Layanan</a>
                                            </p>
                                        </div>
                                    </p>
                                    <p>
                                        <span>Jadwal</span>
                                        <div class="field is-grouped">
                                            <p class="control">
                                                <a href="#" class="tag is-info">Lihat Jadwal</a>
                                            </p>
                                        </div>
                                    </p>
                                </div>
                            </div>
                        </div>
        <?php
                    }
                }
            }
        } ?>
    </div>
</div>