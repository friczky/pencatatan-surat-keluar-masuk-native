<?php

include '../../komponen/header.php';
$id = 1;
$nama_web = $_POST['nama_web'];
$maps_url = $_POST['maps_url'];
$logo = $_FILES['logo']['name'];
$logo_old   = $_POST['logo_old'];
$tmp = $_FILES['logo']['tmp_name'];
$logo_save = rand().$_FILES['logo']['name'];
$judul = $_POST['nama_web'];
 //upload foto
 if ($logo != '') {
    unlink('../../upload/'.$logo_old);
    move_uploaded_file($tmp, '../../upload/'.$logo_save);
}else{
    $logo_save = $logo_old;
}
$sql = "UPDATE tentang SET nama_web = '$nama_web', maps_url = '$maps_url', logo = '$logo_save'";
$query = mysqli_query($koneksi,$sql);
if($query){
    echo '<script>alert("Data Berhasil Diubah");window.location.href="index.php"</script>';
}else{
    echo 'Gagal';
}


?>