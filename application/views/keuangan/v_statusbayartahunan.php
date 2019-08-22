<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-primary">
                    <th><a href="<?php echo base_url('keuangan/statusbayartahunan')?>">Status Bayar</a></th>
                    
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
                        <th>Total</th>
                        <th>Kurang</th>
            		</thead>
            		<tbody>
            			<?php
            			$no = 1;
            			foreach ($pembayaran_tahunan as $pt){
            			?>
				        <tr>
				            <td><?php echo $no++ ?></td>
				            <td><?php echo $pt->id_siswa ?></td>
				            <td><?php echo $pt->nama_siswa?></td>
                            <td><?php echo $pt->total ?></td>
                            <td><?php echo $pt->total-$pt->nominal_bayar_tahunan ?></td>
				        </tr>
            			<?php } ?>
            		</tbody>
            	</table> 
            	</div>
            </div>

</div>