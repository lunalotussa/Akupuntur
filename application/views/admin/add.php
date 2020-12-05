<div class="columns is-centered">
	<div class="column is-half">
		<h1 class="title has-text-success font-family-philosopher">Tambah Admin</h1>
		<?= form_open('admin/add'); ?>
		<div class="field">
			<label class="label" for="id_user">ID User</label>
			<div class="control">
				<input type="text" name="id_user" value="<?php echo $this->input->post('id_user'); ?>" class="input" id="id_user" />
			</div>
		</div>
		<div class="field">
			<label class="label" for="alamat">Alamat</label>
			<div class="control">
				<input type="text" name="alamat" value="<?php echo $this->input->post('alamat'); ?>" class="input" id="alamat" />
			</div>
		</div>
		<div class="field">
			<label class="label" for="telepon">Telepon</label>
			<div class="control">
				<input type="text" name="telepon" value="<?php echo $this->input->post('telepon'); ?>" class="input" id="telepon" />
			</div>
		</div>
		<div class="field">
			<label class="label" for="bank">Bank</label>
			<div class="control">
				<input type="text" name="bank" value="<?php echo $this->input->post('bank'); ?>" class="input" id="bank" />
			</div>
		</div>
		<div class="field">
			<label class="label" for="unit_bank">Unit Bank</label>
			<div class="control">
				<input type="text" name="unit_bank" value="<?php echo $this->input->post('unit_bank'); ?>" class="input" id="unit_bank" />
			</div>
		</div>
		<div class="field">
			<label class="label" for="no_rekening">No Rekening</label>
			<div class="control">
				<input type="text" name="no_rekening" value="<?php echo $this->input->post('no_rekening'); ?>" class="input" id="no_rekening" />
			</div>
		</div>
		<div class="field">
			<label class="label" for="profile">Profile</label>
			<div class="control">
				<input type="text" name="profile" value="<?php echo $this->input->post('profile'); ?>" class="input" id="profile" />
			</div>
		</div>
		<div class="field is-grouped is-pulled-right">
			<p class="control">
				<a href="<?= base_url('admin/index'); ?>" class="button is-light">
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