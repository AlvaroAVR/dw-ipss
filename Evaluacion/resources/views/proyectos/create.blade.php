<!DOCTYPE html>
<html>
<head>
    <title>Crear Proyecto</title>
</head>
<body>
    <h1>Crear Proyecto</h1>
    <form action="{{ route('proyectos.store') }}" method="POST">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre"><br>
        <label>Fecha de Inicio:</label>
        <input type="date" name="fecha_inicio"><br>
        <label>Estado:</label>
        <input type="text" name="estado"><br>
        <label>Responsable:</label>
        <input type="text" name="responsable"><br>
        <label>Monto:</label>
        <input type="number" name="monto"><br>
        <button type="submit">Crear</button>
    </form>
    <a href="{{ route('proyectos.index') }}">Regresar</a>
</body>
</html>
