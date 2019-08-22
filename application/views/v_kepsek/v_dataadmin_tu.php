<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-primary">
                    Data Admin
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
				        </tr>
            			<?php } ?>
            		</tbody>
            	</table> 
            	</div>
            </div>

</div>