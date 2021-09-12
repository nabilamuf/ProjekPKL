<?php 
    $dis = new lsp();
    if ($_SESSION['level'] != "Admin") {
    header("location:../index.php");
    }
    $table = "pegawai";
    $dataDis = $dis->select($table);


    if (isset($_GET['delete'])) {
        $where = "id_pegawai";
        $whereValues = $_GET['id_pegawai'];
        $redirect = "?page=viewPegawai";
        $response = $dis->delete($table,$where,$whereValues,$redirect);
    }

    if (isset($_GET['edit'])) {
        $id_pegawai = $_GET['id'];
        $editData = $dis->selectWhere($table,"id_pegawai",$id_pegawai);
      
    }
    if (isset($_POST['getSave'])) {
        $no = $dis->validateHtml($_POST['no']);
        $id_pegawai = $dis->validateHtml($_POST['id_pegawai']);
        $nip = $dis->validateHtml($_POST['nip']);
        $nama = $dis->validateHtml($_POST['nama']);
        $pangkat = $dis->validateHtml($_POST['pangkat']);
        $golongan = $dis->validateHtml($_POST['golongan']);
        $ruang = $dis->validateHtml($_POST['ruang']);
        $jabatan = $dis->validateHtml($_POST['jabatan']);
        $lokasi = $dis->validateHtml($_POST['lokasi']);
        $jab_fungsional = $dis->validateHtml($_POST['jab_fungsional']);
        $no_hp = $dis->validateHtml($_POST['no_hp']);
        $status = $dis->validateHtml($_POST['status']);

        
        if ($no == " " || empty($no) ||$id_pegawai == " " || empty($id_pegawai) || $nip == " " || empty($nip) || $nama == " " || empty($nama) || $pangkat == " " || empty($pangkat) || $golongan == " " || empty($golongan) || $ruang == " " || empty($ruang) || $jabatan == " " || empty($jabatan)|| $lokasi == " " || empty($lokasi)|| $jab_fungsional == " " || empty($jab_fungsional)|| $no_hp == " " || empty($no_hp)|| $status == " " || empty($status)) {
            $response = ['response'=>'negative','alert'=>'Lengkapi field'];
        }else{
            $validno = substr($no_hp, 0,2);
            if ($validno != "08") {
                $response = ['response'=>'negative','alert'=>'Masukan nohp yang valid'];
            }else{
                if (strlen($no_hp) < 11) {
                    $response = ['response'=>'negative','alert'=>'Masukan 11 digit nohp'];
                }else{
                    $value = "'$no','$id_pegawai','$nip','$nama','$pangkat','$golongan','$ruang','$jabatan','$lokasi','$jab_fungsional','$no_hp','$status'";
                    $response = $dis->insert($table,$value,"?page=viewPegawai");
                }
            }
        }
    }

    if (isset($_POST['getUpdate'])) {
        $no = $dis->validateHtml($_POST['no']);
        $id_pegawai   = $dis->validateHtml($_POST['id_pegawai']);
        $nip = $dis->validateHtml($_POST['nip']);
        $nama = $dis->validateHtml($_POST['nama']);
        $pangkat = $dis->validateHtml($_POST['pangkat']);
        $golongan = $dis->validateHtml($_POST['golongan']);
        $ruang = $dis->validateHtml($_POST['ruang']);
        $jabatan =$dis->validateHtml($_POST['jabatan']);
        $lokasi = $dis->validateHtml($_POST['lokasi']);
        $jab_fungsional = $dis->validateHtml($_POST['jab_fungsional']);
        $no_hp = $dis->validateHtml($_POST['no_hp']);
        $status = $dis->validateHtml($_POST['status']);

        
        if ($no == " " || empty($no) ||$id_pegawai == " " || empty($id_pegawai) || $nip == " " || empty($nip) || $nama == " " || empty($nama) || $pangkat == " " || empty($pangkat) || $golongan == " " || empty($golongan) || $ruang == " " || empty($ruang) || $jabatan == " " || empty($jabatan)|| $lokasi == " " || empty($lokasi)|| $jab_fungsional == " " || empty($jab_fungsional)|| $no_hp == " " || empty($no_hp)|| $status == " " || empty($status)) {
            $response = ['response'=>'negative','alert'=>'Lengkapi field'];
        }else{
            $validno = substr($no_hp, 0,2);
            if ($validno != "08") {
                $response = ['response'=>'negative','alert'=>'Masukan nohp yang valid'];
            }else{
                if (strlen($no_hp) < 11) {
                    $response = ['response'=>'negative','alert'=>'Masukan 11 digit nohp'];
                }else{
                    $value = "'$no','$id_pegawai','$nip','$nama','$pangkat','$golongan','$ruang','$jabatan','$lokasi','$jab_fungsional','$no_hp','$status'";
                    $response = $dis->insert($table,$value,"?page=viewPegawai");
                }
            }
        }
    }
 ?>
