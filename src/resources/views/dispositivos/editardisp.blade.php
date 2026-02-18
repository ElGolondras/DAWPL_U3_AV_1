<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Dispositivo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 p-6 md:p-12 font-sans">

    <div class="max-w-2xl mx-auto">
        <a href="/dispositivos" class="text-blue-600 hover:text-blue-800 flex items-center mb-4 transition">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            Volver al listado
        </a>

        <div class="bg-white rounded-2xl shadow-xl shadow-gray-200/50 overflow-hidden">
            <div class="bg-blue-600 p-6">
                <h1 class="text-2xl font-bold text-white">Editar Dispositivo</h1>
                <p class="text-blue-100 text-sm">Modifica la información del equipo ID: {{ $dispositivo->id }}</p>
            </div>

            <form action="/dispositivos/{{ $dispositivo->id }}" method="post" class="p-8 space-y-5">
                @csrf
                @method('PUT')

                <div>
                    <label for="nombre" class="block text-sm font-semibold text-gray-700 mb-1">Nombre del Dispositivo</label>
                    <input type="text" id="nombre" name="nombre" value="{{ $dispositivo->nombre }}" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition" required>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label for="tipo" class="block text-sm font-semibold text-gray-700 mb-1">Tipo</label>
                        <input type="text" id="tipo" name="tipo" value="{{ $dispositivo->tipo }}" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition" required>
                    </div>
                    <div>
                        <label for="modelo" class="block text-sm font-semibold text-gray-700 mb-1">Modelo</label>
                        <input type="text" id="modelo" name="modelo" value="{{ $dispositivo->modelo }}" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition" required>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label for="estado" class="block text-sm font-semibold text-gray-700 mb-1">Estado</label>
                        <input type="text" id="estado" name="estado" value="{{ $dispositivo->estado }}" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition" required>
                    </div>
                    <div>
                        <label for="aula_id" class="block text-sm font-semibold text-gray-700 mb-1">Aula Asignada</label>
                        <select id="aula_id" name="aula_id" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition bg-white" required>
                            @foreach($aulas as $aula)
                                <option value="{{ $aula->id }}" {{ $dispositivo->aula_id == $aula->id ? 'selected' : '' }}>
                                    {{ $aula->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="pt-6 flex items-center justify-end space-x-4">
                    <a href="/dispositivos" class="text-gray-500 hover:text-gray-700 font-medium">Cancelar</a>
                    <button type="submit" 
                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-8 rounded-lg shadow-lg shadow-blue-200 transition-all transform active:scale-95">
                        Actualizar Dispositivo
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>