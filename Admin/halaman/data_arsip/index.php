<?php 

$judul = 'Data Pengguna';
include '../../komponen/header.php';
include '../../komponen/navbar.php';
include '../../komponen/sidebar.php';

$sql = "SELECT * FROM arsip_surat join format_surat on arsip_surat.id_format_surat == format_surat.id_format_surat";
$query = mysqli_query($koneksi,$sql);
$no =1;

?>

<!-- content -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Arsip</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">User Profile</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
        <br>
        <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="card-title">Data Arsip</h3>
                </div>
                <div class="col-sm-6 text-right">
                    <!-- <a href="<?= admin()?>halaman/pengguna/tambah.php" class="btn btn-primary">
                        <i class="fa fa-plus"></i> Tambah
                    </a> -->
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
     
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr align="center">
                        <th>No.</th>
                        <th>Jenis File</th>
                        <th>File</th>
                   
                    </tr>
                </thead>
                <tbody>
                   <?php foreach($query as $data) {?>
                    <tr align="center">
                        <td><?= $no ++ ?>.</td>
                        <td>
                            <?php
                            if($data['jenis_surat'] == 0){
                                echo 'Surat Masuk';
                            }else {
                                echo 'Surat Keluar';
                            }
                            ?>
                        </td>
                        <td><?= $data['file']?></td>
            
                    </tr>
                    <?php } ?>
                </tbody>
                
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>

<?php include '../../komponen/footer.php'?>