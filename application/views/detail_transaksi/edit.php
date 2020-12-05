<h1 class="title has-text-success font-family-philosopher">Ubah Detail Transaksi</h1>
<?php echo form_open('detail_transaksi/edit/' . $detail_transaksi['id_detail']); ?>
<div class="columns is-multiline">
	<div class="column is-half">
		<div class="field">
			<label class="label" for="no_transaksi">No Transaksi</label>
			<div class="control">
				<input type="text" name="no_transaksi" value="<?php echo ($this->input->post('no_transaksi') ? $this->input->post('no_transaksi') : $detail_transaksi['no_transaksi']); ?>" class="input" id="no_transaksi" />
			</div>
		</div>
	</div>
	<div class="column is-half">
		<div class="field">
			<label class="label" for="id_layanan">ID Layanan</label>
			<div class="control">
				<input type="text" name="id_layanan" value="<?php echo ($this->input->post('id_layanan') ? $this->input->post('id_layanan') : $detail_transaksi['id_layanan']); ?>" class="input" id="id_layanan" />
			</div>
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