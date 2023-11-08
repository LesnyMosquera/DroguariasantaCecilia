<html>
    <head>
        <link rel="stylesheet" href="{{ asset("css/app.css") }}" />
    </head>
    <body>
        <p class="text-center text-5xl">Listado de Laboratorio</p>
        <div class="flex justify-center bg-blue-500">
            <ul class="list-inside text-blue p-5 bg-red-600 px-4 py-4">
                @foreach($laboratorios as $laboratorio)
                   {{ $laboratorio->laboratorio }}<br>
                @endforeach
            </ul>
        </div>
        <div class="flex justify-center bg-gray-100">
            <div class="text-center m-2">

            </div>
        </div>
        componente
        <x-laboratorio titulo="Hola este es el titulo del componente">

        </x-laboratorio>

        <x-laboratorio titulo="Hola eeste es otro titulo">

        </x-laboratorio>
    </body>
    <script src="{{ asset("js/app.js") }}"></script>
</html>
