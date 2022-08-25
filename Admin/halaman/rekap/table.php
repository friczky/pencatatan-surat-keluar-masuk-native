            
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr align="center">
                        <th>No.</th>
                        <th>Nomor Agenda</th>
                        <th>Asal Surat</th>
                        <th>Perihal</th>
                    </tr>
                </thead>
                <tbody>
                   <?php 
                    foreach ($query_waktu as $data) {
                   ?>
                    <tr align="center">
                        <td><?= $no++ ?>.</td>
                        <td><?= $data['nomor_agenda']?></td>
                        <td><?= $data['asal_surat']?></td>
                        <td>
                            <?= $data['perihal']?>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
                
            </table>

            <b><h5>Menampilkan data dari bulan <?= $_GET['bulan']?> tahun <?= $_GET['tahun']?> </h5></b>