<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Comerce</title>
    <link rel="stylesheet" href="estiloRegistro.css">
    <link rel="icon" href="img/icon.png" type="image/x-icon"> 
</head>
<body>
    
  
    
    <div id="color1">
      
      <div class="icon">
        <div>
         
        </div>
    </div>
       
      
        <div id="color2">
         
      <h1>Iniciar Sesion</h1>
          <div class="register">
           
            <form method="post">
              <input type="text" placeholder="Nombre" name="name">
              <input type="password" placeholder="Contraseña" name="password">
              <div class="link">
                
        <a href="forgetPassword.html" class="password">Olvidaste la contraseña?</a> 
        <a href="nuevoUsuario.php" class="inicio">No tienes cuenta, Registrate</a>
              </div>
              <input type="submit"  value="Ingresa" name="ingresar" class="ingresar"/>

            </form>


            
            <?php
            include("registrar.php");
            ?>

          </div>



        </div>
    </div>

      
    
  
</body>
</html>