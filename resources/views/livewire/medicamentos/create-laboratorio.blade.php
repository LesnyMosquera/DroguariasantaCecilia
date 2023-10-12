<div>
    {{-- Inico del contenedor --}}
        <div role="alert">
            <div class="px-4 py-2 font-bold text-center text-white bg-blue-700 rounded-t">
                {{ $title }}
            </div>

            <div class="px-4 py-3 text-white bg-blue-200 border border-t-0 border-white rounded-b">
                <x-cp.buscador>
                    <x-cp.success-button class="ml-3 mr-2" wire:click="$set('mostrar','true')">
                        Crear {{ $title }}
                    </x-cp.success-button>
                </x-cp.buscador>
                {{ $mostrar }}

                @if($mostrar === true)
                <div class="p-3 mt-6 mb-8 text-blue-900 border border-white rounded-md">

                    <label for="laboratorio" class="text-2xl "> <center>Crear laboratorio</center></label>
                    <form wire:submit="saveLaboratorio">
                        <div>
                            <label for="laboratorio" class="">Nombre del laboratorio</label>
                            <div class="relative flex flex-wrap items-stretch ">
                                <span
                                  class=" flex items-center whitespace-nowrap rounded-l border border-r-0 border-solid border-neutral-300 px-3 py-[0.25rem] text-center text-base font-normal leading-[1.6] text-blue-700 dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-100"
                                  id="basic-addon1"
                                  > <i class="w-full fa-solid fa-phone-volume color-blue"></i></span>
                                <input type="text"  wire:model="laboratorio" id="laboratorio" placeholder="Escriba el laboratorio" class=" relative m-0 block w-[1px] min-w-0 flex-auto rounded-r border border-solid border-neutral-300 bg-white bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-600 dark:placeholder:text-neutral-200 dark:focus:border-primary"
                                  placeholder="escriba el laboratorio" aria-label="Username" aria-describedby="basic-addon1" />
                            </div>
                        </div>

                                    <div class="mt-2">
                                        <label for="descripcion" class="">Descripción</label>
                                        <x-textarea wire:model="descripcion"  placeholder="Descripcion del laboratorio" />
                                    </div>
                                    <div class="mt-3">
                                        <input type="file" wire:model="imagen">
                                    </div>
                                    <div class="text-right">
                                        <x-danger-button class="mr-5">Ocultar</x-danger-button>
                                        <x-cp.success-button wire:click="saveLaboratorio" >Guardar</x-cp.success-button>
                                    </div>
                                    {{$mostrar}}

                    </form>{{-- Care about people's approval and you will be their prisoner. --}}

                </div>

                @endif

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

        <p></p>


    </div>
    {{-- Fin del contenedor --}}




