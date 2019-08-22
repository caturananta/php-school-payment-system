<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-primary">
                    <a href="<?php echo base_url('c_admin/tambahtahun')?>">Tambah Tahun</a>
                    </h4></div>
                <div class="col-md-7 align-self-center">
                </div>
            </div>

            <div class="container" style="">
            	<div class="col-md-12">
            	<table id="table_id" class="display table-bordered" cellspacing="0" width="100%">
            		<thead>
            			<th>No</th>
            			<th>Id Tahun</th>
            			<th>Tahun</th>
            			<th>Aksi</th>
            		</thead>
            		<tbody>
            			<?php
            			$no = 1;
            			foreach ($tahun_masuk as $tm){
            			?>
				        <tr>
				            <td><?php echo $no++ ?></td>
				            <td><?php echo $tm->id_tahun_masuk ?></td>
				            <td><?php echo $tm->keterangan_tahun_masuk?></td>
				            <td>
                            <a href="<?php  echo base_url('c_admin/edittahun/'.$tm->id_tahun_masuk);?>​">
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