</div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2018 All rights reserved. SMP AL-IZZAH</footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="<?php echo base_url('assets/js/lib/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/jquery.chained.min.js') ?>"></script>
        <!-- jquery spp -->
        <script>
             $("#id_siswa").chained("#id_tahun_masuk");
        </script>
        <script>
             $("#id_jumlah_bayar_spp").chained("#id_siswa"); 
        </script>
        <script>
             $("#jumlah_pembayaran_spp").chained("#id_jumlah_bayar_spp"); 
        </script>
        
        <!-- jquery infaq -->
        <script>
             $("#id_siswa").chained("#id_tahun_masuk");
        </script>
        <script>
             $("#id_jumlah_bayar_infaq").chained("#id_siswa"); 
        </script>
        <script>
             $("#jumlah_pembayaran_infaq").chained("#id_jumlah_bayar_infaq"); 
        </script>
        
        <!-- jquery tahunan-->
        <script>
             $("#id_siswa").chained("#id_tahun_masuk");
        </script>
        <script>
             $("#id_jumlah_bayar_tahunan").chained("#id_siswa"); 
        </script>

    <script src="<?php echo base_url('assets/dataTables.js');?>"></script>
    <script src="<?php echo base_url('assets/dataTables.min.js');?>"></script>
   
    <script src="<?php echo base_url('assets/js/dataTables.bootstrap.js')?>"></script>
    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
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