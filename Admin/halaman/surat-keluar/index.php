<?php 

$judul = 'Surat Masuk';
include '../../komponen/header.php';
include '../../komponen/navbar.php';
include '../../komponen/sidebar.php';

?>

<!-- content -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Surat</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Surat Keluar</li>
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
                    <h3 class="card-title">Data Surat Keluar</h3>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="<?= admin()?>halaman/pengguna/tambah.php" class="btn btn-primary">
                        <i class="fa fa-plus"></i> Tambah
                    </a>
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
           <?php 
           if(isset($_GET['pesan'])){
            echo '<div class="alert alert-success">'.$_GET['pesan'].'</div>';
           }
           ?>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr align="center">
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                   <?php 
                    $sql = "SELECT * FROM pengguna";
                    $query = mysqli_query($koneksi,$sql);
                    $i = 1;
                    while($data = mysqli_fetch_assoc($query)){
                   ?>
                    <tr align="center">
                        <td><?= $i ?>.</td>
                        <td><?= $data['nama']?></td>
                        <td><?= $data['email']?></td>
                        <td>
                            <?php if($data['role'] == '0'){
                                echo '<span class="badge badge-danger">Admin</span>';
                            }else{
                                echo '<span class="badge badge-success">Pelamar</span>';
                            }
                            ?>
                        </td>
                        <td><img src="../../upload/<?= $data['foto']?>" width="50px" alt=""></td>
                        <td>
                            <a href="edit.php?id=<?= $data['id']?>" class="btn btn-primary">Edit</a>
                            <a href="aksi.php?id=<?= $data['id']?>&hapus" onclick="return confirm('Apakah anda ingin menghapus pengguna ini?')" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php $i++; } ?>
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