<section class="au-breadcrumb m-t-75">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="au-breadcrumb-content">
                       <div class="au-breadcrumb-left">
                            <ul class="list-unstyled list-inline au-breadcrumb__list">
                                <li class="list-inline-item active">
                                    <a href="#">Home</a>
                                </li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item">Data Pegawai</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="main-content" style="margin-top: -60px;">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header" >
                            <strong class="card-title mb-3">Input Pegawai</strong>
                        </div>
                        <div class="card-body">
                            <form method="post">
                            <div class="form-group">
                                    <label for="">no</label>
                                    <input type="text" class="form-control form-control-sm" name="no" style="font-weight: bold; color: red;" >
                                </div>
                                <div class="form-group">
                                    <label for="">Kode Pegawai</label>
                                    <input type="text" class="form-control form-control-sm" name="id_pegawai" style="font-weight: bold; color: red;" >
                                </div>
                                <div class="form-group">
                                    <label for="">NIP</label>
                                    <input type="text" class="form-control form-control-sm" name="nip" style="font-weight: bold; color: red;" >
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Pegawai</label>
                                    <input type="text" class="form-control form-control-sm" name="nama" value="<?php echo @$editData['nama'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Pangkat</label>
                                    <textarea name="pangkat" rows="5" class="form-control"><?php echo @$editData['pangkat'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Golongan</label>
                                    <input type="text" class="form-control form-control-sm" name="golongan" value="<?php echo @$editData['golongan'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Ruang</label>
                                    <input type="text" class="form-control form-control-sm" name="ruang" value="<?php echo @$editData['ruang'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Jabatan</label>
                                    <input type="text" class="form-control form-control-sm" name="jabatan" value="<?php echo @$editData['jabatan'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Jabatan Fungsional</label>
                                    <textarea name="jab_fungsional" rows="5" class="form-control"><?php echo @$editData['jab_fungsional'] ?></textarea>
                                </div>
                               
                                <div class="form-group">
                                    <label for="">Lokasi</label>
                                    <textarea name="lokasi" rows="5" class="form-control"><?php echo @$editData['lokasi'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Nomor HP</label>
                                    <input type="text" class="form-control form-control-sm" name="no_hp" value="<?php echo @$editData['no_hp']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <input type="text" class="form-control form-control-sm" name="status" value="<?php echo @$editData['status']; ?>">
                                </div>
                                <hr>
                                <?php if (isset($_GET['edit'])): ?>
                                <button type="submit" name="getUpdate" class="btn btn-warning"><i class="fa fa-check"></i> Update</button>
                                <a href="?page=viewDistributor" class="btn btn-danger">Cancel</a>
                                <?php endif ?>
                                <?php if (!isset($_GET['edit'])): ?>    
                                <button type="submit" name="getSave" class="btn btn-primary"><i class="fa fa-download"></i> Simpan</button>
                                <?php endif ?>
                            </form>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                        <div class="card-header">
                            <strong class="card-title mb-3">Data Pegawai</strong>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                               <table id="example" class="table table-borderless table-striped table-earning">
                                   <thead>
                                       <tr>
                                            <th>No</th>
                                            <th>Kode Pegawai</th>
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>pangkat</th>
                                            <th>Golongan</th> 
                                            <th>Ruang</th>
                                            <th>Jabatan</th>
                                            <th>Lokasi</th>
                                            <th>Jabatan Fungsional</th>
                                            <th>Nohp</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                        <?php 
                                            $no = 1;
                                            foreach($dataDis as $ds){
                                         ?>
                                       <tr>
                                             <td><?= $ds['no'] ?></td>
                                            <td><?= $ds['id_pegawai'] ?></td>
                                            <td><?= $ds['nip'] ?></td>
                                            <td><?= $ds['nama'] ?></td>
                                            <td><?= $ds['pangkat'] ?></td>
                                            <td><?= $ds['golongan'] ?></td>
                                            <td><?= $ds['ruang'] ?></td>
                                            <td><?= $ds['jabatan'] ?></td>
                                            <td><?= $ds['lokasi'] ?></td>
                                            <td><?= $ds['jab_fungsional'] ?></td>
                                            <td><?= $ds['no_hp'] ?></td>
                                            <td><?= $ds['status'] ?></td>

                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a data-toggle="tooltip" data-placement="top" title="Edit" href="?page=viewPegawai&edit&id=<?= $ds['id_pegawai'] ?>" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                                    <a data-toggle="tooltip" data-placement="top" title="Delete" href="#" class="btn btn-danger"><i class="fa fa-trash" id="btnDelete<?php echo $no; ?>" ></i></a>
                                                </div>
                                            </td>
                                       </tr>
                                       <script src="vendor/jquery-3.2.1.min.js"></script>
                                       <script>
                                        $('#btnDelete<?php echo $no; ?>').click(function(e){
                                                      e.preventDefault();
                                                        swal({
                                                        title: "Hapus",
                                                        text: "Yakin Ingin menghapus?",
                                                        type: "error",
                                                        showCancelButton: true,
                                                        confirmButtonText: "Yes",
                                                        cancelButtonText: "Cancel",
                                                        closeOnConfirm: false,
                                                        closeOnCancel: true
                                                      }, function(isConfirm) {
                                                        if (isConfirm) {
                                                            window.location.href="?page=viewDistributor&delete&id=<?php echo $ds['kd_distributor'] ?>";
                                                        }
                                                      });
                                                    });
                                        </script>
                                       <?php $no++; } ?>
                                   </tbody>
                               </table>
                           </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
