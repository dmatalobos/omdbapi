<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $_ENV['ASSETS'] ?>css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="navbar-brand">Films</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" name="search" placeholder="Buscar" aria-label="Buscar">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
      </div>
    </nav>

    <main role="main" class="container mt-5">

        <div class="row pt-5">
            <div class="col-sm text-center">
                <h1>Buscador de pelícuas en IMDb</h1>
                <?php include $partial.'.php'; ?>
            </div>  
        </div>

    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script type="text/javascript" src="<?php echo $_ENV['ASSETS'] ?>js/bootstrap.min.js"></script>
  </body>
</html>
