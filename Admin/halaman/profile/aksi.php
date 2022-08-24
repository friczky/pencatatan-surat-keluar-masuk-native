<?php

include '../../komponen/header.php';
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password_lama = $_POST['password_lama'];
  $foto = $_FILES['foto']['name'];
  $foto_old = $_POST['foto_old'];
  $id = $_POST['id'];
  $tmp = $_FILES['foto']['tmp_name'];
  $foto_save = rand().$_FILES['foto']['name'];

  //upload foto
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

  
  $sql = "UPDATE pengguna SET nama = '$nama', email = '$email', password = '$password_baru', foto = '$foto_save' WHERE id = $_POST[id]";
  $query = mysqli_query($koneksi,$sql);
  if($query){
      echo '<script>alert("Data Berhasil Diubah");window.location.href="index.php"</script>';
  }else{
      echo 'Gagal';
  }

?>