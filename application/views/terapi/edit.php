<h1 class="title has-text-success font-family-philosopher">Ubah Profile Terapis</h1>
<?php echo form_open_multipart('terapi/edit/' . $terapi['id_terapis']); ?>
<div class="columns is-multiline">
	<div class="column is-half">
		<fieldset disabled="disabled">
			<div class="field">
				<label class="label" for="nama">Nama</label>
				<div class="control">
					<input type="hidden" name="id_user" value="<?php echo ($this->input->post('id_user') ? $this->input->post('id_user') : $terapi['id_user']); ?>" />
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
				<input type="text" name="alamat" value="<?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $terapi['alamat']); ?>" class="input" id="alamat" />
			</div>
		</div>
	</div>
	<div class="column is-half">
		<div class="field">
			<label class="label" for="telepon">Telepon</label>
			<div class="control">
				<input type="text" name="telepon" value="<?php echo ($this->input->post('telepon') ? $this->input->post('telepon') : $terapi['telepon']); ?>" class="input" id="telepon" />
			</div>
		</div>
	</div>
	<div class="column is-half">
		<div class="field">
			<label class="label" for="bank">Bank</label>
			<div class="control">
				<input type="text" name="bank" value="<?php echo ($this->input->post('bank') ? $this->input->post('bank') : $terapi['bank']); ?>" class="input" id="bank" />
			</div>
		</div>
	</div>
	<div class="column is-half">
		<div class="field">
			<label class="label" for="unit_bank">Unit Bank</label>
			<div class="control">
				<input type="text" name="unit_bank" value="<?php echo ($this->input->post('unit_bank') ? $this->input->post('unit_bank') : $terapi['unit_bank']); ?>" class="input" id="unit_bank" />
			</div>
		</div>
	</div>
	<div class="column is-half">
		<div class="field">
			<label class="label" for="no_rekening">No Rekening</label>
			<div class="control">
				<input type="text" name="no_rekening" value="<?php echo ($this->input->post('no_rekening') ? $this->input->post('no_rekening') : $terapi['no_rekening']); ?>" class="input" id="no_rekening" />
			</div>
		</div>
	</div>
	<div class="column is-half">
		<label class="label">Status</label>
		<input type="hidden" name="status" value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $terapi['status']); ?>" class="input" id="status" />
		<?php $status = ($this->input->post('status') ? $this->input->post('status') : $terapi['status']);
		if ($status == 0) {
		?>
			<span class="tag is-danger">Belum Diverifikasi Admin</span>
		<?php
		} else {
		?>
			<span class="tag is-success">Sudah Diverifikasi Admin</span>
		<?php } ?>
	</div>
</div>
<div class="columns">
	<div class="column">
		<label class="label" for="ktp">KTP</label>
		<div class="field">
			<?php
			if (empty($terapi['ktp'])) {
			?>
				<figure class="image is-128x128">
					<img src="<?= base_url() ?>resources/picture/noimage.png" alt="profile">
				</figure>
			<?php
			} else {
			?>
				<figure class="image is-128x128">
					<img src="<?= base_url() ?>resources/picture/<?= $terapi['ktp']; ?>" alt="profile">
				</figure>
			<?php
			} ?>
			<input type="file" name="ktp" value="<?php echo ($this->input->post('ktp') ? $this->input->post('ktp') : $terapi['ktp']); ?>" class="input" id="ktp" />
			<input type="hidden" name="ktplama" value="<?php echo ($this->input->post('ktplama') ? $this->input->post('ktplama') : $terapi['ktp']); ?>">
		</div>
	</div>
	<div class="column">
		<label for="selfie_ktp" class="label">Selfie KTP</label>
		<div class="field">
			<?php
			if (empty($terapi['selfie_ktp'])) {
			?>
				<figure class="image is-128x128">
					<img src="<?= base_url() ?>resources/picture/noimage.png" alt="profile">
				</figure>
			<?php
			} else {
			?>
				<figure class="image is-128x128">
					<img src="<?= base_url() ?>resources/picture/<?= $terapi['selfie_ktp']; ?>" alt="profile">
				</figure>
			<?php
			} ?>
			<input type="file" name="selfie_ktp" value="<?php echo ($this->input->post('selfie_ktp') ? $this->input->post('selfie_ktp') : $terapi['selfie_ktp']); ?>" class="input" id="selfie_ktp" />
			<input type="hidden" name="selfielama" value="<?php echo ($this->input->post('selfielama') ? $this->input->post('selfielama') : $terapi['selfie_ktp']); ?>">
		</div>
	</div>
	<div class="column">
		<label for="profile" class="label">Foto Profile</label>
		<div class="field">
			<?php
			if (empty($terapi['profile'])) {
			?>
				<figure class="image is-128x128">
					<img src="<?= base_url() ?>resources/picture/noimage.png" alt="profile">
				</figure>
			<?php
			} else {
			?>
				<figure class="image is-128x128">
					<img src="<?= base_url() ?>resources/picture/<?= $terapi['profile']; ?>" alt="profile">
				</figure>
			<?php
			} ?>
			<input type="file" name="profile" value="<?php echo ($this->input->post('profile') ? $this->input->post('profile') : $terapi['profile']); ?>" class="input" id="profile" />
			<input type="hidden" name="filelama" value="<?php echo ($this->input->post('filelama') ? $this->input->post('filelama') : $terapi['profile']); ?>">
		</div>
	</div>
	<div class="column">
		<label for="pdf" class="label">Upload Sertifikat (PDF)</label>
		<div class="field">
			<?php
			if (empty($terapi['pdf'])) {
			?>
			<figure class="image is-128x128">
					<img src="<?= base_url() ?>resources/picture/pdf.png" alt="pdf">
				</figure>
			<?php } else {
			?>
			<table>
				<td>
				<figure class="image is-128x128">
					<img src="<?= base_url() ?>resources/picture/pdf.png" alt="pdf">
				</figure>
				</td>
				<td>
					<a href="<?php echo site_url('terapi/download/' . $terapi['id_terapis']); ?>" class="button is-warning is-small">
					<span class="icon"><i class="fa fa-download"></i></span>
					</a>
				</td>
			</table>
			<?php }
			?>
			<input type="file" name="pdf" value="<?php echo ($this->input->post('pdf') ? $this->input->post('pdf') : $terapi['pdf']); ?>" class="input" id="pdf" />
			<input type="hidden" name="pdflama" value="<?php echo ($this->input->post('pdflama') ? $this->input->post('pdflama') : $terapi['pdf']); ?>">
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