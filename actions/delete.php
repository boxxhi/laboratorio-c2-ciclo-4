<?php

include "../db/db_connect.php";

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "Metodo invalido";
    exit();
}

$pelicula_id = $_POST['id'];

$sql = sprintf('DELETE FROM peliculas WHERE id = %s;', $pelicula_id);

$result = $conn->query($sql);

if ($result) {
    echo("eliminada con exito");
} else {
    die("Error al eliminar pelicula");
}

?>