<h1 class="title has-text-success font-family-philosopher">Daftar Verifikasi Pembayaran</h1>

<div class="table-container">
    <table class="table is-fullwidth">
        <thead>
            <tr>
                <th>Tanggal Transaksi</th>
                <th>Status Pembayaran</th>
                <th>Status Pemesanan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Tanggal Transaksi</th>
                <th>Status Pembayaran</th>
                <th>Status Pemesanan</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
        <tbody>
            <?php 
                $sql = "SELECT * FROM transaksi";
                $query = $this->db->query($sql);
                if ($query->num_rows() > 0) {
                    foreach ($query->result() as $row) {
                         $status_pemesanan  = $row->status_pemesanan;
                         $status_pembayaran = $row->status_pembayaran;
            ?>
                        <tr>
                            <td><?php echo $row->tanggal?></td>
                            <td>
                                <?php
                                if ($status_pembayaran == 0) {
                                    echo "<span class='tag is-danger'>Pembayaran Belum Diverifikasi</span>";
                                } else {
                                    echo "<span class='tag is-success'>Pembayaran Sudah Diverifikasi</span>";
                                }

                                ?>
                            </td>
                            <td>
                                <?php
                                if ($status_pemesanan == 0) {
                                    echo "<span class='tag is-danger'>Belum Selesai Melakukan Pemesanan</span>";
                                } else {
                                    echo "<span class='tag is-success'>Sudah Selesai Melakukan Pemesanan</span>";
                                }

                                ?>
                            </td>
                            <td>
                                <div class="field is-grouped">
                                    <p class="control">
                                        <a href="<?php echo site_url('cart/detail_pembayaran/' . $row->no_transaksi); ?>" class="button is-info is-small">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                            <span>
                                                Detail
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a href="<?php echo site_url('cart/verifikasi_pembayaran/' . $row->no_transaksi); ?>" class="button is-success is-small">
                                            <span class="icon">
                                                <i class="fa  fa-check-circle"></i>
                                            </span>
                                            <span>
                                                Verifikasi Pembayaran
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
            <?php 
                    }
                }
            //} 
            ?>
        </tbody>
    </table>
</div>