<?php 

$judul = 'Rekap Surat Keluar';
include '../../komponen/header.php';
include '../../komponen/navbar.php';
include '../../komponen/sidebar.php';

$sql = "SELECT * FROM format_surat join arsip_surat on format_surat.id_format_surat = arsip_surat.id_format_surat where jenis_surat = '3'";
$query = mysqli_query($koneksi,$sql);
$no = 1;

$sql_tahun = "SELECT tahun from format_surat group by tahun";
$query_tahun = mysqli_query($koneksi,$sql_tahun);

if(isset($_GET['bulan'])){
    $bulan  = $_GET['bulan'];
    $tahun  = $_GET['tahun'];
    $sql_waktu = "SELECT * FROM format_surat where bulan='$bulan' and tahun='$tahun' and jenis_surat='1' ";
    $query_waktu = mysqli_query($koneksi,$sql_waktu);
}
?>

<!-- content -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Rekap Surat</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Rekap Surat Keluar</li>
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
                    <h3 class="card-title">Data Rekap Surat Keluar</h3>
                </div>
                <div class="col-sm-6 text-right">
                    <?php 
                        if(isset($_GET['bulan'])){
                            echo '<a href="cetak_surat_keluar.php?bulan='.$_GET['bulan'].'&tahun='.$_GET['tahun'].'" class="btn btn-primary">
                                <i class="fa fa-print"></i> Cetak
                            </a>';
                        }
                    ?>
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
           <form action="" method="get">
                <div class="form-group row">
                    <div class="col-sm-1"><label for="">Pilih Waktu</label></div>
                    <div class="col-sm-3">
                        <select name="bulan" class="form-control" id="">
                            <option value="01">Januari</option>
                            <option value="02">Februari</option>
                            <option value="03">Maret</option>
                            <option value="04">April</option>
                            <option value="05">Mei</option>
                            <option value="06">Juni</option>
                            <option value="07">July</option>
                            <option value="08">Agustus</option>
                            <option value="09">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                    <select name="tahun" id="tahun" class="form-control">
                          <option value="">Pilih Tahun</option>
                          <?php while($data_tahun = mysqli_fetch_assoc($query_tahun)): ?>
                          <option value="<?= $data_tahun['tahun'] ?>"><?= $data_tahun['tahun'] ?></option>
                          <?php endwhile; ?>
                     </select>
                    </div>
                    <div class="col-sm-3">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                        <?php 
                        if(isset($_GET['bulan'])){
                            echo '<a href="surat-keluar.php" class="btn btn-danger">
                                <i class="fa fa-undo"></i> Reset
                            </a>';
                        }
                        ?>
                    </div>
                </div>
           </form>
            
           <?php 
                if(isset($_GET['bulan'])){
                    include 'table.php';
                }
           ?>
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

// include 'detail_modal.php';
include '../../komponen/footer.php'

?>