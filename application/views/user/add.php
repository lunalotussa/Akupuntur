<div class="columns is-centered">
	<div class="column is-half">
		<h1 class="title has-text-success font-family-philosopher">Tambah User</h1>
		<?= form_open('user/add'); ?>
		<div class="field">
			<label class="label" for="password">Password</label>
			<div class="control">
				<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="input" id="password" />
			</div>
		</div>
		<div class="field">
			<label class="label" for="nama">Nama</label>
			<div class="control">
				<input type="text" name="nama" value="<?php echo $this->input->post('nama'); ?>" class="input" id="nama" />
			</div>
		</div>
		<div class="field">
			<label class="label" for="email">Email</label>
			<div class="control">
				<input type="email" name="email" value="<?php echo $this->input->post('email'); ?>" class="input" id="email" />
			</div>
		</div>
		<div class="field">
			<label class="label" for="hak_akses">Hak Akses</label>
			<div class="control">
				<input type="text" name="hak_akses" value="<?php echo $this->input->post('hak_akses'); ?>" class="input" id="hak_akses" />
			</div>
		</div>
		<div class="field is-grouped is-pulled-right">
			<p class="control">
				<a href="<?= base_url('user/index'); ?>" class="button is-light">
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