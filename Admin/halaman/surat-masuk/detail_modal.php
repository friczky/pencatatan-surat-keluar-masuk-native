
<?php foreach ($query as $data) {?>
    <?php  $tanggal_fix = $data['tanggal'].' - '.$data['bulan'].' - '.$data['tahun']; ?>
<div id="my-modal<?= $data['id']?>" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <p>Detail Surat Masuk <b><?= $data['id_format_surat']?></b></p>
            </div>
            <div class="modal-body">
               <table class="table">
                <tr>
                    <td>Nomor Agenda</td>
                    <td><?= $data['nomor_agenda']?></td>
                </tr>
                <tr>
                    <td>Tanggal Surat</td>
                    <td><?= $tanggal_fix?></td>
                </tr>
                <tr>
                    <td>Asal Surat</td>
                    <td><?= $data['asal_surat']?></td>
                </tr>
                <tr>
                    <td>Nomor Surat</td>
                    <td><?= $data['nomor_surat']?></td>
                </tr>
                <tr>
                    <td>Tanggal Diterima</td>
                    <td><?= $data['tanggal_diterima']?></td>
                </tr>
                <tr>
                    <td>Perihal</td>
                    <td><?= $data['perihal']?></td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td><?= $data['keterangan']?></td>
                </tr>
                <tr>
                    <td>Arsip</td>
                    <td><a href="../../upload/<?= $data['file']?>" target="_blank" class="btn btn-primary">Buka</a></td>
                </tr>
               </table>
            </div>
        </div>
    </div>
</div>
<?php } ?>
