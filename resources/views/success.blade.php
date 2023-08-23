<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')
    <title>Error</title>
</head>

<body>
    <div class="h-screen flex justify-center items-center bg-gray-300 text-gray-600 font-semibold">
        <div class="bg-white h-fit rounded-md p-4 w-full max-w-2xl flex flex-col items-center">
          
                <h1 class="text-gray-800 text-xl mb-20 text-center">Usuario Creado correctamente</h1>
           
            <a href="{{ url('/') }}" class="bg-blue-950 p-2 px-8 w-fit text-white rounded-lg">Volver al Formulario</a>
               </div>
    </div>
</body>

</html>
