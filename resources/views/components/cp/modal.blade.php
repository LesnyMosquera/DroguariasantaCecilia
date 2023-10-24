
<div class="fixed inset-0 max-h-full bg-gray-600 bg-opacity-25">
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
           <div class="max-h-full p-3 bg-white rounded-md" >
               <div class="">
                <label for="laboratorio" class="text-2xl "> <center>Actualizar laboratorio</center></label>
                <hr>
               </div>
               <div>
               <x-cp.form-laboratorio-update></x-cp.form-laboratorio-update>
                <hr>
               </div>
               <div class="flex justify-end gap-3 pt-3">
                <x-danger-button wire:click="set('modal',false)">Salir</x-danger-button>
                <x-danger-button wire:click="delete()">Eliminar</x-danger-button>

                <x-cp.success-button> Actualizar</x-cp.success-button>
               </div>
           </div>

        </div>


    </div>



</div>
