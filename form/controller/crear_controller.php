<?php


    if(!empty($_POST["guardar"])){
        if (
        !empty($_POST["nombre"]) and
        !empty($_POST["email"]) and
        !empty($_POST["radio1"]) and
        !empty($_POST["area"]) and
        !empty($_POST["descripcion"]) and
        !empty($_POST["rol"])){

            if (empty($_POST["boletin"])){
                
                $boletin=0;
                     

            }else {
                $boletin=$_POST["boletin"];
            }
           
            $nombre=$_POST["nombre"];
            $email=$_POST["email"];
            $radio=$_POST["radio1"];
            $area=$_POST["area"];
            $descripcion=$_POST["descripcion"];
            $rol=$_POST["rol"];
            

            $sql=$conexion->query("
            INSERT INTO empleado (nombre, email, sexo, area_id, boletin_id, roles_id, descripcion)
            values('$nombre', '$email', '$radio', '$area', '$boletin', '$rol', '$descripcion') ");
            if ($sql == 1) {
                echo '<div class="alert alert-success">Empleado registrado exitosamente </div>';
            }
            else {
                echo '<div class="alert alert-danger">Error al registrar el Empleado</div>';
            }

        }
        else{

            echo '<div class="alert alert-warning">Alguno de los campos esta vacio</div>';
        }

        
    }

?>