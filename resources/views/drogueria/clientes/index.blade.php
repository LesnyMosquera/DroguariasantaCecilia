

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="{{ asset("css/app.css") }}" />
</head>
<body>
    <div class="container mx-auto">
    {{ $titulo }}<p></p>
    <div class="border uppercase">

        @foreach($cliente as $clientes)
        <li class="py-2">{{ $clientes->nit}} </li>
          <li class="py-2">{{ $clientes->nombre }} </li>
          <li class="py-2">{{ $clientes->genero }} </li>
          <li class="py-2">{{ $clientes->direccion}} </li>
          <li class="py-2">{{ $clientes->ciudad}} </li>
        @endforeach
    </div>


    <br>
    <button class="bg-red-100 py-2 px-4 rounded hover:bg-blue-700" >Aceptar</button>

        <br>
        <div class="m-5 p-5  border">
            <p class="text-center uppercase bg-red-600 text-yellow">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo cum alias sapiente in ullam dicta est. Voluptas in eos, a suscipit neque, velit, explicabo eligendi beatae quisquam repudiandae aut dolore.
            </p>


        </div>


</div>

</body>
</html>
