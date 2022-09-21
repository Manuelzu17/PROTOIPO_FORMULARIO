<?php


if(!empty($_POST["guardar"])){
    if (
    !empty($_POST["nombre"]) and
    !empty($_POST["email"]) and
    !empty($_POST["area"]) and
    !empty($_POST["descripcion"]) and
    !empty($_POST["rol"])){

        $id_empleado=$_POST["id"];
        $nombre=$_POST["nombre"];
        $email=$_POST["email"];
        $area=$_POST["area"];
        $descripcion=$_POST["descripcion"];
        $rol=$_POST["rol"];

        $sql=$conexion->query("
            UPDATE empleado SET nombre='$nombre', email='$email', area_id='$area', roles_id='$rol', descripcion='$descripcion' WHERE id=$id_empleado ");
       
        if ($sql == 1) {

            header("location:tabla.php");
        }
        else {
            echo '<div class="alert alert-danger">Error al modificar el Empleado</div>';
        }
    }
    else {
        echo '<div class="alert alert-warning">Alguno de los campos esta vacio</div>';
    }
}

?>