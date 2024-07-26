<!DOCTYPE html>
<html>
<head>
    <title>Proyectos</title>
</head>
<body>
    <h1>Lista de Proyectos</h1>
    <a href="{{ route('proyectos.create') }}">Crear Proyecto</a>
    <ul>
        @foreach($proyectos as $proyecto)
            <li>
                <a href="{{ route('proyectos.show', $proyecto['id']) }}">{{ $proyecto['nombre'] }}</a>
                <a href="{{ route('proyectos.delete', $proyecto['id']) }}" style="color:red;">Eliminar</a>
            </li>
        @endforeach
    </ul>
    <a href="/">Volver a Home</a>
</body>
</html>

