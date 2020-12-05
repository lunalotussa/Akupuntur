<h1 class="title has-text-success font-family-philosopher">Ubah Transaksi</h1>
<?php echo form_open('transaksi/edit/' . $transaksi['no_transaksi']); ?>
<div class="columns is-multiline">
	<div class="column is-half">
		<div class="field">
			<label class="checkbox">
				<input type="checkbox" name="status_pembayaran" value="1" <?php echo ($transaksi['status_pembayaran'] == 1 ? 'checked="checked"' : ''); ?> id='status_pembayaran' />
				Status Pembayaran
			</label>
		</div>
	</div>
	<div class="column is-half">
		<div class="field">
			<label class="checkbox">
				<input type="checkbox" name="status_pemesanan" value="1" <?php echo ($transaksi['status_pemesanan'] == 1 ? 'checked="checked"' : ''); ?> id='status_pemesanan' />
				Status Pemesanan
			</label>
		</div>
	</div>
	<div class="field">
		<label class="label" for="id_costumer">ID Customer</label>
		<div class="control">
			<input type="text" name="id_costumer" value="<?php echo ($this->input->post('id_costumer') ? $this->input->post('id_costumer') : $transaksi['id_costumer']); ?>" class="input" id="id_costumer" />
		</div>
	</div>
	<div class="field">
		<label class="label" for="id_terapis">ID Terapis</label>
		<div class="control">
			<input type="text" name="id_terapis" value="<?php echo ($this->input->post('id_terapis') ? $this->input->post('id_terapis') : $transaksi['id_terapis']); ?>" class="input" id="id_terapis" />
		</div>
	</div>
	<div class="field">
		<label class="label" for="tanggal">Tanggal</label>
		<div class="control">
			<input type="date" name="tanggal" value="<?php echo ($this->input->post('tanggal') ? $this->input->post('tanggal') : $transaksi['tanggal']); ?>" class="input" id="tanggal" />
		</div>
	</div>
	<div class="field">
		<label class="label" for="total_harga">Total Harga</label>
		<div class="control">
			<input type="text" name="total_harga" value="<?php echo ($this->input->post('total_harga') ? $this->input->post('total_harga') : $transaksi['total_harga']); ?>" class="input" id="total_harga" />
		</div>
	</div>
	<div class="field">
		<label class="label" for="bukti_pembayaran">Bukti Pembayaran</label>
		<div class="control">
			<input type="text" name="bukti_pembayaran" value="<?php echo ($this->input->post('bukti_pembayaran') ? $this->input->post('bukti_pembayaran') : $transaksi['bukti_pembayaran']); ?>" class="input" id="bukti_pembayaran" />
		</div>
	</div>
</div>
<div class="columns">
	<div class="column is-full">
		<div class="field is-grouped is-pulled-right">
			<p class="control">
				<button type="submit" class="button is-success">
					<span class="icon">
						<i class="fa fa-check"></i>
					</span>
					<span>
						Simpan
					</span>
				</button>
			</p>
		</div>
	</div>
</div>
<?= form_close(); ?>