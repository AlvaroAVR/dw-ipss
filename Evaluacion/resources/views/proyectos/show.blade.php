<!DOCTYPE html>
<html>
<head>
    <title>Detalles del Proyecto</title>
</head>
<body>
    <h1>Detalles del Proyecto</h1>
    <p>Nombre: {{ $proyecto['nombre'] }}</p>
    <p>Fecha de Inicio: {{ $proyecto['fecha_inicio'] }}</p>
    <p>Estado: {{ $proyecto['estado'] }}</p>
    <p>Responsable: {{ $proyecto['responsable'] }}</p>
    <p>Monto: {{ $proyecto['monto'] }}</p>
    <a href="{{ route('proyectos.edit', $proyecto['id']) }}">Editar</a>
    <a href="{{ route('proyectos.index') }}">Regresar</a>
</body>
</html>
