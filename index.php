<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Comerce</title>
    <link rel="stylesheet" href="estilos.css">
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
              <input type="submit"  value="Ingresa" name="ingresar" class="ingresar"/>

              <a href="forgetPassword.html" class="passwor">Olvidaste la contraseña?</a>
              <a href="nuevoUsuario.php" class="registro">No tienes cuenta, Registrate ahora</a>
             
            </form>


            
            <?php
            include("registrar.php");
            ?>

          </div>



        </div>
    </div>

      
    
  
</body>
</html>