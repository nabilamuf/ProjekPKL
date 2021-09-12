<?php 
	$struk  		= new lsp();
	$id				= $_GET['id'];
	$data   		= $struk->edit("data_roda4","id_roda4",$id);
	$detail = $struk->selectWhere("data_roda4","id_roda4",$_GET['id']);
 ?>
 <style>
 	.col-sm-8{
 		background: white;
 		padding: 20px;
 	}
 	@media print{
 		table{
 			align-content: center;
 		}
 		.ds{
 			display: none;
 		}
 		.card{
 			box-shadow: none;
 			border: none;
 		}
 		.hd{
 			display: none;
 		}
 	}
 </style>
    <div class="section__content section__content--p30">
	<div class="section__content section__content--p30">
	<h7 style="font-family: times-new-rowman; font-size: 12pt"> Badan Pusat Statistik &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;  &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <?php echo "a. No. KIB 	: " ?></h7> <br>
	<h7 style="font-family: times-new-rowman; font-size: 12pt">Badan Pusat Statistik &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;  &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;</h7><?php echo "b. Kd Barang 	: " ?> <br>
	<h7 style="font-family: times-new-rowman; font-size: 12pt">Provinsi Aceh</h7>
    </div>
            <div class="row">
            	<div class="col-md-12"></div>
            	<div class="col-md-12">
            		<div class="card">
            			<div class="card-header">
            			<div class="card-body">
				                  <h1 style="font-family: times-new-rowman; font-size: 24pt"class="text-center">KARTU IDENTITAS BARANG</h1>
								  <h1 style="font-family: times-new-rowman; font-size: 24pt"class="text-center">(KIB)</h1> <br>
								  <h4 style="font-family: times-new-rowman; font-size: 12pt"><span style="padding-left:150px;">BIDANG <span style="padding-left:123.5px;">: ALAT ANGKUTAN</h4>
								  <h4 style="font-family: times-new-rowman; font-size: 12pt"><span style="padding-left:150px;">KELOMPOK <span style="padding-left:90.2px;">: ALAT ANGUTAN DARAT BERMOTOR</h4>
								  <h4 style="font-family: times-new-rowman; font-size: 12pt"><span style="padding-left:150px;">SUB-KELOMPOK <span style="padding-left:54.5px;">: KENDARAAN BERMOTOR PENUMPANG</h4>
								  <h4 style="font-family: times-new-rowman; font-size: 12pt"><span style="padding-left:150px;">SUB-SUB KELOMPOK <span style="padding-left:20px;">: MINI BUS (PENUMPANG 14 ORANG KEBAWAH)</h4> <br>
								  <h4 style="font-family: times-new-rowman; font-size: 12pt"align="left">  <?php echo "NAMA UAPKB	: BPS KABUPATEN ACEH UTARA"?></h4>
								  <h4 style="font-family: times-new-rowman; font-size: 12pt"align="left">  <?php echo "KODE UAPKB	: 054.01.06.019681.000.KD"?></h4>

								  <table border="1" class="table table-striped table-bordered" width="80%" >
								<tr> 
									<th><h5 align="center"><?php echo "I. UNIT BARANG"?></h5></th>
									<th><h5 align="center"><?php echo "III. PENGADAAN"?></h5></th>
								</tr>
								<tr>
								<td rowspan="3">
									<ol type='1'>
										<ol style="padding-left:10px;" type='1'>
										<li> &emsp; a. Merk <span style="padding-left:131px;">: <?php echo $detail['merk']; ?></span><br> 
												 	 &emsp; b. Type <span style="padding-left:131px;">: <?php echo $detail['type'];?> </span><br>
													 &emsp; c. Th Pembuatan <span style="padding-left:53px;">: <?php echo $detail['th_pembuatan'];?></span>
												</li>
												<li> &emsp; a. Pabrik <span style="padding-left:121px;">: <?php echo $detail['pabrik'];?></span><br>
												 	 &emsp; b. Negara <span style="padding-left:110.5px;">: <?php echo $detail['negara'];?> </span><br>
													 &emsp; c. Perakitan <span style="padding-left:96px;">: <?php echo $detail['perakitan'];?> </span> 	
												</li>
												<li>&emsp;Daya Muat <span style="padding-left:105px;">: <?php echo $detail['daya_muat'];?></span></li>
												<li>&emsp;Bobot <span style="padding-left:144px;">: <?php echo $detail['bobot'];?></span></li>
												<li>&emsp;Daya Mesin/
	 														Isi Silinder <span style="padding-left:13px;"><?php echo $detail['daya_isi_silinder'];?>:</span>
												</li>
												<li>&emsp;Mesin Penggerak <span style="padding-left:56px;">: <?php echo $detail['mesin_penggerak'];?> </span></li>
												<li>&emsp;Jumlah Mesin <span style="padding-left:83px;">: <?php echo $detail['jumlah_mesin'];?> </span></li>
												<li>&emsp;Bahan Bakar <span style="padding-left:91px;">: <?php echo $detail['bahan_bakar'];?> </span></li>
												<li>&emsp;No. Mesin <span style="padding-left:118px;">: <?php echo $detail['no_mesin'];?> </span></li>
												<li>&emsp;No. Rangka <span style="padding-left:105px;">:  <?php echo $detail['no_rangka'];?></span></li>
												<li>&emsp;No. BPKB <span style="padding-left:127px;">:</span><?php echo $detail['no_bpkb'];?></li>
												<li>&emsp;No. Polisi <span style="padding-left:127px;">:</span><?php echo $detail['no_polisi'];?></li>
										</ol>
									</td> 
									 <td>
										<ol style="padding-left:10px;"type='1'>
												<li>&emsp;Cara Perolehan <span style="padding-left:38px;">: <?php echo $detail['cara_perolehan'];?> </span></li>
												<li>&emsp;Dari <span style="padding-left:131px;">: <?php echo $detail['dari'];?> </span></li>
												<li>&emsp;Tgl. Perolehan <span style="padding-left:53px;">: <?php echo $detail['tgl_perolehan'];?> </span></li>
												<li>&emsp;Kondisi Perolehan <span style="padding-left:22px;">: <?php echo $detail['kondisi_perolehan'];?> </span></li>
												<li>&emsp;Harga Perolehan <span style="padding-left:29px;">: <?php echo $detail['harga_perolehan'];?></span></li>
												<li>&emsp;Dasar Harga <span style="padding-left:62px;">:<?php echo $detail['dasar_harga'];?></span></li>
												<li>&emsp;Sumber Dana <span style="padding-left:53px;">: <?php echo $detail['sumber_dana'];?></span></li> 
	 											&emsp; No 	: <?php echo $detail['no2'];?><br>
												&emsp; Tgl	: <?php echo $detail['tanggal'];?>		
										</ol>
									</td> 
								</tr>
									
								<tr>								
									<td><h5 align="center"><?php echo "IV. NILAI BARANG"?></h5>
									<ol style="padding-left:10px;" type='1'>
												<li>&emsp;Nilai Buku <span style="padding-left:88px;">:<?php echo $detail['nilai_buku'];?></span></li>
												<li>&emsp;Nilai Wajar <span style="padding-left:78px;">:<?php echo  $detail['nilai_wajar'];?></span></li>		
										</ol>
								</td>
								</tr>
								<tr>								
									<td><h5 align="center"><?php echo "V. UNIT PENGGUNA"?></h5>
									<ol style="padding-left:10px;" type='1'>
												<li>&emsp;Nama Unit <span style="padding-left:79px;">: <?php echo $detail['nama_unit'];?> </span></li>
												<li>&emsp;Alamat <span style="padding-left:105px;">: <?php echo $detail['alamat'];?> </span></li>		
										</ol></td>
								</tr>
									<tr>								
									<th><h5 align="center"><?php echo "II. PERLENGKAPAN"?></h5></th>
									<td><h5 align="center"><?php echo "VI. CATATAN PENGISI"?></h5></td>
									</tr>
									<tr>
										<td>
												<?php echo $detail['perlengkapan'];?>
										</td>
										<td>
										<ol style="padding-left:10px;" type='1'>
												<li>&emsp; Status 
													<br>
													Penggunaan <span style="padding-left:76px;">:<?php echo $detail['status_pengguna'];?></span></li>
												<li>&emsp; Digunakan 
													<br>oleh/Untuk*) <span style="padding-left:80px;">:<?php echo $detail['digunakan_oleh'];?></span></li>			
										</ol>
										</td>
									</tr>
									<tr>
									<td>
									<ol type='1'>
												&emsp; Disetujui <br>
												&emsp; Nama Pejabat <span style="padding-left:80px;">:</span><br>
												&emsp; Jabatan Struktural <span style="padding-left:48px;">:</span> <br>
												<br>
												<br>
												<p>&ensp;Tanda Tangan <br>
													&emsp; dan Stempel</p>
									</td>
									<td>
									<ol type='1'>
												&emsp; Diisi Tgl. <span style="padding-left:98px;">: <?= date('d/M/Y');?></span><br>
												&emsp; Nama Pejabat <span style="padding-left:45px;">:</span> <br>
												&emsp; Jabatan <span style="padding-left:93px;">:</span> <br>
												<br>
												<br>
												<p>&ensp;Tanda Tangan <br>
													&emsp; dan Stempel</p>
									</td>
									</tr>
						</div>						
						</div>
						</div>
							</table>
							<p>*)Coret yang tidak perlu</p>
								<br>
								<a href="#" class="btn btn-info ds" onclick="window.print()"><i class="fa fa-print"></i> Cetak Struk</a>
								<a href="?" class="btn btn-danger ds">Kembali</a>
            			</div>
            		</div>
            	</div>
            </div>
        </div>
    </div>
</div>