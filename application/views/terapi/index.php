<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Terapis Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('terapi/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Terapis</th>
						<th>Id User</th>
						<th>Alamat</th>
						<th>Telepon</th>
						<th>Bank</th>
						<th>Unit Bank</th>
						<th>No Rekening</th>
						<th>Ktp</th>
						<th>Selfie Ktp</th>
						<th>Profile</th>
						<th>Status</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($terapis as $t){ ?>
                    <tr>
						<td><?php echo $t['id_terapis']; ?></td>
						<td><?php echo $t['id_user']; ?></td>
						<td><?php echo $t['alamat']; ?></td>
						<td><?php echo $t['telepon']; ?></td>
						<td><?php echo $t['bank']; ?></td>
						<td><?php echo $t['unit_bank']; ?></td>
						<td><?php echo $t['no_rekening']; ?></td>
						<td><?php echo $t['ktp']; ?></td>
						<td><?php echo $t['selfie_ktp']; ?></td>
						<td><?php echo $t['profile']; ?></td>
						<td><?php echo $t['status']; ?></td>
						<td>
                            <a href="<?php echo site_url('terapi/edit/'.$t['id_terapis']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('terapi/remove/'.$t['id_terapis']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
