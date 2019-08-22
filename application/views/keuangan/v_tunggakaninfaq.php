<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-primary">
                    <th><a href="<?php echo base_url('keuangan/tunggakaninfaq')?>">Tunggakan Infaq</a></th>
                    
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
                        <th>Tagihan</th>
            		</thead>
            		<tbody>
            			<?php
            			$no = 1;
            			foreach ($pembayaran_infaq as $p){
                             $bulan_ini=date('m');
            			?>
				        <tr>
				            <td><?php echo $no++ ?></td>
				            <td><?php echo $p->id_siswa ?></td>
				            <td><?php echo $p->nama_siswa?></td>
                            <td><?php echo $bulan_ini-$p->id_bulan . 'bulan' ?></td>
				        </tr>
            			<?php } ?>
            		</tbody>
            	</table> 
            	</div>
            </div>

</div>