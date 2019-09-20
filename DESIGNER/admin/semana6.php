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
          <h2>Semana 6</h2>
          <h6>Componentes Internos Del Computador</h6>

          <p></p>            
          <table class="table table-bordered" style="border-width: #32CD32">
            <tbody>
              <tr>
                <td rowspan="3" style="background-color: #2F4F4F">
                  <img src="../utilidades/componentes.png">
                </td>
                <td style="background-color: #00CED1"><b>Descripcion De La Tarea</b></td>
              </tr>

              <tr>
                <td rowspan="3">Se detallaran todos los componentes que comforma el computador como placa madre,memoria, procesador, fuente de poder...
                  <br>
                  <a class="enlace" target="_blank" href="https://www.canva.com/design/DADl_Ac4duM/PaVbUFFNOmTEN41Izhskhw/view?utm_content=DADl_Ac4duM&utm_campaign=designshare&utm_medium=link&utm_source=sharebutton"> ir a mi tarea</a>
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
