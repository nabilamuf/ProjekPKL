<?php 
    $br = new lsp();
    $kd_user           = $_SESSION['kd_user'];
    if ($_SESSION['level'] != "Admin") {
    header("location:../index.php");
    }
    $table = "data_roda4";    
    if (isset($_POST['getSimpan'])) {
        $id_roda4           = $_POST['id_roda4'];
        $merk               = $_POST['merk'];
        $type               = $_POST['type'];
        $th_pembuatan       = $_POST['th_pembuatan'];
        $pabrik             = $_POST['pabrik'];
        $negara             = $_POST['negara'];
        $perakitan          = $_POST['perakitan'];
        $daya_muat          = $_POST['daya_muat'];
        $bobot              = $_POST['bobot'];
        $daya_isi_silinder  = $_POST['daya_isi_silinder'];
        $mesin_penggerak    =$_POST['mesin_penggerak'];
        $jumlah_mesin       =$_POST['jumlah_mesin'];
        $bahan_bakar        =$_POST['bahan_bakar'];
        $no_mesin           =$_POST['no_mesin'];
        $no_rangka          =$_POST['no_rangka'];
        $no_bpkb            =$_POST['no_bpkb'];
        $no_polisi          =$_POST['no_polisi'];
        $foto['name']       =$_FILES['gambar']['name'];
        $foto['ukuranFile'] =$_FILES['gambar']['size'];
        $foto['error']      =$_FILES['gambar']['error'];
        $foto['tmpName']    =$_FILES['gambar']['tmp_name'];
        $perlengkapan       =$_POST['perlengkapan'];
        $cara_perolehan     =$_POST['cara_perolehan'];
        $dari               =$_POST['dari'];
        $tgl_perolehan      =$_POST['tgl_perolehan'];
        $kondisi_perolehan  =$_POST['kondisi_perolehan'];
        $harga_perolehan    =$_POST['harga_perolehan'];
        $dasar_harga        =$_POST['dasar_harga'];
        $sumber_dana        =$_POST['sumber_dana'];
        $no2                =$_POST['no2'];
        $tanggal            =$_POST['tanggal'];
        $nilai_buku         =$_POST['nilai_buku'];
        $nilai_wajar        =$_POST['nilai_wajar'];
        $nama_unit          =$_POST['nama_unit'];
        $alamat             =$_POST['alamat'];
        $status_pengguna             =$_POST['status_pengguna'];
        $digunakan_oleh     =$_POST['digunakan_oleh'];
        $kd_user           =$_POST['kd_user'];

        if ($id_roda4 == " " || $merk == " " || $type == " ") {
            $response = ['response'=>'negative','alert'=>'lengkapi field'];
        }else{
                $response = $br->validateImage($foto);
                $image = $response['image']; 
                if ($response['types'] == "true") {
                    $value = "'$no', '$id_roda4', '$merk', '$type', '$th_pembuatan', '$pabrik', '$negara', '$perakitan', '$daya_muat', '$bobot', '$daya_isi_silinder',
                    '$mesin_penggerak', '$jumlah_mesin', '$bahan_bakar', '$no_mesin', '$no_rangka', '$no_bpkb', '$no_polisi', '$image', '$perlengkapan',
                    '$cara_perolehan', '$dari', '$tgl_perolehan', '$kondisi_perolehan', '$harga_perolehan', '$dasar_harga', '$sumber_dana', '$no2',
                    '$tanggal', '$nilai_buku', '$nilai_wajar', '$nama_unit', '$alamat', '$status_pengguna', '$digunakan_oleh', '$kd_user'";
                    $response = $br->insert($table,$value,"?page=viewRoda4");
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
                                    <label for="">Kode Roda 4</label>
                                    <input type="text" style="font-weight: bold; color: red;" class="form-control" name="id_roda4">
                                </div>
                               
                                <div class="form-group">
                                    <label for="">Merek</label>
                                    <input type="text"  class="form-control" name="merk">
                                </div>
                                <div class="form-group">
                                    <label for="">Type</label>
                                    <input type="text" class="form-control" name="type">
                                </div>
                                
                                <div class="form-group">
                                    <label for="">Tahun Pembuatan</label>
                                    <input type="text" class="form-control" name="th_pembuatan">
                                </div>
                                <div class="form-group">
                                    <label for="">Pabrik</label>
                                    <input type="text"  class="form-control" name="pabrik" value="<?php echo @$_POST['pabrik'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Negara</label>
                                    <input type="text"  class="form-control" name="negara" value="<?php echo @$_POST['negara'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Perakitan</label>
                                    <input type="text"  class="form-control" name="perakitan" value="<?php echo @$_POST['perakitan'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Daya Muat</label>
                                    <input type="text" class="form-control" name="daya_muat">
                                </div>
                                <div class="form-group">
                                    <label for="">Bobot</label>
                                    <input type="text" class="form-control" name="bobot">
                                </div>
                                <div class="form-group">
                                    <label for="">Daya/Isi Silinder</label>
                                    <input type="text" class="form-control" name="daya_isi_silinder">
                                </div>
                                <div class="form-group">
                                    <label for="">Mesin Penggerak</label>
                                    <input type="text" class="form-control" name="mesin_penggerak">
                                </div>
                                <div class="form-group">
                                    <label for="">Jumlah Mesin</label>
                                    <input type="text" class="form-control" name="jumlah_mesin">
                                </div>
                                <div class="form-group">
                                    <label for="">Bahan Bakar</label>
                                    <input type="text" class="form-control" name="bahan_bakar">
                                </div>
                                <div class="form-group">
                                    <label for="">No. Mesin</label>
                                    <input type="text" class="form-control" name="no_mesin">
                                </div>
                                <div class="form-group">
                                    <label for="">No. Rangka</label>
                                    <input type="text" class="form-control" name="no_rangka">
                                </div>
                                <div class="form-group">
                                    <label for="">No. BPKB </label>
                                    <input type="text" class="form-control" name="no_bpkb">
                                </div>
                                <div class="form-group">
                                    <label for="">No. Polisi</label>
                                    <input type="text" class="form-control" name="no_polisi">
                                </div>
                               
                                <div class="form-group">
                                    <label for="">Perlengkapan</label>
                                    <textarea type="text" rows="5" class="form-control" name="perlengkapan"></textarea>
                                </div>
                                

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                <div class="form-group">
                                    <label for="">Dari</label>
                                    <input type="text" class="form-control" name="dari">
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Perolehan</label>
                                    <input type="date" class="form-control" name="tgl_perolehan">
                                </div>
                                <div class="form-group">
                                    <label for="">Kondisi Perolehan</label>
                                    <textarea name="kondisi_perolehan" rows="5" class="form-control"><?php echo @$editData['kondisi_perolehan'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Harga Perolehan</label>
                                    <input type="number" class="form-control" name="harga_perolehan">
                                </div>
                                <div class="form-group">
                                    <label for="">Dasar Harga</label>
                                    <input type="text" class="form-control" name="dasar_harga">
                                </div>
                                <div class="form-group">
                                    <label for="">Sumber Dana</label>
                                    <input type="text" class="form-control" name="sumber_dana">
                                </div>
                                <div class="form-group">
                                    <label for="">No 2</label>
                                    <input type="text" class="form-control" name="no2">
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal</label>
                                    <input type="date" class="form-control" name="tanggal">
                                </div>
                                <div class="form-group">
                                    <label for="">Nilai Buku</label>
                                    <input type="text" class="form-control" name="nilai_buku">
                                </div>
                                <div class="form-group">
                                    <label for="">Nilai Wajar</label>
                                    <input type="text" class="form-control" name="nilai_wajar">
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Unit</label>
                                    <input type="text" class="form-control" name="nama_unit">
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <textarea type="text" rows="5" class="form-control" name="alamat"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">status_pengguna</label>
                                    <input type="text" class="form-control" name="status_pengguna">
                                </div>
                             
                                <div class="form-group">
                                    <label for="">Digunakan Oleh</label>
                                    <input type="text" class="form-control" name="digunakan_oleh">
                                </div>

                                <div class="form-group">
                                    <label for="">Cara Perolehan</label>
                                    <input type="text" class="form-control" name="cara_perolehan">
                                </div>

                                <div class="form-group">
                                    <label for="">Gambar</label>
                                    <input type="file" class="form-control" name="gambar">
                                </div>

                                <div class="form-group">
                                    <label for="">ID Admin</label>
                                    <input type="text" class="form-control" name="kd_user" readonly value="<?= $kd_user ?>">
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
