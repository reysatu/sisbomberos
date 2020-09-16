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
               	<input type="hidden" name="id" id="id" value="<?php echo $id?>">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Titulo</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $titulo ?>" name="titulo" id="titulo" placeholder="Titulo" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Descripción</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $descripcion ?>" name="descripcion" id="descripcion" placeholder="Descripción" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Imagen</label>
                            <label id="subir_d_plan_trabajo"><i class="icon-file_upload"></i> Subir Imagen
                                <input id="upload_d" name="upload_d" type="file"  accept=".pdf,image/*">
                            </label>
                            <div id="preview">
                               <img id="imgSalida" src="<?php echo base_url();?>/<?php if($img==''){echo'#';}else{echo'public/inicio/img/slider/';} ?><?php echo $img?>" />
                            </div>  
                    
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button  class="btn btn-info" onclick="guardar_slider();">Registrar</button>
                  <a href="<?php echo base_url();?>/SliderA" class="btn btn-default float-right">Cancelar</a>
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