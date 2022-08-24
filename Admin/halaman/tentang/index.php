<?php 
$judul = 'Tentang';
include '../../komponen/header.php';
include '../../komponen/navbar.php';
include '../../komponen/sidebar.php';

$sql = "SELECT * FROM tentang WHERE id=1";
$query = mysqli_query($koneksi,$sql);
$data = mysqli_fetch_assoc($query);

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tentang Aplikasi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tentang</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
               Form Tentang Aplikasi
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">

                  <div class="tab-pane" id="settings">
                    <form action="aksi.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nama Web</label>
                        <div class="col-sm-10">
                          <input type="text" name="nama_web" class="form-control" id="inputName" value="<?= $data['nama_web']?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Maps URL</label>
                        <div class="col-sm-10">
                          <textarea name="maps_url" id="" cols="10" rows="3" class="form-control"><?= $data['maps_url']?></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Logo</label>
                        <div class="col-sm-10">
                          <input type="file" name="logo" class="form-control" id="inputName" >
                          <input type="hidden" name="logo_old" value="<?= $data['logo']?>">
                        </div>
                      </div>
                      
                      
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Perbahrui</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <?php include '../../komponen/footer.php'?>