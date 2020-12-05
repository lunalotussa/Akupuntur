<div class="columns is-centered">
	<div class="column is-half">
		<h1 class="title has-text-success font-family-philosopher">Tambah Transaksi</h1>
		<?= form_open('transaksi/add'); ?>
		<div class="field">
			<label class="checkbox">
				<input type="checkbox" name="status_pembayaran" value="1" id="status_pembayaran" />
				Status Pembayaran
			</label>
		</div>
		<div class="field">
			<label class="checkbox">
				<input type="checkbox" name="status_pemesanan" value="1" id="status_pemesanan" />
				Status Pemesanan
			</label>
		</div>
		<div class="field">
			<label class="label" for="id_costumer">ID Customer</label>
			<div class="control">
				<input type="text" name="id_costumer" value="<?php echo $this->input->post('id_costumer'); ?>" class="input" id="id_costumer" />
			</div>
		</div>
		<div class="field">
			<label class="label" for="id_terapis">ID Terapis</label>
			<div class="control">
				<input type="text" name="id_terapis" value="<?php echo $this->input->post('id_terapis'); ?>" class="input" id="id_terapis" />
			</div>
		</div>
		<div class="field">
			<label class="label" for="tanggal">Tanggal</label>
			<div class="control">
				<input type="date" name="tanggal" value="<?php echo $this->input->post('tanggal'); ?>" class="input" id="tanggal" />
			</div>
		</div>
		<div class="field">
			<label class="label" for="total_harga">Total Harga</label>
			<div class="control">
				<input type="text" name="total_harga" value="<?php echo $this->input->post('total_harga'); ?>" class="input" id="total_harga" />
			</div>
		</div>
		<div class="field">
			<label class="label" for="bukti_pembayaran">Bukti Pembayaran</label>
			<div class="control">
				<input type="text" name="bukti_pembayaran" value="<?php echo $this->input->post('bukti_pembayaran'); ?>" class="input" id="bukti_pembayaran" />
			</div>
		</div>
		<div class="field is-grouped is-pulled-right">
			<p class="control">
				<a href="<?= base_url('transaksi/index'); ?>" class="button is-light">
					<span class="icon">
						<i class="fas fa-arrow-left"></i>
					</span>
					<span>
						Batal
					</span>
				</a>
			</p>
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
		<?= form_close(); ?>
	</div>
</div>