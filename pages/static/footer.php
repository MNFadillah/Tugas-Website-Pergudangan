 <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.12
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo asset_url();?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo asset_url();?>bootstrap/js/bootstrap.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo asset_url();?>plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo asset_url();?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo asset_url();?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo asset_url();?>plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo asset_url();?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo asset_url();?>plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo asset_url();?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo asset_url();?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo asset_url();?>plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo asset_url();?>dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo asset_url();?>dist/js/demo.js"></script>
<?php
  if($page == 'dashboard'){?>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo asset_url();?>dist/js/pages/dashboard.js"></script>
  <?php }else if($page != 'dashboard'){?>
    <!-- DataTables -->
    <script src="<?php echo asset_url(); ?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo asset_url(); ?>plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
    $(".open-DialogBarang").click(function () {
      var id = $(this).closest('tr').children('td.id').text();
      var nama = $(this).closest('tr').children('td.nama').text();
      var deskripsi = $(this).closest('tr').children('td.deskripsi').text();
      var stok = $(this).closest('tr').children('td.stok').text();
      var created_at = $(this).closest('tr').children('td.created_at').text();
      console.log(id);
      $("input#text-id").val( id );
      $("input#nama").val( nama );
      $("input#deskripsi").val( deskripsi );
      $("input#stok").val( stok );
    });
    $(".open-DialogBarangIn").click(function () {
      var id = $(this).closest('tr').children('td.id').text();
      var id_barang = $(this).closest('tr').children('td.id_barang').text();
      var id_user = $(this).closest('tr').children('td.id_user').text();
      var jumlah = $(this).closest('tr').children('td.jumlah').text();
      var vendor = $(this).closest('tr').children('td.vendor').text();
      // console.log(vendor);
      // console.log(id);
      $("input#id").val( id );
      $("input#id_barang").val( id_barang );
      $("input#id_user").val( id_user );
      $("input#jumlah").val( jumlah );
      $("input#vendor").val( vendor );
    });

    $(".open-DialogBarangOut").click(function () {
      var id = $(this).closest('tr').children('td.id').text();
      var id_barang = $(this).closest('tr').children('td.id_barang').text();
      var id_user = $(this).closest('tr').children('td.id_user').text();
      var jumlah = $(this).closest('tr').children('td.jumlah').text();
      var departemen = $(this).closest('tr').children('td.departemen').text();
      // console.log(vendor);
      // console.log(id);
      $("input#id").val( id );
      $("input#id_barang").val( id_barang );
      $("input#id_user").val( id_user );
      $("input#jumlah").val( jumlah );
      $("input#departemen").val( departemen );
    });

</script>
  <?php }
?>
</body>
</html>