<?php 
	$br = new lsp();
	if ($_SESSION['level'] != "Admin") {
    header("location:../index.php");
  	}
	$table    = "pmn_genset";
	$data     = $br->selectWhere($table,"id_pem_genset",$_GET['id']);
	// $getMerek = $br->select("table_merek");
	// $getDistr = $br->select("table_distributor");
	// $waktu    = date("Y-m-d");
	if (isset($_POST['getSimpan'])) {
		$no				= $_POST['no'];
		$id_pem_genset		= $_POST['id_pem_genset'];
		$tanggal		= $_POST['tanggal'];
		$no_SPPK		= $_POST['no_SPPK'];
		$service        = $_POST['service'];
		$penggantian    = $_POST['penggantian'];
		$ket_alat_ganti	= $_POST['ket_alat_ganti'];
		$nama_bengkel	= $_POST['nama_bengkel'];
		$besar_biaya	= $_POST['besar_biaya'];
	//	$gambar_service	= $_POST['gambar_service'];
		$gambar_service['name']       = $_FILES['gambar_service']['name'];
        $gambar_service['ukuranFile'] = $_FILES['gambar_service']['size'];
        $gambar_service['error']      = $_FILES['gambar_service']['error'];
        $gambar_service['tmpName']    = $_FILES['gambar_service']['tmp_name'];
	//	$slip_bukti		= $_POST['slip_bukti'];
		$slip_bukti['name']       = $_FILES['slip_bukti']['name'];
        $slip_bukti['ukuranFile'] = $_FILES['slip_bukti']['size'];
        $slip_bukti['error']      = $_FILES['slip_bukti']['error'];
        $slip_bukti['tmpName']    = $_FILES['slip_bukti']['tmp_name'];
		$id_genset			= $_POST['id_genset'];
		$id_pmg_ruang	= $_POST['id_pmg_ruang'];

		if ($no == " " || $id_pem_genset == " " || $tanggal == " " || $no_SPPK == " " || $service == " " || $penggantian == " " || $ket_alat_ganti == " " || $nama_bengkel == " " || $besar_biaya == " " || $gambar_service == " " || $slip_bukti == " " || $id_genset == " " || $id_pmg_ruang == " " ) {
			$response = ['response'=>'negative','alert'=>'lengkapi field'];
		}else{
			$response = $br->validateImagee();
			$image = $response['image'];
            $response1 = $br->validateImages();
			$image1 = $response1['image1'];
			if ($response['types'] == "true") {
				$value = "no='$no',id_pem_genset='$id_pem_genset',tanggal='$tanggal',no_SPPK='$no_SPPK',service='$service',penggantian='$penggantian',ket_alat_ganti='$ket_alat_ganti',nama_bengkel='$nama_bengkel',besar_biaya='$besar_biaya',gambar_service='$image',slip_bukti='$image1',id_genset='$id_genset',id_pmg_ruang='$id_pmg_ruang'";
				$response = $br->update($table,$value,"id_pem_genset",$_GET['id'],"?page=viewPemeliharanGenset");
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
	                            <i class="zmdi zmdi-account-calendar"></i>Pemeliharaan Genset</h3>
                        	</div>
							<div class="row">
                            <div class="col-md-6">
                                <div class="card-body">
                            
                                <div class="form-group">
                                    <label for="">Id Pemeliharaan Genset</label>
                                    <input type="text" style="font-weight: bold; color: red;" class="form-control" name="id_pem_genset" value="<?php echo @$data['id_pem_genset'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal</label>
                                    <input type="date" class="form-control" name="tanggal" value="<?php echo @$data['tanggal'] ?>" >
                                </div>
                                <div class="form-group">
                                    <label for="">No SPPK</label>
                                    <input type="text" class="form-control" name="no_SPPK" value="<?php echo $data['no_SPPK']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Service</label>
                                    <input type="text" class="form-control" name="service" value="<?php echo @$data['service'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Penggantian</label>
                                    <input type="text" class="form-control" name="penggantian" value="<?php echo @$data['service'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Keterangan Alat Ganti</label>
                                    <textarea type="text" rows="5" class="form-control" name="ket_alat_ganti"><?php echo @$data['ket_alat_ganti'] ?>"</textarea>
                                </div>
                                
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                <div class="form-group">
                                    <label for="">Nama Toko</label>
                                    <input type="text" class="form-control" name="nama_bengkel" value="<?php echo $data['nama_bengkel']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Besar Biaya</label>
                                    <input type="text" class="form-control" name="besar_biaya" value="<?php echo $data['besar_biaya']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Gambar Service</label>
                                    <input type="file" class="form-control" name="gambar_service" >
                                </div>
                                <div class="form-group">
                                    <label for="">Slip Pembayaran</label>
                                    <input type="file" class="form-control" name="slip_bukti">
                                </div>
                              
                                <div class="form-group">
                                    <label for="">Kode Genset</label>
                                    <input type="text" class="form-control" name="id_genset" value="<?php echo $data['id_genset']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Kode Pemegang Ruang</label>
                                    <input type="text" class="form-control" name="id_pmg_ruang" readonly value="<?php echo $data['id_pmg_ruang']; ?>">
                                </div>
                                </div>
                            </div>
                                   
                                </div>
                            </div>
                        </div>
                        	<div class="card-footer">
                        		<button name="getSimpan" class="btn btn-primary"><i class="fa fa-download"></i> Update</button>
                        		<a href="?page=viewPemeliharaanGenset" class="btn btn-danger"><i class="fa fa-repeat"></i> Kembali</a>
                        	</div>
            			</div>
            		</form>
            	</div>
            </div>
        </div>
    </div>
</div>