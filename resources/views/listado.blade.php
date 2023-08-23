<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <div class="h-screen flex justify-center items-center  bg-gray-300 text-gray-600 font-semibold">
        <div class="bg-white h-fit rounded-md p-4 w-full max-w-2xl flex flex-col items-center ">
            <div class="flex w-full justify-between">
                <h1 class="text-gray-800 rounded-md">Agregar Usuario</h1>
                <a class="bg-blue-950 p-2 text-white rounded-lg" href="./usuarios">Volver al Listado</a>
            </div>
            <form action="api/create" method="POST" class="flex flex-col gap-8 max-w-md mt-8">

                <div class="flex gap-8 ">

                    <label  >
                        <span>Nombre</span></br>
                        <input required class="border border-gray-600 p-1" type="text" name="name" placeholder="Nombre">
                    </label>
                    <label >
                        <span>Apellido</span></br>
                        <input required class="border border-gray-600 p-1" type="text" name="lastname" placeholder="apellido">
                    </label>
                </div>
                <label >
                    <span>E-Mail</span></br>
                    <input required class="border border-gray-600 p-1" type="text" name="email" placeholder="Correo electrónico">
                </label>
                <label >
                    <span>Contraseña</span></br>
                    <input required class="border border-gray-600 p-1" type="password" name="password" placeholder="Contraseña">
                </label>
                
            <div class="w-full flex justify-center">

                <button class="bg-blue-950 p-2 px-8 w-fit text-white rounded-lg" type="submit">Guardar</button>
            </div>

        </div>
    </div>

    </form>



</body>

</html>