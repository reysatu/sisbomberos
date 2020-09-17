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
              <a class="btn btn-info" href="<?php echo base_url();?>/perfil/viwagregar" role="button">Agregar +</a>
            </div>
              
          <?php if(!empty($_SESSION['alert'])){
            echo($_SESSION['alert']);

          }?>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Perfil</th>
                  <th>Módulos</th>
                  <th>Acción  </th>
                </tr>
                </thead>
                <tbody>
                <?php  foreach($perfil as $linea):?>
                  <tr>
                    <td ><?php echo $linea->idperfil ?></td>
                    <td><?php echo $linea->descripcion; ?></td>
                     <td ><?php echo $linea->modulos ?></td>
                    <td id="botones_tabla"><a href="<?php echo base_url();?>/Perfil/viwagregar?id=<?php echo $linea->idperfil?>" class="btn btn btn-primary btn-sm active" role="button" aria-pressed="true"> editar</a>
                        <button type="button" class="btn btn btn-danger btn-sm active" role="button" aria-pressed="true" onclick="eliminar('<?php echo $linea->idperfil ?>')" >Eliminar</button>
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
  <script src="<?php echo base_url(); ?>/public/myjs/perfil.js"></script>