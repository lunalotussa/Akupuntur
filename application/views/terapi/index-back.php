<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Terapis Listing</h3>
			</div>
			<div class="box-body">
				<table class="table table-striped">
					<tr>
						<th>Nama</th>
						<th>Email</th>
						<th>Alamat</th>
						<th>Telepon</th>
						<th>Bank</th>
						<th>Unit Bank</th>
						<th>No Rekening</th>
						<th>Status</th>
						<th>Actions</th>
					</tr>
					<?php foreach ($terapis as $t) {
						$status = $t['status'];
						$id_userTerapis = $t['id_user'];
						$sql = "SELECT * FROM user WHERE id_user=$id_userTerapis";
						$query = $this->db->query($sql);
						if ($query->num_rows() > 0) {
							foreach ($query->result() as $row) {
								$namaTerapis  = $row->nama;
								$emailTerapis = $row->email;
					?>
								<tr>
									<td><?php echo $namaTerapis ?></td>
									<td><?php echo $emailTerapis; ?></td>
									<td><?php echo $t['alamat']; ?></td>
									<td><?php echo $t['telepon']; ?></td>
									<td><?php echo $t['bank']; ?></td>
									<td><?php echo $t['unit_bank']; ?></td>
									<td><?php echo $t['no_rekening']; ?></td>
									<td>
										<?php
										if ($status == 0) {
											echo "<button class='btn btn-danger btn-xs'>Belum Diverifikasi</button>";
										} else {
											echo "<button class='btn btn-primary btn-xs'>Sudah Diverifikasi</button>";
										}

										?>
									</td>
									<td>
										<a href="<?php echo site_url('terapi/detail/' . $t['id_terapis']); ?>" class="btn btn-warning btn-xs"><span class="fa fa-edit"></span>Detail</a>
										<a href="<?php echo site_url('terapi/verifikasi/' . $t['id_terapis']); ?>" class="btn btn-success btn-xs"><span class="fa  fa-check-circle"></span> Verifikasi</a>
									</td>
								</tr>
					<?php }
						}
					} ?>
				</table>

			</div>
		</div>
	</div>
</div>