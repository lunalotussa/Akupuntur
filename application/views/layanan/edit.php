<h1 class="title has-text-success font-family-philosopher">Edit Layanan</h1>
<div class="columns">
	<div class="column is-full">
		<?php echo form_open('layanan/edit/' . $layanan['id_layanan']); ?>
		<div class="field">
			<label class="label" for="jenis">Jenis Layanan</label>
			<div class="control">
				<input type="text" name="jenis" value="<?php echo ($this->input->post('jenis') ? $this->input->post('jenis') : $layanan['jenis']); ?>" class="input" id="jenis" />
			</div>
		</div>
		<div class="field">
			<label class="label" for="nama">Nama Layanan</label>
			<div class="control">
				<input type="text" name="nama" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $layanan['nama']); ?>" class="input" id="nama" />
			</div>
		</div>
		<div class="field">
			<label class="label" for="durasi">Durasi</label>
			<div class="control">
				<input type="text" name="durasi" value="<?php echo ($this->input->post('durasi') ? $this->input->post('durasi') : $layanan['durasi']); ?>" class="input" id="durasi" />
			</div>
		</div>
		<div class="field">
			<label class="label" for="harga">Harga</label>
			<div class="control">
				<input type="text" name="harga" value="<?php echo ($this->input->post('harga') ? $this->input->post('harga') : $layanan['harga']); ?>" class="input" id="harga" />
			</div>
		</div>
		<div class="field is-grouped is-pulled-right">
			<p class="control">
				<a href="<?= base_url('layanan/index'); ?>" class="button is-light">
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
						Save
					</span>
				</button>
			</p>
		</div>
		<?= form_close(); ?>
	</div>
</div>