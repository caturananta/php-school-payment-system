<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-primary">
                    <a href="<?php echo base_url('c_admin/tambahadmin')?>">Tambah Admin</a>
                    </h4></div>
                <div class="col-md-7 align-self-center">
                </div>
            </div>

            <div class="container" style="">
            	<div class="col-md-12">
            	<table id="table_id" class="display table-bordered" cellspacing="0" width="100%">
            		<thead>
            			<th>No</th>
            			<th>Id Admin</th>
            			<th>Nama Admin</th>
            			<th>Status Admin</th>
            			<th>Aksi</th>
            		</thead>
            		<tbody>
            			<?php
            			$no = 1;
            			foreach ($admin as $a){
            			?>
				        <tr>
				            <td><?php echo $no++ ?></td>
				            <td><?php echo $a->id_admin ?></td>
				            <td><?php echo $a->nama_admin?></td>
				            <td><?php echo $a->status_admin ?></td> 
				            <td>
                            <a href="<?php echo base_url('c_admin/editadmin/'.$a->id_admin);?>​">
                            <button class="btn btn-warning" type="submit" ​​​​​>Edit</button>
                            </a>

                            <a href="<?php echo base_url('c_admin/hapusdataadmin/'.$a->id_admin);?>​">
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