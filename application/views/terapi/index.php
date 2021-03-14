<h1 class="title has-text-success font-family-philosopher">Daftar Terapis</h1>

<div class="table-container">
    <table class="table is-fullwidth">
        <thead>
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
        </thead>
        <tfoot>
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
        </tfoot>
        <tbody>
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
                                    echo "<span class='tag is-danger'>Belum Diverifikasi</span>";
                                } else {
                                    echo "<span class='tag is-success'>Sudah Diverifikasi</span>";
                                }

                                ?>
                            </td>
                            <td>
                                <div class="field is-grouped">
                                    <p class="control">
                                        <a href="<?php echo site_url('terapi/detail/' . $t['id_terapis']); ?>" class="button is-info is-small">
                                            <span class="icon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                            <span>
                                                Detail
                                            </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a href="<?php echo site_url('terapi/verifikasi/' . $t['id_terapis']); ?>" class="button is-success is-small">
                                            <span class="icon">
                                                <i class="fa  fa-check-circle"></i>
                                            </span>
                                            <span>
                                                Verifikasi
                                            </span>
                                        </a>
                                    </p>
                              <!--   </div>
                                <div class="field is-grouped"> -->
                                    <p class="control">
                                        <!-- <?php echo base_url(); ?>index.php/upload/download/<?php echo $row->kd_berkas; ?> -->
                                        <a href="<?php echo site_url('terapi/download/' . $t['id_terapis']); ?>" class="button is-warning is-small">
                                            <span class="icon">
                                                <i class="fa fa-download"></i>
                                            </span>
                                            <span>
                                                Download Sertifikat
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
            <?php }
                }
            } ?>
        </tbody>
    </table>
</div>