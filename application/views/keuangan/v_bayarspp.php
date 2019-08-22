<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-primary">
                    <a href="">Input Pembayaran SPP</a>
                    </h4></div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                    </ol>
                </div>
            </div>
            <?php if ($this->session->flashdata('message')==TRUE): ?>
<div role="alert" class="alert alert-success">
<button class="btn" type="submit"><a href=<?php echo base_url().'laporan/laporan_pdf_bayar_spp';?> target="_blank">
<span class="fa fa-print"></span>
</button>
<p><?php echo $this->session->flashdata('message') ?></p>
</div>
<?php 
endif;
 ?>

 <form action="<?php echo base_url(). 'keuangan/prosesbayarspp'; ?>"method="post" onsubmit="return confirm('Print dan lanjutkan?');">

			<div class="container" style="">
      	<div class="col-md-8 ">
      	<table id="table_id" class="display" cellspacing="0" width="100%">
                    <div class="form-group">
                        <label>Tahun Masuk</label>
                        <select class="form-control" name="id_tahun_masuk" id="id_tahun_masuk">
                            <option value="">Please Select</option>
                            <?php
                            foreach ($tahun_masuk as $t) {
                                ?>
                                <!--di sini kita tambahkan class berisi id provinsi-->
                                <option <?php echo $tahun_masuk_selected == $t->id_tahun_masuk ? 'selected="selected"' : '' ?> 
                                    value="<?php echo $t->id_tahun_masuk ?>">
                                    <?php echo $t->keterangan_tahun_masuk ?></option>
                                <?php
                            } 
                            ?>
                        </select>
                    </div>
                  <div class="form-group">
                        <label>Siswa</label>
                        <select class="form-control" name="id_siswa" id="id_siswa">
                            <option value="">Please Select</option>
                            <?php
                            foreach ($siswa as $s) {
                                ?>
                                <option <?php 
                                echo $siswa_selected == $s->id_siswa ? 'selected="selected"' : '' ?> 
                                  class="<?php echo $s->id_tahun_masuk ?>"   
                                  value="<?php echo $s->id_siswa ?>">
                                  <?php echo $s->nama_siswa ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group"></div>
                        <label>Bulan</label>
                        <select class="form-control" name="id_bulan" id="id_bulan">
                            <option value="">Please Select</option>
                            <?php 
                                foreach($bulan as $b) 
                                    { ?>
                                    <option <?php 
                                    echo $bulan_selected == $b->id_bulan ?>>
                                    
                                    <?php echo $b->nama_bulan ?>
                                    </option>
                            <?php } ?>
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Wajib Bayar SPP</label>
                        <select class="form-control" name="id_jumlah_bayar_spp" id="id_jumlah_bayar_spp">
                            <option value="">Please Select</option>
                            <?php
                            foreach ($jumlah_bayar_spp as $j) {
                                ?>
                                <option <?php 
                                echo $jumlah_bayar_spp_selected == $j->id_jumlah_bayar_spp ? 
                                'selected="selected"' : '' ?> 
                                    class="<?php echo $j->id_siswa ?>" 
                                    value="<?php echo $j->id_jumlah_bayar_spp ?>">
                                    <?php echo $j->nominal_bayar_spp ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group"></div>
                        <label>Jumlah Bayar</label>
                        <select class="form-control" name="jumlah_pembayaran_spp" id="jumlah_pembayaran_spp">
                            <option value="">Please Select</option>
                            <?php 
                                foreach($jumlah_bayar_spp as $j) 
                                    { ?>
                                    <option <?php 
                                    echo $nominal_bayar_spp_selected == $j->nominal_bayar_spp ?
                                    'selected="selected"' : '' ?>
                                        class="<?php echo $j->id_jumlah_bayar_spp ?>"
                                        value="<?php echo $j->nominal_bayar_spp/12 ?>">
                                    <?php echo $j->nominal_bayar_spp/12 ?>
                                    </option>
                            <?php } ?>
                        </select>
                    </div>
                    
                    <br>
                    <div class="form-group">
                        <label for="tanggal_bayar"><?php echo tanggal();?></label>
                        <input type="date" class="form-control" name="tanggal_bayar">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
			</table>
		</div>
		</div>
			</form>
</div>