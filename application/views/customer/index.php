<div class="columns">
    <div class="column is-10">
        <h1 class="title has-text-success font-family-philosopher">Daftar Customer</h1>
    </div>
    <div class="column">
        <div class="field">
            <a href="<?= site_url('customer/add'); ?>" class="button is-success">Tambah Customer</a>
        </div>
    </div>
</div>
<div class="table-container">
    <table class="table is-fullwidth">
        <thead>
            <tr>
                <th>Id Customer</th>
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
                <th>Id Customer</th>
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
            <?php foreach ($customer as $c) { ?>
                <tr>
                    <td><?php echo $c['id_customer']; ?></td>
                    <td><?php echo $c['id_user']; ?></td>
                    <td><?php echo $c['alamat']; ?></td>
                    <td><?php echo $c['telepon']; ?></td>
                    <td><?php echo $c['bank']; ?></td>
                    <td><?php echo $c['unit_bank']; ?></td>
                    <td><?php echo $c['no_rekening']; ?></td>
                    <td><?php echo $c['profile']; ?></td>
                    <td>
                        <div class="field is-grouped">
                            <p class="control">
                                <a href="<?php echo site_url('customer/edit/' . $c['id_customer']); ?>" class="button is-small is-info">
                                    <span class="icon">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                    <span>
                                        Edit
                                    </span>
                                </a>
                            </p>

                            <p class="control">
                                <a href="<?php echo site_url('customer/remove/' . $c['id_customer']); ?>" class="button is-small is-danger">
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