<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-primary">
                    <a href="<?php echo base_url('keuangan/tambahdataspp')?>">Tambah Master Data</a>
                    </h4></div>
                <div class="col-md-7 align-self-center">
                </div>
            </div>

            <div class="container" style="">
            	<div class="col-md-12">
            	<table id="table_id" class="display table-bordered" cellspacing="0" width="100%">
            		<thead>
            			<th>No</th>
            			<th>Id SPP</th>
            			<th>Tahun Masuk</th>
                        <th>SPP Per Tahun</th>
            			<th>Aksi</th>
            		</thead>
            		<tbody>
            			<?php
            			$no = 1;
            			foreach ($jumlah_bayar_spp as $jmlspp){
            			?>
				        <tr>
				            <td><?php echo $no++ ?></td>
				            <td><?php echo $jmlspp->id_jumlah_bayar_spp ?></td>
				            
                            <td><?php echo $jmlspp->keterangan_tahun_masuk ?></td> 
                            <td><?php echo $jmlspp->nominal_bayar_spp?></td>
				            <td>
                            <a href="<?php  echo base_url('keuangan/editmasterspp/'.$jmlspp->id_jumlah_bayar_spp);?>​">
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