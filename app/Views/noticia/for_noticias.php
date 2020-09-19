<link rel="stylesheet" href="<?php echo base_url();?>/public/mycss/noticias.css">
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
                <h3 class="card-title">Registro Noticias <small></small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               <form class="form-horizontal"  action="<?php echo base_url();?>/AdminNoticia/add" method="post" enctype="multipart/form-data">
                <input type="hidden" name="idnoticia" value="<?php echo $Id?>">
                <div class="card-body">

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Titulo</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $Titulo?>" name="titulo" id="titulo" placeholder="Titulo" required>
                    </div>
                  </div> 
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Párrafo</label>
                    <div class="col-sm-10">
                      <textarea  class="form-control" rows="6" name="parrafo" placeholder="Enter ..." required><?php echo $Descripcion?></textarea>
                    </div>
                  </div> 
                   
                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Imagen</label>
                    <label class="subir_d_plan_trabajo"><i class="icon-file_upload"></i> Subir Imagen
                        <input class="upload_d" id="imagen" name="imagen" type="file"  accept="image/*"  <?php echo $tipe?>>
                    </label>
                          <div class="preview">
                               <img id="imgSalidaNoticia" src="<?php echo base_url();?>/public/img/noticia/<?php echo $Nombre_Foto?>" />
                            </div>  
                    
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Fecha</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" value="<?php echo $Fecha?>" name="fecha" id="fecha" required>
                    </div>
                  </div> 
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="Principal" name="Principal" value="1" <?php echo $check?>>
                        <label class="form-check-label" for="exampleCheck2" >Principal </label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Registrar</button>
                  <button type="button" onclick="CancelarNoticias();" class="btn btn-default float-right">Cancelar</button>
                </div>
                <!-- /.card-footer -->
              </form>
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
  <script src="<?php echo base_url(); ?>/public/myjs/noticias.js"></script>