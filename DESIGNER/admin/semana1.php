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
          <h2>Semana 1</h2>
          <h6>Resumen de Números Binarios en Mindomo</h6>

          <p></p>            
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td rowspan="3">
                  <img src="../utilidades/binario.png">
                </td>
                <td ><b>Descripcion De La Tarea</b></td>
              </tr>

              <tr>
                <td rowspan="3">Esta propiedad es análoga al atributo cellspacing que se usaba tradicionalmente en HTML para establecer una separación entre celdas en las tablas. En el caso de la antigua propiedad cellpadding, se puede obtener un efecto análogo en tablas simplemente usando la propiedad padding.
                  <br>
                  <a class="enlace" target="_blank" href="https://www.mindomo.com/es/mindmap/numeros-binarios-86472755c34249af8526fa0580fbe2b2"> ir a mi tarea</a>

                </td>

              </tr>

              <tr>
              </tr>

            </tbody>
          </table>
        </div>
        <div class="container">
          <h2>Semana 1-2</h2>
          <h6>balotario de ejercicios con numeros binarios</h6>
          <p></p>            
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td rowspan="3">
                  <img src="../utilidades/binario.png">
                </td>
                <td ><b>Descripcion Tarea</b></td>
              </tr>

              <tr>
                <td rowspan="3">Esta propiedad es análoga al atributo cellspacing que se usaba tradicionalmente en HTML para establecer una separación entre celdas en las tablas. En el caso de la antigua propiedad cellpadding, se puede obtener un efecto análogo en tablas simplemente usando la propiedad padding.
                  <br>
                  <a class="enlace" target="_blank" href="https://www.mindomo.com/es/mindmap/numeros-binarios-86472755c34249af8526fa0580fbe2b2"> ir a mi tarea</a></td>

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
