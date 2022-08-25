<?php 

$judul = 'Surat Keluar';
include '../../komponen/header.php';
include '../../komponen/navbar.php';
include '../../komponen/sidebar.php';

$sql = "SELECT * FROM format_surat join arsip_surat on format_surat.id_format_surat = arsip_surat.id_format_surat where jenis_surat = '1' order by id desc";
$query = mysqli_query($koneksi,$sql);
$no = 1;

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
                    <a href="tambah.php" class="btn btn-primary">
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
                        <th>Nomor Agenda</th>
                        <th>Asal Surat</th>
                        <th>Perihal</th>
                        <th>Detail</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                   <?php 
                    foreach ($query as $data) {
                   ?>
                    <tr align="center">
                        <td><?= $no++ ?>.</td>
                        <td><?= $data['nomor_agenda']?></td>
                        <td><?= $data['asal_surat']?></td>
                        <td>
                            <?= $data['perihal']?>
                        </td>
                        <td><button class="btn btn-info" data-toggle="modal" data-target="#my-modal<?= $data['id']?>">Lihat</button></td>
                        <td>
                            <a href="edit.php?id=<?= $data['id']?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                            <a href="aksi_hapus.php?id=<?= $data['id']?>" onclick="return confirm('Apakah anda ingin menghapus data surat ini ?')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php }?>
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


<?php 

include 'detail_modal.php';
include '../../komponen/footer.php'

?>