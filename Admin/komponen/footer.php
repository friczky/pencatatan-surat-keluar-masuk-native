<footer class="main-footer">
    <strong>Copyright &copy; <?= date('Y')?> .</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Versi</b> 1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= admin_assets() ?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= admin_assets() ?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= admin_assets() ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= admin_assets() ?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= admin_assets() ?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= admin_assets() ?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= admin_assets() ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= admin_assets() ?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= admin_assets() ?>plugins/moment/moment.min.js"></script>
<script src="<?= admin_assets() ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= admin_assets() ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= admin_assets() ?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= admin_assets() ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= admin_assets() ?>dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="<?= admin_assets() ?>dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= admin_assets() ?>dist/js/pages/dashboard.js"></script>

<!-- DataTables  & Plugins -->
<script src="<?= admin_assets() ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= admin_assets() ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= admin_assets() ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= admin_assets() ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= admin_assets() ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= admin_assets() ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= admin_assets() ?>plugins/jszip/jszip.min.js"></script>
<script src="<?= admin_assets() ?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= admin_assets() ?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= admin_assets() ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= admin_assets() ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= admin_assets() ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": 
      ["excel", "pdf", "print",]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script>
  $(function () {
    $("#tabledashboard").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>

<?php

$surat_masuk = "SELECT * FROM format_surat where jenis_surat = '0'";
$surat_masuk = mysqli_query($koneksi,$surat_masuk);
$surat_masuk = mysqli_num_rows($surat_masuk);

$surat_keluar = "SELECT * FROM format_surat where jenis_surat = '1'";
$surat_keluar = mysqli_query($koneksi,$surat_keluar);
$surat_keluar = mysqli_num_rows($surat_keluar);

?>

<script>
  new Chart(document.getElementById("pie-chart"), {
    type: 'pie',
    data: {
      labels: ["Surat Masuk", "Surat Keluar"],
      datasets: [{
        label: "Population (millions)",
        backgroundColor: ["#3e95cd", "#8e5ea2"],
        data: [<?= $surat_masuk?>,<?= $surat_keluar?>]
      }]
    },
    options: {
      title: {
        display: true,
        text: 'Grafik Chart Total Surat'
      }
    }
});
</script>
</body>
</html>
