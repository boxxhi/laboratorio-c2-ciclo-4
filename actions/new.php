<?php 

include "../db/db_connect.php";

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "Metodo invalido";
    exit();
}

$titulo = $_POST["titulo"];
$sinopsis = $_POST["sinopsis"];
$imagen = $_POST["imagen"];

$sql = sprintf('INSERT INTO peliculas(titulo, sinopsis, image) values ("%s", "%s", "%s")',
    $titulo,
    $sinopsis,
    $imagen
);

$result = $conn->query($sql);

if ($result) {
    echo("Agregado con exito");
} else {
    die("Error al agregar pelicula");
}

?>