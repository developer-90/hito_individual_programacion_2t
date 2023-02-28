<?php
    include_once("../config/db.php");

    $query="SELECT * FROM registros";
    $result = $conn->query($query);
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Ver registros</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <br><br>
        <div class="container text-center">
            <h2 text-center>REGISTROS</h2>
            <hr class="col-3">
            <br>
            <table class="table table-dark table-striped text-center">
                <tr>
                    <th>ID</th>
                    <th>EMAIL</th>
                    <th>TITULO</th>
                    <th>CONTENIDO</th>
                    <th>PUBLICACION</th>
                    <th>IMAGEN</th>
                </tr>

                <?php

                while ($mostrar = $result->fetch())
                {
                    echo'<tr>
                        <td>'.$mostrar['id'].'</td>
                        <td>'.$mostrar['email'].'</td>
                        <td>'.$mostrar['titulo'].'</td>
                        <td>'.$mostrar['contenido'].'</td>
                        <td>'.$mostrar['fecha'].'</td>
                        <td>Imagen</td>
                        </tr>';
                        // <td>'.$mostrar['imagen'].'</td> : se mostraria la imagen en binario con exceso de caracteres
                }
                ?>

            </table>
        </div>
        <div class="container text-center">
        <br><a href="../index.php" class="btn btn-success">Inicio</a>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>