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
            <x-slot name="title" class="">
                Crear categoria
            </x-slot>
            <x-slot name="slot">
                <div class="grid grid-cols-3">
                    <div class="mb-4 mr-2 border rounded-md">

                      <img src="asset('')" alt="" srcset="">
                      
                    </div>
                    <div class="grid col-span-2 text-black">
                        <x-label> Categoria</x-label>
                     <x-input class="mb-4"/>

                     <x-label> Descripcion</x-label>
                        <x-input class="mb-4" />

                        <x-label>Imagen</x-label>
                        <x-input class="mb-4" type="file" />
              </div>

               </div>
               <hr>
               <div class="flex justify-end gap-3 pt-3" >
            <x-danger-button>Salir</x-danger-button>

            </x-slot>

            <x-slot name="footer">
                <x-cp.success-button>Guardar</x-cp.success-button>
            </x-slot>


          </x-cp.create-modal>






            <button wire:click="$set('modal','false')">Abrir</button>

            {{-- muestra y/o culta el formuario para agregar laboratorios --}}
            @switch($mostrar)
                @case(1)
                  <x-cp.form-laboratorio/>

                @break
                @default
            @endswitch

            {{ $modal}}

            {{-- muestra el listado de laboratorios --}}
</div>
