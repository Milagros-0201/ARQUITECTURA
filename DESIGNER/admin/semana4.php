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
          <h2>Semana 4</h2>
          <h6>Circuito combinacionales</h6>

          <p></p>            
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td rowspan="3">
                  <img src="../utilidades/canva.png">
                </td>
                <td ><b>Descripcion De La Tarea</b></td>
              </tr>

              <tr>
                <td rowspan="3">Este tema esta formado por funciones lògicas elementals como : AND, OR, NAND, NOR, ETC, que tiene un determinado nùmero de entradas y salidas..
                  <br>
                  <a class="enlace" target="_blank" href="https://www.canva.com/design/DADlI5je9DQ/4ZxOLnVuSLhI42IGQyiWbQ/view?utm_content=DADlI5je9DQ&utm_campaign=designshare&utm_medium=link&utm_source=sharebutton"> ir a mi tarea</a>
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
