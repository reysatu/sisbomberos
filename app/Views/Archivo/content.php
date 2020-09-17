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
                 
                   <th>Correo</th>
                   <th>Perfil</th>
                   <th>Fecha</th>
                   <th>Acción</th>
                </tr>
                </thead>
                <tbody>
                  <?php  foreach($archivos as $linea):?>
                  <tr>
                    <td  ><?php echo $linea->idarchivo ?></td>
                     <td   style=" width: 10%;" ><?php echo $linea->archivo ?></td>
                      <td  ><?php echo $linea->email; ?></td>
                       <td  ><?php echo $linea->descripcion; ?></td>
                      <td ><?php echo $linea->created_at; ?></td>
                    <td id="botones_tabla" >
                      <a type="button" href="<?php echo base_url();?>/public/archivos/<?php echo $linea->archivo ?>" type="application/pdf"  target="_blank" class="btn btn btn-success" role="button">ver </a>    
                     <button type="button" class="btn btn btn-danger btn-sm active" role="button" aria-pressed="true" onclick="eliminarReci('<?php echo $linea->idarchivo; ?>', '<?php echo $linea->archivo; ?>')" >Eliminar</button>
                        
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
  <script src="<?php echo base_url(); ?>/public/myjs/recibidos.js"></script>