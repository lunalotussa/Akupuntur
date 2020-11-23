<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Transaksi Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('transaksi/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>No Transaksi</th>
						<th>Status Pembayaran</th>
						<th>Status Pemesanan</th>
						<th>Id Costumer</th>
						<th>Id Terapis</th>
						<th>Tanggal</th>
						<th>Total Harga</th>
						<th>Bukti Pembayaran</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($transaksi as $t){ ?>
                    <tr>
						<td><?php echo $t['no_transaksi']; ?></td>
						<td><?php echo $t['status_pembayaran']; ?></td>
						<td><?php echo $t['status_pemesanan']; ?></td>
						<td><?php echo $t['id_costumer']; ?></td>
						<td><?php echo $t['id_terapis']; ?></td>
						<td><?php echo $t['tanggal']; ?></td>
						<td><?php echo $t['total_harga']; ?></td>
						<td><?php echo $t['bukti_pembayaran']; ?></td>
						<td>
                            <a href="<?php echo site_url('transaksi/edit/'.$t['no_transaksi']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('transaksi/remove/'.$t['no_transaksi']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
