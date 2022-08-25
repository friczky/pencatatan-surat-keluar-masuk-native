<?php 
$judul = 'Edit Surat Keluar';
include '../../komponen/header.php';
include '../../komponen/navbar.php';
include '../../komponen/sidebar.php';

$id     = $_GET['id'];
$sql    = "SELECT * FROM format_surat join arsip_surat on format_surat.id_format_surat = arsip_surat.id_format_surat WHERE id = $id";
$query  = mysqli_query($koneksi,$sql);
$data1  = mysqli_fetch_array($query);

$tanggal_surat = $data1['tahun'].'-'.$data1['bulan'].'-'.$data1['tanggal'];
$tanggal = date('Y-m-d', strtotime($tanggal_surat));

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-col-sm-6">
                    <h1>Edit Surat Keluar</h1>
                </div>
                <div class="col-col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Edit Surat Keluar</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header p-2">
                            <div class="row">
                              <div class="col-sm-6">Form Edit Surat Keluar</div>
                              <div class="col-sm-6 text-right"><a href="index.php" class="btn btn-primary"><i class="fa fa-arrow-left"> Kembali</i></a></div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">

                                    <div class="tab-pane" id="settings">
                                      <?php foreach ($query as $data) { ?>
                                        <form
                                            action="aksi_edit.php?id=<?= $data['id'] ?>"
                                            method="post"
                                            class="form-horizontal"
                                            enctype="multipart/form-data">

                                            <div class="form-group row">
                                                <div class="col col-sm-6">
                                                    <label for="">Nomor Agenda</label>
                                                    <input
                                                        type="text"
                                                        name="nomor_agenda"
                                                        class="form-control"
                                                        placeholder="Nomor Agenda"
                                                        value="<?= $data['nomor_agenda'] ?>"
                                                        required="required">
                                                </div>
                                                <div class="col col-sm-6">
                                                    <label for="">Tanggal Surat</label>
                                                    <input
                                                        type="date"
                                                        name="tanggal"
                                                        class="form-control"
                                                        placeholder="Tanggal Surat"
                                                        value="<?= $tanggal; ?>"
                                                        required="required">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col col-sm-6">
                                                    <label for="">Asal Surat</label>
                                                    <input
                                                        type="text"
                                                        name="asal_surat"
                                                        class="form-control"
                                                        placeholder="Asal Surat"
                                                        value="<?= $data['asal_surat'] ?>"
                                                        required="required">
                                                </div>
                                                <div class="col col-sm-6">
                                                    <label for="">Nomor Surat</label>
                                                    <input
                                                        type="text"
                                                        name="nomor_surat"
                                                        class="form-control"
                                                        placeholder="Nomor Surat"
                                                        value="<?= $data['nomor_surat'] ?>"
                                                        required="required">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col col-sm-6">
                                                    <label for="">Perihal</label>
                                                    <input type="text" name="perihal" class="form-control" value="<?= $data['perihal'] ?>" placeholder="Perihal" required>
                                                </div>
                                                <div class="col col-sm-6">
                                                    <label for="">Keterangan</label>
                                                    <input
                                                        type="text"
                                                        name="keterangan"
                                                        class="form-control"
                                                        value="<?= $data['keterangan'] ?>"
                                                        placeholder="Keterangan">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col col-sm-6">
                                                    <label for="">Tanggal diterima</label>
                                                    <input
                                                        type="date"
                                                        name="tanggal_diterima"
                                                        class="form-control"
                                                        placeholder="Tanggal Surat"
                                                        value="<?= $data['tanggal_diterima']; ?>"
                                                        required="required">
                                                </div>
                                                <div class="col col-sm-6">
                                                    <label for="">Arsip</label>
                                                    <input type="file" name="file" class="form-control" >
                                                    <input type="hidden" name="file_old" value="<?= $data['file']?>">
                                                    <input type="hidden" name="id_format_surat" value="<?= $data['id_format_surat']?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" name="tambah" class="btn btn-primary">
                                                    Simpan Perubahan
                                                </button>
                                            </div>
                                        </form>
                                      <?php } ?>
                                    </div>
                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
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