<!DOCTYPE html>
<html lang="en">

<head>
  <title>HTML</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-3 text-center">
  <?php
  $ip = $_SERVER['REMOTE_ADDR']; //obtiene la dirección IP del usuario
  $fecha = date('d-M-Y'); //obtiene la fecha con un formato especifico
  echo "Direccion IP ".$ip;
  echo "<br>Fecha: ".$fecha;
  $cookie = setcookie('info_cookie', $ip. ' ' .$fecha, time() + 3600); //crea la cookie con la información del usuario
  echo "<br>Cookie: ".$cookie;
  ?>
  </div>
  <div class="container mt-3">
    <div class="row">
      <div class="container  bg-info border">
        <h1 class="titulo text-center">HITO INDIVIDUAL</h1>
        <h2 class="subtitulo  text-center">PROGRAMACION</h2>
      </div>
      <div class="container">
        <hr class="col-6">
        <h3 class="titulo3">Item 1</h3>
        <div class="container">
          <img src="images/Servidor_Apache.JPG" class="mx-auto d-block">
        </div>
        <br><hr class="col-10"><br>
        <h3 class="titulo3">Item 2</h3>
        <p>La POO se basa en el concepto de clases y objetos. Los objetos puedes ser instanciados a partir de una clase,
          y ésta puede definir sus propiedades y comportamientos.</p>
        <p>La POE se basa en la recepción y respuesta de eventos que ocurren en el sistema, como acciones de usuarios
          (hacer clic, presionar una tecla, etc.). Se define un conjunto de eventos y se da una respuesta
          individualmente a cada uno de ellos mediante una función o método para que cuando se produzca el evento se
          ejecute la función o método de dicho evento.</p>
        <p>Los lenguajes de procedimentales pertenecen al grupo de los lenguajes imperativos y son aquellos que se basan
          en una estructura secuencial y jerárquica, y que ejecutan acciones de acuerdo con reglas precisas. Deben su
          nombre a que son lenguajes que indican a los ordenadores qué tienen que hacer y cómo deben hacerlo.</p>
        <hr class="col-10"><br>

        <h3 >Item 3</h3>
        <a href="formulario.php" class="btn btn-success">Ir al formulario</a>
        <br><hr class="col-10"><br>

        <h3>Item 4</h3>
        <p>NOTA: se muestra la imagen como texto ya que mostrarlo como binario tiene demasiados caracteres y no se ve limpio</p>
        <a href="acciones/ver_registros.php" class="btn btn-success">Ver Registros</a>
        <br><hr class="col-10"><br>

        <h3>Item 5</h3>
        <a href="auth.html" class="btn btn-success">Actualizar Registros</a>
        <a href="auth.html" class="btn btn-success">Eliminar Registros</a>
        <br><br><br><br>
      </div>
    </div>
  </div>
  <div class="bg-warning border container">
    <h4 class="text-center">Jose Antonio Ures Teba</h4>
    <h4 class="text-center">joseantonio.ures@campusfp.es</h4> 
  </div>
  <br><br>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>
</div>

</html>