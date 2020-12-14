<h1 class="title has-text-success font-family-philosopher">Daftar Booking</h1>

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
                $sql = "SELECT * FROM transaksi WHERE id_customer=$id_user";
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
                                if ($status_pemesanan == 0) {
                                    echo "<span class='tag is-danger'>Pembayaran Belum Diverifikasi</span>";
                                } else {
                                    echo "<span class='tag is-success'>Pembayaran Sudah Diverifikasi</span>";
                                }

                                ?>
                            </td>
                            <td>
                                <?php
                                if ($status_pembayaran == 0) {
                                    echo "<span class='tag is-danger'>Belum Selesai Melakukan Pelayanan</span>";
                                } else {
                                    echo "<span class='tag is-success'>Sudah Selesai Melakukan Pelayanan</span>";
                                }

                                ?>
                            </td>
                            <td>
                                <div class="field is-grouped">
                                    <p class="control">
                                        <a href="<?php echo site_url('cart/detail/' . $row->no_transaksi); ?>" class="button is-info is-small">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                            <span>
                                                Detail
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