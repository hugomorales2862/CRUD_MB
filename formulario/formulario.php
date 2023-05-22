<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>App de alumnos  </title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Formulario de alumnos</h1>
        <div class="row justify-content-center">
            <form action="/guardar/guardar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <div class="row mb-3">
                    <div class="col">
                        <label for="alu_nombre1">Primer nombre del alumno</label>
                        <input type="text" name="alu_nombre1" id="alu_nombre1" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="alu_nombre2">Segundo nombre del alumno</label>
                        <input type="text" name="alu_nombre2" id="alu_nombre2" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="alu_apellido1">Primer apellido del alumno</label>
                        <input type="text" name="alu_apellido1" id="alu_apellido1" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="alu_apellido2">Segundo apellido del alumno</label>
                        <input type="text" name="alu_apellido2" id="alu_apellido2" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="alu_fecha_nac">Fecha de nacimiento del alumno</label>
                        <input type="date" name="alu_fecha_nac" id="alu_fecha_nac" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="alu_tel">Telefono del alumno</label>
                        <input type="number" name="alu_tel" id="alu_tel" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="alu_email">Correo electronico del alumno</label>
                        <input type="email" name="alu_email" id="alu_email" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-primary w-100">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>