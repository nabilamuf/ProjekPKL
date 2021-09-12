<?php 
    $qb = new lsp();
    $dataB = $qb->select("pmn_roda2");
    if ($_SESSION['level'] != "Admin") {
    header("location:../index.php");
    }
    if (isset($_GET['delete'])) {
        $response = $qb->delete("pmn_roda2","id_pem_roda2",$_GET['id'],"?page=viewPemeliharaanRoda2");
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
                                <li class="list-inline-item roda2tive">
                                    <a href="#">Home</a>
                                </li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item">Data Pemeliharaan Roda Dua</li>
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
                            <i class="zmdi zmdi-account-calendar"></i>Data Pemeliharaan Roda Dua</h3>
                        </div>
                        <div class="card-body">
                            <a href="?page=addPemeliharaanRoda2" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data Pemeliharaan Roda Dua</a>
                            <a href="admin/pemeliharaan/expmnroda2.php" button type="submit" data-toggle="tooltip" style="margin-left: 400px;" data-placement="top" name="excel" class="btn btn-info ds"><i class="fa fa-download ds"> Unduh Excel</a></i>   
                           </button>
                           <br>
                           <br>
                           <div class="table-responsive">
                               <table id="example" class="table table-borderless table-striped table-earning">
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                            <th>Id Pemeliharaan Roda Dua</th>
                                            <th>Tanggal</th>
                                            <th>Nomor SPPK / Bukti Pembayaran</th>
                                            <th>Service</th>
                                            <th>Penggantian</th>
                                            <th>Keterangan Alat Ganti</th>
                                            <th>Tanggal Masuk Bengkel</th>
                                            <th>Tanggal Keluar Bengkel</th>
                                            <th>Nama Bengkel</th>
                                            <th>Besar Biaya</th>
                                            <th>Gambar Service</th>
                                            <th>Slip Bukti</th>
                                            <th>Id Roda Dua</th>
                                            <th>Kode Pemegang Pribadi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                            $no = 1;
                                            foreach($dataB as $ds) { 
                                         ?>
                                        <tr>
                                            <td><?= $no++;?></td>
                                            <td><?= $ds['id_pem_roda2'] ?></td>
                                            <td><?= $ds['tanggal'] ?></td>
                                            <td><?= $ds['no_sppk'] ?></td>
                                            <td><?= $ds['service'] ?></td>
                                            <td><?= $ds['penggantian'] ?></td>
                                            <td><?= $ds['ket_alat_ganti'] ?></td>
                                            <td><?= $ds['tgl_msk_bengkel'] ?></td>
                                            <td><?= $ds['tgl_klr_bengkel'] ?></td>
                                            <td><?= $ds['nama_bengkel'] ?></td>
                                            <td><?= $ds['besar_biaya'] ?></td>
                                            <td><?= $ds['gambar_service'] ?></td>
                                            <td><?= $ds['slip_bukti'] ?></td>
                                            <td><?= $ds['id_roda2'] ?></td>
                                            <td><?= $ds['id_pmg_pribadi'] ?></td>

                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="?page=viewDetailPemeliharaanRoda2&id=<?php echo $ds['id_pem_roda2'] ?>" data-toggle="tooltip" data-placement="top" title="Detail" class="btn btn-warning"><i class="fa fa-search"></i></a>
                                                    <a href="?page=viewEditPemeliharaanRoda2&edit&id=<?= $ds['id_pem_roda2'] ?>" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                                    <button data-toggle="tooltip" data-placement="top" title="Delete" class="btn btn-danger">
                                                        <i class="fa fa-trash" id="btdelete<?php echo $no; ?>" ></i>
                                                    </button>
                                                    
                                                    
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
                                                        window.location.href="?page=viewPemeliharaanRoda2&delete&id=<?php echo $ds['id_pem_roda2'] ?>";
                                                    }
                                                  });
                                                });
                                        </script>
                                        <?php  } ?>
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
