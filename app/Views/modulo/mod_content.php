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
            <div class="card-header">
              <a class="btn btn-success" href="<?php echo base_url();?>/Modulo/viwagregar" role="button">Agregar +</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Modulos</th>
                  <th>Submulos</th>
                   <th>Acción</th>
                </tr>
                </thead>
                <tbody>
                <?php  foreach($modulo as $linea):?>
                  <tr>
                     <td ><?php echo $linea->idmodulo ?></td>
                    <td ><?php echo $linea->descripcion ?></td>
                    <td><?php echo $linea->submodulos; ?></td>
                    <td><a href="<?php echo base_url();?>/Modulo/viwagregar?id=<?php echo $linea->idmodulo?>" class="btn btn btn-primary btn-sm active" role="button" aria-pressed="true"> editar</a>
                        <button type="button" class="btn btn btn-danger btn-sm active" role="button" aria-pressed="true" onclick="eliminar('<?php echo $linea->idmodulo ?>')" >Eliminar</button>
                    </td>
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