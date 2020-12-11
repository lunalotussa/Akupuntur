<nav class="navbar is-black py-3" role="navigation" aria-label="main dropdown navigation">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="#">
                <img src="<?= base_url('assets/img/logo.png'); ?>" /> &nbsp;&nbsp;
                <span class="font-family-philosopher has-text-success">
                    Terapi Holistik Sayang Anak
                </span>
            </a>

            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbar">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbar" class="navbar-menu">
            <?php
            if ($hak_akses == "Admin") {
                $sql = "SELECT * FROM admin WHERE id_user=$id_user";
                $query = $this->db->query($sql);
                if ($query->num_rows() > 0) {
                    foreach ($query->result() as $row) {
                        $id_admin = $row->id_admin;
            ?>
                        <div class="navbar-end">
                            <a class="navbar-item" href="<?php echo site_url('dashboard'); ?>">Dashboard</a>
                            <div class="navbar-item has-dropdown is-hoverable">
                                <a class="navbar-link">Layanan</a>
                                <div class="navbar-dropdown">
                                    <a class="navbar-item" href="<?php echo site_url('layanan/index'); ?>">
                                        <span class="icon">
                                            <i class="fas fa-list"></i>
                                        </span>
                                        <span> Daftar Layanan </span>
                                    </a>
                                    <a class="navbar-item" href="<?php echo site_url('layanan/add'); ?>">
                                        <span class="icon">
                                            <i class="fas fa-plus"></i>
                                        </span>
                                        <span> Tambah Layanan </span>
                                    </a>
                                </div>
                            </div>
                            <div class="navbar-item has-dropdown is-hoverable">
                                <a class="navbar-link">Verifikasi</a>
                                <div class="navbar-dropdown">
                                    <a class="navbar-item" href="<?php echo site_url('terapi/index'); ?>">
                                        <span class="icon">
                                            <i class="fas fa-check-square"></i>
                                        </span>
                                        <span> Verifikasi Terapis </span>
                                    </a>
                                    <a class="navbar-item" href="#">
                                        <span class="icon">
                                            <i class="fas fa-money-bill-alt"></i>
                                        </span>
                                        <span> Verifikasi Pembayaran </span>
                                    </a>
                                </div>
                            </div>
                            <div class="navbar-item has-dropdown is-hoverable">
                                <a class="navbar-link">Profile</a>
                                <div class="navbar-dropdown">
                                    <a class="navbar-item" href="<?php echo site_url('admin/edit/' . $id_admin); ?>">
                                        <span class="icon">
                                            <i class="fas fa-user"></i>
                                        </span>
                                        <span> My Profile </span>
                                    </a>
                                    <a class="navbar-item has-text-danger" href="<?php echo site_url('dashboard/logout'); ?>">
                                        <span class="icon">
                                            <i class="fas fa-sign-out-alt"></i>
                                        </span>
                                        <span> Logout </span>
                                    </a>
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

                        <div class="navbar-end">
                            <a class="navbar-item" href="<?php echo site_url('dashboard'); ?>">Dashboard</a>
                            <a class="navbar-item" href="#">Booking Layanan</a>
                            <div class="navbar-item has-dropdown is-hoverable">
                                <a class="navbar-link">Profile</a>
                                <div class="navbar-dropdown">
                                    <a class="navbar-item" href="<?php echo site_url('customer/edit/' . $id_customer); ?>">
                                        <span class="icon">
                                            <i class="fas fa-user"></i>
                                        </span>
                                        <span> My Profile </span>
                                    </a>
                                    <a class="navbar-item has-text-danger" href="<?php echo site_url('dashboard/logout'); ?>">
                                        <span class="icon">
                                            <i class="fas fa-sign-out-alt"></i>
                                        </span>
                                        <span> Logout </span>
                                    </a>
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
                    ?>
                        <div class="navbar-end">
                            <a class="navbar-item" href="<?php echo site_url('dashboard'); ?>">Dashboard</a>
                            <?php
                            if ($status == 1) {
                            ?>

                                <a class="navbar-item" href="<?php echo site_url('DetailLayanan/index'); ?>">
                                    Layanan
                                </a>
                                <a class="navbar-item" href="#">
                                    Jadwal Terapis
                                </a>
                            <?php } ?>
                            <div class="navbar-item has-dropdown is-hoverable">
                                <a class="navbar-link">Profile</a>
                                <div class="navbar-dropdown">
                                    <a class="navbar-item" href="<?php echo site_url('terapi/edit/' . $id_terapis); ?>">
                                        <span class="icon">
                                            <i class="fas fa-user"></i>
                                        </span>
                                        <span> My Profile </span>
                                    </a>
                                    <a class="navbar-item has-text-danger" href="<?php echo site_url('dashboard/logout'); ?>">
                                        <span class="icon">
                                            <i class="fas fa-sign-out-alt"></i>
                                        </span>
                                        <span> Logout </span>
                                    </a>
                                </div>
                            </div>
                        </div>
            <?php }
                }
            } ?>
        </div>
    </div>
</nav>

<section class="section">
    <div class="container">
        <?php
        if (isset($_view) && $_view)
            $this->load->view($_view);
        ?>
    </div>
</section>