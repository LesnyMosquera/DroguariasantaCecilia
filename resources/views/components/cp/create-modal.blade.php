<div class="fixed inset-0 max-h-full bg-gray-600 bg-opacity-50">
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
           <div class="max-h-full p-3 bg-green-800 rounded-md" >
               <div class="">

                    <label for="laboratorio" class="text-2xl "> <center>{{ $title }}</center></label>


                <hr>
               </div>
               <div class="p-3 m-3">
              {{$slot}}
              <div class="grid grid-cols-3">
                    <div>
                        col 1
                    </div>
                    <div class="grid col-rows-3 ">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque delectus nobis repellat soluta impedit obcaecati cum dignissimos aperiam numquam libero dolor possimus, perferendis officiis, enim iusto! Ipsum aspernatur in ex.
                    </div>
              </div>
              <x-input class="mb-2">

              </x-input>
              <x-input class="mb-2">

              </x-input>
              <x-input class="mb-2" type="file">

              </x-input>


               </div>
               <hr>
               <div class="flex justify-end gap-3 pt-3" >
            <x-danger-button>Salir</x-danger-button>
           {{$footer}}

               </div>
           </div>
        </div>
    </div>
</div>
