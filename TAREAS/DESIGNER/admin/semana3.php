<?php 
session_start();

//importando header
require '../secciones/admin/header.php';


?>
<!-- ************************************************* CONTENIDO ******************************************************* -->

<!-- AQUI SE OBTIENE Y SE MUESTRA EN UNA TABLA LOS SIGUIENTES DATOS DE LA PERSONA --> 
<br> 
<div class="container">
  <div class="row">
    <div class="col-12 border cont-from" style="background: white;">
      <br> 
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">
       <div class="titulo-usuario">      
        <h5 class="text-center"><i class="fas fa-user-friends"></i> Mis Tareas</h5>
      </div>

      <tbody>
        <br>

        
        <div class="container">
          <h2>Semana 3</h2>
          <h6>Mapa de Algebra de Boole</h6>

          <p></p>            
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td rowspan="3">
                  <img src="../utilidades/boole.png">
                </td>
                <td ><b>Descripcion De La Tarea</b></td>
              </tr>

              <tr>
                <td rowspan="3">Es un mètodo para simplificar los circuitos lògicos en electrònica digital que esquematiza las operaciones lògicas, que estarà resumida en la herramienta Mindomo.
                  <br>
                  <a class="enlace" target="_blank" href="https://www.mindomo.com/es/mindmap/algebra-de-boole-748e7a6f32374435808b189c168cb8b7"> ir a mi tarea</a>
                  <br>
                  <br>
<!--                   <a class="btn btn-success" href="../utilidades/TIC.docx">Descargar tarea</a>
 -->                </td>

              </tr>

              <tr>
              </tr>

            </tbody>
          </table>
        </div>
        <div class="container">
          <h2>Semana 3-1</h2>
          <h6>ejercicios propuestos</h6>

          <p></p>            
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td rowspan="3">
                  <img src="../utilidades/ejercicios.png">
                </td>
                <td ><b>Descripcion De La Tarea</b></td>
              </tr>

              <tr>
                <td rowspan="3">Ejercicios propuestos para desarrollar ejercicios algebraicas que ayudan en el conocimientos de los estudiantes.
                  <br>
                  <a class="enlace" target="_blank" href="https://drive.google.com/file/d/1tsgfZ7e9NZVqpV11hitvx1KBx2Qk_mia/view?usp=drive_open"> ir a mi tarea</a>
                  <?php
                  $folder ="../utilidades/TIC.docx";
                  $file = 'TIC.docx';
                  if(file_exists($folder.$file)) {
  //mime type
                    header('Content-type: application/pdf');
  //filename indica el nombre del archivo, en caso de que se quiera bajar.
  //No necesita ser el mismo que el archivo original, puede ser diferente.
                    header('Content-Disposition: inline; filename="'.$file.'"');
                    header('Content-Transfer-Encoding: binary ');

                    echo file_get_contents($file);
                  }
                  ?>








                </td>

              </tr>

              <tr>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </tbody>

  </form>   
</div>
</div>
</div>
<?php require '../secciones/admin/footer.php'; ?>
