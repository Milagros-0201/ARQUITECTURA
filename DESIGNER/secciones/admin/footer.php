<!-- Opcional: enlazando el JavaScript de Bootstrap -->
<script src="../tema/js/jquery-3.4.1.min.js"></script>
<script src="../tema/js/bootstrap.min.js"></script>
<script src="../tema/js/jquery.mask.js"></script>
<script src="https://kit.fontawesome.com/0b1730660b.js"></script>
<script src="../tema/js/moment.js"></script>
<script type="text/javascript" src="../tema/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="../tema/js/notify.js"></script>

<script type="text/javascript">

    // function mostrarAlerta(){
    //     $.notify({
    //             // custom notification message
    //             message: "Le quedan menos de un minuto para que su sesión finalice",
    //             // 'default', 'info', 'error', 'warning', 'success'
    //             status: "error",
    //             // timeout in ms
    //             timeout: 4000,
    //             // 'top-center','top-right', 'bottom-right', 'bottom-center', 'bottom-left'
    //             pos: 'top-center',
    //             // z-index style for alert container
    //             zIndex: 10400,
    //             // Function to call on alert close
    //             onClose: function() {}
    //         });
    // }

    var time = 2000;

    setInterval(function() { 
        var parametros = {
            "time_user": time
        };

        $.ajax({
            url : "../ajax/tiempo_vida.php",
            type: "POST",
            data : parametros,
            success: function(data){
               if (data.data.tiempo_restante > 234 && time == 2000) {
                mostrarAlerta();
                time = 1000000;
            }
        }
    });
    }, time);


    $('#datetimepicker2').datetimepicker({
        locale: 'es',
        format: 'DD-MM-YYYY' 
    });

    $(document).ready(function() {

      $('[data-toggle=offcanvas]').click(function() {
        $('.row-offcanvas').toggleClass('active');
    });
  });


    function jqUpdateSize(){
        // Get the dimensions of the viewport
        var width = $(window).width();
        var heightW = $(window).height();
        var heightD = $(document).height();
        var height = 0;

        if (heightW>heightD) {
            height += heightW;
        }else{
            height += heightD;
        }

        console.log(heightW+"w - d"+heightD+" - h"+height);
        $('#jqWidth').html(width);
        $('#jqHeight').html(height);
        $('.menu-adm').css(
        {
            height:  height,
            overflow:" hidden"
        }
        );
    }
        $(document).ready(jqUpdateSize);    // When the page first loads
        $(window).resize(jqUpdateSize);     // When the browser changes size



    $('#btnBuscarPersonaAgrUsu').click(function(e){
            var value = $("#inpDocumentoAgrUsu").val().length;
            if (value>0) {
                buscarPersonaDocumento();
            }else{
                alert("Ingrese un numero");
            }
        });

    function FX_passGenerator(form,element) {
          var thePass = "";
          var randomchar = "";
          var numberofdigits = Math.floor((Math.random() * 7) + 6);
          for (var count=1; count<=numberofdigits; count++) {
            var chargroup = Math.floor((Math.random() * 3) + 1);
            if (chargroup==1) {
              randomchar = Math.floor((Math.random() * 26) + 65);
          }
          if (chargroup==2) {
              randomchar = Math.floor((Math.random() * 10) + 48);
          }
          if (chargroup==3) {
              randomchar = Math.floor((Math.random() * 26) + 97);
          }
          thePass+=String.fromCharCode(randomchar);
      }
      eval('document.'+form+'.'+element+'.value = thePass');
  }

  function mayus(e) {
    e.value = e.value.toUpperCase();
  }

function validar_campo(evento){
 evento.value = evento.value.replace(/[^0-9]/g,"");
}


function caracteresCorreoValido(email, div){
    console.log(email);
    //var email = $(email).val();
    var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);

    if (caract.test(email) == false){
        $(div).hide().removeClass('hide').slideDown('fast');

        return false;
    }else{
        $(div).hide().addClass('hide').slideDown('slow');
//        $(div).html('');
        return true;
    }
}

