<!DOCTYPE html>
<html>
<head>
    <title>Eliminar Proyecto</title>
</head>
<body>
    <h1>Eliminar Proyecto</h1>
    <p>¿Está seguro que desea eliminar el proyecto?</p>
    <p>ID: {{ $proyecto['id'] }}</p>
    <p>Nombre: {{ $proyecto['nombre'] }}</p>

    <form action="{{ route('proyectos.destroy', $proyecto['id']) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
    <a href="{{ route('proyectos.index') }}">Regresar</a>
</body>
</html>
