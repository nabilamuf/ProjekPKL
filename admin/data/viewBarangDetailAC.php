<?php
$dt = new lsp();

$detail = $dt->selectWhere("data_ac", "id_ac", $_GET['id']);
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
							<h4 class="text-right"><?= $detail['id_ac'] ?></h4>
						</div>
						<div class="card-body">
							<img style="min-height: 200px; width: 100%; display: block;" src="img/<?php echo $detail['gambar'] ?>">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card">
						<div class="card-header">
							<h3>Detail AC</h3>
						</div>
						<div class="card-body">
							<table class="table" cellpadding="10">
							
								<tr>
									<td>ID AC</td>
									<td>:</td>
									<td><?php echo $detail['id_ac']; ?></td>
								</tr>
								<tr>
									<td>Tahun Perolehan</td>
									<td>:</td>
									<td><?php echo $detail['th_perolehan']; ?></td>
								</tr>
								<tr>
				
									<td>Jumlah Barang</td>
									<td>:</td>
									<td><?php echo $detail['jumlah_barang']; ?></td>
								</tr>
								<tr>
									<td>Penguasaan</td>
									<td>:</td>
									<td><?php echo $detail['penguasaan']; ?></td>
								</tr>
								<tr>
									<td>Keterangan</td>
									<td>:</td>
									<td><?php echo $detail['ket'] ?></td>
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
			<a href="?page=viewAC" class="btn btn-danger"><i class="fa fa-repeat"></i> Kembali</a>
		</div>
	</div>
</div>