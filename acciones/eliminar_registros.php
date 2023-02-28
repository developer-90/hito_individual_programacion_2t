<!doctype html>
<html lang="en">
  <head>
    <title>Inicio sesion</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <br><br><br>
    <div class="container text-center">
      <h3>ELIMINAR REGISTROS</h3>
      <br><br>
      <table class="table table-dark table-striped text-center">
        <tr>
          <th>ID</th>
          <th>EMAIL</th>
          <th>TITULO</th>
          <th>CONTENIDO</th>
          <th>FECHA</th>
          <th>ELIMINAR</th>
        </tr>
        <?php
        include_once("../config/db.php");

        $query="SELECT * FROM registros";
        $result = $conn->query($query);

        while ($mostrar = $result->fetch()) {
          echo "<tr>";
          echo "<td>".$mostrar['id']."</td>";
          echo "<td>".$mostrar['email']."</td>";
          echo "<td>".$mostrar['titulo']."</td>";
          echo "<td>".$mostrar['contenido']."</td>";
          echo "<td>".$mostrar['fecha']."</td>";
          echo "<td>
                  <form action='validar_actualizar.php' method='POST'>
                  <input type='hidden' name='id' value='".$mostrar['id']."'>
                  <input type='hidden' name='email' value='".$mostrar['email']."'>
                  <input type='reset' name='eliminar' value='Eliminar'>
                  </form>
                </td>";    
        }
        ?>
      </table>
      <br><br><h1>PROXIMAMENTE</h1>
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