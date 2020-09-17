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
          <?php if(!empty($_SESSION['alert'])){
            echo($_SESSION['alert']);

          }?>
            <!-- /.card-header --> 
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Historia</th>
                  <th>Misión</th>
                  <th>Visión</th>
                  <th>Valores</th>
                  <th>Foto</th>
                  <th class="centrar_tabla">Opciones</th>
                </tr>
                </thead>
                <tbody>
                <?php  foreach($nosotros as $linea):?>
                  <tr>
                    <td ><?php echo $linea->Id ?></td>
                    <td ><?php echo $linea->Historia?></td>
                    <td><?php echo $linea->Mision; ?></td>
                    <td><?php echo $linea->Vision; ?></td>
                    <td><?php echo $linea->Valores; ?></td>
                    <td id="img_tabla"><img src="<?php echo base_url();?>/public/nosotros/img/<?php echo $linea->Nombre_Foto;?>"></td>
                    <td>
                      <a href="<?php echo base_url();?>/NosotrosA/viwagregar?id=<?php echo $linea->Id?>" class="btn btn btn-primary btn-sm active" role="button" aria-pressed="true"> Editar</a>
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