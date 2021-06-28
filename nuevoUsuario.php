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
        <input type="text" placeholder="Correo" name="email">
              <input type="password" placeholder="Contraseña" name="password">
              <input type="password" placeholder="Confirma contraseña" name="repass">
              <input type="submit"  value="Registrar" name="ingresar" class="ingresar"/>


        <a href="forgetPassword.html" class="password">Olvidaste la contraseña?</a>
        <a href="index.php" class="inicio">Ir Atras</a>
       
            </form>


            
            <?php
            include("registrar.php");
            ?>

          </div>



        </div>
    </div>

      
    
  
</body>
</html>