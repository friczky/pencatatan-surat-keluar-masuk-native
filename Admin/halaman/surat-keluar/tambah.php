<?php 
$judul = 'Tambah Surat Masuk';
include '../../komponen/header.php';
include '../../komponen/navbar.php';
include '../../komponen/sidebar.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-col-sm-6">
                    <h1>Tambah Surat Masuk</h1>
                </div>
                <div class="col-col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Tambah Surat Masuk</li>
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
                              <div class="col-sm-6">Form Tambah Surat Masuk</div>
                              <div class="col-sm-6 text-right"><a href="index.php" class="btn btn-primary"><i class="fa fa-arrow-left"> Kembali</i></a></div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">

                                    <div class="tab-pane" id="settings">
                                        <form
                                            action="aksi_tambah.php"
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
                                                        required="required">
                                                </div>
                                                <div class="col col-sm-6">
                                                    <label for="">Tanggal Surat</label>
                                                    <input
                                                        type="date"
                                                        name="tanggal"
                                                        class="form-control"
                                                        placeholder="Tanggal Surat"
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
                                                        required="required">
                                                </div>
                                                <div class="col col-sm-6">
                                                    <label for="">Nomor Surat</label>
                                                    <input
                                                        type="text"
                                                        name="nomor_surat"
                                                        class="form-control"
                                                        placeholder="Nomor Surat"
                                                        required="required">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col col-sm-6">
                                                    <label for="">Perihal</label>
                                                    <input type="text" name="perihal" class="form-control" placeholder="Perihal" required>
                                                </div>
                                                <div class="col col-sm-6">
                                                    <label for="">Keterangan</label>
                                                    <input
                                                        type="text"
                                                        name="keterangan"
                                                        class="form-control"
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
                                                        required="required">
                                                </div>
                                                <div class="col col-sm-6">
                                                    <label for="">Arsip</label>
                                                    <input type="file" name="file" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" name="tambah" class="btn btn-primary">
                                                    Tambah
                                                </button>
                                            </div>
                                        </form>
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