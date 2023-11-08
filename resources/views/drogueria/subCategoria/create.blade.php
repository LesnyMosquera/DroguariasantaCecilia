
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.4/tailwind.min.css" integrity="sha512-KzAulbHJAfbEVrA9YUavZLBLzxyobnwgl6VnOT4YfJ3mDMmgl003c5FgIOoFvXSH/7F/mfUaLh+B7MBlzAgC3A==" crossorigin="anonymous" />
<div class="container mx-auto border-2 mt-8">

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-1 mt-2">
        <div class="bg-red-600 text-danger "> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla eligendi, facere repellendus in eum sapiente architecto perferendis et sint numquam aut dolorum similique enim ducimus quisquam atque saepe culpa exercitationem!</div>
        <div class="bg-red-300 "> columna 2</div>
        <div class="bg-blue-600 "> columna 3</div>
    </div>
        <div class="bg-yellow-500 col-span-3 mt-2"> columna 4</div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-1 mt-2">
        <div class="bg-yellow-500 "> columna 5</div>
        <div class="bg-yellow-500 "> columna 6</div>
        <div class="bg-danger "> columna 6</div>
    </div>

        <form action="/laboratorio" method="POST">
            @csrf


        <div  class="my-2">
                <label for="laboratorio">Laboratorio</label>
                <input type="text" name="laboratorio" id="laboratorio" class="border-2" >
        </div>


        <input type="submit" value="Guardar" class="bg-yellow-600 hover:bg-blue-100 py-2 px-2 border-2 rounded" >
        </form>
</div>
<div class="container"></div>
<div class="grid grid-cols-1 sm:grid-cols-4 grid-rows-1 sm:grid-row-2 gap-2">

    <div class="bg-blue-300"> etiqueta 1</div>
    <div class="bg-blue-300" > etiqueta 2 </div>
    <div class="bg-blue-300 col-span-1 sm:col-span-2 row-span-1 sm:row-span-2"> etiqueta 3</div>
    <div class="bg-blue-300"> etiqueta 4</div>
    <div class="bg-blue-300"> etiqueta 5</div>

</div>
