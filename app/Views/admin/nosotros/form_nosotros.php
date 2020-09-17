   <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Registro Slider <small></small></h3>
              </div>
              <!-- /.card-header -->
 <?php  foreach($nosotros as $linea):?>
               	<input type="hidden" name="id" id="id" value="<?php echo $linea->Id ?>">
                <div class="card-body">
                  <div class="form-group row" id="tabla_texta">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Historia</label>
                    <div class="col-sm-10">
                      <textarea type="text" class="form-control" id="Historia"><?php echo $linea->Historia ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row" id="tabla_texta">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Misión</label>
                    <div class="col-sm-10">
                      <textarea type="text" class="form-control" id="Mision"><?php echo $linea->Mision ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row" id="tabla_texta">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Visión</label>
                    <div class="col-sm-10">
                      <textarea type="text" class="form-control" id="Vision"><?php echo $linea->Vision ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row" id="tabla_texta">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Valores</label>
                    <div class="col-sm-10">
                      <textarea type="text" class="form-control" id="Valores"><?php echo $linea->Valores ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Imagen</label>
                            <label id="subir_d_plan_trabajo"><i class="icon-file_upload"></i> Subir Imagen
                                <input id="upload_d" name="upload_d" type="file"  accept=".pdf,image/*">
                            </label>
                            <div id="preview">
                               <img id="imgSalida" src="<?php echo base_url();?>/public/nosotros/img/<?php echo $linea->Nombre_Foto;?>" />
                            </div>  
                    
                  </div>
                  
                </div>
<?php endforeach; ?> 
                <!-- /.card-body -->
                <div class="card-footer">
                  <button  class="btn btn-info" onclick="guardar_nosotros();">Registrar</button>
                  <a href="<?php echo base_url();?>/NosotrosA" class="btn btn-default float-right">Cancelar</a>
                </div>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>