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
          <h2>Semana 10</h2>
          <h6>CLUSTER Y VIRTUALIZACION</h6>

          <p></p>            
          <table class="table table-bordered" style="border-width: #32CD32">
            <tbody>
              <tr>
                <td rowspan="3" style="background-color: #2F4F4F">
                  <img src="../utilidades/cluster.png">
                </td>
                <td style="background-color: #00CED1"><b>Descripcion De La Tarea</b></td>
              </tr>

              <tr>
                <td rowspan="3">
                  <STRONG>Entornos
de hospedaje y desarrollo de portales web</STRONG>
<br> Para la implementación de este entorno se han usado nodos HP DL360 G5 con HBAs FC con los que se accede a una SAN. Esto permite arrancar una máquina virtual, y su correspondiente portal web, en cualquiera de los nodos
                  <br>
                  <a class="enlace" target="_blank" href="https://www.canva.com/design/DADpy_ENTgM/3tsgtKmmEim0kOVJwqQlxQ/view?utm_content=DADpy_ENTgM&utm_campaign=designshare&utm_medium=link&utm_source=sharebutton"> ir a mi tarea</a>
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
