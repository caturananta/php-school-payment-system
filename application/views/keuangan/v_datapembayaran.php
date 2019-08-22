<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-primary">
                    <a>Data Pembayaran</a>
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
                        <th>Id SPP</th>
                        <th>SPP Per Tahun</th>
                        <th>Bulan</th>
                        <th>Jumlah Bayar</th>
                        <th>Tanggal</th>
            		</thead>
            		<tbody>
            			<?php
            			$no = 1;
            			foreach ($pembayaran_spp as $p_spp){
                        ?>
				        <tr>
				            <td><?php echo $no++ ?></td>
				            <td><?php echo $p_spp->id_pembayaran_spp ?></td>
				            <td><?php echo $p_spp->nama_siswa ?></td>
                            <td><?php echo $p_spp->id_jumlah_bayar_spp ?></td> 
                            <td><?php echo $p_spp->nominal_bayar_spp?></td>
                            <td><?php echo $p_spp->id_bulan?></td>
                            <td><?php echo $p_spp->jumlah_pembayaran_spp ?></td>
                            <td><?php echo $p_spp->tanggal_bayar ?></td>
				        </tr>
            			<?php } ?>
            		</tbody>
            	</table> 
            	</div>
            </div>

</div>