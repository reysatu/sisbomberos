<!-- Content Wrapper. Contains page content -->
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
              <a class="btn btn-info" href="<?php echo base_url();?>/Usuario/viwagregar" role="button">Agregar +</a>
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
                  <th>nombre</th>
                  <th>apellido</th>
                  <th>DNI</th>
                  <th>email</th>
                  <th>Acción  </th>
                </tr>
                </thead>
                <tbody>
                <?php  foreach($usuario as $linea):?>
                  <tr>
                    <td ><?php echo $linea->idusuario ?></td>
                    <td><?php echo $linea->descripcion; ?></td>
                    <td ><?php echo $linea->nombre ?></td>
                    <td><?php echo $linea->apellido; ?></td>
                    <td ><?php echo $linea->dni ?></td>
                    <td><?php echo $linea->email; ?></td>
                    <td id="botones_tabla"><a href="<?php echo base_url();?>/Usuario/viwagregar?id=<?php echo $linea->idusuario?>" class="btn btn btn-primary btn-sm active" role="button" aria-pressed="true"> editar</a>
                        <button type="button" class="btn btn btn-danger btn-sm active" role="button" aria-pressed="true" onclick="eliminar('<?php echo $linea->idusuario ?>')" >Eliminar</button>
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
  <script src="<?php echo base_url(); ?>/public/myjs/usuario.js"></script>