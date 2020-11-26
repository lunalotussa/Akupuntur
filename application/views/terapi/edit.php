<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Terapi Edit</h3>
            </div>
			<?php echo form_open('terapi/edit/'.$terapi['id_terapis']); ?>
			<div class="box-body">
				<div class="row clearfix">
					
					<input type="hidden" name="id_user" value="<?php echo ($this->input->post('id_user') ? $this->input->post('id_user') : $terapi['id_user']); ?>" class="form-control" id="id_user" />

					<div class="col-md-6">
						<label for="alamat" class="control-label">Nama</label>
						<div class="form-group">
							<input type="text" name="alamat" value="<?php echo $nama;?>" class="form-control" id="alamat" readonly="true" required/>
						</div>
					</div>
					<div class="col-md-6">
						<label for="alamat" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="alamat" value="<?php echo $email;?>" class="form-control" id="alamat" readonly="true" required/>
						</div>
					</div>	
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
							<input type="file" name="ktp" value="<?php echo ($this->input->post('ktp') ? $this->input->post('ktp') : $terapi['ktp']); ?>" class="form-control" id="ktp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="selfie_ktp" class="control-label">Selfie Ktp</label>
						<div class="form-group">
							<input type="file" name="selfie_ktp" value="<?php echo ($this->input->post('selfie_ktp') ? $this->input->post('selfie_ktp') : $terapi['selfie_ktp']); ?>" class="form-control" id="selfie_ktp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="profile" class="control-label">Profile</label>
						<div class="form-group">
							<input type="file" name="profile" value="<?php echo ($this->input->post('profile') ? $this->input->post('profile') : $terapi['profile']); ?>" class="form-control" id="profile" />
						</div>
					</div>
					<!-- <div class="col-md-6">
						<label for="status" class="control-label">Status</label>
						<div class="form-group">
							<input type="text" name="status" value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $terapi['status']); ?>" class="form-control" id="status" />
						</div>
					</div> -->
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>