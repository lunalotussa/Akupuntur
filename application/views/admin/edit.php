<h1 class="title has-text-success font-family-philosopher">Ubah Profile Admin</h1>
<?php echo form_open_multipart('admin/edit/' . $admin['id_admin']); ?>
<div class="columns is-multiline">
	<div class="column is-half">
		<fieldset disabled="disabled">
			<div class="field">
				<label class="label" for="nama">Nama</label>
				<div class="control">
					<input type="hidden" name="id_user" value="<?php echo ($this->input->post('id_user') ? $this->input->post('id_user') : $admin['id_user']); ?>" />
					<input type="text" name="nama" value="<?php echo $nama; ?>" class="input" id="nama" readonly />
				</div>
			</div>
		</fieldset>
	</div>
	<div class="column is-half">
		<fieldset disabled="disabled">
			<div class="field">
				<label class="label" for="email">Email</label>
				<div class="control">
					<input type="text" name="email" value="<?php echo $email; ?>" class="input" id="email" readonly />
				</div>
			</div>
		</fieldset>
	</div>
	<div class="column is-half">
		<div class="field">
			<label class="label" for="alamat">Alamat</label>
			<div class="control">
				<input type="text" name="alamat" value="<?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $admin['alamat']); ?>" class="input" id="alamat" required />
			</div>
		</div>
	</div>
	<div class="column is-half">
		<div class="field">
			<label class="label" for="telepon">Telepon</label>
			<div class="control">
				<input type="tel" name="telepon" value="<?php echo ($this->input->post('telepon') ? $this->input->post('telepon') : $admin['telepon']); ?>" class="input" id="telepon" required />
			</div>
		</div>
	</div>
	<div class="column is-half">
		<div class="field">
			<label class="label" for="bank">Bank</label>
			<div class="control">
				<input type="text" name="bank" value="<?php echo ($this->input->post('bank') ? $this->input->post('bank') : $admin['bank']); ?>" class="input" id="bank" required />
			</div>
		</div>
	</div>
	<div class="column is-half">
		<div class="field">
			<label class="label" for="unit_bank">Unit Bank</label>
			<div class="control">
				<input type="text" name="unit_bank" value="<?php echo ($this->input->post('unit_bank') ? $this->input->post('unit_bank') : $admin['unit_bank']); ?>" class="input" id="unit_bank" required />
			</div>
		</div>
	</div>
	<div class="column is-half">
		<div class="field">
			<label class="label" for="no_rekening">No Rekening</label>
			<div class="control">
				<input type="number" name="no_rekening" value="<?php echo ($this->input->post('no_rekening') ? $this->input->post('no_rekening') : $admin['no_rekening']); ?>" class="input" id="no_rekening" required />
			</div>
		</div>
	</div>
</div>
<div class="columns">
	<div class="column is-4">
		<label for="profile" class="label">Foto Profile</label>
		<div class="field">
			<?php
			if (empty($admin['profile'])) {
			?>
				<figure class="image is-128x128">
					<img src="<?= base_url() ?>resources/picture/noimage.png" alt="profile">
				</figure>
			<?php
			} else {
			?>
				<figure class="image is-128x128">
					<img src="<?= base_url() ?>resources/picture/<?= $admin['profile']; ?>" alt="profile">
				</figure>
			<?php
			} ?>
			<input type="file" name="profile" value="<?php echo ($this->input->post('profile') ? $this->input->post('profile') : $admin['profile']); ?>" class="input" id="profile" />
			<input type="hidden" name="filelama" value="<?php echo ($this->input->post('filelama') ? $this->input->post('filelama') : $admin['profile']); ?>">
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