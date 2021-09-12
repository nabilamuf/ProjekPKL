
<?php 
	$dt = new lsp();
	$detail = $dt->selectWhere("pmn_roda2","id_pem_roda2",$_GET['id']);
    if ($_SESSION['level'] != "Pegawai") {
    header("location:../index.php");
    }
 ?>
<div class="main-content" style="margin-top: 20px;">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
            	<div class="col-md-4">
            		<div class="card">
            			<div class="card-header">
            				<img class="align-self-center mr-3" width="70" src="img/<?php echo $detail['foto_merek'] ?>" alt="">
            				<h4 class="text-right"><?= $detail['id_pem_roda2'] ?></h4>
            			</div>
            			<div class="card-body">
						<h5>Gambar Service</h5>
            				<img style="min-height: 200px; width: 100%; display: block;" src="img/<?php echo $detail['gambar_service'] ?>">
            			</div>
						<div class="card-body">
						<h5>Slip Bukti</h5>
            				<img style="min-height: 200px; width: 100%; display: block;" src="img/<?php echo $detail['slip_bukti'] ?>">
            			</div>
            		</div>
            	</div>
            	<div class="col-md-8">
            		<div class="card">
            			<div class="card-header">
            				<h3>Detail Roda Dua</h3>
            			</div>
            			<div class="card-body">
            				<table class="table" cellpadding="10">
						
	    					<tr>
	    						<td>Id Pemeliharaan Roda Dua</td>
	    						<td>:</td>
	    						<td style="font-weight: bold; color: red;"><?php echo $detail['id_pem_roda2']; ?></td>
	    					</tr>
	    					<tr>
	    						<td>Tanggal</td>
	    						<td>:</td>
	    						<td><?php echo $detail['tanggal']; ?></td>
	    					</tr>
	    					<tr>
	    						<td>Nomor SPPK</td>
	    						<td>:</td>
	    						<td><?php echo $detail['no_sppk']; ?></td>
	    					</tr>
	    					<tr>
	    						<td>Service</td>
	    						<td>:</td>
	    						<td><?php echo $detail['service']; ?></td>
	    					</tr>
	    					<tr>
	    						<td>Penggantian</td>
	    						<td>:</td>
	    						<td><?php echo $detail['penggantian']; ?></td>
	    					</tr>
							<tr>
	    						<td>Keterangan Alat Ganti</td>
	    						<td>:</td>
	    						<td><?php echo $detail['ket_alat_ganti']; ?></td>
	    					</tr>
							<tr>
	    						<td>Tanggal Masuk Bengkel</td>
	    						<td>:</td>
	    						<td><?php echo $detail['tgl_msk_bengkel'] ?></td>
	    					</tr>
							<tr>
	    						<td>Tanggal Keluar Bengkel</td>
	    						<td>:</td>
	    						<td><?php echo $detail['tgl_klr_bengkel'] ?></td>
	    					</tr>
	    					<tr>
	    						<td>Nama Bengkel</td>
	    						<td>:</td>
	    						<td><?php echo $detail['nama_bengkel'] ?></td>
	    					</tr>
							<tr>
	    						<td>Besar Biaya</td>
	    						<td>:</td>
	    						<td><?php echo "Rp.".number_format($detail['besar_biaya'])."-,"; ?></td>
							</tr>
	    						<td>Id Roda Dua</td>
	    						<td>:</td>
	    						<td><?php echo $detail['id_roda2']; ?></td>
	    					</tr>
							<tr>
	    						<td>kode Pemegang pribadi</td>
	    						<td>:</td>
	    						<td><?php echo $detail['id_pmg_pribadi'] ?></td>
	    					</tr>
	    				</table>
            			</div>
            		</div>
            	</div>
            </div>
            <a href="?page=viewPemeliharaanRoda2" class="btn btn-danger"><i class="fa fa-repeat"></i> Kembali</a>
        </div>
    </div>
</div>