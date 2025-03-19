<?php
$host = "localhost";
$dbname = "laboratorio1";
$username = "root";
$password = "";

try {
    $conn = new mysqli($host, $username, $password, $dbname);

} catch(mysqli_sql_exception $e) {
    echo "Error al conectar";
    http_response_code(500);
    exit(1);
}


?>