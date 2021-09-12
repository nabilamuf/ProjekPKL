<?php 
	$br = new lsp();
	if ($_SESSION['level'] != "Admin") {
    header("location:../index.php");
  	} 
	$table    = "data_genset";
	$data     = $br->selectWhere($table,"id_genset",$_GET['id']);
	if (isset($_POST['getSimpan'])) {
		$id_genset			= $_POST['id_genset'];
		$no_urut_pendaftar	= $_POST['no_urut_pendaftar'];
		$merk 			 	= $_POST['merk'];
		$th_perolehan 		= $_POST['th_perolehan'];
		$jumlah_barang  	= $_POST['jumlah_barang'];
		$penguasaan			= $_POST['penguasaan'];
		$foto['name']       = $_FILES['gambar']['name'];
        $foto['ukuranFile'] = $_FILES['gambar']['size'];
        $foto['error']      = $_FILES['gambar']['error'];
        $foto['tmpName']    = $_FILES['gambar']['tmp_name'];
        $ket                = $_POST['keterangan'];
        $kd_user            = $_POST['kd_user'];

		if ($id_genset == " " || $no_urut_pendaftar == " " || $merk == " " || $th_perolehan == " " || $jumlah_barang == " " || $penguasaan == " " ||
		$foto == " " || $ket == " " || $kd_user == " " ) {
			$response = ['response'=>'negative','alert'=>'lengkapi field'];
		}else{
					$response = $br->validateImage();
					$image = $response['image'];
					if ($response['types'] == "true") {	
						$value = "no='',id_genset='$id_genset',no_urut_pendaftar='$no_urut_pendaftar', merk='$merk',th_perolehan='$th_perolehan',
						jumlah_barang='$jumlah_barang',penguasaan='$penguasaan',gambar='$image',keterangan='$ket',kd_user='$kd_user'";
						$response = $br->update($table,$value,"id_genset",$_GET['id'],"?page=viewGenset");
					}else{
						$response = ['response'=>'negative','alert'=>'gambar error'];
					}
				}
			} 
 ?>
<div class="main-content" style="margin-top: 20px;">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
            	<div class="col-md-12">
            		<form method="post" enctype="multipart/form-data">
            			<div class="card">
            				<div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
	                            <div class="bg-overlay bg-overlay--blue"></div>
	                            <h3>
	                            <i class="zmdi zmdi-account-calendar"></i>Data Genset</h3>
                        	</div>
                        	<div class="row">
                            <div class="col-md-6">
                                <div class="card-body">
                                    <div class="form-group">
                                    <label for="">Kode Genset</label>
                                    <input type="text" style="font-weight: bold; color: red;" class="form-control" name="id_genset" value="<?php echo @$data['id_genset']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Nomor Urut Pendaftar</label>
                                    <input type="text" class="form-control" name="no_urut_pendaftar" value="<?php echo @$data['no_urut_pendaftar'] ?>" >
                                </div>
                                <div class="form-group">
                                    <label for="">Merk</label>
                                    <input type="text" class="form-control" name="merk" value="<?php echo @$data['merk'] ?>">
                                </div>
                                <div class="form-group">
                                      <label for="">Keterangan</label>
                                    <textarea type="text" rows ="5" class="form-control" name="keterangan" ><?php  echo @$data['keterangan']?></textarea>
                                </div>
                            
                               
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <div class="form-group">
                                    <label for="">Tahun Perolehan</label>
                                    <input type="number" class="form-control" name="th_perolehan" value="<?php echo @$data['th_perolehan'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Jumlah Barang</label>
                                    <input type="number" class="form-control" name="jumlah_barang" value="<?php echo @$data['jumlah_barang'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Penguasaan</label>
                                    <input type="text" class="form-control" name="penguasaan" value="<?php echo @$data['penguasaan'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Foto</label>
                                    <input type="file" class="form-control" name="gambar" value="<?php echo @$data['gambar'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Kode Admin</label>
                                    <input type="text" class="form-control" name="kd_user" readonly value="<?php echo @$data['kd_user'] ?>"> 
                                </div>
                                </div>
                            </div>
                        </div>
                        	<div class="card-footer">
                        		<button name="getSimpan" class="btn btn-primary"><i class="fa fa-download"></i> Update</button>
                        		<a href="?page=viewGenset" class="btn btn-danger"><i class="fa fa-repeat"></i> Kembali</a>
                        	</div>
            			</div>
            		</form>
            	</div>
            </div>
        </div>
    </div>
</div>