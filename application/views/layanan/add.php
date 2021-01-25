<div class="columns is-centered">
	<div class="column is-half">
		<h1 class="title has-text-success font-family-philosopher">Tambah Layanan</h1>
		<?php echo form_open_multipart('layanan/add'); ?>
		<div class="field">
			<label class="label" for="jenis">Jenis Layanan</label>
			<div class="control">
				<input type="text" name="jenis" value="<?php echo $this->input->post('jenis'); ?>" class="input" id="jenis" />
			</div>
		</div>
		<div class="field">
			<label class="label" for="nama">Nama Layanan</label>
			<div class="control">
				<input type="text" name="nama" value="<?php echo $this->input->post('nama'); ?>" class="input" id="nama" />
			</div>
		</div>
		<div class="field">
			<label class="label" for="durasi">Durasi</label>
			<div class="control">
				<input type="text" name="durasi" value="<?php echo $this->input->post('durasi'); ?>" class="input" id="durasi" />
			</div>
		</div>
		<div class="field">
			<label class="label" for="harga">Harga</label>
			<div class="control">
				<input type="text" name="harga" value="<?php echo $this->input->post('harga'); ?>" class="input" id="harga" />
			</div>
		</div>
		<div class="field">
			<label class="label" for="gambar">Gambar</label>
			<div class="control">
				<input type="file" name="gambar" value="<?php echo $this->input->post('gambar'); ?>" class="input" id="gambar" />
			</div>
		</div>
		<div class="field">
			<label class="label" for="gambar">Deskripsi Layanan</label>
			<div class="control">
				<textarea name="deskripsi" value="<?php echo $this->input->post('deskripsi'); ?>" class="input" id="deskripsi"></textarea>
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