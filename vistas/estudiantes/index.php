<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>FORMULARIO ESTUDIANTES</title>
    <style>

body {
    background-image: url(./10.webp);
    background-size:cover;
    background-attachment: fixed;

}

/*diseño del tipo de texto h1*/
h1 {
    color: rgba(255, 255, 255, 0.948);
    font-family: 'ALGERIAN';
    text-shadow:2px 2px 1px rgb(1, 1, 1);
  
}
/*diseño del tipo de texto h2*/
h2 {
    color: rgb(0, 0, 0);
    text-align: center;
    text-shadow: 2px 2px 2px whitesmoke;
    border-color: azure;
    border-radius: 4px;
    font-family: 'calibri';
    background: rgba(204, 202, 204, 0.705);
    opacity: 0.7;
    box-shadow: 1px 1px 10px gold;
}
/*diseño del contenedor*/
.container {

    justify-content: center;
    width: 600px;
}

    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">FORMULARIO PARA INGRESAR ESTUDIANTES</h1>
        <div class="row justify-content-center">
            <form action="/practica07/controladores/estudiantes/guardar07.php" method="POST" class="col-lg-8 border bg-light p-3">
                <div class="row mb-3">
                    <div class="col">
                        <label for="nombre">Nombre del Oficial Alumno</label>
                        <input type="text" name="nombre" id="nombre" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="apellido">Apellidos</label>
                        <input type="text" name="apellido" id="apellido" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="fecha_nacimiento">Fecha de nacimiento</label>
                        <input type="text" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="numero_telefono">Numero de telefono</label>
                        <input type="text" name="numero_telefono" id="numero_telefono" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="correo_electronico">Correo electronico</label>
                        <input type="text" name="correo_electronico" id="correo_electronico" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-primary w-100">GUARDAR LOS DATOS</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>