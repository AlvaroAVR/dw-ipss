<!DOCTYPE html>
<html>
<head>
    <title>Editar Proyecto</title>
</head>
<body>
    <h1>Editar Proyecto</h1>
    <form action="{{ route('proyectos.update', $proyecto['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ $proyecto['nombre'] }}"><br>
        <label>Fecha de Inicio:</label>
        <input type="date" name="fecha_inicio" value="{{ $proyecto['fecha_inicio'] }}"><br>
        <label>Estado:</label>
        <input type="text" name="estado" value="{{ $proyecto['estado'] }}"><br>
        <label>Responsable:</label>
        <input type="text" name="responsable" value="{{ $proyecto['responsable'] }}"><br>
        <label>Monto:</label>
        <input type="number" name="monto" value="{{ $proyecto['monto'] }}"><br>
        <button type="submit">Actualizar</button>
    </form>
    <a href="{{ route('proyectos.index') }}">Regresar</a>
</body>
</html>
