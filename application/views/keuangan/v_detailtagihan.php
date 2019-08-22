<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-primary">
                    <th><a href="<?php echo base_url('c_admin/datasiswa')?>">Kembali</a></th>
                    <th>||</th>
                    <?php foreach ($siswa as $s) {?>
                    <th><a href="<?php echo base_url('keuangan/detailtagihanspp/'.$s->id_siswa)?>​"><?php } ?> Tagihan SPP</a></th>
                    <th>||</th>
                    <?php foreach ($siswaz as $sz) {?>
                    <th><a href="<?php echo base_url('keuangan/detailtagihaninfaq/'.$sz->id_siswa)?>​"> <?php } ?> Tagihan Infaq</a></th>
                    </h4></div>
                <div class="col-md-7 align-self-center">
                </div>
            </div>
            <h3 style="bottom: 200px"><center>Riwayat Pembayaran SPP <p><a href="<?php echo base_url('Laporan/export_excel_spp/'.$s->id_siswa) ?>">Cetak</a></p></center></h3>
            <div class="container" style="">
            	<div class="col-md-12">
            	<table id="table_id" class="display table-bordered" cellspacing="0" width="100%">
            		<thead>
            			<th>No</th>
            			<th>Id Siswa</th>
            			<th>Nama Siswa</th>
                        <th>Jumlah Bayar SPP</th>
                        <th>Pembayaran Bulan</th>
            			<th>Tanggal</th>
            		</thead>
            		<tbody>
            			<?php
            			$no = 1;
            			foreach ($siswa as $s){
            			?>
				        <tr>
				            <td><?php echo $no++ ?></td>
				            <td><?php echo $s->id_siswa ?></td>
				            <td><?php echo $s->nama_siswa?></td>
                            <td><?php echo $s->jumlah_pembayaran_spp?></td>
                            <td><?php echo $s->id_bulan?></td>
                            <td><?php echo $s->tanggal_bayar?></td>
				        </tr>
                        <?php } ?>
            		</tbody>
            	</table> 
            	</div>
            </div>
            <hr>
            <h3 style="bottom: 200px"><center>Riwayat Pembayaran Infaq <p><a href="<?php echo base_url('Laporan/export_excel_infaq/'.$sz->id_siswa) ?>">Cetak</a></p></center></h3>
            <div class="container" style="">
                <div class="col-md-12">
                <table id="table_id" class="display table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <th>No</th>
                        <th>Id Siswa</th>
                        <th>Nama Siswa</th>
                        <th>Jumlah Bayar Infaq</th>
                        <th>Tanggal</th>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($siswaz as $sz){
                        ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $sz->id_siswa ?></td>
                            <td><?php echo $sz->nama_siswa?></td>
                            <td><?php echo $sz->jumlah_pembayaran_infaq?></td>
                            <td><?php echo $sz->tanggal_bayar_infaq?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table> 
                </div>
            </div>

</div>
</div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2018 All rights reserved. Template designed by <a href="https://colorlib.com">Colorlib</a></footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="<?php echo base_url('assets/js/lib/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/dataTables.js');?>"></script>
    <script src="<?php echo base_url('assets/dataTables.min.js');?>"></script>
   
    <script src="<?php echo base_url('assets/js/dataTables.bootstrap.js')?>"></script>
    <script>
        $(document).ready(function() {
    $('table.display').DataTable();
} );
    </script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url('assets/js/lib/bootstrap/js/popper.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/lib/bootstrap/js/bootstrap.min.js')?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url('assets/js/jquery.slimscroll.js')?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url('assets/js/sidebarmenu.js')?>"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url('assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js')?>"></script>
    <!--Custom JavaScript -->


    <!-- Amchart -->
    <script src="<?php echo base_url('assets/js/lib/morris-chart/raphael-min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/lib/morris-chart/morris.js')?>"></script>
    <script src="<?php echo base_url('assets/js/lib/morris-chart/dashboard1-init.js')?>"></script>


    <script src="<?php echo base_url('assets/js/lib/calendar-2/moment.latest.min.js')?>"></script>
    <!-- scripit init-->
    <script src="<?php echo base_url('assets/js/lib/calendar-2/semantic.ui.min.js')?>"></script>
    <!-- scripit init-->
    <script src="<?php echo base_url('assets/js/lib/calendar-2/prism.min.js')?>"></script>
    <!-- scripit init-->
    <script src="<?php echo base_url('assets/js/lib/calendar-2/pignose.calendar.min.js')?>"></script>
    <!-- scripit init-->
    <script src="<?php echo base_url('assets/js/lib/calendar-2/pignose.init.js')?>"></script>

    <script src="<?php echo base_url('assets/js/lib/owl-carousel/owl.carousel.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/lib/owl-carousel/owl.carousel-init.js')?>"></script>
    <script src="<?php echo base_url('assets/js/scripts.js')?>"></script>
    <!-- scripit init-->

    <script src="<?php echo base_url('assets/js/scripts.js')?>"></script>

</body>

</html>