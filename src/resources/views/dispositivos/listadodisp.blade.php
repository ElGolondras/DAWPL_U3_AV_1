<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Dispositivos</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 p-8 font-sans">

    <div class="max-w-6xl mx-auto bg-white p-6 rounded-xl shadow-lg">
        
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Listado de Dispositivos</h1>
            <a href="/dispositivos/altas" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition duration-300 shadow">
                + Dar de alta nuevo dispositivo
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-200 text-gray-700 uppercase text-sm">
                        <th class="p-4 border-b">ID</th>
                        <th class="p-4 border-b">Nombre</th>
                        <th class="p-4 border-b">Tipo</th>
                        <th class="p-4 border-b">Modelo</th>
                        <th class="p-4 border-b">Estado</th>
                        <th class="p-4 border-b">Aula</th>
                        <th class="p-4 border-b text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600">
                    @foreach($dispositivos as $dispositivo)
                    <tr class="hover:bg-gray-50 transition duration-200">
                        <td class="p-4 border-b">{{ $dispositivo->id }}</td>
                        <td class="p-4 border-b font-medium text-gray-900">{{ $dispositivo->nombre }}</td>
                        <td class="p-4 border-b">{{ $dispositivo->tipo }}</td>
                        <td class="p-4 border-b">{{ $dispositivo->modelo }}</td>
                        <td class="p-4 border-b">
                            <span class="px-2 py-1 rounded-full text-xs {{ $dispositivo->estado == 'activo' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                                {{ $dispositivo->estado }}
                            </span>
                        </td>
                        <td class="p-4 border-b">{{ $dispositivo->aula->nombre ?? 'Sin Aula' }}</td>
                        <td class="p-4 border-b">
                            <div class="flex justify-center gap-2">
                                <a href="/dispositivos/{{ $dispositivo->id }}/editar" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded-md text-sm transition">
                                    Editar
                                </a>
                                <form action="{{ route('dispositivos.destroy', $dispositivo->id) }}" method="post" onsubmit="return confirm('¿Seguro que quieres eliminarlo?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md text-sm transition">
                                        Eliminar
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>