<?php
			$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
			$pdf->SetTitle('Bukti Bayar');
			$pdf->SetHeaderMargin(30);
			$pdf->SetTopMargin(20);
			$pdf->setFooterMargin(20);
			$pdf->SetAutoPageBreak(true);
			$pdf->SetAuthor('Author');
			$pdf->SetDisplayMode('real', 'default');
			$pdf->AddPage();
			$i=0;
			$html='<h3>Pembayaran SPP</h3>
					<table cellspacing="1" bgcolor="#666666" cellpadding="2">
						<tr bgcolor="#ffffff">
							<th width="5%" align="center">No</th>
							<th width="10%" align="center">Id Siswa</th>
							<th width="45%" align="center">Nama Siswa</th>
							<th width="25%" align="center">Jumlah Pembayaran</th>
							<th width="15%" align="center">Tanggal</th>
						</tr>';
			foreach ($a as $row) 
				{
					$i++;
					$html.='<tr bgcolor="#ffffff">
							<td align="center">'.$i.'</td>
							<td>'.$row['id_siswa'].'</td>
							<td>'.$row['nama_siswa'].'</td>
							<td>'.number_format($row['jumlah_pembayaran_spp'],0,",",",").'</td>
							<td>'.$row['tanggal_bayar'].'</td>
						</tr>';
				}
			$html.= '</table>
					<br>
					<br><p>dicetak oleh</p><br>
					<br><br>'.$this->session->userdata('nama_admin');
			$pdf->writeHTML($html, true, false, true, false, '');
			$pdf->Output('buktibayarspp.pdf', 'I');
?>