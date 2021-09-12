<?php 
    $br = new lsp();
    $kd_user  = $_SESSION['kd_user'];
    if ($_SESSION['level'] != "Admin") {
    header("location:../index.php");
    }
    $table = "data_genset";    
    if (isset($_POST['getSimpan'])) {
      //  $no                 =$_POST['no'];
        $id_genset          = $_POST['id_genset'];
        $no_urut_pendaftar  = $_POST['no_urut_pendaftar'];
        $merk               = $_POST['merk'];
        $th_perolehan       = $_POST['th_perolehan'];
        $jumlah_barang      = $_POST['jumlah_barang'];
        $penguasaan         = $_POST['penguasaan'];
        $foto['name']       = $_FILES['gambar']['name'];
        $foto['ukuranFile'] = $_FILES['gambar']['size'];
        $foto['error']      = $_FILES['gambar']['error'];
        $foto['tmpName']    = $_FILES['gambar']['tmp_name'];
        $ket                = $_POST['keterangan'];
        $kd_user            =$_POST['kd_user'];

        if ( $id_genset == " " || $merk == " " || $no_urut_pendaftar == " " || $th_perolehan == " " || $jumlah_barang == " " || $foto == " " || $ket == " " || $kd_user == " ") {
            $response = ['response'=>'negative','alert'=>'lengkapi field'];
        }else{
                $response = $br->validateImage($foto);
                $image = $response['image'];
                if ($response['types'] == "true") {
                    $value = "'','$id_genset', '$no_urut_pendaftar','$merk', '$th_perolehan','$jumlah_barang', '$penguasaan','$image','$ket','$kd_user'";
                    $response = $br->insert($table,$value,"?page=viewGenset");
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
                                    <input type="text" style="font-weight: bold; color: red;" class="form-control" name="id_genset">
                                </div>
                                <div class="form-group">
                                    <label for="">No Urut Pendaftar</label>
                                    <input type="text"  class="form-control" name="no_urut_pendaftar">
                                </div>
                                <div class="form-group">
                                    <label for="">Merk</label>
                                    <input type="text" class="form-control" name="merk">
                                </div>
                               
                                <div class="form-group">
                                    <label for="">Keterangan</label>
                                    <textarea type="text" rows="5" class="form-control" name="keterangan"></textarea>
                                </div>
                               
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                <div class="form-group">
                                <div class="form-group">
                                    <label for="">Tahun Perolehan</label>
                                    <input type="number" class="form-control" name="th_perolehan">
                                </div>
                                    <label for="">Jumlah Barang</label>
                                    <input type="number" class="form-control" name="jumlah_barang">
                                </div>
                                <div class="form-group">
                                    <label for="">Penguasaan</label>
                                    <input type="text"  class="form-control" name="penguasaan">
                                </div>
                                <div class="form-group">
                                    <label for="">Foto</label>
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
