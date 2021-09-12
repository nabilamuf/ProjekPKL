<?php 
	$dt = new lsp();
	$detail = $dt->selectWhere("data_roda2","id_roda2",$_GET['id']);
    if ($_SESSION['level'] != "Admin") {
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
            				<h4 class="text-right"><?= $detail['id_roda2'] ?></h4>
            			</div>
            			<div class="card-body">
            				<img style="min-height: 200px; width: 100%; display: block;" src="img/<?php echo $detail['gambar'] ?>">
            			</div>
            		</div>
            	</div>
            	<div class="col-md-8">
            		<div class="card">
            			<div class="card-header">
            				<h3>Detail Roda 2</h3>
            			</div>
            			<div class="card-body">
            				<table class="table" cellpadding="10">
							
	    					<tr>
	    						<td>Kode Roda 2</td>
	    						<td>:</td>
	    						<td><?php echo $detail['id_roda2']; ?></td>
	    					</tr>
	    					<tr>
	    						<td>Merek</td>
	    						<td>:</td>
	    						<td><?php echo $detail['merk']; ?></td>
	    					</tr>
	    					<tr>
	    						<td>Type</td>
	    						<td>:</td>
	    						<td><?php echo $detail['type']; ?></td>
	    					</tr>
	    					<tr>
	    						<td>Tahun Pembuatan</td>
	    						<td>:</td>
	    						<td><?php echo $detail['th_pembuatan']; ?></td>
	    					</tr>
	    					<tr>
	    						<td>Pabrik</td>
	    						<td>:</td>
	    						<td><?php echo $detail['pabrik']; ?></td>
							</tr>
							<tr>
	    						<td>Negara</td>
	    						<td>:</td>
	    						<td><?php echo $detail['negara']; ?></td>
							</tr>
							<tr>
	    						<td>Perakitan</td>
	    						<td>:</td>
	    						<td><?php echo $detail['perakitan']; ?></td>
							</tr>
	    					<tr>
	    						<td>Daya Muat</td>
	    						<td>:</td>
	    						<td><?php echo $detail['daya_muat'] ?></td>
	    					</tr>
							<tr>
	    						<td>Bobot</td>
	    						<td>:</td>
	    						<td><?php echo $detail['bobot'] ?></td>
	    					</tr>
							<tr>
	    						<td>Daya/Isi Silinder</td>
	    						<td>:</td>
	    						<td><?php echo $detail['daya_isi_silinder'] ?></td>
	    					</tr>
							<tr>
	    						<td>Mesin Penggerak</td>
	    						<td>:</td>
	    						<td><?php echo $detail['mesin_penggerak'] ?></td>
	    					</tr>
							<tr>
	    						<td>Jumlah Mesin</td>
	    						<td>:</td>
	    						<td><?php echo $detail['jumlah_mesin'] ?></td>
	    					</tr>
							<tr>
	    						<td>Bahan Bakar</td>
	    						<td>:</td>
	    						<td><?php echo $detail['bahan_bakar'] ?></td>
	    					</tr>
							<tr>
	    						<td>No. Mesin</td>
	    						<td>:</td>
	    						<td><?php echo $detail['no_mesin'] ?></td>
	    					</tr>
							<tr>
	    						<td>No. Rangka </td>
	    						<td>:</td>
	    						<td><?php echo $detail['no_rangka'] ?></td>
	    					</tr>
							<tr>
	    						<td>No. BPKB</td>
	    						<td>:</td>
	    						<td><?php echo $detail['no_bpkb'] ?></td>
	    					</tr>
							<tr>
	    						<td>No. Polisi</td>
	    						<td>:</td>
	    						<td><?php echo $detail['no_polisi'] ?></td>
	    					</tr>
							<tr>
	    						<td>Perlengkapan</td>
	    						<td>:</td>
	    						<td><?php echo $detail['perlengkapan'] ?></td>
	    					</tr>
							<tr>
	    						<td>Cara Perolehan</td>
	    						<td>:</td>
	    						<td><?php echo $detail['cara_perolehan'] ?></td>
	    					</tr>
							<tr>
	    						<td>Dari</td>
	    						<td>:</td>
	    						<td><?php echo $detail['dari'] ?></td>
	    					</tr>
							<tr>
	    						<td>Tanggal Perolehan</td>
	    						<td>:</td>
	    						<td><?php echo $detail['tgl_perolehan'] ?></td>
	    					</tr>
							<tr>
	    						<td>Kondisi Perolehan</td>
	    						<td>:</td>
	    						<td><?php echo $detail['kondisi_perolehan'] ?></td>
	    					</tr>
							<tr>
	    						<td>Harga Perolehan</td>
	    						<td>:</td>
	    						<td><?php echo $detail['harga_perolehan'] ?></td>
	    					</tr>
							<tr>
	    						<td>Dasar Harga</td>
	    						<td>:</td>
	    						<td><?php echo $detail['dasar_harga'] ?></td>
	    					</tr>
							<tr>
	    						<td>Sumber Dana</td>
	    						<td>:</td>
	    						<td><?php echo $detail['sumber_dana'] ?></td>
	    					</tr>
							<tr>
	    						<td>Nomor 2</td>
	    						<td>:</td>
	    						<td><?php echo $detail['no2'] ?></td>
	    					</tr>
							<tr>
	    						<td>Tanggal</td>
	    						<td>:</td>
	    						<td><?php echo $detail['tanggal'] ?></td>
	    					</tr>
							<tr>
	    						<td>Nilai Buku</td>
	    						<td>:</td>
	    						<td><?php echo $detail['nilai_buku'] ?></td>
	    					</tr>
							<tr>
	    						<td>Nilai Wajar</td>
	    						<td>:</td>
	    						<td><?php echo $detail['nilai_wajar'] ?></td>
	    					</tr>
							<tr>
	    						<td>Nama Unit</td>
	    						<td>:</td>
	    						<td><?php echo $detail['nama_unit'] ?></td>
	    					</tr>
							<tr>
	    						<td>Alamat</td>
	    						<td>:</td>
	    						<td><?php echo $detail['alamat'] ?></td>
	    					</tr>
							<tr>
	    						<td>Status Pengguna</td>
	    						<td>:</td>
	    						<td><?php echo $detail['status_pengguna'] ?></td>
	    					</tr>
							<tr>
	    						<td>Digunakan Oleh :</td>
	    						<td>:</td>
	    						<td><?php echo $detail['digunakan_oleh'] ?></td>
	    					</tr>
							<tr>
	    						<td>Kode Admin</td>
	    						<td>:</td>
	    						<td><?php echo $detail['kd_user'] ?></td>
	    					</tr>
	    				</table>
            			</div>
            		</div>
            	</div>
            </div>
            <a href="?page=viewRoda2" class="btn btn-danger"><i class="fa fa-repeat"></i> Kembali</a>
        </div>
    </div>
</div>