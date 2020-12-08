<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Detail Terapis</h3>
            </div>
			<?php echo form_open('terapi/edit/'.$terapi['id_terapis']); 
			?>
			<div class="box-body">
				<div class="row clearfix">
					
					<input type="hidden" name="id_user" value="<?php echo ($this->input->post('id_user') ? $this->input->post('id_user') : $terapi['id_user']); ?>" class="form-control" id="id_user" />
					<?php
					$id_userTerapis = ($this->input->post('id_user') ? $this->input->post('id_user') : $terapi['id_user']);
					$sql ="SELECT * FROM user WHERE id_user=$id_userTerapis";
		            $query = $this->db->query($sql);
		            if ($query->num_rows() > 0) {
		            foreach ($query->result() as $row) {
		            $namaTerapis  = $row->nama;
		            $emailTerapis = $row->email;
					?>
					<div class="col-md-6">
						<label for="alamat" class="control-label">Nama</label>
						<div class="form-group">
							<input type="text" name="alamat" value="<?php echo $namaTerapis;?>" class="form-control" id="alamat" readonly="true" required/>
						</div>
					</div>
					<div class="col-md-6">
						<label for="alamat" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="alamat" value="<?php echo $emailTerapis;?>" class="form-control" id="alamat" readonly="true" required/>
						</div>
					</div>	
					<?php }} ?>
					<div class="col-md-6">
						<label for="alamat" class="control-label">Alamat</label>
						<div class="form-group">
							<input type="text" name="alamat" value="<?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $terapi['alamat']); ?>" class="form-control" id="alamat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="telepon" class="control-label">Telepon</label>
						<div class="form-group">
							<input type="number" name="telepon" value="<?php echo ($this->input->post('telepon') ? $this->input->post('telepon') : $terapi['telepon']); ?>" class="form-control" id="telepon" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="bank" class="control-label">Bank</label>
						<div class="form-group">
							<input type="text" name="bank" value="<?php echo ($this->input->post('bank') ? $this->input->post('bank') : $terapi['bank']); ?>" class="form-control" id="bank" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="unit_bank" class="control-label">Unit Bank</label>
						<div class="form-group">
							<input type="text" name="unit_bank" value="<?php echo ($this->input->post('unit_bank') ? $this->input->post('unit_bank') : $terapi['unit_bank']); ?>" class="form-control" id="unit_bank" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="no_rekening" class="control-label">No Rekening</label>
						<div class="form-group">
							<input type="number" name="no_rekening" value="<?php echo ($this->input->post('no_rekening') ? $this->input->post('no_rekening') : $terapi['no_rekening']); ?>" class="form-control" id="no_rekening" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ktp" class="control-label">Ktp</label>
						<div class="form-group">
							<?php
							if (empty($terapi['ktp'])){
							?>
							<img src="<?=base_url()?>resources/picture/noimage.png" alt="profile" width="150px">
							<?php	
							}else{
							?>
							<img src="<?=base_url()?>resources/picture/<?=$terapi['ktp'];?>" alt="profile" width="120px">
							<?php
							} ?>
						</div>
					</div>
					<div class="col-md-6">
						<label for="selfie_ktp" class="control-label">Selfie Ktp</label>
						<div class="form-group">
							<?php
							if (empty($terapi['selfie_ktp'])){
							?>
							<img src="<?=base_url()?>resources/picture/noimage.png" alt="profile" width="150px">
							<?php	
							}else{
							?>
							<img src="<?=base_url()?>resources/picture/<?=$terapi['selfie_ktp'];?>" alt="profile" width="120px">
							<?php
							} ?>
						</div>
					</div>
					<div class="col-md-6">
						<label for="profile" class="control-label">Profile</label>
						<div class="form-group">
							<?php
							if (empty($terapi['profile'])){
							?>
							<img src="<?=base_url()?>resources/picture/noimage.png" alt="profile" width="150px">
							<?php	
							}else{
							?>
							<img src="<?=base_url()?>resources/picture/<?=$terapi['profile'];?>" alt="profile" width="120px">
							<?php
							} ?>
						</div>
					</div>
					<div class="col-md-6">
						<label for="status" class="control-label">Status</label>
						<div class="form-group">
						<?php $status = ($this->input->post('status') ? $this->input->post('status') : $terapi['status']); 
						if ($status==0) {
						?>
						<button class="btn btn-danger" disabled="true">Belum Diverifikasi Admin</button>
						<?php
						} else {
						?>
						<button class="btn btn-primary" disabled="true">Sudah Diverifikasi Admin</button>
						<?php } ?>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>