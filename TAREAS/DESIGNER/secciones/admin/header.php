<!doctype html>
<html lang="es">

<head>
    <!-- Etiquetas <meta> obligatorias para Bootstrap -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Enlazando el CSS de Bootstrap -->
    <link rel="stylesheet" href="../tema/css/bootstrap.min.css">
    <link rel="stylesheet" href="../tema/css/tema.css">
    <link rel="stylesheet" href="../tema/css/tempusdominus-bootstrap-4.min.css" />
    <link rel="stylesheet" href="../tema/css/from_tab.css"> 
    <title> ->> Sistema de Tareas <<- </title>
</head>

<body>
<!-- oncontextmenu="return false" onkeydown="return false" -->
<!--https://www.codeply.com/go/q0viC0Xu3D/bootstrap-4-multilevel-sidebar-_-hover-->

    <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-darkl mb-3">
    <div class="flex-row d-flex">
        <button type="button" class="navbar-toggler mr-2" data-toggle="offcanvas" title="Toggle responsive left sidebar">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="collapsingNavbar">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <!-- <img src="../tema/img/logo-ugel.png" class="img-fluid img-logo" height="60px"> -->
              <!-- <img src="https://upload.wikimedia.org/wikipedia/commons/2/21/Logo_del_Ministerio_de_Educaci%C3%B3n_del_Per%C3%BA_-_MINEDU.png" style="font-size: 12px; max-width: 200px; max-height: 100px;" class="img-fluid img-logo"> -->           
            </li>
          </ul>
          
          <div class="titulo-usuario">      
                <h4 class="text-center">SISTEMA DE REGISTRO DE TAREAS</h4>
          </div>

        <ul class="navbar-nav ml-auto">
           <!--  -->
        </ul>
    </div>
</nav>
<div class="container-fluid" id="main">
    <div class="row row-offcanvas row-offcanvas-left">
        <div class="sidebar-offcanvas bg-light pl-0" id="sidebar" role="navigation">
            <ul class="nav flex-column sticky-top pl-0 pt-5 mt-3 menu-adm">
                <div class="user-panel">
                
                    <div class="float-left image">
                    <img src="https://creamas.org/wp-content/themes/creamas/image/comment_avatar.png" class="rounded-circle" alt="User Image">
                        <!-- <img src="http://via.placeholder.com/160x160" class="rounded-circle" alt="User Image"> -->
                    </div>
                    <div class="float-left info">
                    <!--Nombre de usuario y tipo_usuario (ADMINISTRADOR)-->
<!--                     <p><?php echo $_SESSION['usuario'] ?></p>
 -->                        <strong id="u-nombre"></strong>
                        <a><i class="fas fa-bell"></i> ADMINISTRADOR</a>
                        <br>
                        <br>
                        <strong>MILAGROS SANCHEZ CHAVEZ</strong>
                    </div>
                </div>
                <div class="divider-li">
                    <i class="fas fa-boxes"></i><a href="#">GESTION DE ESTUDIANTE</a>
                </div>
                <li>
                    <i class="fas fa-plus-circle"></i>
                    <a href="index.php">Inicio</a>
                </li>

                <li>
                    <i class="fas fa-plus-circle"></i>
                    <a href="datos_personales.php">Mis Datos</a>
                </li>
                <div class="divider-li">
                    <i class="fas fa-boxes"></i><a href="#">GESTION DE TAREAS</a>
                </div>
                
                <!-- <li>
                    <i class="fas fa-search"></i>
                    <a href="semana1.php">Semana 1</a>
                </li> -->

                <li>
                    <i class="fas fa-search"></i>
                    <a href="semana2.php">Semana 2</a>
                </li>
                <li>
                    <i class="fas fa-search"></i>
                    <a href="semana3.php">Semana 3</a>
                </li>
                <li>
                    <i class="fas fa-search"></i>
                    <a href="semana4.php">Semana 4</a>
                </li>
               
            </ul>
        </div>
        <!--/col-->

        <div class="col main pt-5 mt-3">