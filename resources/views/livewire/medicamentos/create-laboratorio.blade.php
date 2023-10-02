<div>
{{-- Inico del contenedor --}}
    <div role="alert">
        <div class="px-4 py-2 font-bold text-center text-white bg-blue-700 rounded-t">
            {{ $title }}
        </div>

        <div class="px-4 py-3 text-white bg-blue-200 border border-t-0 border-white rounded-b">
            <x-cp.buscador>
                <x-cp.success-button class="ml-3 mr-2" wire:click="$set('open', true)">
                    Crear {{ $title }}
                </x-cp.success-button>
            </x-cp.buscador>

            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 ">

               @foreach($lab as $laboratorios )


               <div class="bg-red-400 border border-white rounded">

                   <div class="container-card ">
                       <div class="">Imagen</div>
                       <div class="">
                           <div class="">
                            {{$laboratorios->laboratorio}}
                            </div>
                            <div class="">
                                {{$laboratorios->descripcion}}
                            </div>
                        </div>
                    </div>


                </div>
                @endforeach




        </div>
      </div>
    <h2>Laboratorior</h2>

    <p></p>
    <form wire:submit="saveLaboratorio">
        <input type="text" wire:model="laboratorio">

<p></p>
        <input type="text" wire:model="descripcion">
,<p></p>
        <button type="submit">Guardar</button>
    </form>{{-- Care about people's approval and you will be their prisoner. --}}


</div>
{{-- Fin del contenedor --}}
