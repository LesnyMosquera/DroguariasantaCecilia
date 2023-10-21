<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Drogueria y Variedades Santa Cecilia') }}
        </h2>

    </x-slot>


               {{ $slot }}
            </div>
        </div>
    </div>
</x-app-layout>
