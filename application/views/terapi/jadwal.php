<h1 class="title has-text-success font-family-philosopher">Daftar Verifikasi Pemesanan</h1>

<div class="table-container">
    <table class="table is-fullwidth">
        <thead>
            <tr>
                <th>Tanggal Layanan</th>
                <th>Status Pembayaran</th>
                <th>Status Pemesanan</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Tanggal Layanan</th>
                <th>Status Pembayaran</th>
                <th>Status Pemesanan</th>
            </tr>
        </tfoot>
        <tbody>
            <?php 
                $sql = "SELECT *,b.tanggal as tanggal_pesan FROM transaksi a join detail_transaksi b on a.no_transaksi=b.no_transaksi where a.id_customer= $id_user ";
                $query = $this->db->query($sql);
                if ($query->num_rows() > 0) {
                    foreach ($query->result() as $row) {
                         $status_pemesanan  = $row->status_pemesanan;
                         $status_pembayaran = $row->status_pembayaran;
            ?>
                        <tr>
                            <td><?php echo $row->tanggal_pesan?></td>
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
                                        <a href="<?php echo site_url('cart/verifikasi_pemesanan/' . $row->no_transaksi); ?>" class="button is-success is-small">
                                            <span class="icon">
                                                <i class="fa  fa-check-circle"></i>
                                            </span>
                                            <span>
                                                Verifikasi Pemesanan
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