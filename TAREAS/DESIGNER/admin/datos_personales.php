<?php 
session_start();

//importando el DBacces
// require_once '../../DAL/DBAccess.php';

//SEGURIDAD DE ACCESO DESDE ACA
//seguridad primer parametro es el tiempo de vida dentro de la web y la segunda que tipo de usuario es
// DBAccess::seguridadUsuarios(3000,"ADMINISTRADOR");

//importando las clases y los dao
// require_once '../../BOL/estudiante.php';
// require_once '../../DAO/estudianteDAO.php';

//importando header
require '../secciones/admin/header.php';

// $Estudiante = new Estudiante();
// $EstudianteDAO = new EstudianteDAO();

// $mensajeFinalS = file_get_contents('../msj/mensaje_general.php');

// if(isset($_POST['btnGuardar']))
// {

// 	$Estudiante->__SET('nombres',            $_POST['inp_nom']);
// 	$Estudiante->__SET('apellido_pat',       $_POST['inp_apellido_pat']);
// 	$Estudiante->__SET('apellido_mat',       $_POST['inp_apellido_mat']);
// 	$Estudiante->__SET('dni',                $_POST['inp_dni']);
//     $Estudiante->__SET('fecha_nacimiento',   $_POST['date_fec']);
//     $Estudiante->__SET('genero',             $_POST['inp_gen']);
//     $Estudiante->__SET('domicilio',          $_POST['inp_dom']);
//     $Estudiante->__SET('nacionalidad',       $_POST['inp_nac']);
//     $Estudiante->__SET('nombre_padre',       $_POST['inp_nom_padre']);
//     $Estudiante->__SET('dni_padre',          $_POST['inp_dni_padre']);
//     $Estudiante->__SET('nombre_madre',       $_POST['inp_nom_madre']);
//     $Estudiante->__SET('dni_madre',          $_POST['inp_dni_madre']);
//     $Estudiante->__SET('operaciones',        $_POST['inp_ope']);
//     $Estudiante->__SET('enfermedades',       $_POST['inp_enf']);
//     $Estudiante->__SET('habilidades',        $_POST['inp_hab']);

//     $EstudianteDAO->Registrar_est($Estudiante);

//     echo $mensajeFinalS;
//     DBAccess::rederigir("agregar_estudiante.php");
// }
?>
<!-- ************************************************* CONTENIDO ******************************************************* -->
<br> 
<div class="container">
    <div class="row">
        <div class="col-12 border cont-from" style="background: white;">

            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data" ><br>
               <div class="titulo-usuario">      
                <h5 class="text-center"><i class="fas fa-user-friends"></i> DATOS PERSONALES DE ESTUDIANTE</h5>
            </div><br>
                <!-- <div class="form-group">
                  <label>Tipo Documento:</label>
                  <input type="text" class="form-control" name="" id="">
              </div> -->
              
              <div class="row">
                  <div class="col-4"> 
                    <div class="form-group">
                        <strong style="color: #17a2b8;">Nombre:</strong>
                        <input type="text" class="form-control" id="NOMBRE" name="inp_nom" value="<?php echo "MILAGROS YESENIA" ?>" disabled>
                    </div>
                </div>
                <div class="col-4"> 
                    <div class="form-group">
                        <strong style="color: #17a2b8;">Apellido Paterno:</strong>
                        <input type="text" class="form-control" id="APELLIDOP" name="inp_apellido_pat" value="<?php echo "SANCHEZ" ?>" disabled>
                    </div>
                </div>
                <div class="col-4"> 
                    <div class="form-group">
                        <strong style="color: #17a2b8;">Apellido Materno:</strong>
                        <input type="text" class="form-control" id="APELLIDOM" name="inp_apellido_mat" value="<?php echo "CHAVEZ" ?>" disabled>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-4"> 
                    <div class="form-group">
                        <strong style="color: #17a2b8;">Numero Documento:</strong>
                        <input type="text" class="form-control" name="inp_dni" value="<?php echo "21431223" ?>" disabled>
                    </div>
                </div>
                <div class="col-4"> 
                    <div class="form-group">
                        <strong style="color: #17a2b8;">Fecha Nacimiento:</strong>
                        <input class="form-control" name="date_fec" value="<?php echo "15/02/1821" ?>" disabled>
                    </div>
                </div>
                <div class="col-4">  
                    <div class="form-group"> 
                        <strong style="color: #17a2b8;">Genero:</strong>
                        <input class="form-control" name="date_fec" value="<?php echo "FEMENINO" ?>" disabled>                
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-4"> 
                    <div class="form-group">
                        <strong style="color: #17a2b8;">Domicilio:</strong>
                        <input type="text" class="form-control" id="APELLIDOM" name="inp_dom" value="<?php echo "AV. SIEMPRE VIVA" ?>" disabled>
                    </div>
                </div>   
                <div class="col-4">  
                    <div class="form-group">
                        <strong style="color: #17a2b8;">Correo:</strong>
                        <input type="text" class="form-control" id="APELLIDOM" name="inp_nac" value="<?php echo "milagrosyeseniasanchezchavez@gmail.com" ?>" disabled>
                    </div>
                </div>        
              </div>
        </form>
        <br>                    
    </div>
</div>
</div>
<br> 

<?php require '../secciones/admin/footer.php'; ?>
