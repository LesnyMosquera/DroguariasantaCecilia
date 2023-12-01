<div class="fixed inset-0 max-h-full bg-gray-600 bg-opacity-50">
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
           <div class="max-h-full p-3 bg-gray-200 rounded-md" >

            <div class="">
                    <label for="laboratorio" class="text-2xl text-blue-500"> <center>{{ $title }}</center></label>
                <hr>
               </div>
               <div class="p-3 m-3">
              {{$slot}}

           {{$footer}}

               </div>
           </div>
        </div>
    </div>
</div>
