<?php

$judul ='Tambah Surat';
include '../../komponen/header.php';

if (isset($_POST['tambah'])) {

        $id_format_surat  = 'ID'.date('YmdHis').rand(1,100);
        $nomor_agenda  = $_POST['nomor_agenda'];
        $asal_surat    = $_POST['asal_surat'];
        $nomor_surat   = $_POST['nomor_surat'];
        $date       = $_POST['tanggal'];
        $perihal       = $_POST['perihal'];
        $keterangan    = $_POST['keterangan'];
        $jenis_surat = 0 ;
        $tanggal_diterima = $_POST['tanggal_diterima'];
        // memecah format date menjadi array
        $parts = explode('-', $date);
        $tahun = $parts[0];
        $bulan = $parts[1];
        $tanggal = $parts[2];
        
        // identifikasi file
        $file = $_FILES['file']['name'];
        $file_save = rand().$_FILES['file']['name'];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
        // mengatur ekstensi file yang diijinkan
        $ekstensi_diperbolehkan	= array('png','jpg','jpeg','pdf','docx');
        $x = explode('.', $file);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['file']['tmp_name'];
            if (in_array($ekstensi, $ekstensi_diperbolehkan) === true){
    
                //Mengupload foto
                move_uploaded_file($file_tmp, '../../upload/'.$file_save);
                // menyimpan ke database
                $sql = "INSERT INTO format_surat (id_format_surat , nomor_agenda, tanggal,bulan,tahun,asal_surat,nomor_surat,tanggal_diterima,perihal,keterangan,jenis_surat,created_at) VALUES ('$id_format_surat','$nomor_agenda','$tanggal','$bulan','$tahun','$asal_surat','$nomor_surat','$tanggal_diterima','$perihal','$keterangan','$jenis_surat',NOW())";
                $simpan=mysqli_query($koneksi,$sql);
                if ($simpan) {
                    $sql = "INSERT INTO arsip_surat (id_format_surat,jenis_file,file) VALUES ('$id_format_surat',0,'$file_save')";
                    $simpan=mysqli_query($koneksi,$sql);
                    if ($simpan) {
                        echo '<script>alert("Berhasil menambahkan data");window.location.href="index.php";</script>';
                    }
                }
                else {
                    echo '<script>alert("Gagal menambahkan data");window.location.href="index.php";</script>';
                }
            }
            else{
                header("Location:index.php?pesan=Ekstensi File Tidak Diijinkan");
            }
        }      
}


?>