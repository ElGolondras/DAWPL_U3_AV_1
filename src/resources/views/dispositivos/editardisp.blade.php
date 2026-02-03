<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Dispositivo</title>
</head>
<body>
    <h1>Editar Dispositivo</h1>

    <form action="/dispositivos/{{ $dispositivo->id }}" method="post">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ $dispositivo->nombre }}" required><br>

        <label for="tipo">Tipo:</label>
        <input type="text" id="tipo" name="tipo" value="{{ $dispositivo->tipo }}" required><br>

        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" name="modelo" value="{{ $dispositivo->modelo }}" required><br>

        <label for="estado">Estado:</label>
        <input type="text" id="estado" name="estado" value="{{ $dispositivo->estado }}" required><br>

        <label for="aula_id">Aula:</label>
        <select id="aula_id" name="aula_id" required>
            @foreach($aulas as $aula)
                <option value="{{ $aula->id }}" {{ $dispositivo->aula_id == $aula->id ? 'selected' : '' }}>
                    {{ $aula->nombre }}
                </option>
            @endforeach
        </select><br>

        <button type="submit">Actualizar Dispositivo</button>
    </form>
</body>
</html>