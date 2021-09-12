 <?php 

    $rg = new lsp();
    $table = "table_user";
    $autokode = $rg->autokodeus($table, "kd_user", "US");
    $data = $rg->select($table);

     if(isset($_POST['btnInput'])){
        $kd_user = $_POST['kd_user'];
        $nip = $_POST['nip'];
        $nama_user = $_POST['nama_user'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm = $_POST['confirm'];
        $foto = $_FILES['foto'];
        $level = $_POST['level'];
        $redirect = "?page=kelolaPegawai";
        

        if($nama_user == "" || $username == "" || $password == "" || $confirm == "" || $level == ""){
            $response = ['response'=>'negative','alert'=>'Lengkapi Field !!!'];
        }else{
            
            $response = $rg->register($kd_user, $nip, $nama_user, $username, $password, $confirm, $foto, $level, $redirect);
        }
    }

    if(isset($_GET['delete'])){
        $response = $rg->delete($table,"kd_user",$_GET['id'],"?page=kelolaPegawai");
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
                                <li class="list-inline-item">Kelola Pegawai</li>
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
                            <i class="zmdi zmdi-account-calendar"></i>Data Pegawai</h3>
                        </div>
            			<div class="card-body">
            				<table class="table" cellpadding="10">
                                       <tr>
                                           <th>No</th>
                                           <th>Kode Pegawai</th>
                                           <th>NIP</th>
                                           <th>Nama</th>
                                           <th>Username</th>
                                           <th>Level</th>
                                           <th>Foto</th>
                                        
                                       </tr>
                                   </thead>
                                   <tbody>
                                        <?php 
                                            $no = 1;
                                            foreach($data as $dataB){
                                         ?>
                                       <tr>
                                           <td><?= $no; ?></td>
                                           <td><?= $dataB['kd_user']; ?></td>
                                           <td><?= $dataB['nip'] ?></td>
                                           <td><?= $dataB['nama_user'] ?></td>
                                           <td><?= $dataB['username'] ?></td>
                                           <td><?= $dataB['level']?></td>
                                           <td><img width="60" src="img/<?= $dataB['foto_user'] ?>" alt=""></td>
                                           <td>
                                               
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
                                                            window.location.href="?page=kelolaPegawai&delete&id=<?php echo $dataB['kd_user'] ?>";
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