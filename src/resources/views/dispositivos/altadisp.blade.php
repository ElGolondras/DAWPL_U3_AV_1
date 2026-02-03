<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de dispositivos</title>
</head>
<body>
    <h1>Alta de dispositivos</h1>
    <form action="/dispositivos" method="post">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>
        <label for="tipo">Tipo:</label>
        <input type="text" id="tipo" name="tipo" required><br>
        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" name="modelo" required><br>
        <label for="estado">Estado:</label>
        <input type="text" id="estado" name="estado" required><br>
        <label for="aula_id">Aula:</label>
        <select id="aula_id" name="aula_id" required>
            {% for aula in aulas %}
            <option value="{{ aula.id }}">{{ aula.nombre }}</option>
            {% endfor %}
        </select><br>
        <button type="submit">Guardar</button>
    </form> 
</body>
</html>