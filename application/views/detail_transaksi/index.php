<div class="columns">
    <div class="column is-10">
        <h1 class="title has-text-success font-family-philosopher">Daftar Detail Transaksi</h1>
    </div>
    <div class="column">
        <div class="field">
            <a href="<?= site_url('detail_transaksi/add'); ?>" class="button is-success">Tambah Daftar Detail</a>
        </div>
    </div>
</div>
<div class="table-container">
    <table class="table is-fullwidth">
        <thead>
            <tr>
                <th>Id Detail</th>
                <th>No Transaksi</th>
                <th>Id Layanan</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Id Detail</th>
                <th>No Transaksi</th>
                <th>Id Layanan</th>
                <th>Actions</th>
            </tr>
        </tfoot>
        <tbody>
            <?php foreach ($detail_transaksi as $d) { ?>
                <tr>
                    <td><?php echo $d['id_detail']; ?></td>
                    <td><?php echo $d['no_transaksi']; ?></td>
                    <td><?php echo $d['id_layanan']; ?></td>
                    <td>
                        <div class="field is-grouped">
                            <p class="control">
                                <a href="<?php echo site_url('detail_transaksi/edit/' . $d['id_detail']); ?>" class="button is-small is-info">
                                    <span class="icon">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                    <span>
                                        Edit
                                    </span>
                                </a>
                            </p>
                            <p class="control">
                                <a href="<?php echo site_url('detail_transaksi/remove/' . $d['id_detail']); ?>" class="button is-small is-danger">
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