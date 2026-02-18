<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de Dispositivos</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 p-6 md:p-12 font-sans">

    <div class="max-w-2xl mx-auto">
        <a href="/dispositivos" class="text-green-700 hover:text-green-800 flex items-center mb-4 transition font-medium">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            Volver al listado
        </a>

        <div class="bg-white rounded-2xl shadow-xl shadow-gray-200/50 overflow-hidden">
            <div class="bg-green-600 p-6">
                <h1 class="text-2xl font-bold text-white">Alta de Nuevo Dispositivo</h1>
                <p class="text-green-100 text-sm">Registra un nuevo equipo en el inventario</p>
            </div>

            @if ($errors->any())
                <div class="bg-red-50 border-l-4 border-red-500 p-4 m-6">
                    <ul class="list-disc list-inside text-sm text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="/dispositivos" method="post" class="p-8 space-y-5">
                @csrf

                <div>
                    <label for="nombre" class="block text-sm font-semibold text-gray-700 mb-1">Nombre del Dispositivo</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Ej. Proyector Epson" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition" required>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label for="tipo" class="block text-sm font-semibold text-gray-700 mb-1">Tipo</label>
                        <input type="text" id="tipo" name="tipo" placeholder="Ej. Periférico"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition" required>
                    </div>
                    <div>
                        <label for="modelo" class="block text-sm font-semibold text-gray-700 mb-1">Modelo</label>
                        <input type="text" id="modelo" name="modelo" placeholder="Ej. X-200"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition" required>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label for="estado" class="block text-sm font-semibold text-gray-700 mb-1">Estado Inicial</label>
                        <input type="text" id="estado" name="estado" placeholder="Ej. Operativo"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition" required>
                    </div>
                    <div>
                        <label for="aula_id" class="block text-sm font-semibold text-gray-700 mb-1">Asignar a Aula</label>
                        <select id="aula_id" name="aula_id" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition bg-white" required>
                            <option value="" disabled selected>Selecciona un aula...</option>
                            @foreach($aulas as $aula)
                                <option value="{{ $aula->id }}">{{ $aula->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="pt-6 flex items-center justify-end space-x-4">
                    <button type="reset" class="text-gray-400 hover:text-gray-600 font-medium transition">Limpiar campos</button>
                    <button type="submit" 
                        class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-10 rounded-lg shadow-lg shadow-green-200 transition-all transform active:scale-95">
                        Guardar Dispositivo
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>