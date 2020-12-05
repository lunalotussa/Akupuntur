<div class="columns is-centered">
	<div class="column is-half">
		<h1 class="title has-text-success font-family-philosopher">Edit User</h1>
		<?php echo form_open('user/edit/' . $user['id_user']); ?>
		<div class="field">
			<label class="label" for="password">Password</label>
			<div class="control">
				<input type="password" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $user['password']); ?>" class="input" id="password" />
			</div>
		</div>
		<div class="field">
			<label class="label" for="nama">Nama</label>
			<div class="control">
				<input type="text" name="nama" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $user['nama']); ?>" class="input" id="nama" />
			</div>
		</div>
		<div class="field">
			<label class="label" for="email">Email</label>
			<div class="control">
				<input type="email" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $user['email']); ?>" class="input" id="email" />
			</div>
		</div>
		<div class="field">
			<label class="label" for="hak_akses">Hak Akses</label>
			<div class="control">
				<input type="text" name="hak_akses" value="<?php echo ($this->input->post('hak_akses') ? $this->input->post('hak_akses') : $user['hak_akses']); ?>" class="input" id="hak_akses" />
			</div>
		</div>
		<div class="field is-grouped is-pulled-right">
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