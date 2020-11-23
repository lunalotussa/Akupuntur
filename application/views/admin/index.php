<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Admin Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('admin/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
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
                    <?php foreach($admin as $a){ ?>
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
                            <a href="<?php echo site_url('admin/edit/'.$a['id_admin']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('admin/remove/'.$a['id_admin']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
