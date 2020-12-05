<div class="columns">
    <div class="column is-10">
        <h1 class="title has-text-success font-family-philosopher">Daftar User</h1>
    </div>
    <div class="column">
        <div class="field">
            <a href="<?= site_url('user/add'); ?>" class="button is-success">Tambah User</a>
        </div>
    </div>
</div>
<div class="table-container">
    <table class="table is-fullwidth">
        <thead>
            <tr>
                <th>Id User</th>
                <th>Password</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Hak Akses</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Id User</th>
                <th>Password</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Hak Akses</th>
                <th>Actions</th>
            </tr>
        </tfoot>
        <tbody>
            <?php foreach ($user as $u) { ?>
                <tr>
                    <td><?php echo $u['id_user']; ?></td>
                    <td><?php echo $u['password']; ?></td>
                    <td><?php echo $u['nama']; ?></td>
                    <td><?php echo $u['email']; ?></td>
                    <td><?php echo $u['hak_akses']; ?></td>
                    <td>
                        <div class="field is-grouped">
                            <p class="control">
                                <a href="<?php echo site_url('user/edit/' . $u['id_user']); ?>" class="button is-small is-info">
                                    <span class="icon">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                    <span>
                                        Edit
                                    </span>
                                </a>
                            </p>
                            <p class="control">
                                <a href="<?php echo site_url('user/remove/' . $u['id_user']); ?>" class="button is-small is-danger">
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