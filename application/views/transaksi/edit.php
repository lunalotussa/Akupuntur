<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Transaksi Edit</h3>
            </div>
			<?php echo form_open('transaksi/edit/'.$transaksi['no_transaksi']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="status_pembayaran" value="1" <?php echo ($transaksi['status_pembayaran']==1 ? 'checked="checked"' : ''); ?> id='status_pembayaran' />
							<label for="status_pembayaran" class="control-label">Status Pembayaran</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="status_pemesanan" value="1" <?php echo ($transaksi['status_pemesanan']==1 ? 'checked="checked"' : ''); ?> id='status_pemesanan' />
							<label for="status_pemesanan" class="control-label">Status Pemesanan</label>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_costumer" class="control-label">Id Costumer</label>
						<div class="form-group">
							<input type="text" name="id_costumer" value="<?php echo ($this->input->post('id_costumer') ? $this->input->post('id_costumer') : $transaksi['id_costumer']); ?>" class="form-control" id="id_costumer" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_terapis" class="control-label">Id Terapis</label>
						<div class="form-group">
							<input type="text" name="id_terapis" value="<?php echo ($this->input->post('id_terapis') ? $this->input->post('id_terapis') : $transaksi['id_terapis']); ?>" class="form-control" id="id_terapis" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal" class="control-label">Tanggal</label>
						<div class="form-group">
							<input type="text" name="tanggal" value="<?php echo ($this->input->post('tanggal') ? $this->input->post('tanggal') : $transaksi['tanggal']); ?>" class="has-datepicker form-control" id="tanggal" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="total_harga" class="control-label">Total Harga</label>
						<div class="form-group">
							<input type="text" name="total_harga" value="<?php echo ($this->input->post('total_harga') ? $this->input->post('total_harga') : $transaksi['total_harga']); ?>" class="form-control" id="total_harga" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="bukti_pembayaran" class="control-label">Bukti Pembayaran</label>
						<div class="form-group">
							<input type="text" name="bukti_pembayaran" value="<?php echo ($this->input->post('bukti_pembayaran') ? $this->input->post('bukti_pembayaran') : $transaksi['bukti_pembayaran']); ?>" class="form-control" id="bukti_pembayaran" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>