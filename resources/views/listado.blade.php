<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>
    <div class="h-screen flex justify-center items-center  bg-gray-300 text-gray-600 font-semibold">
        <div class="bg-white h-fit rounded-md p-4 w-full max-w-4xl flex flex-col items-center ">
            <div class="flex w-full justify-between">
                <h1 class="text-gray-800 rounded-md">Lsita de Usuarios</h1>
                <a class="bg-blue-950 p-2 block h-fit text-white rounded-lg" href="./">Agregar</a>
            </div>
            <div class=" w-full">
                <table id="usuarios" class="display table  ">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($usuarios as $index => $usuario)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $usuario['name'] }}</td>
                            <td>{{ $usuario['lastname'] }}</td>
                            <td>{{ $usuario['email'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                        </tr>
                    </tfoot>
                </table>

            </div>
        </div>
    </div>

    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $(function() {
            var table = $('#usuarios').DataTable();
        });
    </script>


</body>

</html>