<div>
    {{-- Inico del contenedor --}}
        <div role="alert">
            <div class="px-4 py-2 font-bold text-center text-white bg-blue-700 rounded-t">
                {{ $title }}
            </div>

            <div class="px-4 py-3 text-white bg-blue-200 border border-t-0 border-white rounded-b">
                {{-- Buscador en tiempo real--}}
                <x-cp.buscador>
                    <x-cp.success-button class="ml-3 mr-2" wire:click="$set('mostrar',1)">
                        Crear {{ $title }}
                    </x-cp.success-button>
                </x-cp.buscador>


                {{-- muestra y/o culta el formuario para agregar laboratorios --}}
                @switch($mostrar)
                    @case(1)
                      <x-cp.form-laboratorio/>
                    @break
                    @default
                @endswitch

                {{-- muestra el listado de laboratorios --}}
                <div class="grid grid-cols-1 gap-5 mr-2 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4">
                   @foreach($lab as $laboratorios )

                   <div class="bg-blue-400 border border-white rounded">

                       <div class="container-card ">
                           <div class="flex ">
                            <img src="{{ Storage::url($laboratorios->imagen) }}" alt="">
                           </div>
                           <div class="">
                            <a href="" wire:click="set('modal','true')">


                                <div class="flex pl-3 text-xl text-blue-700 bg-white">

                                    {{$laboratorios->laboratorio}}
                                    </div>

                                    <div class="">
                                        {{$laboratorios->descripcion}}
                                    </div>
                            </a>

                            </div>
                        </div>

                    </div>
                    @endforeach
                    <div class="flex justify-center ">

                        {{ $lab->links()}}
                    </div>

            </div>
          </div>

        <p></p>
          @if ($modal==true)

          <x-cp.modal>

          </x-cp.modal>
          @endif



    </div>
    {{-- Fin del contenedor --}}




