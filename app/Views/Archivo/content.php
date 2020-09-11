  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
     <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
           
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Archivos</th>
                    <th>Tipo</th>
                   <th>Fecha</th>
                   <th>Acción</th>
                </tr>
                </thead>
                <tbody>
                  <?php  foreach($archivos as $linea):?>
                  <tr>
                    <td  ><?php echo $linea->idarchivo ?></td>
                    <td  style=" width: 20%;"  ><?php echo $linea->descripcion; ?></td>

                    <td ><?php echo $linea->accion; ?></td>
                      <td ><?php echo $linea->created_at; ?></td>
                    <td  >
                      <a href="" type="application/pdf"  target="_blank" class="btn btn-primary" role="button">ver </a>    
                      <a href="" type="application/pdf" download="<?php echo $linea->descripcion ?>" class="btn btn-success" role="button">f </a>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="checkArchivo" name="checkArchivo" value="1">
                        </div>
                    </td>
                    </tr>
              <?php endforeach; ?>           
                </tbody>
                <tfoot>
               
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <script src="<?php echo base_url(); ?>/public/myjs/modulo.js"></script>