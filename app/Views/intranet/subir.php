<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Enviados</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <form action="<?php echo base_url();?>/Intranet/add" class="dropzone" id="dropzonewidget">
              </div>
              <div class="card-body">
                

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 
                  <th>Perfil</th>
                  <th>Acción </th>
                </tr>
                </thead>
                <tbody>
                 <?php  foreach($archivoEnviado as $linea):?>
                  <tr>
                    
                    <td ><?php echo $linea->descripcion ?></td>
                    <td><button type="button" class="btn btn btn-danger btn-sm active" role="button" aria-pressed="true" onclick="eliminar('<?php echo $linea->descripcion ?>')" >Eliminar</button> </td>
                    
                <?php endforeach; ?>           
                </tbody>
                <tfoot>
               
                </tfoot>
              </table>
              </div>
            </div>

           
          </div>
          <!-- /.col-md-6 -->
         
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
</div>
</div>

