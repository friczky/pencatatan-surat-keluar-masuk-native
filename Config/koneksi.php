<?php

$host     = 'localhost';
$username = 'root';
$password = '';
$database = 'pencatatan-surat';

$koneksi = mysqli_connect($host,$username,$password,$database);

if(!$koneksi){
    echo 'Gagal Menghubungkan ke database';
}else{

}
include 'route.php';

?>
