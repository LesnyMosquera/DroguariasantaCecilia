

<div class="p-3 mt-6 mb-8 text-blue-900 border border-white rounded-md ">
    <div class="grid grid-cols-4 ">
        <div class="col-span-3 mr-6">
            <label for="laboratorio" class="text-2xl "> <center>Crear laboratorio</center></label>

            <form wire:submit="saveLaboratorio">
                    <label for="laboratorio" class="">Nombre del laboratorio</label>
                    <div class="relative flex flex-wrap items-stretch ">
                        <span
                          class=" flex items-center whitespace-nowrap rounded-l border border-r-0 border-solid border-neutral-300 px-3 py-[0.25rem] text-center text-base font-normal leading-[1.6] text-blue-700 dark:border-neutral-600 dark:text-neutral-100 dark:placeholder:text-neutral-100"
                          id="basic-addon1"
                          > <svg xmlns="http://www.w3.org/2000/svg" height="3em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#0e08c6}</style><path d="M175 389.4c-9.8 16-15 34.3-15 53.1c-10 3.5-20.8 5.5-32 5.5c-53 0-96-43-96-96V64C14.3 64 0 49.7 0 32S14.3 0 32 0H96h64 64c17.7 0 32 14.3 32 32s-14.3 32-32 32V309.9l-49 79.6zM96 64v96h64V64H96zM352 0H480h32c17.7 0 32 14.3 32 32s-14.3 32-32 32V214.9L629.7 406.2c6.7 10.9 10.3 23.5 10.3 36.4c0 38.3-31.1 69.4-69.4 69.4H261.4c-38.3 0-69.4-31.1-69.4-69.4c0-12.8 3.6-25.4 10.3-36.4L320 214.9V64c-17.7 0-32-14.3-32-32s14.3-32 32-32h32zm32 64V224c0 5.9-1.6 11.7-4.7 16.8L330.5 320h171l-48.8-79.2c-3.1-5-4.7-10.8-4.7-16.8V64H384z"/></svg></span>
                        <input type="text"  wire:model.live="laboratorio" id="laboratorio"  placeholder="Escriba el laboratorio" class=" relative m-0 block w-[1px] min-w-0 flex-auto rounded-r border border-solid border-neutral-300 bg-white bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-600 dark:placeholder:text-neutral-200 dark:focus:border-primary"
                          placeholder="escriba el laboratorio" aria-label="Username" aria-describedby="basic-addon1" />
                         <x-input-error for="laboratorio" />

                    </div>

                    <div class="mt-2">
                        <label for="descripcion" class="">Descripción</label>
                        <x-textarea wire:model="descripcion"  placeholder="Descripcion del laboratorio" />
                    </div>
                    <div class="mt-3">
                        <input type="file" wire:model.live="imagen" accept="image/png, image/jpg, image/jpeg, image/gif, image/bpm, image/svg, image/avif">
                            <x-input-error for="imagen"/>
                        </div>
                    <div class="text-right">
                            <x-danger-button class="mr-5" wire:click="$set('mostrar',0)">Ocultar</x-danger-button>
                            <x-cp.success-button wire:click="saveLaboratorio" >Guardar</x-cp.success-button>
                    </div>

            </form>{{-- Care about people's approval and you will be their prisoner. --}}
        </div>
                    <div class="">
                        <img src="{{ asset('/storage/imagenes/layout/lab.jpg') }}" class="img-layout"  alt="" srcset="">
                    </div>

    </div>
</div>








