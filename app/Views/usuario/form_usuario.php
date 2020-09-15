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
                <h3 class="card-title">Registro Usuario <small></small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               <form class="form-horizontal" action="<?php echo base_url();?>/Usuario/add" method="post">
               	<input type="hidden" name="idusuario" value="<?php echo $idusuario?>">
                <div class="card-body">
                  <?php if(!empty($_SESSION['alert'])){
                   echo($_SESSION['alert']);

                  }?>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Perfil</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="perfil" required>
                      	<option value=""></option> 
                      	<?php foreach ($perfil as $row):?>
                      		<?php if (strval($row->idperfil)==strval($idperfil)): ?>

                          <option value="<?php echo $row->idperfil?>" selected ><?php echo $row->descripcion?></option>
                          	<?php else:?>
                          		  <option value="<?php echo $row->idperfil?>"  ><?php echo $row->descripcion?></option>
                          	<?php endif?>
                         <?php endforeach ?> 
                        </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $nombre  ?>" name="nombre" id="nombre" placeholder="Nombre" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Apellido</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $apellido  ?>" name="apellido" id="apellido" placeholder="Apellido" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">DNI</label>
                    <div class="col-sm-10">
                      <input type="text" onkeypress="return Numeros(event);" class="form-control" value="<?php echo $dni  ?>" name="dni" id="dni" placeholder="dni" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Teléfono</label>
                    <div class="col-sm-10">
                      <input type="text" onkeypress="return Numeros(event);" class="form-control" value="<?php echo $telefono  ?>" name="tel" id="tel" placeholder="Teléfono" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" value="<?php echo $email  ?>" name="email" id="email" placeholder="Email" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">user</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $user  ?>" name="user" id="user" placeholder="User" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" value="<?php echo $pass  ?>" name="pass" id="pass" placeholder="Password" required>
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Registrar</button>
                  <button onclick="CancelarUsuario();" class="btn btn-default float-right">Cancelar</button>
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
<script src="<?php echo base_url(); ?>/public/myjs/usuario.js"></script>