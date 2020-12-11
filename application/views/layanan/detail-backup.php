<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Layanan Edit</h3>
            </div>
            <?php echo form_open('DetailLayanan/add'); ?>
            <div class="box-body">
            <div class="form-group row">
                <input type="hidden" name="id_user" value="<?php echo $id_user; ?>">
                <?php
                    $sql="SELECT user.id_user, user.nama, user.email, terapis.id_terapis FROM user JOIN terapis ON user.id_user=terapis.id_user WHERE user.id_user=$id_user;";
                    $query          = $this->db->query($sql);
                    if ($query->num_rows() > 0) {
                    foreach ($query->result() as $row) {
                    $id_terapis     = $row->id_terapis;
                    $namaTerapis    = $row->nama;
                    $emailTerapis   = $row->email;
                    ?>

                    <input type="hidden" name="id_terapis" value="<?php echo $id_terapis;?>">
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
                        <label for="alamat" class="control-label">Pilih Layanan</label>
                        <div class="custom-control custom-checkbox">
                        <?php
                            $sql ="SELECT * FROM layanan";
                                $query = $this->db->query($sql);
                                if ($query->num_rows() > 0) {
                                foreach ($query->result() as $row) {
                                $id_layanan = $row->id_layanan;
                                $nama       = $row->nama;
                                $jenis      = $row->jenis;
                                $durasi     = $row->durasi;
                                $harga      = $row->harga;
                            $sql1 ="SELECT * from detail_layanan WHERE id_terapis=$id_terapis";
                                $query1 = $this->db->query($sql1);
                                if ($query1->num_rows() > 0) {
                        ?>
                        <label>
                        <input type="checkbox" class="custom-control-input" name="layanan[]" value="<?=$id_layanan;?>" 
                        <?php 
                         foreach($query1->result() as $row1){
                         if($id_layanan==$row1->id_layanan){
                         echo " checked"; 
                         }
                         }
                         ?>> <?=$jenis;?> - <?=$nama;?> - <?=$durasi;?> - Rp.<?=$harga;?>,-
                       </label><br>
                      <?php
                        }else{?>
                        <label>
                        <input type="checkbox" class="custom-control-input" name="layanan[]" value="<?=$id_layanan;?>"> <?=$jenis;?> - <?=$nama;?> - <?=$durasi;?> - Rp.<?=$harga;?>,-
                      <?php
                        }}}?>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-success">
                    <i class="fa fa-check"></i> Save
                </button>
            </div>              
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
 