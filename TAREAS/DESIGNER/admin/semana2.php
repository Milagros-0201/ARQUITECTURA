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
          <h2>Semana 2</h2>
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
                <td rowspan="3">Es un sistema de numeraciòn en el que los nùmeros se representan utilizando solamente dos cigras: cero y uno. Este resumen del tema detallara su concepto y propiedadesen la herramienta Mindomo.
                  <br>
                  <a class="enlace" target="_blank" href="https://www.mindomo.com/es/mindmap/numeros-binarios-86472755c34249af8526fa0580fbe2b2"> ir a mi tarea</a>

                </td>

              </tr>

              <tr>
              </tr>

            </tbody>
          </table>
        </div><div class="container">
          <h2>Semana 2</h2>
          <h6>Balotario de ejercicios de numeros binarios</h6>

          <p></p>            
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td rowspan="3">
                  <img src="../utilidades/balotario.png">
                </td>
                <td ><b>Descripcion De La Tarea</b></td>
              </tr>

              <tr>
                <td rowspan="3">Ejercicios propuestos para fortalecer el tema de Nùmeros Binarios.
                  <br>
                  <a class="enlace" target="_blank" href="https://drive.google.com/file/d/14xWdY53XZg-np8UV35_b2201-BIp49Uv/view"> ir a mi tarea</a>

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
