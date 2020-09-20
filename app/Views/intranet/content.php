<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Datos del Usuario</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <table  class="table table-bordered table-striped">
                <thead>
                
                </thead>
                <tbody>
               
                  <tr>
                    <td >Perfil</td>
                    <td><?php echo $_SESSION['perfilint']?></td>
                  </tr>
                   <tr>
                    <td>Nombre</td>
                    <td><?php echo $_SESSION['nombreint']?></td>
                  </tr>
                   <tr>
                    <td >Apellidos</td>
                    <td><?php echo $_SESSION['apellidoint']?></td>
                  </tr>
                   <tr>
                    <td>DNI</td>
                    <td><?php echo $_SESSION['dniint']?></td>
                  </tr>
                  <tr>
                    <td >Teléfono</td>
                    <td><?php echo $_SESSION['telefonoint']?></td>
                  </tr>
                   <tr>
                    <td >email</td>
                    <td><?php echo $_SESSION['emailint']?></td>
                  </tr>

                          
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
    <!-- /.content -->
  </div