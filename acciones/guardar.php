<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
        include_once("../config/db.php");

        // creamos variables y con el metodo POST obtener el valor indicado por el usuario
        $email = $_POST['email'];
        $titulo = $_POST['titulo'];
        $contenido = $_POST['contenido'];
        $fecha = $_POST['fecha'];
        // guarda los bits
        $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

        // insert de los valores introducidos por usuario
        $query = "INSERT INTO registros (email,titulo,contenido,fecha,imagen) VALUES('$email','$titulo','$contenido','$fecha','$imagen')";
        $result = $conn->query($query);

        if($result){
            echo("<br><br>");
            echo "<h2>Registro completado con exito</h2>";
    ?>
            <br><br>
            <a href="../index.html" class="btn btn-success">Inicio</a>
    <?php
        } else {
            echo "<p>Se ha producido un error</p>";
            echo("<br><br>");
    ?>
            <a href="../formulario.php" class="btn btn-success">Volver</a>
    <?php
        }
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
