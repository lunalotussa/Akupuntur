<h1 class="title has-text-success font-family-philosopher">Tambah Terapis</h1>
<?php echo form_open('terapi/add'); ?>
<div class="columns is-multiline">
	<div class="column is-half">
		<div class="field">
			<label class="label" for="id_user">ID User</label>
			<div class="control">
				<input type="text" name="id_user" value="<?php echo $this->input->post('id_user'); ?>" class="input" id="id_user" />
			</div>
		</div>
	</div>
	<div class="column is-half">
		<div class="field">
			<label class="label" for="alamat">Alamat</label>
			<div class="control">
				<input type="text" name="alamat" value="<?php echo $this->input->post('alamat'); ?>" class="input" id="alamat" />
			</div>
		</div>
	</div>
	<div class="column is-half">
		<div class="field">
			<label class="label" for="telepon">Telepon</label>
			<div class="control">
				<input type="tel" name="telepon" value="<?php echo $this->input->post('telepon'); ?>" class="input" id="telepon" />
			</div>
		</div>
	</div>
	<div class="column is-half">
		<div class="field">
			<label class="label" for="bank">Bank</label>
			<div class="control">
				<input type="text" name="bank" value="<?php echo $this->input->post('bank'); ?>" class="input" id="bank" />
			</div>
		</div>
	</div>
	<div class="column is-half">
		<div class="field">
			<label class="label" for="unit_bank">Unit Bank</label>
			<div class="control">
				<input type="text" name="unit_bank" value="<?php echo $this->input->post('unit_bank'); ?>" class="input" id="unit_bank" />
			</div>
		</div>
	</div>
	<div class="column is-half">
		<div class="field">
			<label class="label" for="no_rekening">No Rekening</label>
			<div class="control">
				<input type="text" name="no_rekening" value="<?php echo $this->input->post('no_rekening'); ?>" class="input" id="no_rekening" />
			</div>
		</div>
	</div>
</div>
<div class="columns">
	<div class="column">
		<label class="label" for="ktp">KTP</label>
		<div class="field">
			<input type="text" name="ktp" value="<?php echo $this->input->post('ktp'); ?>" class="input" id="ktp" />
		</div>
	</div>
	<div class="column">
		<label for="selfie_ktp" class="label">Selfie KTP</label>
		<div class="field">
			<input type="text" name="selfie_ktp" value="<?php echo $this->input->post('selfie_ktp'); ?>" class="input" id="selfie_ktp" />
		</div>
	</div>
	<div class="column">
		<label for="profile" class="label">Foto Profile</label>
		<div class="field">
			<input type="text" name="profile" value="<?php echo $this->input->post('profile'); ?>" class="input" id="profile" />
		</div>
	</div>
</div>
<div class="columns">
	<div class="column is-one-quarter">
		<label class="label" for="status">Status</label>
		<input type="text" name="status" value="<?php echo $this->input->post('status'); ?>" class="input" id="status" />
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