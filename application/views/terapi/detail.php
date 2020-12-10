<h1 class="title has-text-success font-family-philosopher">Detail Terapis</h1>
<?php echo form_open('terapi/edit/' . $terapi['id_terapis']);  ?>
<?php
$id_userTerapis = ($this->input->post('id_user') ? $this->input->post('id_user') : $terapi['id_user']);
$sql = "SELECT * FROM user WHERE id_user=$id_userTerapis";
$query = $this->db->query($sql);
if ($query->num_rows() > 0) {
	foreach ($query->result() as $row) {
		$namaTerapis  = $row->nama;
		$emailTerapis = $row->email;
	}
}
?>
<div class="columns is-multiline">
	<div class="column is-half">
		<fieldset disabled="disabled">
			<div class="field">
				<label class="label" for="nama">Nama</label>
				<div class="control">
					<input type="hidden" name="id_user" value="<?php echo ($this->input->post('id_user') ? $this->input->post('id_user') : $terapi['id_user']); ?>" />
					<input type="text" name="nama" value="<?php echo $namaTerapis; ?>" class="input" id="nama" readonly />
				</div>
			</div>
		</fieldset>
	</div>
	<div class="column is-half">
		<fieldset disabled="disabled">
			<div class="field">
				<label class="label" for="email">Email</label>
				<div class="control">
					<input type="text" name="email" value="<?php echo $emailTerapis; ?>" class="input" id="email" readonly />
				</div>
			</div>
		</fieldset>
	</div>
	<div class="column is-half">
		<div class="field">
			<label class="label" for="alamat">Alamat</label>
			<div class="control">
				<input type="text" name="alamat" value="<?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $terapi['alamat']); ?>" class="input" id="alamat" required />
			</div>
		</div>
	</div>
	<div class="column is-half">
		<div class="field">
			<label class="label" for="telepon">Telepon</label>
			<div class="control">
				<input type="tel" name="telepon" value="<?php echo ($this->input->post('telepon') ? $this->input->post('telepon') : $terapi['telepon']); ?>" class="input" id="telepon" required />
			</div>
		</div>
	</div>
	<div class="column is-half">
		<div class="field">
			<label class="label" for="bank">Bank</label>
			<div class="control">
				<input type="text" name="bank" value="<?php echo ($this->input->post('bank') ? $this->input->post('bank') : $terapi['bank']); ?>" class="input" id="bank" required />
			</div>
		</div>
	</div>
	<div class="column is-half">
		<div class="field">
			<label class="label" for="unit_bank">Unit Bank</label>
			<div class="control">
				<input type="text" name="unit_bank" value="<?php echo ($this->input->post('unit_bank') ? $this->input->post('unit_bank') : $terapi['unit_bank']); ?>" class="input" id="unit_bank" required />
			</div>
		</div>
	</div>
	<div class="column is-half">
		<div class="field">
			<label class="label" for="no_rekening">No Rekening</label>
			<div class="control">
				<input type="number" name="no_rekening" value="<?php echo ($this->input->post('no_rekening') ? $this->input->post('no_rekening') : $terapi['no_rekening']); ?>" class="input" id="no_rekening" required />
			</div>
		</div>
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
		</div>
	</div>
</div>
<div class="columns">
	<div class="column is-one-quarter">
		<label class="label">Status</label>
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
<?= form_close(); ?>