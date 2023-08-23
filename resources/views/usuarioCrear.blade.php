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
                <a class="bg-blue-950 p-2 text-white rounded-lg" href="{{ route('usuarios.lista') }}">Volver al Listado</a>
            </div>
            <form action="{{ route('usuario.create') }}" method="POST" class="flex flex-col gap-8 max-w-md mt-8">
                <!-- Campos del formulario -->
                
                    @if(@isset($error))
                        <h1 class="text-red-600 text-xl mb-20 text-center">{{ $error }}</h1>
                    @elseif(@isset($msj))
                        <h1 class="text-gray-800 text-xl mb-20 text-center">Usuario Creado correctamente</h1>
                    @endif

                <div class="flex gap-8 ">
                    <label>
                        <span>Nombre</span></br>
                        <input required class="border border-gray-600 p-1" type="text" name="name" placeholder="Nombre" value="{{ old('name', $datos['name'] ?? '') }}">
                    </label>
                    <label>
                        <span>Apellido</span></br>
                        <input required class="border border-gray-600 p-1" type="text" name="lastname" placeholder="Apellido" value="{{ old('lastname', $datos['lastname'] ?? '') }}">
                    </label>
                </div>
                <label>
                    <span>E-Mail</span></br>
                    <input required class="border border-gray-600 p-1" type="text" name="email" placeholder="Correo electrónico" value="{{ old('email', $datos['email'] ?? '') }}">
                </label>
                <label>
                    <span>Contraseña</span></br>
                    <input required class="border border-gray-600 p-1" type="password" name="password" placeholder="Contraseña">
                </label>
                
                <div class="w-full flex justify-center">
                    <button class="bg-blue-950 p-2 px-8 w-fit text-white rounded-lg" type="submit">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
