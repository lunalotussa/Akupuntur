<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Layanan Add</h3>
            </div>
            <?php echo form_open('layanan/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="jenis" class="control-label">Jenis Layanan</label>
						<div class="form-group">
							<input type="text" name="jenis" value="<?php echo $this->input->post('jenis'); ?>" class="form-control" id="jenis" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama" class="control-label">Nama Layanan</label>
						<div class="form-group">
							<input type="text" name="nama" value="<?php echo $this->input->post('nama'); ?>" class="form-control" id="nama" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="durasi" class="control-label">Durasi</label>
						<div class="form-group">
							<input type="text" name="durasi" value="<?php echo $this->input->post('durasi'); ?>" class="form-control" id="durasi" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="harga" class="control-label">Harga</label>
						<div class="form-group">
							<input type="text" name="harga" value="<?php echo $this->input->post('harga'); ?>" class="form-control" id="harga" />
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