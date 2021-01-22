<h1 class="title has-text-success font-family-philosopher">Detail Booking</h1>
<?php echo form_open_multipart(); ?>
<?php 
var_dump($test);
$id_customer = $transaksi['id_customer'];
$sql = "SELECT user.nama,user.email FROM user JOIN customer on user.id_user=customer.id_user WHERE id_customer=$id_customer";
$query = $this->db->query($sql);
if ($query->num_rows() > 0) {
foreach ($query->result() as $ca) {
?>
<div class="columns is-multiline">
	<div class="column is-half">
		<fieldset disabled="disabled">
			<div class="field">
				<label class="label" for="nama">Nama</label>
				<div class="control">
					<input type="hidden" name="id_user" value="<?php echo ($this->input->post('id_user') ? $this->input->post('id_user') : $id_user); ?>" />
					<input type="text" name="nama" value="<?php echo $ca->nama; ?>" class="input" id="nama" readonly />
				</div>
			</div>
		</fieldset>
	</div>
	<div class="column is-half">
		<fieldset disabled="disabled">
			<div class="field">
				<label class="label" for="email">Email</label>
				<div class="control">
					<input type="text" name="email" value="<?php echo $ca->email; ?>" class="input" id="email" readonly />
				</div>
			</div>
		</fieldset>
	</div>
<?php }} ?>
	<div class="column is-half">
		<fieldset disabled="disabled">
			<div class="field">
				<label class="label" for="email">Tanggal Transaksi</label>
				<div class="control">
					<input type="text" name="email" value="<?php echo $transaksi['tanggal']; ?>" class="input" id="email" readonly />
				</div>
			</div>
		</fieldset>
	</div>
	<div class="column is-half">
		<fieldset disabled="disabled">
			<div class="field">
				<label class="label" for="email">Nomor Rekening</label>
				<div class="control">
					<input type="text" name="email" value="<?php echo $transaksi['rekening_pengirim']; ?>" class="input" id="email" readonly />
				</div>
			</div>
		</fieldset>
	</div>
	<div class="column is-half">
		<fieldset disabled="disabled">
			<div class="field">
				<label class="label" for="email">Layanan</label>
				<div class="control">
					<?php
					$no_transaksi = $transaksi['no_transaksi'];
					$sql = "SELECT layanan.nama,user.nama as nama_terapis,transaksi.no_transaksi,transaksi.bukti_pembayaran,transaksi.rekening_pengirim,transaksi.status_pembayaran,transaksi.status_pemesanan,transaksi.tanggal as tanggal_trans,layanan.harga, detail_transaksi.tanggal,detail_transaksi.id_detail FROM transaksi JOIN detail_transaksi ON transaksi.no_transaksi=detail_transaksi.no_transaksi JOIN cart ON detail_transaksi.id_cart=cart.id_chart JOIN detail_layanan ON detail_layanan.id_detailLayanan=cart.id_detail_layanan JOIN layanan ON layanan.id_layanan=detail_layanan.id_layanan JOIN terapis ON detail_layanan.id_terapis=terapis.id_terapis JOIN user ON terapis.id_user=user.id_user WHERE transaksi.no_transaksi=$no_transaksi";
                	$query = $this->db->query($sql);
                	if ($query->num_rows() > 0) {
                    foreach ($query->result() as $row) {
					?>
					<?php echo "* ".$row->nama." - Terapis : ".$row->nama_terapis." - Harga : "."Rp ".number_format($row->harga, 2, ",", ".");?><br>
					<?php }?>
				</div><br>
			</div>
		</fieldset>
	</div>
	<div class="column is-half">
		<fieldset disabled="disabled">
			<div class="field">
				<label class="label" for="email">Tanggal Pelayanan</label>
				<div class="control">
					<input type="text" name="tanggal" value="<?php echo $row->tanggal; ?>" class="input" id="email" readonly />
				</div>

			</div>
		</fieldset>
	</div>
<?php }?>
<div class="column is-half">
		<fieldset disabled="disabled">
			<div class="field">
				<label class="label" for="email">Total Pembayaran</label>
				<div class="control">
					<input type="text" name="total" value="<?php echo "Rp ".number_format($transaksi['total_harga'], 2, ",", "."); ?>" class="input" id="email" readonly />
				</div>

			</div>
		</fieldset>
	</div>
<div class="column is-half">
	<fieldset disabled="disabled">
		<label for="profile" class="label">Bukti Pembayaran</label>
		<div class="field">
			<?php
			if (empty($transaksi['bukti_pembayaran'])) {
			?>
				<figure class="image is-128x128">
					<img src="<?= base_url() ?>resources/picture/noimage.png" alt="profile">
				</figure>
			<?php
			} else {
			?>
				<figure class="image is-128x128">
					<img src="<?= base_url() ?>resources/picture/bukti_pembayaran/<?= $transaksi['bukti_pembayaran']; ?>" alt="profile">
				</figure>
			<?php
			} ?>
		</div>
</fieldset>
	</div>
<div class="column is-half">
		<fieldset disabled="disabled">
			<div class="field">
				<label class="label" for="email">Status Pembayaran</label>
				<div class="control">
					<?php
                             if ($transaksi['status_pembayaran'] == 0) {
                                    echo "<span class='tag is-danger'>Pembayaran Belum Diverifikasi</span>";
                             } else {
                                    echo "<span class='tag is-success'>Pembayaran Sudah Diverifikasi</span>";
                             }

                    ?>
				</div>
			</div>
		</fieldset>
	</div>
	<div class="column is-half">
		<fieldset disabled="disabled">
			<div class="field">
				<label class="label" for="email">Status Pemesanan</label>
				<div class="control">
					<?php
                             if ($transaksi['status_pemesanan'] == 0) {
                                    echo "<span class='tag is-danger'>Belum Selesai Melakukan Pelayanan</span>";
                             } else {
                                    echo "<span class='tag is-success'>Sudah Selesai Melakukan Pelayanan</span>";
                             }
                    ?>
				</div>
			</div>
		</fieldset>
	</div>
<div class="columns">
	<div class="column is-full">
		<div class="field is-grouped is-pulled-right">
			<p class="control">
	
			</p>
		</div>
	</div>
</div>
<?php //}}
?>
<?= form_close(); ?>