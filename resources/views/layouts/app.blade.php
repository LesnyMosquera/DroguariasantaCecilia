<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
        <link rel="stylesheet" href="sweetalert2.min.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/css/admin.css','resources/js/app.js'])
        <link rel="stylesheet" href="{{ asset('iconos/fontawesome-web/css/all.min.css') }}">

        <!-- Styles -->
        @livewireStyles
        @wireUiScripts
    <script src="//unpkg.com/alpinejs" defer></script>
    </head>
    <body class="font-sans antialiased">

        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                <div class="grid grid-cols-1 gap-3 mx-5 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-6 my-7">

                    <div class="px-5 menu-admin aside" >
                        <x-cp.menu-drop></x-cp.menu-drop>

                    </div>

                    <div class="grid-cols-1 px-5 pt-6 bg-blue-200 sm:col-span-5">

                        {{ $slot }}


                    </div>

                    <div class="grid-cols-1 px-5 bg-orange-200 sm:col-span-6">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque a earum itaque accusamus cupiditate dignissimos enim id eveniet et, aspernatur debitis esse officia maiores velit laboriosam amet repellat molestiae nobis.</div>
                </div>
            </main>
        </div>

        @stack('modals')
        @livewireScripts

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            Livewire.on('saveLaboratorio'){
                Swal.fire(
            'The Internet?',
            'el Archivo se guardó correctamente',
            'question'
          )
            }


        </script>

    </body>


</html>
