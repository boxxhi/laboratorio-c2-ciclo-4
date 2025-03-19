<?php 

include "../db/db_connect.php";

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "Metodo invalido";
    exit();
}

$pelicula_id = $_POST['id'];
$titulo = $_POST["titulo"];
$sinopsis = $_POST["sinopsis"];
$imagen = $_POST["imagen"];

$sql = sprintf('UPDATE peliculas SET titulo = "%s", sinopsis = "%s", image = "%s" WHERE id = %s', 
    $titulo,
    $sinopsis,
    $imagen,
    $pelicula_id
);

$result = $conn->query($sql);

if ($result) {
    echo("Agregado con exito");
} else {
    die("Error al agregar pelicula");
}

?>