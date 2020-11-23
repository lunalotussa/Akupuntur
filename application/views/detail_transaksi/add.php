<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Detail Transaksi Add</h3>
            </div>
            <?php echo form_open('detail_transaksi/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="no_transaksi" class="control-label">No Transaksi</label>
						<div class="form-group">
							<input type="text" name="no_transaksi" value="<?php echo $this->input->post('no_transaksi'); ?>" class="form-control" id="no_transaksi" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_layanan" class="control-label">Id Layanan</label>
						<div class="form-group">
							<input type="text" name="id_layanan" value="<?php echo $this->input->post('id_layanan'); ?>" class="form-control" id="id_layanan" />
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