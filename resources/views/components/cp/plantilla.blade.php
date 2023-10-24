<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Drogueria y Variedades Santa Cecilia') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="mx-auto ml-10 mr-10 max-w-8xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">

               {{ $slot }} 
            </div>
        </div>
    </div>
</x-app-layout>
