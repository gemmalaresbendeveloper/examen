<script type="text/javascript" src="_recursos/js/console_consultas.js"></script>
<link type="text/css" rel="stylesheet" href="_recursos/input-file/css/disenio_input2.css">
<div class="contendor_kn">
  <div class="panel panel-default">
    <div class="panel-heading">
       <label><h2><b>REGISTRAR CONSULTA</b></h2></label>
    </div>
    <div class="panel-body">
        <br>
        <form method="POST" id="create-form-documento">
          <div class="form-group col-md-12">
            <div class="col-md-6">
                  <label>Fecha Registro</label>
                  <div class=" input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" id="txtfecharegistro" name="txtfecharegistro" readonly style="color: rgb(25,25,51); background-color: rgb(255,255,255) solid 5px;color:#9B0000; text-align:center;font-weight: bold;" class="form-control"><br>
                  </div><br>
              </div>
              <div class="col-md-6">
              </div>
          </div>
          <div class="form-group">
            <div class="col-md-6">
              <label>Seleccione el Médico</label>
              <select id="combo_medico" name="idMedico"  class="form-control select2"></select>
            </div>
            <div class="col-md-6">
              <label>Seleccione el paciente</label>
              <!-- <select id="combo_tipodocumento" name="idtipodocu" class="form-control select2"></select> -->
              <select id="combo_paciente" name="idPaciente" class="form-control select2"></select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-10">
              <label>Seleccione el diagnóstico</label>
              <select id="combo_tipo_diagnostico" name="idDiagnostico" class="form-control select2"></select>
            </div>
            <div class="col-md-2">
              <label>Costo</label>
              <input type="text" id="txtCosto" name="txtCosto"   style="color: rgb(25,25,51); background-color: rgb(255,255,255) solid 5px;color:#9B0000; text-align:center;font-weight: bold;" class="form-control"><br>
          
            </div>
          </div>
          <div class="form-group">
            <input type="text" value="1" style="display: none"  name="idusuario">
            <div class="col-md-10 col-offset-1">
              <input type="text" id="txtiddocumento" name="iddocumento" hidden>
              <label>Tratamiento</label>
              <textarea class="form-control" rows="5"  id="txtTratamiento" name="txtTratamiento" style="resize: none" style="color: rgb(25,25,51); background-color: rgb(255,255,255) solid 5px;" placeholder="Ingresar Asunto ..." ></textarea>
            </div> 
          </div>
          <div class="form-group">
            <div class="col-md-10">
              <label>Fecha nacimiento paciente:</label>

              <input type="text" value="" name="fecha_paciente"  placeholder="AAAA/MM/DD"  id="fecha_paciente" onchange="fechaEdad(this.value)" class="form-control">
              <!-- <br><button class="btn btn-success" onclick="calcularEdad()"><strong> calcular</strong></button><br><br> -->
            </div>
            <div class="col-md-2">
              <label>Edad</label>
              <input type="text" id="txtEdadPaciente" name="txtEdadPaciente"  style="color: rgb(25,25,51); background-color: rgb(255,255,255) solid 5px;color:#9B0000; text-align:center;font-weight: bold;" class="form-control"><br>
          
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12" style="text-align: center;"><br>
              <br><button class="btn btn-success" onclick="Registrar_documento_post()"><strong> Registrar Consulta</strong></button><br><br>
            </div>
          </div>
        </form>
    </div>
  </div>
</div>
<!-- INICIO MODAL -->
<!-- <script type="text/javascript">TraerCodigoDocumento();</script> -->
<!-- <script type="text/javascript">Listar_tipodocumento_combo();</script>
<script type="text/javascript">Listar_areas_combo();</script> -->
<script type="text/javascript">
Listar_medicos_combo();
Listar_pacientes_combo();
Listar_diagnostico_combo();

</script>
<!--Fin Modal-->

<style type="text/css">
	.contendor_kn{
		padding: 10px;
	}
</style>
<script src="_recursos/input-file/js/bootstrap-uploader/file-upload.js"></script>
<script type="text/javascript">
  var f = new Date();
  txtfecharegistro.value= f.getFullYear() + "-" + (f.getMonth() +1) + "-" + f.getDate();
</script>
<script type="text/javascript">

function fechaEdad(fecha){

var hoy = new Date();
var cumpleanos = new Date(fecha);
var edad = hoy.getFullYear() - cumpleanos.getFullYear();
var m = hoy.getMonth() - cumpleanos.getMonth();

if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
    edad--;
}
var inputNombre = document.getElementById("txtEdadPaciente");
inputNombre.value = edad;
// // document.querySelector("#txtEdadPaciente").textContent = calcularEdad(fecha);
// document.querySelector("#txtEdadPaciente").textContent = edad;

}



// $("#fecha_paciente").keyup(function(){
// 		var fecha = $("#fecha_paciente").val();

//     var hoy = new Date();
//     var cumpleanos = new Date(fecha);
//     var edad = hoy.getFullYear() - cumpleanos.getFullYear();
//     var m = hoy.getMonth() - cumpleanos.getMonth();

//     if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
//         edad--;
//     }

//     return edad;
//     console.log(edad);
//     document.querySelector("#txtEdadPaciente").textContent = calcularEdad(fecha);

// 	});




	// $("#txtbuscar_dniremitente").keyup(function(){
	// 	var dato_buscar = $("#txtbuscar_dniremitente").val();
	// 	listar_ciudadanoremitente_vista(dato_buscar,'1');
	// });
  // $("#txtbuscar_institucionremiten").keyup(function(){
  //   var dato_buscar = $("#txtbuscar_institucionremiten").val();
  //   listar_institucionremitente_vista(dato_buscar,'1');
  // });
</script>
<script>
    $(function () {
        $('.select2').select2();
    })
</script>  
<script>
    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
    function soloNumeros(e){
        tecla = (document.all) ? e.keyCode : e.which;

        //Tecla de retroceso para borrar, siempre la permite
        if (tecla==8){
            return true;
        }
            
        // Patron de entrada, en este caso solo acepta numeros
        patron =/[0-9]/;
        tecla_final = String.fromCharCode(tecla);
        return patron.test(tecla_final);
    }
</script>