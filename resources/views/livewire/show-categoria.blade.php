<div>
    {{-- Inico del contenedor --}}
    <div role="alert">
        <div class="px-4 py-2 font-bold text-center text-white bg-blue-700 rounded-t">
            {{ $title }}
        </div>

        <div class="px-4 py-3 text-white bg-blue-200 border border-t-0 border-white rounded-b">
            {{-- Buscador en tiempo real--}}
            <x-cp.buscador>
                <x-cp.success-button class="ml-3 mr-2" wire:click="$set('modal','true')">
                    Crear {{ $title }}
                </x-cp.success-button>
            </x-cp.buscador>
          <x-cp.create-modal>

                    <form action="{{route('categoria.create')}}" method="post">
                        @csrf
                        <x-slot name="title" class="">
                            Crear categoria
                        </x-slot>
                        <x-slot name="slot">
                            <div class="grid grid-cols-4">
                                <div class="col-span-2 mb-4 mr-6 border rounded-md">
                                    <div class="m-2 text-black">
                                        procesos comunes que manejan las organizaciones mientras se registran y avanzan estos procesos.

                                    </div>
                                        <img src="{{ asset('/storage/imagenes/categoria/categoria.png') }}"  class="border rounded-md ">
                                    </div>
                                <div class="grid col-span-2 text-black">
                                    <x-label> Categoria</x-label>
                                    <x-input class="mb-4"/>

                                    <x-label> Descripcion</x-label>
                                    <x-textarea> </x-textarea>

                                    <x-label>Imagen</x-label>
                                    <x-input class="mb-4" type="file" />
                                </div>
                        </div>
                        <hr>
                        <div class="flex justify-end gap-3 pt-3" >
                                <x-danger-button  wire:click="set('open',false)">Salir</x-danger-button>

                        </x-slot>

                        <x-slot name="footer">
                            <x-cp.success-button type="submit">Guardar</x-cp.success-button>
                        </x-slot>

                    </form>

            </x-cp.create-modal>
            <button wire:click="$set('modal','false')">Abrir</button>
            {{-- muestra y/o culta el formuario para agregar Categorias --}}
            @switch($mostrar)
                @case(1)
                  <x-cp.form-laboratorio/>
                @break
                @default
            @endswitch



            {{-- muestra el listado de laboratorios --}}
</div>
