<h1 class="title has-text-success font-family-philosopher">Daftar Verifikasi Pemesanan</h1>

<div class="table-container">
    <table class="table is-fullwidth">
        <thead>
            <tr>
                <th>Tanggal Transaksi</th>
                <th>Nomor Transaksi</th>
                <th>Layanan</th>
                <th>Status Pembayaran</th>
                <th>Status Pemesanan</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
            <th>Tanggal Transaksi</th>
                <th>Nomor Transaksi</th>
                <th>Layanan</th>
                <th>Status Pembayaran</th>
                <th>Status Pemesanan</th>
            </tr>
        </tfoot>
        <tbody>
            <?php 
                $sql = "SELECT *,detail_transaksi.tanggal as tunggul FROM layanan a join detail_layanan b on a.id_layanan = b.id_layanan join cart c on b.id_detailLayanan = c.id_detail_layanan join detail_transaksi d on c.id_chart=d.id_cart join transaksi e on d.no_transaksi=e.no_transaksi where e.id_customer='$id_user'";
                $query = $this->db->query($sql);
                if ($query->num_rows() > 0) {
                    foreach ($query->result() as $row) {
                         $status_pemesanan  = $row->status_pemesanan;
                         $status_pembayaran = $row->status_pembayaran;
                         $year = date('Y');
            ?>
                        <tr>
                            <td><?php echo $row->tunggul?></td>
                            <td><?php echo $year.'AK-'.($row->no_transaksi*13)?></td>
                            <td><?php echo $row->nama?></td>
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
                        </tr>
            <?php 
                    }
                }
            //} 
            ?>
        </tbody>
    </table>
</div>