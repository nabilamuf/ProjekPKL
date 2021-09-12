<?php 
    $br = new lsp();
    $kd_user  = $_SESSION['kd_user'];
    if ($_SESSION['level'] != "Admin") {
    header("location:../index.php");
    }
    $table = "pmn_ac";
    $data     = $br->selectWhere($table,"id_pem_ac",$_GET['id']);    
     $autokode = $br->autokode($table, "id_pem_ac", "PMNAC");
  
    $waktu    = date("Y-m-d");
    if (isset($_POST['getSimpan'])) {

        $id_pem_ac      = $_POST['id_pem_ac'];
        $tanggal        = $_POST['tanggal'];
        $no_SPPK        = $_POST['no_SPPK'];
        $service        = $_POST['service'];
        $penggantian    = $_POST['penggantian'];
        $ket_alat_ganti = $_POST['ket_alat_ganti'];
        $nama_bengkel   = $_POST['nama_bengkel'];
        $besar_biaya    = $_POST['besar_biaya'];
        $gambar_service['name']       = $_FILES['gambar_service']['name'];
        $gambar_service['ukuranFile'] = $_FILES['gambar_service']['size'];
        $gambar_service['error']      = $_FILES['gambar_service']['error'];
        $gambar_service['tmpName']    = $_FILES['gambar_service']['tmp_name'];
        $slip_bukti['name']       = $_FILES['slip_bukti']['name'];
        $slip_bukti['ukuranFile'] = $_FILES['slip_bukti']['size'];
        $slip_bukti['error']      = $_FILES['slip_bukti']['error'];
        $slip_bukti['tmpName']    = $_FILES['slip_bukti']['tmp_name'];
        $id_ac          = $_POST['id_ac'];
        $id_pmg_ruang   = $_POST['id_pmg_ruang'];

        if ( $id_pem_ac == " " || $tanggal == " " || $no_SPPK == " " || $service == " " || $penggantian == " " ||$ket_alat_ganti == " " || $nama_bengkel == " " || $besar_biaya == " " || $gambar_service == " " || $slip_bukti == " " || $id_ac == " " || $id_pmg_ruang == " " ) {
            $response = ['response'=>'negative','alert'=>'lengkapi field'];
        }else{
                $response = $br->validateimagee();
                $image = $response['image'];
                $response1 = $br->validateimages();
                $image1 = $response1['image1'];
                if ($response['types'] == "true") {
                    $value = "'','$id_pem_ac','$tanggal','$no_SPPK','$service','$penggantian','$ket_alat_ganti','$nama_bengkel','$besar_biaya','$response[image]','$response1[image1]','$id_ac','$id_pmg_ruang'";
                    $response = $br->insert($table,$value,"?page=addPemeliharaanAC");
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
                            <i class="zmdi zmdi-account-calendar"></i>Pemeliharaan AC </h3>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-body">
                           
                                <div class="form-group">
                                    <label for="">Id Pemeliharaan AC</label>
                                    <input type="text"  style="font-weight: bold; color: red;" class="form-control" name="id_pem_ac" readonly value="<?= $autokode; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal</label>
                                    <input type="date" class="form-control" name="tanggal" readonly value="<?= $waktu; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">No SPPK</label>
                                    <input type="text" class="form-control" name="no_SPPK">
                                </div>
                                <div class="form-group">
                                    <label for="">Service</label>
                                    <input type="text" class="form-control" name="service">
                                </div>
                                <div class="form-group">
                                    <label for="">Penggantian</label>
                                    <input type="text" class="form-control" name="penggantian">
                                </div>
                                <div class="form-group">
                                    <label for="">Keterangan Alat Ganti</label>
                                    <textarea type="text" rows="5" class="form-control" name="ket_alat_ganti"></textarea>
                                </div>
                                
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                <div class="form-group">
                                    <label for="">Nama Toko</label>
                                    <input type="text" class="form-control" name="nama_bengkel">
                                </div>
                                <div class="form-group">
                                    <label for="">Besar Biaya</label>
                                    <input type="text" class="form-control" name="besar_biaya">
                                </div>
                                <div class="form-group">
                                    <label for="">Gambar Service</label>
                                    <input type="file" class="form-control" name="gambar_service">
                                </div>
                                <div class="form-group">
                                    <label for="">Slip Pembayaran</label>
                                    <input type="file" class="form-control" name="slip_bukti">
                                </div>
                              
                                <div class="form-group">
                                    <label for="">Id Ac</label>
                                    <input type="text" class="form-control" name="id_ac">
                                </div>
                                <div class="form-group">
                                    <label for="">Kode Pemegang Ruang</label>
                                    <input type="text" class="form-control" name="id_pmg_ruang" readonly value="<?= $kd_user ?>">
                                </div>
                                </div>
                            </div>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button name="getSimpan" class="btn btn-primary"><i class="fa fa-download"></i> Simpan</button>
                            <button type="reset" class="btn btn-danger"><i class="fa fa-eraser"></i> Reset</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
