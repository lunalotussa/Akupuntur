<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Terapi Add</h3>
            </div>
            <?php echo form_open('terapi/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_user" class="control-label">Id User</label>
						<div class="form-group">
							<input type="text" name="id_user" value="<?php echo $this->input->post('id_user'); ?>" class="form-control" id="id_user" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="alamat" class="control-label">Alamat</label>
						<div class="form-group">
							<input type="text" name="alamat" value="<?php echo $this->input->post('alamat'); ?>" class="form-control" id="alamat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="telepon" class="control-label">Telepon</label>
						<div class="form-group">
							<input type="text" name="telepon" value="<?php echo $this->input->post('telepon'); ?>" class="form-control" id="telepon" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="bank" class="control-label">Bank</label>
						<div class="form-group">
							<input type="text" name="bank" value="<?php echo $this->input->post('bank'); ?>" class="form-control" id="bank" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="unit_bank" class="control-label">Unit Bank</label>
						<div class="form-group">
							<input type="text" name="unit_bank" value="<?php echo $this->input->post('unit_bank'); ?>" class="form-control" id="unit_bank" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="no_rekening" class="control-label">No Rekening</label>
						<div class="form-group">
							<input type="text" name="no_rekening" value="<?php echo $this->input->post('no_rekening'); ?>" class="form-control" id="no_rekening" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ktp" class="control-label">Ktp</label>
						<div class="form-group">
							<input type="text" name="ktp" value="<?php echo $this->input->post('ktp'); ?>" class="form-control" id="ktp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="selfie_ktp" class="control-label">Selfie Ktp</label>
						<div class="form-group">
							<input type="text" name="selfie_ktp" value="<?php echo $this->input->post('selfie_ktp'); ?>" class="form-control" id="selfie_ktp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="profile" class="control-label">Profile</label>
						<div class="form-group">
							<input type="text" name="profile" value="<?php echo $this->input->post('profile'); ?>" class="form-control" id="profile" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="status" class="control-label">Status</label>
						<div class="form-group">
							<input type="text" name="status" value="<?php echo $this->input->post('status'); ?>" class="form-control" id="status" />
						</div>
					</div>
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