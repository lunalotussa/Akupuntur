<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Layanan Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('layanan/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Jenis</th>
						<th>Nama</th>
						<th>Durasi</th>
						<th>Harga</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($layanan as $l){ ?>
                    <tr>
						<td><?php echo $l['jenis']; ?></td>
						<td><?php echo $l['nama']; ?></td>
						<td><?php echo $l['durasi']; ?></td>
						<td><?php echo $l['harga']; ?></td>
						<td>
                            <a href="<?php echo site_url('layanan/edit/'.$l['id_layanan']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('layanan/remove/'.$l['id_layanan']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
