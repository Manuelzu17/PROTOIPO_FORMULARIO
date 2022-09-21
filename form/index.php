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
    
            function crear(){
                var respuesta=confirm("Esta seguro en crear el empleado");
                return respuesta
            }

    </script>

    <div class="col py-3">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Crear Empleado</h5>

                <?php include 'models/conexion.php';?>
                <?php include 'controller/crear_controller.php';?>

            </div>

            <div class="card-body">
                <div class="alert alert-primary" role="alert">
                    Los campos con asteriscos (*) son obligatorios
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <form method="POST">
                                <div class="mb-3">
                                    <label class="form-label">Nombre Completo *</label>
                                    <input type="user" name="nombre" class="form-control" placeholder="Nombre Completo">
                                </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Correo Electronico *</label>
                                <input type="email" name="email" class="form-control" placeholder="Correo Electronico">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Sexo *</label>
                            <div class="col-sm-6">

                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" value="M" type="radio" name="radio1">
                                        <label class="form-check-label">M</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" value="F" type="radio" name="radio1" checked="">
                                        <label class="form-check-label">F</label>
                                    </div>                                   
                                </div>
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
                            <textarea class="form-control" name="descripcion" rows="3"
                                placeholder="El empleado ..."></textarea>
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
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" value="1" name="boletin" type="checkbox">
                                <label class="form-check-label">Deseo recibir boletín informativo</label>
                            </div>
                        </div>
                        <button onclick="return crear()" type="submit" name="guardar" value="ok" class="btn btn-primary">Guardar</button>
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