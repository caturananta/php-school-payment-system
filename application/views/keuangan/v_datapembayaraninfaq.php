<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-primary">
                    <a>Data Pembayaran Infaq</a>
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
                        <th>Id Infaq</th>
                        <th>Infaq Per Tahun</th>
                        <th>Bulan</th>
                        <th>Jumlah Bayar</th>
                        <th>Tanggal</th>
            		</thead>
            		<tbody>
            			<?php
            			$no = 1;
            			foreach ($pembayaran_infaq as $p_infaq){
                        ?>
				        <tr>
				            <td><?php echo $no++ ?></td>
				            <td><?php echo $p_infaq->id_pembayaran_infaq ?></td>
				            <td><?php echo $p_infaq->nama_siswa ?></td>
                            <td><?php echo $p_infaq->id_jumlah_bayar_infaq ?></td> 
                            <td><?php echo $p_infaq->nominal_bayar_infaq?></td>
                            <td><?php echo $p_infaq->id_bulan?></td>
                            <td><?php echo $p_infaq->jumlah_pembayaran_infaq ?></td>
                            <td><?php echo $p_infaq->tanggal_bayar_infaq ?></td>
				        </tr>
            			<?php } ?>
            		</tbody>
            	</table> 
            	</div>
            </div>

</div>