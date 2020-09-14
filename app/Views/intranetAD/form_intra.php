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
                <h3 class="card-title">Envio de Archivos <small></small></h3>
              </div>
              <div class="card-body">
                  <form action="<?php echo base_url();?>/IntranetA/add" class="dropzone" id="dropzonewidget">
               </div>
              <!-- form start -->
               <form class="form-horizontal" >
                <input type="hidden" name="idmodulo" value="">
                <input type="hidden" id="tken" name="tken"  value="<?php echo ($indicador)?>">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Trabajadores</label>
                    <div class="col-sm-10 select2-primary">
                      <select class="select2 trabajador" multiple="multiple" data-placeholder="trabajadores" id="trabajador[]" name="trabajador[]" style="width: 100%;"  >
                        <option value=""></option> 
                        <?php foreach ($trabajadores as $row):?>
                          
                          <option value="<?php echo $row->idusuario?>" ><?php echo ($row->nombre." ".$row->apellido)?> </option>
                          
                         
                         <?php endforeach ?> 
                          
                      </select>
                    </div>
                  </div> 
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- checkbox -->
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="checkArchivo" name="checkArchivo" value="1">
                          <label class="form-check-label">Intranet</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="checkConvo" name="checkConvo" value="1">
                          <label class="form-check-label">Convocatoria</label>
                        </div>
                      </div>
                    </div> 
                   
                  </div>  
                  
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button onclick="EnviarArchivosAd();" class="btn btn-info">Registrar</button>
                  <button onclick="Cancelar();" class="btn btn-default float-right">Cancelar</button>
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