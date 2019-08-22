<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-primary">
                    <a href="<?php echo base_url('c_admin/dataadmin')?>">Kembali</a>
                    </h4></div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                    </ol>
                </div>
            </div>
            <?php foreach($admin as $a){ ?>
            <form action="<?php echo base_url().'c_admin/updateadmin'; ?>" method="post">
			<div class="container" style="">
            	<div class="col-md-8 ">
            	<table id="table_id" class="display" cellspacing="0" width="100%">
  <div class="form-group">
    <label for="nama_admin">Nama Admin</label>
    <input type="hidden" name="id_admin" value="<?php echo $a->id_admin ?>">
    <input type="text" class="form-control" id="nama_admin" name="nama_admin" placeholder="Edit Nama" value="<?php echo $a->nama_admin ?>">
  </div>
   <div class="form-group">
    <label for="status_admin">Status</label>
    <select class="form-control" id="status_admin" name="status_admin">
        <option value ="kepsek">Kepala Sekolah</option>
                <option value ="tu">Staff TU</option>
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