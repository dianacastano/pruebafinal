<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Añadir Equipo</title>
</head>
<body>
    <h1>Añadir Nuevo Equipo</h1>
    <form action="{{ url('equipo/add') }}" method="post">
        @csrf
        <label for="nombre_equipo">Nombre del Equipo:</label>
        <input type="text" id="nombre_equipo" name="nombre_equipo" required>
        <input type="submit" value="Añadir Equipo">
    </form>
</body>
</html>
