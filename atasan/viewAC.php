<?php 
    $qb = new lsp();
    $dataB = $qb->select("data_ac");
    if ($_SESSION['level'] != "Admin") {
    header("location:../index.php");
    }
    if (isset($_GET['delete'])) {
        $response = $qb->delete("data_ac","id_ac",$_GET['id'],"?page=viewAC");
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
                                <li class="list-inline-item">Data AC</li>
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
                            <i class="zmdi zmdi-account-calendar"></i>Data AC</h3>
                        </div>
                        <div class="card-body">
                            <a href="?page=addBarangAC" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data AC</a>
                           </button>
                           <br>
                           <br>
                           <div class="table-responsive">
                               <table id="example" class="table table-borderless table-striped table-earning">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID AC</th>
                                            <th>No Urut Pendaftar</th>
                                            <th>Merk</th>
                                            <th>tahun Perolehan</th>
                                            <th>Jumlah Barang</th>
                                            <th>penguasaan</th>
                                            <th>Gambar</th>
                                            <th>Keterangan</th>
                                            <th>Kode Admin</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $no = 1;
                                            foreach($dataB as $ds) { 
                                         ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $ds['id_ac'] ?></td>
                                            <td><?= $ds['no_urut_pendaftar'] ?></td>
                                            <td><?= $ds['merk'] ?></td>
                                            <td><?= $ds['th_perolehan'] ?></td>
                                            <td><?= $ds['jumlah_barang'] ?></td>
                                            <td><?= $ds['pengusaan'] ?></td>
                                            <td><?= $ds['gambar'] ?></td>
                                            <td><?= $ds['ket'] ?></td>
                                            <td><?= $ds['kd_user'] ?></td>

                                           
                                        </tr>
                                       
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