<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <title>Formulario de Estudiantes</title>
</head>
<body>
  <div class="container mt-5">
    <h1>Formulario de Estudiantes</h1>
    <form>
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre" required>
      </div>
      <div class="form-group">
        <label for="apellido">Apellido:</label>
        <input type="text" class="form-control" id="apellido" placeholder="Ingrese su apellido" required>
      </div>
      <div class="form-group">
        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" class="form-control" id="fecha_nacimiento" required>
      </div>
      <div class="form-group">
        <label for="telefono">Número de Teléfono:</label>
        <input type="tel" class="form-control" id="telefono" placeholder="Ingrese su número de teléfono" required>
      </div>
      <div class="form-group">
        <label for="correo">Correo Electrónico:</label>
        <input type="email" class="form-control" id="correo" placeholder="Ingrese su correo electrónico" required>
      </div>
      <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>