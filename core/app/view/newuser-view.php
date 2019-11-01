<?php 
$usuarios = UserData::getAll();
?>

<div class="row">
	<div class="col-md-12">
	<CENTER><h1>INGRESO DE USUARIOS</h1></CENTER>
    <img src="image/Palki.png" width="350" height="50">
	<br>
    <br>
      <br>


 <form class="form-horizontal" method="post" id="adduser" action="index.php?view=adduser" role="form">


    <div class="form-group">
        <label for="inputEmail1" class="col-lg-2 control-label">Primer Nombre*</label>
        <div class="col-md-6">
          <input type="text" name="nombre1" required class="form-control" id="nombre1" placeholder="Primer Nombre Usuario">
        </div>
      </div>

 
        
    <div class="form-group">
        <label for="inputEmail1" class="col-lg-2 control-label">Segundo Nombre*</label>
        <div class="col-md-6">
          <input type="text" name="nombre2" required class="form-control" id="nombre2" placeholder="Segundo Nombre Usuario">
        </div>
      </div>

       
    <div class="form-group">
        <label for="inputEmail1" class="col-lg-2 control-label">Primer Apellido*</label>
        <div class="col-md-6">
          <input type="text" name="apellido1" required class="form-control" id="apellido1" placeholder="Primer Apellido Usuario">
        </div>
      </div>

      
          
    <div class="form-group">
        <label for="inputEmail1" class="col-lg-2 control-label">Segundo Apellido*</label>
        <div class="col-md-6">
          <input type="text" name="apellido2" required class="form-control" id="apellido2" placeholder="Segundo Apellido Usuario">
        </div>
      </div>

 
    <div class="form-group">
        <label for="inputEmail1" class="col-lg-2 control-label"> Nombre Usuario*</label>
        <div class="col-md-6">
          <input type="text" name="username" required class="form-control" id="username" placeholder="Usuario">
        </div>
      </div>

      
    <div class="form-group">
        <label for="inputEmail1" class="col-lg-2 control-label"> E-mail*</label>
        <div class="col-md-6">
          <input type="text" name="email" required class="form-control" id="email" placeholder="E-mail">
        </div>
      </div>


     
        <div class="form-group">
        <label for="inputEmail1" class="col-lg-2 control-label">Contraseña*</label>
        <div class="col-md-6">
          <input type="password" name="contrasena" required class="form-control" id="contrasena" placeholder="Password">
        </div>
      </div>

  
        <div class="form-group">
            <label for="inputEmail1" class="col-lg-2 control-label">Tipo de Usuario*</label>
            <div class="col-md-6">
              <div required class="radio">  
                  <input type="radio" name="opcion" value="1" > Administrador
                  <br>
                  <input type="radio" name="opcion"  value="2" > OperadorDigital
                  <br>
                  <input type="radio" name="opcion"  value="3" > AnalistaCompra
                  <br>
                  <input type="radio" name="opcion" value="4" > DespachadorExportacion   
              </div>         
            </div>
      </div>



      <div class="form-group">
        <label for="inputEmail1" class="col-lg-2 control-label">Fecha de Creacion*</label>
          <div class="col-md-6">
              <input type="date" name="sd"  required value="<?php if(isset($_GET["sd"])){ echo $_GET["sd"]; }?>" class="form-control">
            </div>
      </div>

        
        <br> 
        <input type='hidden' name='insertar' value='insertar'>
    
    </div>
  </div>
      
   

<!-- boton y alerta-->

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Guardar Usuario</button>   
    </div>
     </div>
 </div>



    <div>   
        <p class="alert alert-info">* Campos obligatorios</p>        
    </div>     

  </div>
</form>
	</div>
</div>