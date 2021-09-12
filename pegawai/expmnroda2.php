<?php
$con = mysqli_connect('localhost', 'root', "", 'beligo_db');

$filename = "kartu-kendali-roda2.xls";

header("content-disposition: attachment; filename=$filename");
header("content-type: application/vdn.ms-excel");
?>
<p>
      <b style="font-family: times-new-rowman;  font-size: 13pt;"><center>BADAN PUSAT STATISTIK<br>
		  KABUPATEN ACEH UTARA <br></style></b>
		KARTU PERBAIKAN / SERVICE AC</center>
</p>
<table>
  <tr>
    <th>Jenis Barang</th><td>:</td> <td></td><td></td> <td></td> <td></td><td></td>
    <th align="left">NUP</th><td>:</td>
  </tr>
  <tr>
    <th>No.Kode BPS</th><td>:</td> <td></td><td></td> <td></td> <td></td><td></td> 
    <th align="left">Posisi Ruangan</th><td>:</td>
  </tr>
  <tr>
    <th align="left">Merk</th><td>:</td> <td></td><td></td> <td></td> <td></td><td></td>
    <th align="left">Tahun Perolehan</th><td>:</td>
  </tr>
  <tr></tr>
</table>
<table border="1">
	<tr>
        <thead>
        <tr> 
									<th rowspan="2"><h5 align="center"><?php echo "No"?></h5></th>
									<th rowspan="2"><h5 align="center"><?php echo "Tanggal"?></h5></th>
									<th rowspan="2"><h5 align="center"><?php echo "No.SPPK/Bukti Bayar"?></h5></th>
									<th colspan="2"><h5 align="center"><?php echo "Pekerjaan Yang Dilaksakan"?></h5></th>
									<th rowspan="2"><h5 align="center"><?php echo "Penjelasan Alat-alat Yang Diganti"?></h5></th>
                  <th rowspan="2"><h5 align="center"><?php echo "Tanggal Terima Kembali"?></h5></th>
                  <th rowspan="2"><h5 align="center"><?php echo "Tanggal Masuk Bengkel"?></h5></th>
									<th rowspan="2"><h5 align="center"><?php echo "Bengkel Yang Mengerjakan"?></h5></th>
									<th rowspan="2"><h5 align="center"><?php echo "Besar Biaya(Rp.)"?></h5></th>
									<th rowspan="2"><h5 align="center"><?php echo "Paraf Ka.Subbag/PJ Pemeliharaan"?></h5></th>	
									<tr>
										<th align="center"><?php echo "Service"?></th>
										<th align="center"><?php echo "Penggantian"?></th>
									</tr>	
									<tr>
                  <td align="center">1</td>
										<td align="center">2</td>
										<td align="center">3</td>
										<td colspan="2" align="center">4</td>
										<td align="center">5</td>
										<td align="center">6</td>
										<td align="center">7</td>
										<td align="center">8</td>
										<td align="center">9</td>
                    <td align="center">10</td>
                    
									</tr>
								</tr>
        </thead>
        <tbody>
        <?php 
                    $con = mysqli_connect('localhost', 'root', "", 'beligo_db');
                    $no = 1;
                    $data = mysqli_query($con, "SELECT * FROM pmn_roda2");
                    while ($d = mysqli_fetch_array($data))
                                                       {?>
                    	<tr>
                      <td align="center"><?php echo $no++?></td>
                      <td align="center"><?php echo $d['tanggal']?></td>
                      <td align="center"><?php echo $d['no_sppk']?></td>
                      <td align="center"><?php echo $d['service']?></td>
                      <td align="center"><?php echo $d['penggantian']?></td>
                      <td align="center"><?php echo $d['ket_alat_ganti']?></td>
                      <td align="center"><?php echo $d['tgl_msk_bengkel']?></td>
                      <td align="center"><?php echo $d['tgl_klr_bengkel']?></td>
                      <td align="center"><?php echo $d['nama_bengkel']?></td>
                      <td><?php echo $d['besar_biaya']?></td>
                  
                  </tr>
                  <?php 
                  } 
                
                    ?>
                    </tbody>
      </tr>
</table>