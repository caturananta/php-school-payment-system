<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-primary">
                    <a href="<?php echo base_url('c_admin/datasiswa')?>">Kembali</a>
                    </h4></div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                    </ol>
                </div>
            </div>
            <?php foreach($jumlah_bayar_spp as $j){ ?>
            <form action="<?php echo base_url().'keuangan/updatemasterspp'; ?>" method="post">
			<div class="container" style="">
            	<div class="col-md-8 ">
            	<table id="table_id" class="display" cellspacing="0" width="100%">
  <div class="form-group">
    <label for="nominal_bayar_spp">SPP Per Tahun</label>
    <input type="hidden" name="id_jumlah_bayar_spp" value="<?php echo $j->id_jumlah_bayar_spp ?>">
    <input type="text" class="form-control" id="nominal_bayar_spp" name="nominal_bayar_spp" placeholder="Edit SPP" value="<?php echo $j->nominal_bayar_spp ?>">
  </div>
   <div class="form-group">
    <label for="id_tahun_masuk">Tahun Masuk</label>
    <select class="form-control" id="id_tahun_masuk" name="id_tahun_masuk">
        <?php if (count($tahun_masuk)) {
        foreach ($tahun_masuk as $list) {
        echo "<option value='". $list['id_tahun_masuk'] . "'>" . $list['keterangan_tahun_masuk'] . "</option>";
    }
}?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
			</table>
		</div>
		</div>
			</form>
		<?php } ?>
</div>
</div>