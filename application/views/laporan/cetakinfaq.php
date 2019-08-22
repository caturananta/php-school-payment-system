<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=cetakinfaq.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
 <table border="1" width="100%">
 <thead>
                        <th>Id Siswa</th>
                        <th>Nama Siswa</th>
                        <th>Jumlah Bayar Infaq</th>
                        <th>Tanggal</th>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($siswaz as $sz){
                        ?>
                        <tr>
                            <td><?php echo $sz->id_siswa ?></td>
                            <td><?php echo $sz->nama_siswa?></td>
                            <td><?php echo $sz->jumlah_pembayaran_infaq?></td>
                            <td><?php echo $sz->tanggal_bayar_infaq?></td>
                        </tr>
                       <?php $i++; } ?>
                </tbody>
 </table>