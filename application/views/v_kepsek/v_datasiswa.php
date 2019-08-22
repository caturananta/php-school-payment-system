<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-primary">
                    <a href="<?php echo base_url('c_admin/tambahsiswa')?>">Tambah Siswa</a>
                    </h4></div>
                <div class="col-md-7 align-self-center">
                </div>
            </div>

            <div class="container" style="">
            	<div class="col-md-12">
            	<table id="table_id" class="display table-bordered" cellspacing="0" width="100%">
            		<thead>
            			<th>No</th>
            			<th>Id Siswa</th>
            			<th>Nama Siswa</th>
                        <th>Tahun Masuk</th>
                        <th>Tagihan</th>
                       
            			<th>Aksi</th>
            		</thead>
            		<tbody>
            			<?php
            			$no = 1;
            			foreach ($siswa as $s){
            			?>
				        <tr>
				            <td><?php echo $no++ ?></td>
				            <td><?php echo $s->id_siswa ?></td>
				            <td><?php echo $s->nama_siswa ?></td>
                            <td><?php echo $s->keterangan_tahun_masuk ?></td> 
                            </td>
                            <td>
                            <a href="<?php  echo base_url('keuangan/riwayatbayar/'.$s->id_siswa);?>​">
                            <button class="btn btn-info" type="submit" ​​​​​>Detail</button>
                            </a></td>
                            <!--Tunggakan-->
                            
				            <td>
                            <a href="<?php  echo base_url('c_admin/editsiswa/'.$s->id_siswa);?>​">
                            <button class="btn btn-warning" type="submit" ​​​​​>Edit</button>
                            <a href="<?php  echo base_url('c_admin/hapussiswa/'.$s->id_siswa);?>​">
                            <button class="btn btn-danger" type="submit" ​​​​​>Hapus</button>
                            </a>            
                            </td>
				        </tr>
            			<?php } ?>
            		</tbody>
            	</table> 
            	</div>
            </div>

</div>