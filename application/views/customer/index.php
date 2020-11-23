<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Costumer Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('costumer/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Costumer</th>
						<th>Id User</th>
						<th>Alamat</th>
						<th>Telepon</th>
						<th>Bank</th>
						<th>Unit Bank</th>
						<th>No Rekening</th>
						<th>Profile</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($costumer as $c){ ?>
                    <tr>
						<td><?php echo $c['id_costumer']; ?></td>
						<td><?php echo $c['id_user']; ?></td>
						<td><?php echo $c['alamat']; ?></td>
						<td><?php echo $c['telepon']; ?></td>
						<td><?php echo $c['bank']; ?></td>
						<td><?php echo $c['unit_bank']; ?></td>
						<td><?php echo $c['no_rekening']; ?></td>
						<td><?php echo $c['profile']; ?></td>
						<td>
                            <a href="<?php echo site_url('costumer/edit/'.$c['id_costumer']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('costumer/remove/'.$c['id_costumer']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
