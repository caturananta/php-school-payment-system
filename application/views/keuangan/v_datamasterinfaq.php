<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-primary">
                    <a href="<?php echo base_url('keuangan/tambahdatainfaq')?>">Tambah Master Data</a>
                    </h4></div>
                <div class="col-md-7 align-self-center">
                </div>
            </div>

            <div class="container" style="">
            	<div class="col-md-12">
            	<table id="table_id" class="display table-bordered" cellspacing="0" width="100%">
            		<thead>
            			<th>No</th>
            			<th>Id Infaq</th>
            			<th>Tahun Masuk</th>
                        <th>Infaq Per Tahun</th>
            			<th>Aksi</th>
            		</thead>
            		<tbody>
            			<?php
            			$no = 1;
            			foreach ($jumlah_bayar_infaq as $jmlinfaq){
            			?>
				        <tr>
				            <td><?php echo $no++ ?></td>
				            <td><?php echo $jmlinfaq->id_jumlah_bayar_infaq ?></td>
				            
                            <td><?php echo $jmlinfaq->keterangan_tahun_masuk ?></td> 
                            <td><?php echo $jmlinfaq->nominal_bayar_infaq?></td>
				            <td>
                            <a href="<?php  echo base_url('keuangan/editmasterinfaq/'.$jmlinfaq->id_jumlah_bayar_infaq);?>​">
                            <button class="btn btn-warning" type="submit" ​​​​​>Edit</button>
                            </a>                            
                            </td>
				        </tr>
            			<?php } ?>
            		</tbody>
            	</table> 
            	</div>
            </div>

</div>