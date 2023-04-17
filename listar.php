<?php
    include("conexion.php");

    $pru = conexion();

    $sql = "SELECT idpersona, documento, nombre, apellido, direccion, celular FROM persona";
    $resultado = pg_query($pru, $sql);

    pg_close($pru);
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Pagina Principal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
  </head>

  <body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal"><img src="index2.png" style="width: 30px; position: absolute;"> <span style="position: relative; left: 35px;">Index</span></h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="/index.php">Registrar</a>
        <a class="p-2 text-dark" href="/listar.php">Listar</a>
        <a class="p-2 text-dark" href="#">Actualizar</a>
        <a class="p-2 text-dark" href="#">Eliminar</a>
      </nav>
    </div>
    <h1 class="jumbotron-heading">Listado de personas</h1>

    <table class="table">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Documento</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Email</th>
            <th scope="col">Celular</th>

        </tr>
        <?php while ($fila = pg_fetch_assoc($resultado)) { ?>
            <tr>
                <td scope="row"><?php echo $fila['idpersona']; ?></td>
                <td scope="row"><?php echo $fila['documento']; ?></td>
                <td scope="row"><?php echo $fila['nombre']; ?></td>
                <td scope="row"><?php echo $fila['apellido']; ?></td>
                <td scope="row"><?php echo $fila['direccion']; ?></td>
                <td scope="row"><?php echo $fila['celular']; ?></td>
            </tr>
        <?php } ?>
    </table>

</body>
</html>