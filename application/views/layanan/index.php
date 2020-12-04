<div class="columns">
    <div class="column is-10">
        <h1 class="title has-text-success font-family-philosopher">Daftar Layanan</h1>
    </div>
    <div class="column">
        <div class="field">
            <a href="<?= site_url('layanan/add'); ?>" class="button is-success">Tambah Layanan</a>
        </div>
    </div>
</div>
<div class="table-container">
    <table class="table is-fullwidth">
        <thead>
            <tr>
                <th>Jenis</th>
                <th>Nama</th>
                <th>Durasi</th>
                <th>Harga</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Jenis</th>
                <th>Nama</th>
                <th>Durasi</th>
                <th>Harga</th>
                <th>Actions</th>
            </tr>
        </tfoot>
        <tbody>
            <?php foreach ($layanan as $l) { ?>
                <tr>
                    <td><?php echo $l['jenis']; ?></td>
                    <td><?php echo $l['nama']; ?></td>
                    <td><?php echo $l['durasi']; ?></td>
                    <td><?php echo $l['harga']; ?></td>
                    <td>
                        <a href="<?php echo site_url('layanan/edit/' . $l['id_layanan']); ?>" class="button is-small is-info">
                            <span class="icon">
                                <i class="fas fa-edit"></i>
                            </span>
                            <span>Edit</span>
                        </a>
                        <a href="<?php echo site_url('layanan/remove/' . $l['id_layanan']); ?>" class="button is-small is-danger">
                            <span class="icon">
                                <i class="fa fa-trash"></i>
                            </span>
                            <span> Delete </span>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>