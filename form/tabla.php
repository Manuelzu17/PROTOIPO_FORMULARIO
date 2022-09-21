<!DOCTYPE html>
<html lang="en">

<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    </link>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body>
<script> 
    
            function eliminar(){
                var respuesta=confirm("Esta segurop en eliminar el empleado");
                return respuesta
            }

    </script>
   
    <?php include 'template/side_bar.php' ?>
    <div class="col py-3">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Lista Empleados</h5>

                    
                <?php 
                include 'models/conexion.php';
                include 'controller/eliminar.php'; ?>
                
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Email</th>
                            <th scope="col">Sexo</th>
                            <th scope="col">Area</th>
                            <th scope="col">Boletin</th>
                            <th scope="col">Roles</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                         <?php

                        include 'models/conexion.php';
                        $sql = $conexion->query
                        ("SELECT e.id, e.nombre, email, sexo, a.nombre area_nombre, b.estado, r.nombre rol_nombre FROM empleado e
                        JOIN areas a ON e.area_id = a.id
                        JOIN roles r ON e.roles_id = r.id
                        JOIN boletin b  ON e.boletin_id = b.id ");
                        while($datos = $sql->fetch_object()){ ?>

                            <tr>
                            <td><?= $datos->id ?></td>
                            <td><?= $datos->nombre ?></td>
                            <td><?= $datos->email ?></td>
                            <td><?= $datos->sexo ?></td>
                            <td><?= $datos->area_nombre ?></td>
                            <td><?= $datos->estado ?></td>
                            <td><?= $datos->rol_nombre ?></td>
                            <td>
                                <div class="row">
                                    <div class="col-md-2 col-xs-6">
                                        <a href="modificar.php?id=<?=$datos->id ?>">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                    </div>
                                    <div class="col-md-2 col-xs-6">
                                        <a onclick="return eliminar()" href="tabla.php?id=<?=$datos->id ?>">
                                            <i class="bi bi-trash-fill"></i>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>

                    </tbody>

                </table>
            </div>
            <a type="button" href="index.php" class="btn btn-primary">Crear Empleado</a>
        </div>
        
    </div>
    </div>

    <script src="js/bootstrap.min.js"></script>

    

</body>

</html>