<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Admin Edit</h3>
            </div>
			<!-- <?php echo form_open('admin/edit/'.$admin['id_admin']); ?> -->
			<form action="<?=base_url()?>index.php/admin/edit/<?php echo $admin['id_admin'] ?>" method="post" enctype="multipart/form-data">
			<div class="box-body">
				<div class="row clearfix">
					<input type="hidden" name="id_user" value="<?php echo ($this->input->post('id_user') ? $this->input->post('id_user') : $admin['id_user']); ?>" class="form-control" id="id_user" />

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
							<input type="text" name="alamat" value="<?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $admin['alamat']); ?>" class="form-control" id="alamat" required/>
						</div>
					</div>
					<div class="col-md-6">
						<label for="telepon" class="control-label">Telepon</label>
						<div class="form-group">
							<input type="number" name="telepon" value="<?php echo ($this->input->post('telepon') ? $this->input->post('telepon') : $admin['telepon']); ?>" class="form-control" id="telepon" required/>
						</div>
					</div>
					<div class="col-md-6">
						<label for="bank" class="control-label">Bank</label>
						<div class="form-group">
							<input type="text" name="bank" value="<?php echo ($this->input->post('bank') ? $this->input->post('bank') : $admin['bank']); ?>" class="form-control" id="bank" required/>
						</div>
					</div>
					<div class="col-md-6">
						<label for="unit_bank" class="control-label">Unit Bank</label>
						<div class="form-group">
							<input type="text" name="unit_bank" value="<?php echo ($this->input->post('unit_bank') ? $this->input->post('unit_bank') : $admin['unit_bank']); ?>" class="form-control" id="unit_bank" required/>
						</div>
					</div>
					<div class="col-md-6">
						<label for="no_rekening" class="control-label">No Rekening</label>
						<div class="form-group">
							<input type="number" name="no_rekening" value="<?php echo ($this->input->post('no_rekening') ? $this->input->post('no_rekening') : $admin['no_rekening']); ?>" class="form-control" id="no_rekening" required/>
						</div>
					</div>
					<div class="col-md-6">
						<label for="profile" class="control-label">Profile</label>
						<div class="form-group">
							<?php
							if (empty($admin['profile'])){
							?>
							<img src="<?=base_url()?>resources/picture/noimage.png" alt="profile" width="150px">
							<?php	
							}else{
							?>
							<img src="<?=base_url()?>resources/picture/<?=$admin['profile'];?>" alt="profile" width="100px">
							<?php
							} ?>
							<input type="file" name="profile" value="<?php echo ($this->input->post('profile') ? $this->input->post('profile') : $admin['profile']); ?>" class="form-control" id="profile" />
							<input type="hidden" name="filelama" value="<?php echo ($this->input->post('filelama') ? $this->input->post('filelama') : $admin['profile']); ?>" class="form-control" id="filelama">
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>			
	        </form>	
			<!-- <?php echo form_close(); ?> -->
		</div>
    </div>
</div>