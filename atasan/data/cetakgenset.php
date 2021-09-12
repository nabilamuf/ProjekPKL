<?php 
	$struk  		= new lsp();
	$id				= $_GET['id'];
	$data   		= $struk->edit("data_genset","id_genset",$id);
    $detail = $struk->selectWhere("data_genset", "id_genset", $_GET['id']); 
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
	<h7 style="font-family: times-new-rowman; font-size: 12pt"> Badan Pusat Statistik &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;  &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <?php echo "   A. Kode Barang 	: ".$detail['id_genset'];  ?></h7> <br>
	<h7 style="font-family: times-new-rowman; font-size: 12pt">Badan Pusat Statistik <br>
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
								  <h4 style="font-family: times-new-rowman; font-size: 12pt"><span style="padding-left:150px;">BIDANG<span style="padding-left:123.5px;">:</h4>
								  <h4 style="font-family: times-new-rowman; font-size: 12pt"><span style="padding-left:150px;">KELOMPOK<span style="padding-left:90.2px;">:</h4>
								  <h4 style="font-family: times-new-rowman; font-size: 12pt"><span style="padding-left:150px;">SUB-KELOMPOK<span style="padding-left:54.5px;">:</h4>
								  <h4 style="font-family: times-new-rowman; font-size: 12pt"><span style="padding-left:150px;">SUB-SUB KELOMPOK<span style="padding-left:20px;">:</h4> <br>
								  <h4 style="font-family: times-new-rowman; font-size: 12pt"align="left">  <?php echo "NAMA UAPKB	: BPS KABUPATEN ACEH UTARA"?></h4>
								  <h4 style="font-family: times-new-rowman; font-size: 12pt"align="left">  <?php echo "KODE UAPKB	: 054.01.06.019681.000.KD"?></h4>

								  <table border="1" class="table table-striped table-bordered" width="80%" >
								<tr>
                                    <th colspan="2"><h5 align="center"><?php echo "DATA GENSET"?></h5></th>
								</tr>
                                <tr><td colspan="2">
									&emsp;1. ID Genset <span style="padding-left:168px;">: <?php echo $detail['id_genset']; ?></span>	
					            </td></tr>
                                <tr><td colspan="2">
									&emsp;2. No Urut Pendaftar <span style="padding-left:96px;">: <?php echo $detail['no_urut_pendaftar']; ?></span>	
					            </td></tr>
                                <tr><td colspan="2">
									&emsp;3. Merk <span style="padding-left:199px;">: <?php echo $detail['merk']; ?></span>	
					            </td></tr>
                                <tr><td colspan="2">
									&emsp;4. Tahun Perolehan <span style="padding-left:102px;">: <?php echo $detail['th_perolehan']; ?></span>
					            </td></tr>
                                <tr><td colspan="2">
									&emsp;5. Jumlah Barang<span style="padding-left:119px;">: <?php echo $detail['jumlah_barang']; ?></span>
					            </td></tr>
                                <tr><td colspan="2">
									&emsp;6. Penguasaan<span style="padding-left:139px;">: <?php echo $detail['penguasaan']; ?></span>	
					            </td></tr>
                                <tr><td colspan="2">
									&emsp;7. Gambar <span style="padding-left:172px;">: <?php echo $detail['gambar']; ?><img style="min-height: 150px; margin-left: 280px;  width: 30%; display: block;" src="img/<?php echo $detail['gambar'] ?>"></span>
                                <tr><td colspan="2">
									&emsp;8. Keterangan<span style="padding-left:141px;">: <?php echo $detail['keterangan']; ?></span>	
					            </td></tr>
                                <tr><td colspan="2">
									&emsp;9. Kode User <span style="padding-left:152px;">: <?php echo $detail['kd_user']; ?></span>	
					            </td></tr>
                                <tr>
									<td>
									<ol type='1'>
												&emsp; Disetujui <span style="padding-left:126px;"></span><br>
												&emsp; Nama Pejabat <span style="padding-left:80px;">:</span><br>
												&emsp; Jabatan Struktural <span style="padding-left:48px;">:</span> <br>
												<br>
												<br>
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
                                                <br>
                                                <br>
												<p>&ensp;Tanda Tangan <br>
													&emsp; dan Stempel</p>
									</td>
									</tr>
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