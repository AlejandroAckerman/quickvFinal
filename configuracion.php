<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Configuración</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet">
        <link rel="shortcut icon" href="assets/img/icon.png">
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        
    </head>
 
  <body class="sb-nav-fixed">

  <?php include '../usuario/menu_usu.php'; ?>
            <div id="layoutSidenav_content">
               
          <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Configuración</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="../usuario/index.php">Mis cursos</a></li>
            <li class="breadcrumb-item active">Configuración</li>
        </ol>
            <div class="card mb-4">
        <div class="card-body">
            <h2>Cambiar correo electrónico o contraseña</h2>
            <form action="../php/cambiopass.php" method="POST">
                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Correo electrónico actual</label>
                    <input type="email" class="form-control" id="inputEmail" name="inputEmail" required value="<?php if(isset($_SESSION['usuario'])){echo $_SESSION['usuario']["email_usu"];} ?>">
                </div>
                <div class="mb-3">
                    <label for="contraseña_actual" class="form-label">Contraseña actual</label>
                    <input type="password" class="form-control" id="contraseña_actual" name="contraseña_actual" required>
                </div>
                <div class="mb-3">
                    <label for="nueva_contraseña" class="form-label">Nueva contraseña</label>
                    <input type="password" class="form-control" id="nueva_contraseña" name="nueva_contraseña" minlength="8" required>
                </div>
                <div class="mb-3">
                    <label for="confirmar_contraseña" class="form-label">Confirmar nueva contraseña</label>
                    <input type="password" class="form-control" id="confirmar_contraseña" name="confirmar_contraseña" minlength="8" required>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Guardar cambios</button>
            </form>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <h2>Eliminar cuenta</h2>
        <form action="../php/desactivar-cuenta.php" method="POST">
                <div class="mb-3">
                    <label for="contraseña_actual" class="form-label">Contraseña actual</label>
                    <input type="password" class="form-control" id="contraseña_actual" name="contraseña_actual" required>
                </div>
                <p>¿Estás seguro de que deseas eliminar tu cuenta? Esta acción no se puede deshacer.</p>
                <button type="submit" class="btn btn-danger">Eliminar cuenta</button>
            </form>
        </div>
    </div>
</div>
</main>
        
        <footer class="py-4 bg-light mt-auto">
                <?php include '../usuario/footer_usu.php'; ?>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        
        
    </body>
</html>
