<?php 
    $qb = new lsp();
    $dataB = $qb->select("data_genset");
    if ($_SESSION['level'] != "Pemegang Ruang") {
    header("location:../index.php");
    }
    if (isset($_GET['delete'])) {
        $response = $qb->delete("data_genset","id_genset",$_GET['id'],"?page=viewGenset");
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
                                <li class="list-inline-item">Data Genset</li>
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
                <div class="col-md-12">
                    <div class="card">
                        <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                            <div class="bg-overlay bg-overlay--blue"></div>
                            <h3>
                            <i class="zmdi zmdi-account-calendar"></i>Data Genset</h3>
                        </div>
                        <div class="card-body">
                            <a href="?page=addBarangGenset" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data Genset</a>
                           </button>
                           <br>
                           <br>
                           <div class="table-responsive">
                               <table id="example" class="table table-borderless table-striped table-earning">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Genset</th>
                                            <th>No Urut Pendaftar</th>
                                            <th>Merk</th>
                                            <th>Tahun Perolehan</th>
                                            <th>Jumlah Barang</th>
                                            <th>penguasaan</th>
                                            <th>Gambar</th>
                                            <th>Keterangan</th>
                                            <th>Kode Admin</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $no = 1;
                                            foreach($dataB as $ds) { 
                                         ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $ds['id_genset'] ?></td>
                                            <td><?= $ds['no_urut_pendaftar'] ?></td>
                                            <td><?= $ds['merk'] ?></td>
                                            <td><?= $ds['th_perolehan'] ?></td>
                                            <td><?= $ds['jumlah_barang'] ?></td>
                                            <td><?= $ds['penguasaan'] ?></td>
                                            <td><?= $ds['gambar'] ?></td>
                                            <td><?= $ds['keterangan'] ?></td>
                                            <td><?= $ds['kd_user'] ?></td>

                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="?page=viewBarangDetailGenset&id=<?php echo $ds['id_genset'] ?>" data-toggle="tooltip" data-placement="top" title="Detail" class="btn btn-warning"><i class="fa fa-search"></i></a>
                                                    <a href="?page=viewBarangEditGenset&edit&id=<?= $ds['id_genset'] ?>" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                                    <button data-toggle="tooltip" data-placement="top" title="Delete" class="btn btn-danger">
                                                        <i class="fa fa-trash" id="btdelete<?php echo $no; ?>" ></i>
                                                    </button>
                                                    <a href="?page=cetakgenset&id=<?php echo $ds['id_genset'] ?>" class="btn btn-info ds"   ><i class="fa fa-print" ></i> Cetak Struk</a></span>
                                                </div>
                                            </td>
                                        </tr>
                                        <script src="vendor/jquery-3.2.1.min.js"></script>
                                        <script>
                                            $('#btdelete<?php echo $no; ?>').click(function(e){
                                                  e.preventDefault();
                                                    swal({
                                                    title: "Hapus",
                                                    text: "Yakin Hapus?",
                                                    type: "warning",
                                                    showCancelButton: true,
                                                    confirmButtonText: "Yes",
                                                    cancelButtonText: "Cancel",
                                                    closeOnConfirm: false,
                                                    closeOnCancel: true
                                                  }, function(isConfirm) {
                                                    if (isConfirm) {
                                                        window.location.href="?page=viewGenset&delete&id=<?php echo $ds['id_genset'] ?>";
                                                    }
                                                  });
                                                });
                                        </script>
                                        <?php } ?>
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
