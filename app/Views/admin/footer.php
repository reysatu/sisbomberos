 
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Panel</b> de Control
    </div>
    <strong>Bomberos del Perú -<a href="http://adminlte.io">Tarapoto</a></strong>
  </footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="<?php echo base_url();?>/public/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>/public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url();?>/public/admin/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>/public/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>/public/admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>/public/admin/dist/js/demo.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url();?>/public/admin/plugins/select2/js/select2.full.min.js"></script>
  <script src="<?php echo base_url();?>/public/dropzone/dist/dropzone.js"></script>
<script src="<?php echo base_url(); ?>/public/myjs/intranetAD.js"></script>

<script src="<?php echo base_url();?>/public/alerta/notify.js"></script>
<script src="<?php echo base_url();?>/public/alerta/alerta.js"></script>
<script>
  var table= $('#example1').DataTable({

    
       
        "language":{
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrando &nbsp _MENU_ &nbsp registros por página",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar&nbsp",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
}

  });
  $(function () {
     //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
  
</script>
<script >alertify.alert().setting('modal', false);</script>
</body>
</html>
