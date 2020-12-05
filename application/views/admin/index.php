<div class="columns">
    <div class="column is-10">
        <h1 class="title has-text-success font-family-philosopher">Daftar Admin</h1>
    </div>
    <div class="column">
        <div class="field">
            <a href="<?= site_url('admin/add'); ?>" class="button is-success">Tambah Admin</a>
        </div>
    </div>
</div>
<div class="table-container">
    <table class="table is-fullwidth">
        <thead>
            <tr>
                <th>Id Admin</th>
                <th>Id User</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Bank</th>
                <th>Unit Bank</th>
                <th>No Rekening</th>
                <th>Profile</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Id Admin</th>
                <th>Id User</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Bank</th>
                <th>Unit Bank</th>
                <th>No Rekening</th>
                <th>Profile</th>
                <th>Actions</th>
            </tr>
        </tfoot>
        <tbody>
            <?php foreach ($admin as $a) { ?>
                <tr>
                    <td><?php echo $a['id_admin']; ?></td>
                    <td><?php echo $a['id_user']; ?></td>
                    <td><?php echo $a['alamat']; ?></td>
                    <td><?php echo $a['telepon']; ?></td>
                    <td><?php echo $a['bank']; ?></td>
                    <td><?php echo $a['unit_bank']; ?></td>
                    <td><?php echo $a['no_rekening']; ?></td>
                    <td><?php echo $a['profile']; ?></td>
                    <td>
                        <div class="field is-grouped">
                            <p class="control">
                                <a href="<?php echo site_url('admin/edit/' . $a['id_admin']); ?>" class="button is-small is-info">
                                    <span class="icon">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                    <span>
                                        Edit
                                    </span>
                                </a>
                            </p>
                            <p class="control">
                                <a href="<?php echo site_url('admin/remove/' . $a['id_admin']); ?>" class="button is-small is-danger">
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