<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=cetakspp.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
 <table border="1" width="100%">
 <thead>
                  <th>Id Siswa</th>
                  <th>Nama Siswa</th>
                        <th>Jumlah Bayar SPP</th>
                        <th>Pembayaran Bulan</th>
                  <th>Tanggal</th>
                </thead>
                <tbody>
                  <?php
                  $i= 1;
                  foreach ($siswa as $s){
                  ?>
                <tr>
                    <td><?php echo $s->id_siswa ?></td>
                    <td><?php echo $s->nama_siswa?></td>
                            <td><?php echo $s->jumlah_pembayaran_spp?></td>
                            <td><?php echo $s->id_bulan?></td>
                            <td><?php echo $s->tanggal_bayar?></td>
                </tr>
                       <?php $i++; } ?>
                </tbody>
 </table>