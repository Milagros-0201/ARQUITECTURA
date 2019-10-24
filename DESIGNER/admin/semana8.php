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
          <h2>Semana 8-1</h2>
          <h6>Sistemas Operativos</h6>

          <p></p>            
          <table class="table table-bordered" style="border-width: #32CD32">
            <tbody>
              <tr>
                <td rowspan="3" style="background-color: #2F4F4F">
                  <img src="../utilidades/sistemas.png">
                </td>
                <td style="background-color: #00CED1"><b>Descripcion De La Tarea</b></td>
              </tr>

              <tr>
                <td rowspan="3">En el mundo de la informática se denomina sistema operativo al programa, o conjunto de ellos, que gestiona los recursos físicos de un sistema informático (memoria, capacidad de procesamiento, espacio en disco duro, acceso a la red, etc.) y provee servicios a los programas de aplicación para que éstos funcionen correctamente...
                  <br>
                  <a class="enlace" target="_blank" href="https://drive.google.com/file/d/1NKTqatV9UAcSznRCO3MqLd9npVpWxstU/view"> ir a mi tarea</a>
                  <br>
                  </td>

              </tr>

              <tr>
              </tr>

            </tbody>
          </table>
        </div>
        <div class="container">
          <h2>Semana 8-2</h2>
          <h6>Tareas RAR</h6>

          <p></p>            
          <table class="table table-bordered" style="border-width: #32CD32">
            <tbody>
              <tr>
                <td rowspan="3" style="background-color: #2F4F4F">
<!--                   <img src="../utilidades/componentes.png">
 -->                </td>
                <td style="background-color: #00CED1"><b>Descripcion De La Tarea</b></td>
              </tr>

              <tr>
                <td rowspan="3">tarea del proyecto realizado semanales...
                  <br>
                  <a class="enlace" target="_blank" href="https://drive.google.com/drive/folders/1jKa0ndws_eOdPSgLY2yiXrmmV0zu9XYU"> ir a mi tarea</a>
                  <br>
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
