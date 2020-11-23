<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Detail Transaksi Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('detail_transaksi/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Detail</th>
						<th>No Transaksi</th>
						<th>Id Layanan</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($detail_transaksi as $d){ ?>
                    <tr>
						<td><?php echo $d['id_detail']; ?></td>
						<td><?php echo $d['no_transaksi']; ?></td>
						<td><?php echo $d['id_layanan']; ?></td>
						<td>
                            <a href="<?php echo site_url('detail_transaksi/edit/'.$d['id_detail']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('detail_transaksi/remove/'.$d['id_detail']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
