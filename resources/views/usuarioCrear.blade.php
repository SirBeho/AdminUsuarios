<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <script src="../js/app.js" defer></script>
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <div class="h-screen flex justify-center items-center  bg-gray-300 text-gray-600 font-semibold">
        <div class="bg-white h-fit rounded-md p-4 w-full max-w-2xl flex flex-col items-center  relative">
            <div class="flex w-full justify-between relative">
                <h1 class="text-gray-800 rounded-md">Agregar Usuario</h1>
                <a class="bg-blue-950 p-2 text-white rounded-lg" href="{{ route('usuarios.lista') }}">Volver al Listado</a>
                @if(@isset($error))
                <h1 id="msj" class="text-red-600 text-xl absolute w-full max-w-xl transform duration-500 ease-in-out text-center bottom-10 mb-20">{{ $error }}</h1>
                @endif
            </div>
            <form action="{{ route('usuario.create') }}" method="POST" class=" flex flex-col gap-8 max-w-md  ">
                <!-- Campos del formulario -->

                <div class="flex gap-8 ">
                    <label>
                        <span>Nombre</span></br>

                        <input required class="border border-gray-600 p-1" type="text" name="name" placeholder="Nombre" value="{{isset($requestData)? $requestData['name'] :''}}">
                    </label>
                    <label>
                        <span>Apellido</span></br>
                        <input required class="border border-gray-600 p-1" type="text" name="lastname" placeholder="Apellido" value="{{isset($requestData)? $requestData['lastname']:''}}">
                    </label>
                </div>
                <label>
                    <span>E-Mail</span></br>
                    <input required class="border border-gray-600 p-1" type="text" name="email" placeholder="Correo electrónico" value="{{isset($requestData)? $requestData['email']:''}}">
                </label>
                <label>
                    <span>Contraseña</span></br>
                    <input required class="border border-gray-600 p-1" type="password" name="password" placeholder="Contraseña">
                </label>

                <div class="w-full flex justify-center">
                    <button class="bg-blue-950 p-2 px-8 w-fit text-white rounded-lg" type="submit">Guardar</button>
                </div>
                
            </form>
            <svg onclick="limpiar()" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="cursor-pointer absolute bottom-3 right-3 bi bi-trash3 " viewBox="0 0 16 16">
                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                </svg>
        </div>
    </div>
    <script>
        Msj();
        function Msj() {
            const msj = document.getElementById("msj");
            console.log(msj)
            if (msj) {
                
                setTimeout(() => {
                    msj.classList.remove("bottom-10");
                    msj.classList.add("bottom-0");
                }, 1);
                setTimeout(() => {
                    msj.remove();
                }, 5000);
            }
        }

        function limpiar() {
            document.querySelectorAll("input").forEach(function(input) {
                input.value = ""; 
            });
}
    </script>
</body>

</html>