<div class="columns is-centered">
	<div class="column is-half">
		<h1 class="title has-text-success font-family-philosopher">Tambah Detail Transaksi</h1>
		<?= form_open('detail_transaksi/add'); ?>
		<div class="field">
			<label class="label" for="no_transaksi">No Transaksi</label>
			<div class="control">
				<input type="text" name="no_transaksi" value="<?php echo $this->input->post('no_transaksi'); ?>" class="input" id="no_transaksi" />
			</div>
		</div>
		<div class="field">
			<label class="label" for="id_layanan">ID Layanan</label>
			<div class="control">
				<input type="text" name="id_layanan" value="<?php echo $this->input->post('id_layanan'); ?>" class="input" id="id_layanan" />
			</div>
		</div>
		<div class="field is-grouped is-pulled-right">
			<p class="control">
				<a href="<?= base_url('detail_transaksi/index'); ?>" class="button is-light">
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