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
              <a class="btn btn-info" href="<?php echo base_url();?>/IntranetA/viwagregar" role="button">Enviar +</a>
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
                  <th>Fecha</th>
                  <th>Acción  </th>
                </tr>
                </thead>
                <tbody>
                
                   <?php  foreach($archivo as $linea):?>
                  <tr>
                     <td ><?php echo $linea->identificador ?></td>
                    <td ><?php echo $linea->created_at ?></td>
                    <td id="botones_tabla"> <button type="button" class="btn btn btn-success  active" role="button" aria-pressed="true"  data-toggle="modal" onclick="verGrupSubi('<?php echo $linea->identificador ?>')"> ver</button>
                        <button type="button" class="btn btn btn-danger  active" role="button" aria-pressed="true" onclick="eliminarGroup('<?php echo $linea->identificador ?>')" >Eliminar</button>
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

 <div class="modal fade bd-example-modal-lg" id="verArchivos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Archivos Enviados</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table" id="tablaGroup">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Descripción</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
    
  </tbody>
</table>
      </div>
      
    </div>
  </div>
</div>