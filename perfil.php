<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Perfil</title>
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
    <h1 class="mt-4">Mi perfil</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item"><a href="../usuario/index.php">Inicio</a></li>
      <li class="breadcrumb-item active">Perfil</li>
    </ol>
    <p>Es importante mantener tu perfil actualizado para que los demás usuarios puedan conocer información precisa sobre ti. Para editar tu perfil y guardar los cambios, debes hacer clic en el botón "Editar".</p>
    <br>
        <div class="row">
      <div class="col-md-4 float-start">
        <div class="card">
          <img src="../usuario/assets/img/perfil.gif" alt="Imagen de perfil">
        </div>
      </div>

      <div class="col-md-8 float-end">
          <form action="../php/proceso.php" method="POST">
                    <?php
  if (isset($_SESSION['mensaje'])) {
    echo $_SESSION['mensaje'];
    unset($_SESSION['mensaje']);
  }
?>
<div class="mb-3">
    
  <label for="nombre" class="form-label">Nombre</label>
  <input type="text" class="form-control" id="nombre" name="nombre" value="<?php if(isset($_SESSION['usuario'])){echo $_SESSION['usuario']["nombre_usu"];} ?>" disabled>
</div>
<div class="mb-3">
  <label for="apellido" class="form-label">Apellidos</label>
  <input type="text" class="form-control" id="apellido" name="apellido" value="<?php if(isset($_SESSION['usuario'])){echo $_SESSION['usuario']["apellidos_usu"];} ?>" disabled>
</div>
<div class="mb-3">
  <label for="email" class="form-label">Correo electrónico</label>
  <input type="email" class="form-control" id="email" name="email"  value="<?php if(isset($_SESSION['usuario'])){echo $_SESSION['usuario']["email_usu"];} ?>" disabled>
</div>
<div class="mb-3">
  <label for="telefono" class="form-label">Teléfono</label>
  <input type="tel" class="form-control" id="telefono" name="telefono"  value="<?php if(isset($_SESSION['usuario'])){echo $_SESSION['usuario']["telefono_usu"];} ?>" disabled>
</div>

<div class="mb-3">
  <label for="fechaNacimiento" class="form-label">Fecha de nacimiento</label>
  <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento"  value="<?php if(isset($_SESSION['usuario'])){echo $_SESSION['usuario']["fecha_nacimiento_usu"];} ?>" disabled>
</div>
  <div class="mb-3">
 <div class="mb-3">
       <label for="pais" class="form-label">Pais</label>
  <select class="form-select" id="selectPais" name="pais" disabled>
    <?php
      $paises = array("Argentina", "Bolivia", "Brasil", "Chile", "Colombia", "Costa Rica", "Cuba", "Ecuador", "El Salvador", "Guatemala", "Honduras", "México", "Nicaragua", "Panamá", "Paraguay", "Perú", "Puerto Rico", "República Dominicana", "Uruguay", "Venezuela");
      foreach ($paises as $pais) {
        echo '<option value="' . $pais . '"';
        if (isset($_SESSION['usuario']) && $_SESSION['usuario']["pais_usu"] == $pais) {
          echo ' selected';
        }
        echo '>' . $pais . '</option>';
      }
    ?>
  </select>
</div>
<button id="editButton" class="btn btn-secondary">Editar</button>
<button type="submit" class="btn btn-primary" id="guardarCambios" disabled>Guardar cambios</button>

<script>
const selectPais = document.querySelector('#selectPais');
const editButton = document.querySelector('#editButton');
const inputs = document.querySelectorAll('input');
const guardarCambiosButton = document.querySelector('#guardarCambios');

editButton.addEventListener('click', (event) => {
  event.preventDefault();

  inputs.forEach(input => {
    input.disabled = !input.disabled;
  });

  guardarCambiosButton.disabled = !guardarCambiosButton.disabled;
  
  if (!selectPais.disabled) {
    selectPais.disabled = true;
  } else {
    selectPais.disabled = false;
  }
});
</script>



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
