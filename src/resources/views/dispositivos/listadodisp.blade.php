<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Dispositivos</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 20px;">
    <h1>Listado de Dispositivos</h1>
    <a href="/dispositivos/altas">Dar de alta nuevo dispositivo</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Modelo</th>
                <th>Estado</th>
                <th>Aula</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dispositivos as $dispositivo)
            <tr>
                <td>{{ $dispositivo->id }}</td>
                <td>{{ $dispositivo->nombre }}</td>
                <td>{{ $dispositivo->tipo }}</td>
                <td>{{ $dispositivo->modelo }}</td>
                <td>{{ $dispositivo->estado }}</td>
                <td>{{ $dispositivo->aula->nombre ?? 'Sin Aula' }}</td>
                <td>
                    <a href="/dispositivos/{{ $dispositivo->id }}/editar"><button>Editar</button></a>
                    <form action="{{ route('dispositivos.destroy', $dispositivo->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>