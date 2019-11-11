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

        
       <!--  <div class="container">
          <h2>Semana 9-1</h2>
          <h6>Cliente Servidor - Organizador Grafico</h6>

          <p></p>            
          <table class="table table-bordered" style="border-width: #32CD32">
            <tbody>
              <tr>
                <td rowspan="3" style="background-color: #2F4F4F">
                  <img src="../utilidades/mapa.png">
                </td>
                <td style="background-color: #00CED1"><b>Descripcion De La Tarea</b></td>
              </tr>

              <tr>
                <td rowspan="3">se desarrollara un mapa donde se detallara todo lo referente a cliente servidor...
                  <br>
                  <a class="enlace" target="_blank" href="https://drive.google.com/file/d/1UoD9UpK7xb-prAdJu9wDsj6OQUW60kB3/view"> ir a mi tarea</a>
                  <br>
                  </td>

              </tr>

              <tr>
              </tr>

            </tbody>
          </table>
        </div> -->
      </div>
    </tbody>

  </form>   
</div>
</div>
</div>
<?php require '../secciones/admin/footer.php'; ?>
