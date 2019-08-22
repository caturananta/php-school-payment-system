<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-primary">
                    <a>Data Pembayaran Tahunan</a>
                    </h4></div>
                <div class="col-md-7 align-self-center">
                </div>
            </div>

            <div class="container" style="">
            	<div class="col-md-12">
            	<table id="table_id" class="display table-bordered" cellspacing="0" width="100%">
            		<thead>
            			<th>No</th>
            			<th>Id Pembayaran</th>
            			<th>Nama Siswa</th>
                        <th>Id Biaya Tahunan</th>
                        <th>Biaya Tahunan</th>
                        <th>Jumlah Bayar</th>
                        <th>Tanggal</th>
            		</thead>
            		<tbody>
            			<?php
            			$no = 1;
            			foreach ($pembayaran_tahunan as $p_tahunan){
                        ?>
				        <tr>
				            <td><?php echo $no++ ?></td>
				            <td><?php echo $p_tahunan->id_pembayaran_tahunan ?></td>
				            <td><?php echo $p_tahunan->nama_siswa ?></td>
                            <td><?php echo $p_tahunan->id_jumlah_bayar_tahunan ?></td> 
                            <td><?php echo $p_tahunan->nominal_bayar_tahunan?></td>
                            <td><?php echo $p_tahunan->jumlah_pembayaran_tahunan ?></td>
                            <td><?php echo $p_tahunan->tanggal_bayar_tahunan ?></td>
				        </tr>
            			<?php } ?>
            		</tbody>
            	</table> 
            	</div>
            </div>

</div>