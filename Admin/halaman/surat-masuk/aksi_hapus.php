<?php 
include '../../komponen/header.php';
// fungsi hapus data
$id = $_GET['id'];
$sql = "DELETE FROM format_surat WHERE id = '$id'";
$query = mysqli_query($koneksi,$sql);
if($query){
    echo "
        <script>
            alert('Berhasil Menghapus Surat');
            window.location.href='index.php';
        </script>
    ";
}else{
   echo "
        <script>
            alert('Gagal Menghapus Surat');
            window.location.href='index.php';
        </script>
    ";
}

?>