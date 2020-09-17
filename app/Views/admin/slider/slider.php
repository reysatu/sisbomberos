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
              <a class="btn btn-info" href="<?php echo base_url();?>/SliderA/viwagregar" role="button">Agregar +</a>
            </div>

          <?php if(!empty($_SESSION['alert'])){
            echo($_SESSION['alert']);

          }?>
            <!-- /.card-header --> 
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Titulo</th>
                  <th>Descripción</th>
                  <th>Imagen</th>
                  <th>Estado</th>
                  <th class="centrar_tabla">Opciones</th>
                </tr>
                </thead>
                <tbody>
                <?php  foreach($slider as $linea):?>
                  <tr>
                     <td ><?php echo $linea->Id ?></td>
                    <td ><?php echo $linea->Titulo?></td>
                    <td><?php echo $linea->Descripcion; ?></td>
                    <td id="img_tabla"><img src="<?php echo base_url();?>/public/inicio/img/slider/<?php echo $linea->Nombre_Foto;?>"></td>
                    <td> <?php  
                              if ($linea->Estado==1){ echo"Activo";}
                              else{echo"Inactivo";}
                          ?>        
                    </td>
                    <td id="botones_tabla">
                      <a href="<?php echo base_url();?>/SliderA/viwagregar?id=<?php echo $linea->Id?>" class="btn btn btn-primary btn-sm active" role="button" aria-pressed="true"> Editar
                      </a>
                      <?php if ($linea->Estado==1){ ?> 
                      <button type="button" class="btn btn btn-danger btn-sm active" role="button" aria-pressed="true" onclick="e_a_slider('eliminar',<?php echo $linea->Id ?>)" >Eliminar</button>
                      <?php } else{?>
                       <button style="background:#F1C40F;border:#F1C40F" type="button" class="btn btn btn-danger btn-sm active" role="button" aria-pressed="true" onclick="e_a_slider('activar',<?php echo $linea->Id ?>)" >Activar</button>
                      <?php } ?> 
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