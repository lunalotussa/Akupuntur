<div class="columns">
    <div class="column is-10">
        <h1 class="title has-text-success font-family-philosopher">Daftar Transaksi</h1>
    </div>
    <div class="column">
        <div class="field">
            <a href="<?= site_url('transaksi/add'); ?>" class="button is-success">Tambah Transaksi</a>
        </div>
    </div>
</div>
<div class="table-container">
    <table class="table is-fullwidth">
        <thead>
            <tr>
                <th>No Transaksi</th>
                <th>Status Pembayaran</th>
                <th>Status Pemesanan</th>
                <th>Id Costumer</th>
                <th>Id Terapis</th>
                <th>Tanggal</th>
                <th>Total Harga</th>
                <th>Bukti Pembayaran</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>No Transaksi</th>
                <th>Status Pembayaran</th>
                <th>Status Pemesanan</th>
                <th>Id Costumer</th>
                <th>Id Terapis</th>
                <th>Tanggal</th>
                <th>Total Harga</th>
                <th>Bukti Pembayaran</th>
                <th>Actions</th>
            </tr>
        </tfoot>
        <tbody>
            <?php foreach ($transaksi as $t) { ?>
                <tr>
                    <td><?php echo $t['no_transaksi']; ?></td>
                    <td><?php echo $t['status_pembayaran']; ?></td>
                    <td><?php echo $t['status_pemesanan']; ?></td>
                    <td><?php echo $t['id_costumer']; ?></td>
                    <td><?php echo $t['id_terapis']; ?></td>
                    <td><?php echo $t['tanggal']; ?></td>
                    <td><?php echo $t['total_harga']; ?></td>
                    <td><?php echo $t['bukti_pembayaran']; ?></td>
                    <td>
                        <div class="field is-grouped">
                            <p class="control">
                                <a href="<?php echo site_url('transaksi/edit/' . $t['no_transaksi']); ?>" class="button is-small is-info">
                                    <span class="icon">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                    <span>
                                        Edit
                                    </span>
                                </a>
                            </p>
                            <p class="control">
                                <a href="<?php echo site_url('transaksi/remove/' . $t['no_transaksi']); ?>" class="button is-small is-danger">
                                    <span class="icon">
                                        <i class="fa fa-trash"></i>
                                    </span>
                                    <span>
                                        Delete
                                    </span>
                                </a>
                            </p>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>