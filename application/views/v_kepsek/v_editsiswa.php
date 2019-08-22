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
            <?php foreach($siswa as $s){ ?>
            <form action="<?php echo base_url().'c_admin/updatesiswa'; ?>" method="post">
			<div class="container" style="">
            	<div class="col-md-8 ">
            	<table id="table_id" class="display" cellspacing="0" width="100%">
  <div class="form-group">
    <label for="nama_siswa">Nama Siswa</label>
    <input type="hidden" name="id_siswa" value="<?php echo $s->id_siswa ?>">
    <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" placeholder="Edit Nama" value="<?php echo $s->nama_siswa ?>">
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