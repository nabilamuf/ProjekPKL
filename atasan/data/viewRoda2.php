<?php 
    $qb = new lsp();
    $dataB = $qb->select("data_roda2");
    if ($_SESSION['level'] != "atasan") {
    header("location:../index.php");
    }
    if (isset($_GET['delete'])) {
        $response = $qb->delete("data_roda2","id_roda2",$_GET['id'],"?page=viewroda2");
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
                                <li class="list-inline-item">Data roda 2</li>
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
                            <i class="zmdi zmdi-account-calendar"></i>Data roda 2</h3>
                        </div>
                        <div class="card-body">
                            </button>
                           <br>
                           <br>
                           <div class="table-responsive">
                               <table id="example" class="table table-borderless table-striped table-earning">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>kode roda 2</th>
                                            <th>Merk</th>
                                            <th>Type</th>
                                            <th>tahun Pembuatan</th>
                                            <th>Pabrik</th>
                                            <th>Negara</th>
                                            <th>Perakitan</th>
                                            <th>Daya Muat</th>
                                            <th>Bobot</th>
                                            <th>Daya/Isi Silinder</th>
                                            <th>Mesin Penggerak</th>
                                            <th>Jumlah Mesin</th>
                                            <th>Bahan bakar</th>
                                            <th>No. Mesin</th>
                                            <th>No. Rangka</th>
                                            <th>No. BPKB</th>
                                            <th>No. Polisi</th>
                                            <th>Gambar Kendaraan</th>
                                            <th>Perlengkapan</th>
                                            <th>Cara Perolehan</th>
                                            <th>Dari</th>
                                            <th>Tanggal Perolehan</th>
                                            <th>Kondisi Perolehan</th>
                                            <th>Harga Perolehan</th>
                                            <th>Dasar Harga</th>
                                            <th>Sumber Dana</th>
                                            <th>No 2</th>
                                            <th>Tanggal</th>
                                            <th>Nilai Buku</th>
                                            <th>Nilai wajar</th>
                                            <th>Nama Unit</th>
                                            <th>Alamat</th>
                                            <th>Status Pengguna </th>
                                            <th>Digunakan Oleh</th>
                                            <th>Kode atasan</th>
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
                                            <td><?= $ds['id_roda2'] ?></td>
                                            <td><?= $ds['merk'] ?></td>
                                            <td><?= $ds['type'] ?></td>
                                            <td><?= $ds['th_pembuatan'] ?></td>
                                            <td><?= $ds['pabrik'] ?></td>
                                            <td><?= $ds['negara'] ?></td>
                                            <td><?= $ds['perakitan'] ?></td>
                                            <td><?= $ds['daya_muat'] ?></td>
                                            <td><?= $ds['bobot'] ?></td>
                                            <td><?= $ds['daya_isi_silinder'] ?></td>
                                            <td><?= $ds['mesin_penggerak'] ?></td>
                                            <td><?= $ds['jumlah_mesin'] ?></td>
                                            <td><?= $ds['bahan_bakar'] ?></td>
                                            <td><?= $ds['no_mesin'] ?></td>
                                            <td><?= $ds['no_rangka'] ?></td>
                                            <td><?= $ds['no_bpkb'] ?></td>
                                            <td><?= $ds['no_polisi'] ?></td>
                                            <td><?= $ds['gambar'] ?></td>
                                            <td><?= $ds['perlengkapan'] ?></td>
                                            <td><?= $ds['cara_perolehan'] ?></td>
                                            <td><?= $ds['dari'] ?></td>
                                            <td><?= $ds['tgl_perolehan'] ?></td>
                                            <td><?= $ds['kondisi_perolehan'] ?></td>
                                            <td><?= $ds['harga_perolehan'] ?></td>
                                            <td><?= $ds['dasar_harga'] ?></td>
                                            <td><?= $ds['sumber_dana'] ?></td>
                                            <td><?= $ds['no2'] ?></td>
                                            <td><?= $ds['tanggal'] ?></td>
                                            <td><?= $ds['nilai_buku'] ?></td>
                                            <td><?= $ds['nilai_wajar'] ?></td>
                                            <td><?= $ds['nama_unit'] ?></td>
                                            <td><?= $ds['alamat'] ?></td>
                                            <td><?= $ds['status_pengguna'] ?></td>
                                            <td><?= $ds['digunakan_oleh'] ?></td>
                                            <td><?= $ds['kd_user'] ?></td>

                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="?page=viewBarangDetailRoda2&id=<?php echo $ds['id_roda2'] ?>" data-toggle="tooltip" data-placement="top" title="Detail" class="btn btn-warning"><i class="fa fa-search"></i></a>
                                                    
                                                    <a href="?page=strukTransaksia&id=<?php echo $ds['id_roda2'] ?>" class="btn btn-info ds"   ><i class="fa fa-print" ></i> Cetak Struk</a></span>
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
                                                        window.location.href="?page=viewroda2&delete&id=<?php echo $ds['id_roda2'] ?>";
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
