<?php

include("con_db.php");

   if(isset($_POST['ingresar'])) {
        if (strlen($_POST['name']) >= 1 && strlen($_POST['password']) >= 1) {
            $name = trim($_POST['name']);
            $password = trim($_POST['password']);
            $consulta = "INSERT INTO datos(nombre, email, password) VALUES ('$nombre','$email','$password')";
            $resultado = mysqli_query($conex,$consulta);
            if ($resultado) {
                ?>
                <h3 class="Ok">Te has registrado correctamente</h3>
                <?php
            } else{
                ?>
                <h3 class="error">Ha ocurrido un error</h3>
                <?php
                 } 
            } else {
                ?>
                <h3 class="error">Por favor complete los campos vacios</h3>
                <?php
        }
    }

?>