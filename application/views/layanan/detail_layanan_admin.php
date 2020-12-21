<h1 class="title has-text-success font-family-philosopher">Detail Layanan Terapis</h1>
<?php echo form_open('DetailLayanan/add_admin');  ?>
<?php $id_userTerapis = $detail['id_user'];?>
<input type="hidden" name="id_user" value="<?php echo $id_userTerapis; ?>">
                <?php
                    $sql="SELECT user.id_user, user.nama, user.email, terapis.id_terapis FROM user JOIN terapis ON user.id_user=terapis.id_user WHERE user.id_user=$id_userTerapis;";
                    $query          = $this->db->query($sql);
                    if ($query->num_rows() > 0) {
                    foreach ($query->result() as $row) {
                    $id_terapis     = $row->id_terapis;
                    $namaTerapis    = $row->nama;
                    $emailTerapis   = $row->email;
                    ?>

<input type="hidden" name="id_terapis" value="<?php echo $id_terapis;?>">
<div class="columns is-multiline">
	<div class="column is-half">
		<fieldset disabled="disabled">
			<div class="field">
				<label class="label" for="nama">Nama</label>
				<div class="control">
					<input type="hidden" name="id_user" value="<?php echo $id_userTerapis; ?>">
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
	<?php }} ?>
	<div class="column is-full">
		<div class="field">
			<label class="label" for="alamat">Pilih Layanan</label>
			<div class="control">
				<?php
				$sql = "SELECT * FROM layanan";
				$query = $this->db->query($sql);
				if ($query->num_rows() > 0) {
					foreach ($query->result() as $row) {
						$id_layanan = $row->id_layanan;
						$nama       = $row->nama;
						$jenis      = $row->jenis;
						$durasi     = $row->durasi;
						$harga      = $row->harga;
						$sql1 = "SELECT * from detail_layanan WHERE id_terapis=$id_terapis";
						$query1 = $this->db->query($sql1);
						if ($query1->num_rows() > 0) {
							?>
							<label class="checkbox">
								<input type="checkbox" name="layanan[]" value="<?= $id_layanan; ?>" 
								<?php

								foreach ($query1->result() as $row1) {
									if ($id_layanan == $row1->id_layanan) {
										echo " checked";
									}
								}
								?>>
								<?= $jenis; ?> - <?= $nama; ?> - <?= $durasi; ?> - Rp.<?= $harga; ?>,-
							</label><br>
							<?php
						} else { ?>
							<label class="checkbox">
								<input type="checkbox" name="layanan[]" value="<?= $id_layanan; ?>">
								<?= $jenis; ?> - <?= $nama; ?> - <?= $durasi; ?> - Rp.<?= $harga; ?>,-
							</label><br>
							<?php
						}
					}
				} ?>
			</div>
		</div>
	</div>
</div>
<div class="columns">
	<div class="column">
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
	</div>
</div>
<?= form_close(); ?>