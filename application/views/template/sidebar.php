        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">HOME</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-th"></i><span class="hide-menu">Dashboard <span class="label label-rouded label-info pull-right">6</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url('c_admin/dataadmin')?>">Data Admin</a></li>
                                <li><a href="<?php echo base_url('c_admin/datasiswa')?>">Data Siswa</a></li>
                                <li><a href="<?php echo base_url('c_admin/datatahun')?>">Tahun Masuk</a></li>
                                <li><a href="<?php echo base_url('keuangan/tampilspp')?>">Master SPP</a></li>
                                <li><a href="<?php echo base_url('keuangan/tampilinfaq')?>">Master Infaq</a></li>
                                <li><a href="<?php echo base_url('keuangan/tampiltahunan')?>">Master Biaya Tahunan</a></li>
                            </ul>
                        </li>
                        <li class="nav-label">KEUANGAN</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-folder-open"></i><span class="hide-menu">SPP<span class="label label-rouded label-warning pull-right">3</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url('keuangan/bayarspp')?>">Input Pembayaran</a></li>
                                <li><a href="<?php echo base_url('keuangan/riwayatbayarspp')?>">Data Pembayaran SPP</a></li>
                                <li><a href="<?php echo base_url('keuangan/tunggakanspp')?>">Tunggakan SPP</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-folder-open"></i><span class="hide-menu">INFAQ<span class="label label-rouded label-success pull-right">3</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url('keuangan/bayarinfaq')?>">Input Pembayaran</a></li>
                                <li><a href="<?php echo base_url('keuangan/riwayatbayarinfaq')?>">Data Pembayaran Infaq</a></li>
                                <li><a href="<?php echo base_url('keuangan/tunggakaninfaq')?>">Tunggakan Infaq</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-folder-open"></i><span class="hide-menu">TAHUNAN<span class="label label-rouded label-primary pull-right">3</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url('keuangan/bayartahunan')?>">Input Pembayaran</a></li>
                                <li><a href="<?php echo base_url('keuangan/riwayatbayartahunan')?>">Data Pembayaran Tahunan</a></li>
                                <li><a href="<?php echo base_url('keuangan/statusbayartahunan')?>">Status Bayar</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>