$('#NOMBRE').bind('keypress', function(event) {
                var regex = new RegExp("^[a-zA-Z ]+$");
                var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
                if (!regex.test(key)) {
                    event.preventDefault();
                    return false;
                }
            });
$('#APELLIDOP').bind('keypress', function(event) {
                var regex = new RegExp("^[a-zA-Z ]+$");
                var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
                if (!regex.test(key)) {
                    event.preventDefault();
                    return false;
                }
            });
$('#APELLIDOM').bind('keypress', function(event) {
                var regex = new RegExp("^[a-zA-Z ]+$");
                var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
                if (!regex.test(key)) {
                    event.preventDefault();
                    return false;
                }
            });

function buscarPersonaDocumento() {

            var parametros = {
                "documentoPersona": $('#inpDocumentoAgrUsu').val()
            };

            $.ajax({
                data: parametros,
                url: '../ajax/buscar_persona.php',
                type: 'post',
                beforeSend: function() {
                    $("#resultado").html("Procesando, espere por favor...");
                },
                success: function(data) {

                    if (data.success === 1) {
                        $('#inpDocumentoAgrUsu').css({'border':'1px solid green'});

                        $('#inpNombre').val("" + data.data.nombre);
                        $('#inpApellido_paterno').val(""+data.data.apellido_paterno);
                        $('#inpApellido_materno').val("" + data.data.apellido_materno);
                        $('#inpSexo').val("" + data.data.sexo);                        
                        $('#inpFecha_nacimiento').val("" + data.data.fecha_nacimiento);
                        $('#inpCorreo').val("" + data.data.correo);
                        $('#inpIdPersonaAgrUsu').val("" + data.data.id_persona); 

                    } else {
                        $('#inpDocumentoAgrUsu').css({'border':'1px solid red'});
                        alert("Persona no encontrado");
                        $('#pr_nombre').val("");
                        $('#pr_apellidoP').val("");
                        $('#pr_apellidoM').val("");
                        $('#pr_FechaNacimiento').val("");
                        $('#inpCorreoElectronico').val("");
                    }

                },
                error: function() {

                }
            });
        }

        $('#btnBuscarPersonaAgrUsu').click(function(e){
            var value = $("#inpDocumentoAgrUsu").val().length;
            if (value>0) {
                buscarPersonaDocumento();
            }else{
                alert("Ingrese un numero");
            }
        });



    function buscar_Nombre_usuario() {

            var parametros = {
                "nombreUsuario": $('#inpNombreUsuAsigUsu').val()
            };

            $.ajax({
                data: parametros,
                url: '../ajax/usuario_ambiente.php',
                type: 'post',
                beforeSend: function() {
                    $("#resultado").html("Procesando, espere por favor...");
                },
                success: function(data) {

                    if (data.success === 1) {
                     $('#inpNombreUsuAsigUsu').css({'border':'1px solid green'});

                     $('#inpId_usuario').val("" + data.data.id_usuario);                      
                     $('#inpTipoUsu').val("" + data.data.tipo_usuario); 
                     $('#inp_estado').val("" + data.data.estado); 
                    } else {
                        $('#inpNombreUsuAsigUsu').css({'border':'1px solid red'});
                        alert("usuario no encontrado");
                        $('#pr_tipo_usuario').val("");
                        $('#pr_estado').val("");
                    }

                },
                error: function() {

                }
            });
        }


        $('#btnBuscarNomUsuAsigUsu').click(function(e){
            var value = $("#inpNombreUsuAsigUsu").val().length;
            if (value>0) {
                buscar_Nombre_usuario();
            }else{
                alert("Ingrese nombre de usuario");
            }
        });    
    </script>

</div>
<!--/col-->
</div>
<!--/row-->

</div>
<!--/main col-->
<!--/.container-->
</body>

</html>