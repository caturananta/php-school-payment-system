<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-primary">
                    <a href="<?php echo base_url('c_admin/tambahtahun')?>">Kembali</a>
                    </h4></div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                    </ol>
                </div>
            </div>
            <form action="<?php echo base_url(). 'c_admin/prosestambahtahun'; ?>" method="post">
			<div class="container" style="">
            	<div class="col-md-8 ">
            	<table id="table_id" class="display" cellspacing="0" width="100%">
  <div class="form-group">
    <label for="keterangan_tahun_masuk">Tahun Masuk</label>
    <input type="text" class="form-control" id="keterangan_tahun_masuk" name="keterangan_tahun_masuk" placeholder="Masukan Tahun">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
			</table>
		</div>
		</div>
			</form>
</div>