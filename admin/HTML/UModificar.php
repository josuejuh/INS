<?php
session_start();
if(@$_SESSION['Usuario'] == ""){
  header ("Location: ../");
}else{

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>TADESA</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="icon" type="image/ico" href="img/talleres.ico"/>

    <link href="css/stylesheets.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <script type='text/javascript' src='js/plugins/jquery/jquery.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/jquery-ui.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/globalize.js'></script>
    <script type='text/javascript' src='js/plugins/bootstrap/bootstrap.min.js'></script>

    <script type='text/javascript' src='js/plugins/uniform/jquery.uniform.min.js'></script>
    <script type='text/javascript' src='js/plugins/tagsinput/jquery.tagsinput.min.js'></script>

    <script type='text/javascript' src='js/plugins/ibutton/jquery.ibutton.js'></script>

    <script type='text/javascript' src='js/plugins.js'></script>
    <script type='text/javascript' src='js/actions.js'></script>
    <script type='text/javascript' src='js/settings.js'></script>
</head>

<body class="bg-img-num1">
          <?php
          include 'Nav.php';
          ?>
          <div class="row">
              <div class="col-md-12">
                  <ol class="breadcrumb">
                      <li><a href="Inicio.php">Inicio</a></li>
                      <li class="active">Modificar Usuarios</li>
                  </ol>
              </div>
          </div>
        <div class="row">
          <div class="col-md-2">
          <?php
          include("Lateral.php")
          ?>
          </div>


      <?php
      include("conexion.php");

      $Usuario=$_REQUEST['Codigo'];

      $query = "SELECT * FROM Usuarios inner join Personas on Personas.CodPersona = Usuarios.CodPersona WHERE CodUsuario ='$Usuario'";
      $resultado= $conexion->query($query);
      $row = $resultado->fetch_assoc();
      ?>
        <div class="row">
          <form method="POST" action="MoUsuario.php?Codigo=<?php echo $row['CodUsuario']; ?>&CodPersona=<?php echo $row['CodPersona']; ?>" enctype="multipart/form-data">

            <div class="col-md-">
            </div>

            <div class="col-md-6">

                <div class="block block-drop-shadow">

                    <div class="header">
                        <h2>Modificar Usuario</h2>
                    </div>

                      <div class="content controls">
                        <div class="form-row">
                            <div class="col-md-3">Usuario:</div>
                            <div class="col-md-9">
                                <input type="text" name="usuario" value="<?php echo $row['Usuario']; ?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3">Nombre</div>
                            <div class="col-md-9">
                                <input type="text" name="nombre" value="<?php echo $row['Nombre']; ?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3">Apellido</div>
                            <div class="col-md-9">
                                <input type="text" name="apellido"value="<?php echo $row['Apellido']; ?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3">Contraseña:</div>
                            <div class="col-md-9">
                                <input type="password" name="clave" value="*********">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3">Correo:</div>
                            <div class="col-md-9">
                                <input type="text" name="correo" value="<?php echo $row['Correo']; ?>">
                            </div>
                        </div>

                        <div class="tar">
                        <button class="btn btn-default btn-clean">Guardar</button>
                    </div>
                </div>
                    </form>

                  </div>
              </div>
         </div>
     </div>
 </div>
</body>
</html>
<?php
}
?>