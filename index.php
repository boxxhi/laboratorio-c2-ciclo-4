<?php
include "db/db_connect.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/card.css">

    <script src="js/propmt.js" defer></script>
    <script src="js/ajax.js" defer></script>
</head>
<body>

    <?php
        include "./header.php";
    ?>
    <main class="hero">
       
        <div class="mt-1">
            <button type="button" class="p-2 bg-green btn" id="new">+ Nuevo</button>
            <section class="flex flex-wrap gap-1 mt-2 justify-center">

            <?php 

                $sql = "SELECT * FROM peliculas;";
                $result = $conn->query($sql);

                while($row = $result->fetch_assoc()) {

                    echo "<article class=\"card\">";

                    echo "<div>";
                    echo sprintf('<img src="%s" alt="image">', $row['image']);
                    echo "</div>";

                    echo '<h3>' . $row['titulo'] .'</h3>';
                    echo '<p>' . $row['sinopsis'] .'</p>';

                    echo '<button type="button" class="mr-1 mt-3 p-2 bg-orange btn edit-btn" data-id="'.$row['id'].'">Editar</button>';
                    echo '<button type="button" class="mt-3 p-2 bg-red btn" onclick="deleteAjax(' . $row['id'] .')">Eliminar</button>';
                    echo "</article>";
                   
                }

            ?>
            </section>
        </div>
        

    </main>

    <div class="modal" id="new-modal">
        <div class="modal-content">
            <span class="close">&times;</span>

            <p class="error">Ha ocurrido un error</p>
            
            <h1 style="text-align: center;">Nueva Pelicula</h1>
            <form method="POST" class="flex flex-column width-50 mt-2 mlr-auto" action="actions/new.php">
                <input type="text" name="titulo" placeholder="Titulo" class="p-2 mb-1">
                <textarea name="sinopsis" placeholder="Sinopsis" class="p-2 mb-1"></textarea>
                <input type="text" name="imagen" placeholder="Link de la imagen" class="p-2 mb-1">

                <input type="submit" class="p-2 bg-green btn" value="Agregar">

            </form>
        </div>
    </div>

    <div class="modal" id="edit-modal">
        <div class="modal-content">
            <span class="close">&times;</span>

            <p class="error">Ha ocurrido un error</p>
            
            <h1 style="text-align: center;">Editar Pelicula</h1>
            <form method="POST" class="flex flex-column width-50 mt-2 mlr-auto" action="actions/edit.php">
                <input type="text" name="titulo" placeholder="Titulo" class="p-2 mb-1">
                <textarea name="sinopsis" placeholder="Sinopsis" class="p-2 mb-1"></textarea>
                <input type="text" name="imagen" placeholder="Link de la imagen" class="p-2 mb-1">

                <input type="submit" class="p-2 bg-green btn" value="Editar">

            </form>
        </div>
    </div>

    <?php
        include 'footer.php';
    ?>

</body>
</html>