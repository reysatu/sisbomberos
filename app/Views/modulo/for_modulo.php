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
                <h3 class="card-title">Registro Perfil <small></small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               <form class="form-horizontal" action="<?php echo base_url();?>/Modulo/add" method="post">
                <input type="hidden" name="idmodulo" value="<?php echo $idmodulo?>">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Modulo</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $modulo?>" name="modulo" id="modulo" placeholder="modulo" onkeypress="return Letras(event);" required>
                    </div>

                  </div> 
                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Submodulos</label>
                    <div class="col-sm-10 select2-primary">
                      <select class="select2 " multiple="multiple" data-placeholder="submodulos" name="submodulos[]" style="width: 100%;" required>
                        <option></option>
                          <?php $c=false ?>
                          <?php foreach ($Submodulos as $linea):?>
                          <?php foreach ($SubmodulosSelec as $row):?>
                            <?php $c=false ?>
                            <?php if ($linea->padre==$row->idmodulo): ?> 
                            <option value="<?php echo $linea->idmodulo?>" selected> <?php echo $linea->descripcion?></option>
                           <?php $c=True ?> 
                           <?php break ?> 
                            <?php endif ?> 
                          <?php endforeach ?> 
                          <?php if($c==false): ?>
                             <?php if($linea->padre==0): ?>
                            <option value="<?php echo $linea->idmodulo?>" > <?php echo $linea->descripcion?></option>
                              <?php endif ?> 
                          <?php endif ?> 
                          <?php endforeach ?> 
                          
                      </select>
                    </div>
                  </div>   

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Registrar</button>
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