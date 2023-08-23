<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registrar Usuario</h1>
    <form action="api/create" method="POST">
        <input type="text" name="name" placeholder="Nombre"></br>
        <input type="text" name="lastname" placeholder="apellido"></br>
        <input type="email" name="email" placeholder="Correo electrónico"></br>
        <input type="password" name="password" placeholder="Contraseña"></br>
        
        <button type="submit">Enviar</button>




</form>

<a href="./usuarios">Ver Usuarios</a>

</body>
</html>