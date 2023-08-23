<?php


use Illuminate\Database\QueryException;

function Error_SQL(QueryException $e) {
    $errorCode = $e->getCode();
    $errorMessage = $e->getMessage();

    switch ($errorCode) {
        case 23000: // Código de error para violación de clave única
            if (preg_match("/Duplicate entry '(.*?)' for key/", $errorMessage, $matches)) {
                return "Error: Entrada duplicada de dato: " . $matches[1];
            }
            return "Error: Entrada duplicada de dato";
        case 1048: // Código de error para valor NULL no permitido
            return "Error: Todos los datos deben llenarse";
        default:
            return "Error en la acción realizada";
    }
}



?>