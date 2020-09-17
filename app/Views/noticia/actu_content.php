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
              <a class="btn btn-info" href="<?php echo base_url();?>/AdminNoticia/viwagregar" role="button">Agregar +</a>
            </div>
            <!-- /.card-header -->
             <?php if(!empty($_SESSION['alert'])){
                   echo($_SESSION['alert']);

                  }?>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Titulo</th>
                  <th>Imagen</th>
                  <th>Fecha</th>
                  <th>Acción</th>

                </tr>
                </thead>
                <tbody>
                <?php  foreach($noticia as $linea):?>
                  <tr>
                    <td><?php echo $linea->Id ?></td>
                    <td><?php echo $linea->Titulo ?></td>
                    <td id="img_tabla"><img src="<?php echo base_url();?>/public/img/noticia/<?php echo $linea->Nombre_Foto;?>"></td>
                    <td><?php echo $linea->Fecha ?></td>
                    <td id="botones_tabla"><a href="<?php echo base_url();?>/AdminNoticia/viwagregar?Id=<?php echo $linea->Id?>" class="btn btn btn-primary btn-sm active" role="button" aria-pressed="true"> editar</a>
                        <button type="button" class="btn btn btn-danger btn-sm active" role="button" aria-pressed="true" onclick="eliminarNoticia('<?php echo $linea->Id ?>','<?php echo $linea->Nombre_Foto ?>')" >Eliminar</button>
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
   <script src="<?php echo base_url(); ?>/public/myjs/noticias.js"></script>