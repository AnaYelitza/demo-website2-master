<!doctype html>
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
        <a class="p-2 text-dark" href="#">Registrar</a>
        <a class="p-2 text-dark" href="#">Actualizar</a>
        <a class="p-2 text-dark" href="#">Eliminar</a>
      </nav>
    </div>

    <div class="container px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Registrando datos with Railway</h1>
      <p class="lead">PostgreSQL + PHP</p>
    </div>

    <div class="container">
      <div class="card">
        <div class="card-body">
          <form autocomplete="off" action="index-post.php" method="post">
            <div class="row">
              <div class="col-sm-4 col-4">
                <div class="form-group">
                  <label>Nro Documento</label>
                  <input type="tex" name="doc" maxlength="8" class="form-control">
                </div>
              </div>
              <div class="col-sm-4 col-4">
                <div class="form-group">
                  <label>Nombre</label>
                  <input type="tex" name="nom" class="form-control">
                </div>
              </div>
              <div class="col-sm-4 col-4">
                <div class="form-group">
                  <label>Apellidos</label>
                  <input type="tex" name="ape" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4 col-4">
                <div class="form-group">
                  <label>Direccion</label>
                  <input type="tex" name="dir" class="form-control">
                </div>
              </div>
              <div class="col-sm-4 col-4">
                <div class="form-group">
                  <label>Celular</label>
                  <input type="tex" name="cel" class="form-control">
                </div>
              </div>
            </div>
            <input type="submit" class="btn btn-primary float-right" value="Registrar">
          </form>
        </div>
      </div>

      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <img class="mb-2" src="https://www.svgrepo.com/show/508391/uncle.svg" alt="" width="24" height="24">
            <small class="d-block mb-3 text-muted">&copy; 2023-1</small>
          </div>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
  </body>
</html>
