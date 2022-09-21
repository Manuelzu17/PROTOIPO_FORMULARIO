<?php 

if(!empty($_GET["id"])){
        $id=$_GET["id"];
        $sql=$conexion->query(" DELETE FROM empleado WHERE id=$id" );
        if ($sql == 1) {
            echo '<div class="alert alert-success">Empleado se elimino exitosamente </div>';
        }else {
            echo '<div class="alert alert-danger">Error al eliminar el Empleado</div>';
        }     

}
?>