<?php
include 'models/conexion.php';

$id=$_GET["id"];
$sql = $conexion->query("SELECT * FROM empleado WHERE id=$id");

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    </link>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body>

    <?php include 'template/side_bar.php' ?>

    <script> 
    
            function modificar(){
                var respuesta=confirm("Esta seguro en Modificar el empleado");
                return respuesta
            }

    </script>

    <div class="col py-3">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Modificar Empleado</h5>
            </div>
            <?php include 'controller/modificar_controller.php'; ?>
            <div class="card-body">
                <div class="alert alert-primary" role="alert">
                    Los campos con asteriscos (*) son obligatorios
                </div>
                
               
                <div class="container">
                   

                    <div class="row">
                        <div class="col">
                            <form method="POST">
                            <input type="hidden" name="id" value="<?= $_GET["id"] ?>">

                                <?php 
                        
                        while($datos = $sql->fetch_object()){

                        ?>
                                <div class="mb-3">
                                    <label class="form-label">Nombre Completo *</label>
                                    <input type="user" name="nombre" class="form-control" value="<?= $datos->nombre ?>"
                                        placeholder="Nombre Completo">
                                </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Correo Electronico *</label>
                                <input type="email" name="email" class="form-control" value="<?= $datos->email ?>"
                                    placeholder="Correo Electronico">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Area *</label>
                            <select name="area" id="Area" class="form-control">
                                <option value="1">Administrativa y Financiera</option>
                                <option value="2">Ingeniería</option>
                                <option value="5">Desarrollo de Negocio</option>
                                <option value="6">Proyectos</option>
                                <option value="7">Servicios</option>
                                <option value="8">Calidad</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Descripcion *</label>
                            <textarea class="form-control" value="<?= $datos->descripcion ?>" name="descripcion" rows="3"
                                ></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Roles *</label>
                            <select id="Roles" name="rol" class="form-control">
                                <option value="1">Desarrollador</option>
                                <option value="2">Analista</option>
                                <option value="3">Tester</option>
                                <option value="4">Diseñador</option>
                                <option value="5">Profesional PMO</option>
                                <option value="6">Profesional de servicios</option>
                                <option value="7">Auxiliar administrativo</option>
                                <option value="8">Codirector</option>
                            </select>


                        </div>
                       

                        <?php }     ?>

                        <button  onclick="return modificar()" type="submit"  name="guardar" value="ok" class="btn btn-success">Modificar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <script src="js/bootstrap.min.js"></script>

</body>

</html>