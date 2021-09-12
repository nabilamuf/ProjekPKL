<?php 
	$br = new lsp();
    $kd_user           = $_SESSION['kd_user'];
	if ($_SESSION['level'] != "Admin") {
    header("location:../index.php");
  	} 
	$table    = "data_roda4";
	$data     = $br->selectWhere($table,"id_roda4",$_GET['id']);
	if (isset($_POST['getSimpan'])) {
		$id_roda4			= $_POST['id_roda4'];
		$merk 			 	= $_POST['merk'];
		$type 			 	= $_POST['type'];
		$th_pembuatan 		= $_POST['th_pembuatan'];
		$pabrik			  	= $_POST['pabrik'];
		$negara			  	= $_POST['negara'];
		$perakitan			= $_POST['perakitan'];
		$daya_muat 			= $_POST['daya_muat'];
		$bobot 			 	= $_POST['bobot'];
		$daya_isi_silinder 	= $_POST['daya_isi_silinder'];
		$mesin_penggerak 	= $_POST['mesin_penggerak'];
		$jumlah_mesin 		= $_POST['jumlah_mesin'];
		$bahan_bakar 		= $_POST['bahan_bakar'];
		$no_mesin 			= $_POST['no_mesin'];
		$no_rangka 			= $_POST['no_rangka'];
		$no_bpkb 			= $_POST['no_bpkb'];
		$no_polisi 			= $_POST['no_polisi'];
		$foto['name']       = $_FILES['gambar']['name'];
        $foto['ukuranFile'] = $_FILES['gambar']['size'];
        $foto['error']      = $_FILES['gambar']['error'];
        $foto['tmpName']    = $_FILES['gambar']['tmp_name'];
		$perlengkapan 		= $_POST['perlengkapan'];
		$cara_perolehan 	= $_POST['cara_perolehan'];
		$dari 			 	= $_POST['dari'];
		$tgl_perolehan 		= $_POST['tgl_perolehan'];
		$kondisi_perolehan 	= $_POST['kondisi_perolehan'];
		$harga_perolehan 	= $_POST['harga_perolehan'];
		$dasar_harga 		= $_POST['dasar_harga'];
		$sumber_dana 		= $_POST['sumber_dana'];
		$no2 			 	= $_POST['no2'];
		$tanggal 			= $_POST['tanggal'];
		$nilai_buku 		= $_POST['nilai_buku'];
		$nilai_wajar 		= $_POST['nilai_wajar'];
		$nama_unit 			= $_POST['nama_unit'];
		$alamat 			= $_POST['alamat'];
		$status_pengguna			 	= $_POST['status_pengguna'];
		$digunakan_oleh 	= $_POST['digunakan_oleh'];
        $kd_user           = $_POST['kd_user'];

		if ($id_roda4 == " " || $merk == " " || $type == " " || $th_pembuatan == " " || $pabrik == " " || $foto == " "|| $negara== " ") {
			$response = ['response'=>'negative','alert'=>'lengkapi field'];
		}else{
					$response = $br->validateImage();
					$image = $response['image'];
					if ($response['types'] == "true") {	
						$value = "no='',id_roda4='$id_roda4',merk='$merk',type='$type',th_pembuatan='$th_pembuatan',pabrik='$pabrik',negara='$negara',perakitan='$perakitan',
						daya_muat='$daya_muat',bobot='$bobot',daya_isi_silinder='$daya_isi_silinder',mesin_penggerak='$mesin_penggerak',
						jumlah_mesin='$jumlah_mesin',bahan_bakar='$bahan_bakar',no_mesin='$no_mesin',no_rangka='$no_rangka',no_bpkb='$no_bpkb',
						no_polisi='$no_polisi',gambar='$image',perlengkapan='$perlengkapan',cara_perolehan='$cara_perolehan',dari='$dari',
						tgl_perolehan='$tgl_perolehan',kondisi_perolehan='$kondisi_perolehan',harga_perolehan='$harga_perolehan',dasar_harga='$dasar_harga',
						sumber_dana='$sumber_dana',no2='$no2',tanggal='$tanggal',nilai_buku='$nilai_buku',nilai_wajar='$nilai_wajar',
						nama_unit='$nama_unit',alamat='$alamat',status_pengguna='$status_pengguna',digunakan_oleh='$digunakan_oleh',kd_user='$kd_user'";
						$response = $br->update($table,$value,"id_roda4",$_GET['id'],"?page=viewRoda4");
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
	                            <i class="zmdi zmdi-account-calendar"></i>Data Roda 4</h3>
                        	</div>
							<div class="row">
                            <div class="col-md-6">
                                <div class="card-body">
                                    <div class="form-group">
                                    <label for="">Kode Roda 2</label>
                                    <input type="text" style="font-weight: bold; color: red;" class="form-control" name="id_roda4" value="<?php echo @$data['id_roda4'] ?>">
                                </div>
                               
                                <div class="form-group">
                                    <label for="">Merek</label>
                                    <input type="text"  class="form-control" name="merk" value="<?php echo @$data['merk'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Type</label>
                                    <input type="text" class="form-control" name="type" value="<?php echo @$data['type'] ?>">
                                </div>
                                
                                <div class="form-group">
                                    <label for="">Tahun Pembuatan</label>
                                    <input type="text" class="form-control" name="th_pembuatan" value="<?php echo @$data['th_pembuatan'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Pabrik</label>
                                    <input type="text"  class="form-control" name="pabrik" value="<?php echo @$data['pabrik'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Negara</label>
                                    <input type="text"  class="form-control" name="negara" value="<?php echo @$data['negara'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Perakitan</label>
                                    <input type="text"  class="form-control" name="perakitan" value="<?php echo @$data['perakitan'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Daya Muat</label>
                                    <input type="text" class="form-control" name="daya_muat" value="<?php echo @$data['daya_muat'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Bobot</label>
                                    <input type="text" class="form-control" name="bobot" value="<?php echo @$data['bobot'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Daya/Isi Silinder</label>
                                    <input type="text" class="form-control" name="daya_isi_silinder" value="<?php echo @$data['daya_isi_silinder'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Mesin Penggerak</label>
                                    <input type="text" class="form-control" name="mesin_penggerak" value="<?php echo @$data['mesin_penggerak'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Jumlah Mesin</label>
                                    <input type="number" class="form-control" name="jumlah_mesin" value="<?php echo @$data['jumlah_mesin'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Bahan Bakar</label>
                                    <input type="text" class="form-control" name="bahan_bakar" value="<?php echo @$data['bahan_bakar'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">No. Mesin</label>
                                    <input type="text" class="form-control" name="no_mesin" value="<?php echo @$data['no_mesin'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">No. Rangka</label>
                                    <input type="text" class="form-control" name="no_rangka" value="<?php echo @$data['no_rangka'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">No. BPKB </label>
                                    <input type="text" class="form-control" name="no_bpkb" value="<?php echo @$data['no_bpkb'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">No. Polisi</label>
                                    <input type="text" class="form-control" name="no_polisi" value="<?php echo @$data['no_polisi'] ?>">
                                </div>
                             
                                <div class="form-group">
                                    <label for="">Perlengkapan</label>
                                    <textarea type="text" class="form-control" rows="5" name="perlengkapan" ><?php echo @$data['perlengkapan'] ?></textarea>
                                </div>
                              

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                              
                                <div class="form-group">
                                    <label for="">Dari</label>
                                    <input type="text" class="form-control" name="dari" value="<?php echo @$data['dari'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Perolehan</label>
                                    <input type="date" class="form-control" name="tgl_perolehan" value="<?php echo @$data['tgl_perolehan'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Kondisi Perolehan</label>
                                    <textarea type="text" class="form-control" rows="5" name="kondisi_perolehan" ><?php echo @$data['kondisi_perolehan'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Harga Perolehan</label>
                                    <input type="number" class="form-control" name="harga_perolehan" value="<?php echo @$data['harga_perolehan'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Dasar Harga</label>
                                    <input type="text" class="form-control" name="dasar_harga" value="<?php echo @$data['dasar_harga'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Sumber Dana</label>
                                    <input type="text" class="form-control" name="sumber_dana" value="<?php echo @$data['sumber_dana'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">No 2</label>
                                    <input type="text" class="form-control" name="no2" value="<?php echo @$data['no2'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal</label>
                                    <input type="date" class="form-control" name="tanggal" value="<?php echo @$data['tanggal'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Nilai Buku</label>
                                    <input type="text" class="form-control" name="nilai_buku" value="<?php echo @$data['nilai_buku'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Nilai Wajar</label>
                                    <input type="text" class="form-control" name="nilai_wajar" value="<?php echo @$data['nilai_wajar'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Unit</label>
                                    <input type="text" class="form-control" name="nama_unit" value="<?php echo @$data['nama_unit'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <textarea type="text" class="form-control" rows="5" name="alamat" ><?php echo @$data['alamat'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">status_pengguna</label>
                                    <input type="text" class="form-control" name="status_pengguna" value="<?php echo @$data['status_pengguna'] ?>">
                                </div>
                              
                                <div class="form-group">
                                    <label for="">Digunakan Oleh</label>
                                    <input type="text" class="form-control" name="digunakan_oleh" value="<?php echo @$data['digunakan_oleh'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Cara Perolehan</label>
                                    <input type="text" class="form-control" name="cara_perolehan" value="<?php echo @$data['cara_perolehan'] ?>">
                                </div>

                                <div class="form-group">
                                    <label for="">Gambar</label>
                                    <input type="file" class="form-control" name="gambar">
                                </div>

                                <div class="form-group">
                                    <label for="">Kode Admin</label>
                                    <input type="text" class="form-control" name="kd_user" readonly value="<?= $kd_user ?>">
                                </div>
                                </div>
                            </div>
                        </div>
                        	<div class="card-footer">
                        		<button name="getSimpan" class="btn btn-primary"><i class="fa fa-download"></i> Update</button>
                        		<a href="?page=viewRoda4" class="btn btn-danger"><i class="fa fa-repeat"></i> Kembali</a>
                        	</div>
            			</div>
            		</form>
            	</div>
            </div>
        </div>
    </div>
</div>