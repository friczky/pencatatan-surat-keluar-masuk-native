<?php 
$judul = 'Dashboard';
include '../../komponen/header.php'; 
include '../../komponen/navbar.php';
include '../../komponen/sidebar.php';

// Jumlah Pengguna
$pengguna = "SELECT * FROM pengguna";
$pengguna = mysqli_query($koneksi,$pengguna);
$pengguna = mysqli_num_rows($pengguna);

// Surat Masuk
$surat_masuk = "SELECT * FROM format_surat where jenis_surat = '0'";
$surat_masuk = mysqli_query($koneksi,$surat_masuk);
$surat_masuk = mysqli_num_rows($surat_masuk);

// Surat Keluar
$surat_keluar = "SELECT * FROM format_surat where jenis_surat = '1'";
$surat_keluar = mysqli_query($koneksi,$surat_keluar);
$surat_keluar = mysqli_num_rows($surat_keluar);

// Total Surat
$total_surat = "SELECT * FROM format_surat";
$total_surat = mysqli_query($koneksi,$total_surat);
$total_surat = mysqli_num_rows($total_surat);

$sql = "SELECT * FROM format_surat join arsip_surat on format_surat.id_format_surat = arsip_surat.id_format_surat where jenis_surat = '0'";
$query = mysqli_query($koneksi,$sql);
$no = 1;
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard
                    </h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Dashboard
                        </li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <!-- ./col -->
                <div class="col-lg-6 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?= $pengguna ?></h3>

                            <p>Data Pengguna</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <a href="<?= admin()?>halaman/pengguna" class="small-box-footer">More info
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?= $surat_masuk ?></h3>

                            <p>Surat Masuk</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <a href="<?= admin()?>halaman/pengguna" class="small-box-footer">More info
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?= $surat_keluar ?></h3>

                            <p>Surat Keluar</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-envelope-open"></i>
                        </div>
                        <a href="<?= admin()?>halaman/pengguna" class="small-box-footer">More info
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?= $total_surat ?></h3>

                            <p>Total Surat</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                        <a href="<?= admin()?>halaman/pengguna" class="small-box-footer">More info
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            

            <div class="row">
                <div class="card col-6 col-sm-6" >
                    <div class="card-header">Tabel Data Surat</div>
                    <div class="card-body">
                        <table id="" class="table table-bordered table-striped">
                            <thead>
                                <tr align="center">
                                    <th>No.</th>
                                    <th>Nomor Agenda</th>
                                    <th>Asal Surat</th>
                                    <th>Perihal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($query as $data) {?>
                                <tr align="center">
                                    <td><?= $no++ ?>.</td>
                                    <td><?= $data['nomor_agenda']?></td>
                                    <td><?= $data['asal_surat']?></td>
                                    <td>
                                        <?= $data['perihal']?>
                                    </td>
                                </tr>
                                <?php }?>
                            </tbody>

                        </table>
                    </div>
                </div>
                <div class="card col-6 col-sm-6 ">
                    <div class="card-header">Grafik Data Surat</div>
                    <div class="card-body">
                    <canvas id="pie-chart" width="800" height="450"></canvas>
                    </div>
                </div>
            </div>


            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- right col -->
</div>
<!-- /.row (main row) -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include '../../komponen/footer.php'?>