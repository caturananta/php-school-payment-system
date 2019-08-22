<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-primary">
                    <a href="">Input Pembayaran Tahunan</a>
                    </h4></div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                    </ol>
                </div>
            </div>
            <?php if ($this->session->flashdata('message')==TRUE): ?>
<div role="alert" class="alert alert-success">
<button aria-label="btn" class="btn" type="submit"><a href=<?php echo base_url().'laporan/laporan_pdf_bayar_tahunan';?>>
<span aria-hidden="true" class="fa fa-print"></span>
</button>
<p><?php echo $this->session->flashdata('message') ?></p>
</div>
<?php endif; ?>
  
			<form action="<?php echo base_url(). 'keuangan/prosesbayartahunan'; ?>" method="post" onsubmit="return confirm('Print dan Lanjutkan?');">
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
                    <div class="form-group">
                        <label>Wajib Bayar Tahunan</label>
                        <select class="form-control" name="id_jumlah_bayar_tahunan" id="id_jumlah_bayar_tahunan">
                            <option value="">Please Select</option>
                            <?php
                            foreach ($jumlah_bayar_tahunan as $jb) {
                                ?>
                                <option <?php 
                                echo $jumlah_bayar_tahunan_selected == $jb->id_jumlah_bayar_tahunan ? 
                                'selected="selected"' : '' ?> 
                                    class="<?php echo $jb->id_siswa ?>"
                                    value="<?php echo $jb->id_jumlah_bayar_tahunan ?>">
                                    <?php echo $jb->nominal_bayar_tahunan ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                    <label for="jumlah_pembayaran_tahunan">Jumlah Bayar</label>
                    <input type="text" class="form-control" id="jumlah_pembayaran_tahunan" name="jumlah_pembayaran_tahunan" placeholder="Masukkan Jumlah Bayar">
                    </div>
                    
                      <div class="form-group">
                        <label for="tanggal_bayar_tahunan"><?php echo tanggal();?></label>
                        <input type="date" class="form-control" name="tanggal_bayar_tahunan">
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    			</table>
                    		</div>
                    		</div>
                    			</form>
                    </div>