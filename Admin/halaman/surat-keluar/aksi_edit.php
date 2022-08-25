<?php
    $judul = 'Edit Surat';
    include '../../komponen/header.php';

    // mengambil data dari form
    $id = $_GET['id'];
    $id_format_surat = $_POST['id_format_surat'];
    $nomor_agenda  = $_POST['nomor_agenda'];
    $asal_surat    = $_POST['asal_surat'];
    $nomor_surat   = $_POST['nomor_surat'];
    $date           = $_POST['tanggal'];
    $perihal       = $_POST['perihal'];
    $keterangan    = $_POST['keterangan'];
    $tanggal_diterima = $_POST['tanggal_diterima'];
    // memecah format date menjadi array
    $parts = explode('-', $date);
    $tahun = $parts[0];
    $bulan = $parts[1];
    $tanggal = $parts[2];

    $file = $_FILES['file']['name'];
    $file_old = $_POST['file_old'];
    $file_save = rand().$_FILES['file']['name'];
    $tmp = $_FILES['file']['tmp_name'];

    //Menghapus file lama
    if ($file != '') {
        unlink('../../upload/'.$file_old);
        move_uploaded_file($tmp, '../../upload/'.$file_save);
    }else{
        $file_save = $file_old;
    }
    //mengupdate data
    $sql = "UPDATE format_surat SET nomor_agenda='$nomor_agenda',tanggal='$tanggal',bulan='$bulan',tahun='$tahun',asal_surat='$asal_surat',nomor_surat='$nomor_surat',tanggal_diterima='$tanggal_diterima',perihal='$perihal',keterangan='$keterangan' WHERE id ='$id'";
    $simpan_bank=mysqli_query($koneksi,$sql);
    if ($simpan_bank) {
        $sql = "UPDATE arsip_surat SET file='$file_save' WHERE id_format_surat='$id_format_surat'";
        $simpan=mysqli_query($koneksi,$sql);
        if ($simpan) {
            echo '<script>alert("Berhasil Mengubah Surat Masuk");window.location.href="index.php";</script>';
        }
    }
    else {
         echo mysqli_error($koneksi);
        // header("Location:index.php?pesan=Gagal Mengubah Surat Masuk");
    }

?>