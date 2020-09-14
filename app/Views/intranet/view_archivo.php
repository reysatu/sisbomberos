<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Bandeja de entrada</h1>
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
              <a class="btn btn-success" href="<?php echo base_url();?>/Intranet/subir" role="button">Subir +</a>
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
               
                <?php  foreach($archivo as $linea):?>
                  <tr>
                    
                    <td ><?php echo $linea->descripcion ?></td>
                    <td><a href="<?php echo base_url();?>/public/archivos/<?php echo $linea->descripcion ?>" type="application/pdf"  target="_blank" class="btn btn-primary" role="button">ver </a>    
                      <a href="<?php echo base_url();?>/public/archivos/<?php echo $linea->descripcion ?>" type="application/pdf" download="<?php echo $linea->descripcion ?>" class="btn btn-success" role="button">Descargar </a> </td>
                    
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