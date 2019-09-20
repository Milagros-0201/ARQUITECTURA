<?php 
session_start();

require '../secciones/admin/header.php';

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
                        <input class="form-control" name="date_fec" value="<?php echo "14/11/1996" ?>" disabled>
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
                        <input type="text" class="form-control" id="APELLIDOM" name="inp_dom" value="<?php echo "Entrada paso de Gomez-Sunampe" ?>" disabled>
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
