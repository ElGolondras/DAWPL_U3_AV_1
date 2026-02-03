<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Aulas</title>
</head>
<body>
    <h1>Listado de Aulas</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            {% for aula in aulas %}
            <tr>
                <td>{{ aula.id }}</td>
                <td>{{ aula.nombre }}</td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
</body>
</html>