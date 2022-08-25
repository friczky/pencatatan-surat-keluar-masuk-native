<?php
include '../../komponen/header.php';

if(isset($_POST['tambah'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $role = $_POST['role'];
    $foto = $_FILES['foto']['name'];
    $foto_save = rand().$_FILES['foto']['name'];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
    // mengatur ekstensi file yang diijinkan
    $ekstensi_diperbolehkan	= array('png','jpg','jpeg');
    $x = explode('.', $foto);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['foto']['tmp_name'];
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true){

            //Mengupload foto
            move_uploaded_file($file_tmp, '../../upload/'.$foto_save);
            $sql = "INSERT INTO pengguna (nama,email,password,role,foto) VALUES ('$nama','$email','$password','$role','$foto_save')";
            $simpan=mysqli_query($koneksi,$sql);
            if ($simpan) {
                header("Location:index.php?pesan=Berhasil Menambahkan Pengguna");
            }
            else {
                header("Location:index.php?pesan=Gagal Menambahkan Pengguna");
            }
        }
        else{
            header("Location:index.php?pesan=Ekstensi File Tidak Diijinkan");
        }
    }      
          
}elseif(isset($_POST['update'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $foto = $_FILES['foto']['name'];
    $id = $_POST['id'];
    $foto_old = $_POST['foto_old'];
    $foto_save = rand().$_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];

    //Menghapus foto lama
    if ($foto != '') {
        unlink('../../upload/'.$foto_old);
        move_uploaded_file($tmp, '../../upload/'.$foto_save);
    }else{
        $foto_save = $foto_old;
    }

    //validasi passsword
    if ($password == $password_lama){
        $password_baru = $password_lama;
    }else{
        $password_baru = md5($password);
    }

    //mengupdate data
    $sql = "UPDATE pengguna SET nama = '$nama', email = '$email', password = '$password',  foto = '$foto_save' WHERE id = $_POST[id]";
    $simpan_bank=mysqli_query($koneksi,$sql);
    if ($simpan_bank) {
        header("Location:index.php?pesan=Berhasil Mengubah Pengguna");
    }
    else {
        // echo mysqli_error($koneksi);
        header("Location:index.php?pesan=Gagal   Mengubah Pengguna");
    }
      
}elseif(isset($_GET['hapus'])){
    $id = $_GET['id'];
    $sql = "SELECT foto FROM pengguna WHERE id = '$id'";
    $query = mysqli_query($koneksi,$sql);
    $data = mysqli_fetch_assoc($query);
    $sql = "DELETE FROM pengguna WHERE id = '$id'";
    $query = mysqli_query($koneksi,$sql);
    if($query){
        if (file_exists('../../upload/'.$data['foto'])) {
            unlink('../../upload/'.$data['foto']);
        }
        header('location:index.php?pesan=Berhasil menghapus pengguna');
    }else{
    header('location:index.php?pesan=Gagal menghapus pengguna');
    }
}

?>