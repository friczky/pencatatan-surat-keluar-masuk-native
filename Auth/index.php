<?php 
include '../Config/koneksi.php';
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM pengguna WHERE email = '$email' AND password = '$password'";
    $query = mysqli_query($koneksi,$sql);
    $row = mysqli_fetch_array($query);
    if($row['email'] == $email && $row['password'] == $password){
            session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['nama'] = $row['nama'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['role'] = $row['role'];
            header("Location:".admin());  
    }else{      
        session_start();
        $_SESSION['pesan'] = '<div class="alert alert-danger">Email atau Password Salah</div>';
        header('location:'.login());
    }
}elseif(isset($_POST['daftar'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql = "INSERT INTO pengguna (nama,email,password,role) VALUES ('$nama','$email','$password','1')";
    $query = mysqli_query($koneksi,$sql);
    if($query){
        session_start();
        $_SESSION['pesan'] = '<div class="alert alert-success">Berhasil Membuat Akun</div>';
        header('location:index.php');
    }else{
        session_start();
    $_SESSION['pesan'] = '<div class="alert alert-danger">Email atau Password Salah</div>';
    header('location:index.php');
    }
}elseif(isset($_GET['logout'])){
    session_start();
    session_destroy();
    header('location:index.php');
}else{
    header('location:'.login());
}

?>