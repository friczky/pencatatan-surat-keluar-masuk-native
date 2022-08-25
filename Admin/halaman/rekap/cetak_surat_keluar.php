<?php
include '../../../Config/koneksi.php';

$bulan = $_GET['bulan'];
$tahun = $_GET['tahun'];

$sql = "SELECT * FROM format_surat where bulan = '$bulan' and tahun = '$tahun' and jenis_surat = '1'";
$query = mysqli_query($koneksi,$sql);
$no = 1;


$sql1 = "SELECT * FROM tentang where id='1'";
$query1 = mysqli_query($koneksi,$sql1);
$data1 = mysqli_fetch_array($query1);

?>
<html>
    <head>
        <title>REKAPITULASI SURAT KELUAR</title>
		<link rel="stylesheet" href="<?= admin_assets() ?>dist/css/adminlte.min.css">
    </head>
    <body>
        <br><br>
        <table align="center" border="0" cellpadding="1" style="width: 1000px;">
            <tr>
                <td width="30" align="right"><img src="../../upload/<?= $data1['logo']?>" width="50%"></td>
                <td width="50" align="center">
                   <font size="5">
				   <b>PEMERINTAHAN KABUPATEN SLEMAN
                        <br>
                        DESA SUSUKAN KECAMATAN SEYEGAN </b>
                    <br>
				   </font>
                    RT 02 RW 03 Desa Susukan II Margokaton, Kecamatan Seyegan Kabupaten Sleman DIY ,
                    5561<br>
                </td>
                <td width="15" align="center"></td>
            </tr>
        </table>

        <hr width="850px">

        <table align="center" border="0" cellpadding="1" style="width: 1000px;">
            <tbody>
                <tr>
                    <td colspan="3">
                        <div align="center">

                            <b><font size="4">REKAPITULASI SURAT KELUAR</font></b>
                           <br>
						   <br>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>

                <tr>
                    <td colspan="3" height="270" valign="top">
                        <div align="justify">

                            <p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data dari rekapitulasi pada bulan <?= $bulan?>
                                tahun <?= $tahun?> sebagai berikut :</p>

                            <table class="table" border="1">
                                <tr align="center">
                                    <th>No.</th>
                                    <th>Nomor Agenda</th>
                                    <th>Tanggal Surat</th>
                                    <th>Asal Surat</th>
                                    <th>Nomor Surat</th>
                                    <th>Tanggal Diterima</th>
                                    <th>Perihal</th>
                                </tr>
                                <?php foreach ($query as $data) { ?>
                                <tr align="center">
                                    <td><?= $no++?></td>
                                    <td><?= $data['nomor_agenda']?></td>
                                    <td><?= $data['nomor_agenda']?></td>
                                    <td><?= $data['asal_surat']?></td>
                                    <td><?= $data['nomor_surat']?></td>
                                    <td><?= $data['tanggal_diterima']?></td>
                                    <td><?= $data['perihal']?></td>
                                </tr>
                                <?php } ?>
                            </table>

                            <div align="justify">
                                <p align="justify">

                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <br><br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian Data rekapitulasi surat keluar ini dibuat
                                    untuk digunakan sebagaimana mestinya.</p>
                            </div>
                        </div>

                        <p align="right">Yogyakarta ,
                            <?= date('d - m - Y')?>
                            <br>
                            Kepala Desa
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <?= $data1['penanggung_jawab']?></p>
                    </tbody>
                </table>


              

            </body>
        </html>
		<script>
            window.print();
		</script>
    </body>
</html>